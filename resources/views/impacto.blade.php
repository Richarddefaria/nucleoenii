@extends("layouts.logobarra")

@section('titulo', 'Impacto')

@section('contenido')
<div class="color1">
@include('layouts.navegacion')
@include('layouts.subnavegacion')
    <div class="p-10 color1">
        <div class="border-color2 border-radius color4">
            <div class="customtitle2 max-lg:text-3xl text-center color3 text-white custom-mt">
                <h2 class="m-0 custom-bordercolor2 font-bold">{{$title}}</h2>
            </div>
            <div class="px-10 mt-10">
                @if (session('success'))
                <div class="p-3 mt-4 text-lg w-full text-green-800 rounded-lg border-2 border-green-800 bg-green-50 flex justify-between items-center" role="alert">
                    <strong>{{ session('success') }}</strong>
                </div>
                @endif
            </div>
            <div class="mx-10 mt-10 mb-4">
                <form action="{{ $action }}" method="POST" class="grid grid-cols-12 grid-rows-12 md:text-xl lg:text-2xl lg:gap-5 max-lg:pb-5 lg:py-10">
                    @csrf
                    @isset($method)
                    @method($method)
                    @endisset
                    <input type="hidden" name="project_id" value="{{ $project->id }}">
                    <!-- Campos que no están ocultos en el formulario -->
                    <div class="col-span-10">
                        <svg xmlns="http://www.w3.org/2000/svg"
                            class="icon icon-tabler icon-tabler-alert-octagon inline max-lg:w-7" width="44" height="44"
                            viewBox="0 0 24 24" stroke-width="1.5" stroke="#FE8101" fill="none" stroke-linecap="round"
                            stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path
                                d="M9.103 2h5.794a3 3 0 0 1 2.122 .879l4.101 4.1a3 3 0 0 1 .88 2.125v5.794a3 3 0 0 1 -.879 2.122l-4.1 4.101a3 3 0 0 1 -2.123 .88h-5.795a3 3 0 0 1 -2.122 -.88l-4.101 -4.1a3 3 0 0 1 -.88 -2.124v-5.794a3 3 0 0 1 .879 -2.122l4.1 -4.101a3 3 0 0 1 2.125 -.88z" />
                            <path d="M12 8v4" />
                            <path d="M12 16h.01" />
                        </svg>
                        <label for="problema" class="md:text-xl lg:text-2xl">Problema:</label>
                    </div>
                    <div class="col-span-12">
                        <textarea name="problema" id="problema" rows="5" maxlength="1000"
                            class="w-full py-1.5 px-3">{{$impacto->problema}}</textarea>
                    </div>
                    <div class="col-span-10">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-target inline max-lg:w-7"
                            width="44" height="44" viewBox="0 0 24 24" stroke-width="1.5" stroke="#FE8101" fill="none"
                            stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path d="M12 12m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" />
                            <path d="M12 12m-5 0a5 5 0 1 0 10 0a5 5 0 1 0 -10 0" />
                            <path d="M12 12m-9 0a9 9 0 1 0 18 0a9 9 0 1 0 -18 0" />
                        </svg>
                        <label for="proposito" class="md:text-xl lg:text-2xl">Propósito:</label>
                    </div>
                    <div class="col-span-12">
                        <textarea name="proposito" id="proposito" rows="5" maxlength="1000"
                            class="w-full py-1.5 px-3">{{$impacto->proposito}}</textarea>
                    </div>
                    <div class="col-span-10">
                        <svg xmlns="http://www.w3.org/2000/svg"
                            class="icon icon-tabler icon-tabler-clipboard-data inline max-lg:w-7" width="44" height="44"
                            viewBox="0 0 24 24" stroke-width="1.5" stroke="#FE8101" fill="none" stroke-linecap="round"
                            stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path
                                d="M9 5h-2a2 2 0 0 0 -2 2v12a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-12a2 2 0 0 0 -2 -2h-2" />
                            <path d="M9 3m0 2a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v0a2 2 0 0 1 -2 2h-2a2 2 0 0 1 -2 -2z" />
                            <path d="M9 17v-4" />
                            <path d="M12 17v-1" />
                            <path d="M15 17v-2" />
                            <path d="M12 17v-1" />
                        </svg>
                        <label for="idea" class="md:text-xl lg:text-2xl">Idea de negocio:</label>
                    </div>
                    <div class="col-span-12">
                        <textarea name="idea" id="idea" rows="5" maxlength="1000" class="w-full py-1.5 px-3">{{$impacto->idea}}</textarea>
                    </div>
                    <div class="col-span-10">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-users inline max-lg:w-7"
                            width="44" height="44" viewBox="0 0 24 24" stroke-width="1.5" stroke="#FE8101" fill="none"
                            stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path d="M9 7m-4 0a4 4 0 1 0 8 0a4 4 0 1 0 -8 0" />
                            <path d="M3 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2" />
                            <path d="M16 3.13a4 4 0 0 1 0 7.75" />
                            <path d="M21 21v-2a4 4 0 0 0 -3 -3.85" />
                        </svg>
                        <label for="social" class="md:text-xl lg:text-2xl">Impacto social:</label>
                    </div>
                    <div class="col-span-12">
                        <textarea name="social" id="social" rows="5" maxlength="1000"
                            class="w-full py-1.5 px-3">{{$impacto->social}}</textarea>
                    </div>
                    <div class="col-span-10">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-report-money inline max-lg:w-7"
                            width="44" height="44" viewBox="0 0 24 24" stroke-width="1.5" stroke="#FE8101" fill="none"
                            stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path
                                d="M9 5h-2a2 2 0 0 0 -2 2v12a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-12a2 2 0 0 0 -2 -2h-2" />
                            <path d="M9 3m0 2a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v0a2 2 0 0 1 -2 2h-2a2 2 0 0 1 -2 -2z" />
                            <path d="M14 11h-2.5a1.5 1.5 0 0 0 0 3h1a1.5 1.5 0 0 1 0 3h-2.5" />
                            <path d="M12 17v1m0 -8v1" />
                        </svg>
                        <label for="economico" class="md:text-xl lg:text-2xl">Impacto económico:</label>
                    </div>
                    <div class="col-span-12">
                        <textarea name="economico" id="economico" rows="5" maxlength="1000"
                            class="w-full py-1.5 px-3">{{$impacto->economico}}</textarea>     
                    </div>
                    <div class="col-span-10">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-tree inline max-lg:w-7"
                            width="44" height="44" viewBox="0 0 24 24" stroke-width="1.5" stroke="#FE8101" fill="none"
                            stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path d="M12 13l-2 -2" />
                            <path d="M12 12l2 -2" />
                            <path d="M12 21v-13" />
                            <path
                                d="M9.824 16a3 3 0 0 1 -2.743 -3.69a3 3 0 0 1 .304 -4.833a3 3 0 0 1 4.615 -3.707a3 3 0 0 1 4.614 3.707a3 3 0 0 1 .305 4.833a3 3 0 0 1 -2.919 3.695h-4z" />
                        </svg>
                        <label for="ambiental" class="md:text-xl lg:text-2xl">Impacto ambiental:</label>
                    </div>
                    <div class="col-span-12">
                        <textarea name="ambiental" id="ambiental" rows="5" maxlength="1000"
                            class="w-full py-1.5 px-3">{{$impacto->ambiental}}</textarea>
                        
                    </div>
                    <button class="button col-span-2 max-md:col-start-5 md:col-start-6 ml-7 mt-5"
                            type="submit">Guardar</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
