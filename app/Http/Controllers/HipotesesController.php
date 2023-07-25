<?php

namespace App\Http\Controllers;

use App\Models\Hipoteses;
use App\Models\Project;
use Illuminate\Http\Request;

class HipotesesController extends Controller
{
    public function show($id)
    {
        $hipoteses = Hipoteses::where('project_id', $id)->first();
        $project = Project::findOrFail($id);
        return view('proyectospublicos.hipotesespublico', compact('hipoteses', 'project'));
    }

    public function create($project)
    {
        $hipoteses = new Hipoteses();
        $hipoteses->project_id = $project;
        $title = __('Hipotesís');
        $action = route('hipoteses.store', $project);

        $project = Project::find($project);
        $nombreProject = $project->nombre;

        return view('hipoteses')->with([
            'hipoteses' => $hipoteses,
            'project' => $project,
            'nombreProject' => $nombreProject,
            'title' => $title,
            'action' => $action,
        ]);
    }
    public function store(Request $request, $project)
    {
        $request->validate([
            'hipoteses' => ['required', 'array'],
            'cree' => ['nullable', 'string', 'max:3000'],
            'aprende' => ['nullable', 'string', 'max:3000'],
            'observa' => ['nullable', 'string', 'max:3000'],
            'accion' => ['nullable', 'string', 'max:3000'],
        ]);

  /*    $hipoteses = new Hipoteses();
        $hipoteses->cree = $request->input('cree');
        $hipoteses->aprende = $request->input('aprende');
        $hipoteses->observa = $request->input('observa');
        $hipoteses->accion = $request->input('accion');
        $hipoteses->project_id = $project;
        $hipoteses->save();
*/
        $hipotesesData = $request->input('hipoteses');

        $hipoteses = [];
        foreach ($hipotesesData as $datosHipotesis) {

            $hipoteses[] = new Hipoteses([
                'cree' => $datosHipotesis['cree'],
                'observa' => $datosHipotesis['observa'],
                'aprende' => $datosHipotesis['aprende'],
                'accion' => $datosHipotesis['accion'],
                'project_id' => $project,
            ]);
        }

        Hipoteses::insert($hipoteses);

        $title = __('Hipótesis');
        $project = Project::find($project);
        $nombreProject = $project->nombre;

        $action = route('hipoteses.update', ['project' => $project, 'hipoteses' => $hipoteses]);

        session()->flash('hipoteses_success_create', 'Hipótesis creada exitosamente');

        return view('hipoteses', compact('project', 'hipoteses', 'nombreProject', 'title', 'action'));
    }

    public function edit($project, $hipoteses)
    {
        $project = Project::findOrFail($project);
        $hipoteses = Hipoteses::findOrFail($hipoteses);

        $title = __('Modificar Hipótesis');
        $action = route('hipoteses.update', ['project' => $project, 'hipoteses' => $hipoteses]);
        $method = 'PUT';

        return view('hipoteses', compact('project', 'hipoteses', 'title', 'action', 'method'));
    }

    public function update(Request $request, $project, $hipoteses)
    {
        $request->validate([
            'cree' => ['nullable', 'string', 'max:3000'],
            'aprende' => ['nullable', 'string', 'max:3000'],
            'observa' => ['nullable', 'string', 'max:3000'],
            'accion' => ['nullable', 'string',  'max:3000'],
        ]);

        $hipoteses = Hipoteses::findOrFail($hipoteses);

        $hipoteses->fill([
            'cree' => $request->input('cree'),
            'aprende' => $request->input('aprende'),
            'observa' => $request->input('observa'),
            'accion' => $request->input('accion'),
        ]);

        $project = Project::find($project);
        $nombreProject = $project->nombre;

        $title = __('Modificar Hipótesis');
        $action = route('hipoteses.update', ['project' => $project, 'hipoteses' => $hipoteses]);
        $method = 'PUT';
        session()->flash('hipoteses_success_update', 'Hipótesis actualizada exitosamente');

        $hipoteses->save();

        return view('hipoteses', compact('project', 'hipoteses', 'title', 'action', 'method'));
    }
}
