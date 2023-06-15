<?php

namespace App\Http\Controllers;

use App\Models\Impacto;
use App\Models\Project;
use Illuminate\Http\Request;

class ImpactoController extends Controller
{
    public function show($id)
    {
        $impacto = Impacto::where('project_id', $id)->first();
        $project = Project::findOrFail($id);
        return view('proyectospublicos.impactopublico', compact('impacto', 'project'));
    }

    public function create($project)
    {
        $impacto = new Impacto();
        $impacto->project_id = $project;

        $project = Project::find($project);
        $nombreProject = $project->nombre;

        return view('impacto')->with([
            'impacto' => $impacto,
            'project' => $project,
            'nombreProject' => $nombreProject,
        ]);
    }

    public function store(Request $request, $project)
    {
        $request->validate(
            [
                'problema' => ['nullable', 'string', 'max:3000'],
                'proposito' => ['nullable', 'string', 'max:3000'],
                'idea' => ['nullable', 'string', 'max:3000'],
                'social' => ['nullable', 'string', 'max:3000'],
                'economico' => ['nullable', 'string', 'max:3000'],
                'ambiental' => ['nullable', 'string', 'max:3000'],
            ]
        );

        $impacto = new Impacto();
        $impacto->problema = $request->input('problema');
        $impacto->proposito = $request->input('proposito');
        $impacto->idea = $request->input('idea');
        $impacto->social = $request->input('social');
        $impacto->economico = $request->input('economico');
        $impacto->ambiental = $request->input('ambiental');
        $impacto->project_id = $request->input('project_id');
        $impacto->save();

        $project = Project::find($project);
        $nombreProject = $project->nombre;

        return view('actualizarimpacto')->with([
            'project' => $project,
            'impacto' => $impacto,
            'nombreProject' => $nombreProject,
        ]);
    }

    public function update(Request $request, $project, $impacto)
    {
        $request->validate(
            [
                'problema' => ['nullable', 'string', 'max:3000'],
                'proposito' => ['nullable', 'string', 'max:3000'],
                'idea' => ['nullable', 'string', 'max:3000'],
                'social' => ['nullable', 'string', 'max:3000'],
                'economico' => ['nullable', 'string', 'max:3000'],
                'ambiental' => ['nullable', 'string', 'max:3000'],
            ]);
        
        $impacto = Impacto::findOrFail($impacto);

        $impacto->fill([
            'problema' => $request->input('problema'),
            'proposito' => $request->input('proposito'),
            'idea' => $request->input('idea'),
            'social' => $request->input('social'),
            'economico' => $request->input('economico'),
            'ambiental' => $request->input('ambiental'),
        ]);

        $project = Project::find($project);
        $nombreProject = $project->nombre;

        $impacto->save();

        return view('actualizarimpacto')->with([
            'impacto' => $impacto,
            'project' => $project,
            'nombreProject' => $nombreProject,
        ]);
    }
}
