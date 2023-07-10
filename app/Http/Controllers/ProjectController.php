<?php

namespace App\Http\Controllers;

use App\Models\Integrante;
use App\Models\Project;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class ProjectController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $projects = $user->projects;

        return view('misproyectos', compact('projects'));
    }
    public function allProjects()
    {
        $inicialProjects = Project::where('estatus', 'Inicial')->paginate(12);
        $incubacionProjects = Project::where('estatus', 'Incubación')->paginate(12);
        $finalizadoProjects = Project::where('estatus', 'Finalizado')->paginate(12);

        return view('proyectospublicos.proyectos', compact('inicialProjects', 'incubacionProjects', 'finalizadoProjects'));
    }
    public function updateStatus($id)
    {
        $project = Project::findOrFail($id);
        $project->estatus = request('estatus');
        $project->save();

        return redirect()->back()->with('success', 'El estado del proyecto ha sido actualizado correctamente.');
    }

    public function show($id)
    {
        $project = Project::with('integrantes')->findOrFail($id);

        return view('proyectospublicos.proyectodetalles', compact('project'));
    }

    public function create()
    {
        $project = new Project;
        $title = __('Proyecto');
        return view('proyecto', compact('project', 'title'));
    }

    public function store(Request $request)
    {
        $request->validate(
            [
                'nombre' => ['required', 'string', 'unique:projects,nombre', 'max:255'],
                'escuela' => ['required', 'string', 'max:255'],
                'area' => ['required', 'string', 'max:255'],
                'telefono' => ['required', 'string', 'max:255'],
                'correo' => ['required', 'string', 'max:255'],
                'descripcion' => ['required', 'string', 'max:1000'],
                'img_principal' => ['required', 'image', 'max:8192'],
            ],
            [
                'nombre.required' => 'El campo Nombre del proyecto es obligatorio.',
                'nombre.unique' => 'Este nombre ya pertenece a otro proyecto.',
                'escuela.required' => 'El campo Escuela es obligatorio.',
                'area.required' => 'El campo Área de conocimiento es obligatorio.',
                'telefono.required' => 'El campo Teléfono es obligatorio.',
                'correo.required' => 'El campo Correo es obligatorio.',
                'descripcion.required' => 'El campo Descripción es obligatorio.',
                'img_principal.required' => 'Debe seleccionar una imagen principal para el proyecto.',
            ]
        );

        $image = $request->file('img_principal');
        $filename = time() . '.' . $image->getClientOriginalExtension();
        $image->storeAs('public/img_principal', $filename);

        if ($request->hasFile('imagen1')) {
            $image2 = $request->file('imagen1');
            $filename2 = time() . '.' . $image2->getClientOriginalName();
            $image2->storeAs('public/imagen1', $filename2);
        } else {
            $filename2 = null;
        }
        if ($request->hasFile('imagen2')) {
            $image3 = $request->file('imagen2');
            $filename3 = time() . '.' . $image3->getClientOriginalName();
            $image3->storeAs('public/imagen2', $filename3);
        } else {
            $filename3 = null;
        }
        if ($request->hasFile('imagen3')) {
            $image4 = $request->file('imagen3');
            $filename4 = time() . '.' . $image4->getClientOriginalName();
            $image4->storeAs('public/imagen3', $filename4);
        } else {
            $filename4 = null;
        }


        $project = Project::create([
            'nombre' => $request->nombre,
            'escuela' => $request->escuela,
            'area' => $request->area,
            'telefono' => $request->telefono,
            'correo' => $request->correo,
            'descripcion' => $request->descripcion,
            'img_principal' => $filename,
            'imagen1' => $filename2,
            'imagen2' => $filename3,
            'imagen3' => $filename4,
            'facebook' => $request->facebook,
            'instagram' => $request->instagram,
            'linkedin' => $request->linkedin,
            'tiktok' => $request->tiktok,
            'twitch' => $request->twitch,
            'twitter' => $request->twitter,
            'youtube' => $request->youtube,
        ]);

        $user = $request->user();
        $integrante = new Integrante();
        $integrante->user_id = $user->id;
        $integrante->project_id = $project->id;
        $integrante->save();

        $cedulas = $request->input('integrantes');

        $integrantes = [];
        foreach ($cedulas as $cedula) {
            $user = User::where('cedula', $cedula)->first();

            if ($user) {
                $integrantes[] = [
                    'user_id' => $user->id,
                    'project_id' => $project->id
                ];
            }
        }

        Integrante::insert($integrantes);

        return redirect()->route('misproyectos')->with('success', '¡Proyecto registrado exitosamente!');
    }
    public function edit(Project $project)
    {
        return view('actualizarproyecto', compact('project'));
    }

    public function update(Request $request, Project $project)
    {
        $request->validate(
            [
                'nombre' => ['required', 'string', 'unique:projects,nombre,' . $project->id, 'max:255'],
                'escuela' => ['required', 'string', 'max:255'],
                'area' => ['required', 'string', 'max:255'],
                'telefono' => ['required', 'string', 'max:255'],
                'correo' => ['required', 'string', 'max:255'],
                'descripcion' => ['required', 'string', 'max:1000'],
            ],
            [
                'nombre' => 'El campo Nombre de proyecto es obligatorio.',
                'escuela' => 'El campo Escuela es obligatorio.',
                'area' => 'El campo Área de conocimiento es obligatorio.',
                'telefono' => 'El campo Teléfono es obligatorio.',
                'correo' => 'El campo Correo es obligatorio.',
                'descripcion' => 'El campo Descripción es obligatorio.',

            ]
        );

        $project->nombre = $request->string('nombre');
        $project->escuela = $request->string('escuela');
        $project->area = $request->string('area');
        $project->telefono = $request->string('telefono');
        $project->correo = $request->string('correo');
        $project->descripcion = $request->string('descripcion');
        $project->facebook = $request->string('facebook');
        $project->instagram = $request->string('instagram');
        $project->linkedin = $request->string('linkedin');
        $project->tiktok = $request->string('tiktok');
        $project->twitch = $request->string('twitch');
        $project->twitter = $request->string('twitter');
        $project->youtube = $request->string('youtube');

        if ($request->hasFile('img_principal')) {
            $oldImg_Principal = $project->img_principal;
            $filename = $request->file('img_principal')->getClientOriginalName();
            $request->file('img_principal')->storeAs('public/img_principal', $filename);
            $project->img_principal = $filename;

            if ($oldImg_Principal) {
                Storage::delete('public/img_principal/' . $oldImg_Principal);
            }
        }

        if ($request->hasFile('imagen1')) {
            $oldImagen1 = $project->imagen1;
            $filename2 = $request->file('imagen1')->getClientOriginalName();
            $request->file('imagen1')->storeAs('public/imagen1', $filename2);
            $project->imagen1 = $filename2;

            if ($oldImagen1) {
                Storage::delete('public/imagen1/' . $oldImagen1);
            }
        }
        if ($request->hasFile('imagen2')) {
            $oldImagen2 = $project->imagen2;
            $filename3 = $request->file('imagen2')->getClientOriginalName();
            $request->file('imagen2')->storeAs('public/imagen2', $filename3);
            $project->imagen2 = $filename3;

            if ($oldImagen2) {
                Storage::delete('public/imagen2/' . $oldImagen2);
            }
        }
        if ($request->hasFile('imagen3')) {
            $oldImagen3 = $project->imagen3;
            $filename4 = $request->file('imagen3')->getClientOriginalName();
            $request->file('imagen3')->storeAs('public/imagen3', $filename4);
            $project->imagen3 = $filename4;

            if ($oldImagen3) {
                Storage::delete('public/imagen3/' . $oldImagen3);
            }
        }

        $project->save();

        return redirect()->route('actualizarproyecto', $project->id)->with('actualizarproyecto_success', '¡Proyecto actualizado exitosamente!');
    }
}
