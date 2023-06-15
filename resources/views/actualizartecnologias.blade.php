@extends("layouts.logobarra")

@section('titulo', 'Tecnologías')

@section('contenido')
<div class="color1">
    @include('layouts.navegacion')
    @include('layouts.subnavegacion')
    <div class="p-10 color1">
        <div class="border-color2 border-radius color4">
            <div class="customtitle2 max-lg:text-3xl text-center color3 text-white custom-mt">
                <h2 class="m-0 custom-bordercolor2 font-bold">Modificar Tecnologías</h2>
            </div>
            <div class="mx-10 mt-10 mb-4">
                <form action="{{ route('tecnologias.update', [$project->id, $tecnologia->id])}}" method="POST"
                    class="grid grid-cols-12 grid-rows-12 gap-5 md:text-xl lg:text-2xl max-lg:pb-5 lg:py-10">
                    @csrf
                    @method('PUT')
                    <input type="hidden" name="project_id" value="{{ $project->id }}">
                    <!-- Campos que no están ocultos en el formulario -->
                    <div class="col-span-10">
                        <svg xmlns="http://www.w3.org/2000/svg"
                            class="icon icon-tabler icon-tabler-pencil inline max-lg:w-7" width="44" height="44"
                            viewBox="0 0 24 24" stroke-width="1.5" stroke="#FE8101" fill="none" stroke-linecap="round"
                            stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path d="M4 20h4l10.5 -10.5a1.5 1.5 0 0 0 -4 -4l-10.5 10.5v4" />
                            <path d="M13.5 6.5l4 4" />
                        </svg>
                        <label for="nombre">Nombre:</label>
                    </div>
                    <div class="col-span-12">
                        <textarea name="nombre" id="nombre" rows="5" maxlength="1000"
                            class="w-full py-1.5 px-3">{{$tecnologia->nombre}}</textarea>
                    </div>
                    <div class="col-span-10">
                        <svg xmlns="http://www.w3.org/2000/svg"
                            class="icon icon-tabler icon-tabler-file inline max-lg:w-7" width="44" height="44"
                            viewBox="0 0 24 24" stroke-width="1.5" stroke="#FE8101" fill="none" stroke-linecap="round"
                            stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path d="M14 3v4a1 1 0 0 0 1 1h4" />
                            <path d="M17 21h-10a2 2 0 0 1 -2 -2v-14a2 2 0 0 1 2 -2h7l5 5v11a2 2 0 0 1 -2 2z" />
                        </svg>
                        <label for="tipo">Tipo:</label>
                    </div>
                    <div class="col-span-12">
                        <textarea name="tipo" id="tipo" rows="5" maxlength="1000" class="w-full py-1.5 px-3">{{$tecnologia->tipo}}</textarea>
                    </div>
                    <div class="col-span-10">
                        <svg xmlns="http://www.w3.org/2000/svg"
                            class="icon icon-tabler icon-tabler-article inline max-lg:w-7" width="44" height="44"
                            viewBox="0 0 24 24" stroke-width="1.5" stroke="#FE8101" fill="none" stroke-linecap="round"
                            stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path d="M3 4m0 2a2 2 0 0 1 2 -2h14a2 2 0 0 1 2 2v12a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2z" />
                            <path d="M7 8h10" />
                            <path d="M7 12h10" />
                            <path d="M7 16h10" />
                        </svg>
                        <label for="papel_principal">Papel principal:</label>
                    </div>
                    <div class="col-span-12">
                        <textarea name="papel_principal" id="papel_principal" rows="5" maxlength="1000"
                            class="w-full py-1.5 px-3">{{$tecnologia->papel_principal}}</textarea>
                    </div>
                    <button class="button col-span-2 max-md:col-start-5 md:col-start-6 mt-5"
                        type="submit">Guardar</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
