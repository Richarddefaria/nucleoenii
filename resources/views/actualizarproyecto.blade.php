@extends("layouts.logobarra")

@section('titulo', 'Actualizar proyecto')

@section('contenido')

<div class="color1">
    @include('layouts.navegacion')
    @include('layouts.subnavegacion')
    <div class="p-10 color1">
        <div class="border-color2 border-radius color4">
            <div class="customtitle2 max-lg:text-3xl text-center color3 text-white custom-mt">
                <h2 class="m-0 custom-bordercolor2 font-bold"> Modificar proyecto</h2>
            </div>
            @include('layouts.flashmessage')
            <div class="max-md:mx-6 max-lg:mx-12 mx-10 mt-5 mb-4">
                <form action="{{ route ('actualizarproyecto.update', $project->id)}}" method="POST"
                    class="grid grid-cols-12 grid-rows-12 max-lg:gap-3 lg:gap-5 md:text-xl lg:text-2xl lg:py-10"
                    enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <p class="col-span-12 max-lg:indent-8 indent-12 font-bold underline">Datos del proyecto:</p>
                    <div class="max-md:col-span-12 md:col-span-5 lg:col-span-4 xl:col-span-3 row-start-2">
                        <svg xmlns="http://www.w3.org/2000/svg"
                            class="icon icon-tabler icon-tabler-pencil inline max-lg:w-7" width="44" height="44"
                            viewBox="0 0 24 24" stroke-width="1.5" stroke="#FE8101" fill="none" stroke-linecap="round"
                            stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path d="M4 20h4l10.5 -10.5a1.5 1.5 0 0 0 -4 -4l-10.5 10.5v4" />
                            <path d="M13.5 6.5l4 4" />
                        </svg>
                        <label for="nombre" class="tracking-tight">Nombre del proyecto:</label>
                    </div>
                    <div class="max-md:col-span-12 md:col-span-7 lg:col-span-9 max-md:row-start-3 row-start-2">
                        <input type="text" name="nombre" class="w-full py-1.5 px-3" id="nombre"
                            value="{{ $project->nombre}}">
                        @error('nombre')
                        <small class="text-red-600"> {{ $message }}</small>
                        @enderror
                    </div>
                    <div
                        class="max-md:col-span-12 md:col-span-5 lg:col-span-4 xl:col-span-3 max-md:row-start-4 row-start-3">
                        <svg xmlns="http://www.w3.org/2000/svg"
                            class="icon icon-tabler icon-tabler-building-skyscraper inline max-lg:w-7" width="44"
                            height="44" viewBox="0 0 24 24" stroke-width="1.5" stroke="#FE8101" fill="none"
                            stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path d="M3 21l18 0" />
                            <path d="M5 21v-14l8 -4v18" />
                            <path d="M19 21v-10l-6 -4" />
                            <path d="M9 9l0 .01" />
                            <path d="M9 12l0 .01" />
                            <path d="M9 15l0 .01" />
                            <path d="M9 18l0 .01" />
                        </svg>
                        <label for="escuela" class="tracking-tight">Escuela/Carrera:</label>
                    </div>
                    <div
                        class="max-md:col-span-12 md:col-span-7 lg:col-span-5 xl:col-span-4 max-md:row-start-5 row-start-3">
                        <input type="text" name="escuela" class="w-full py-1.5 px-3" id="escuela"
                            value="{{ $project->escuela}}">
                        @error('escuela')
                        <small class="text-red-600"> {{ $message }}</small>
                        @enderror
                    </div>
                    <div
                        class="max-md:col-span-12 md:col-span-5 lg:col-span-4 xl:col-span-3 max-md:row-start-6 row-start-4">
                        <svg xmlns="http://www.w3.org/2000/svg"
                            class="icon icon-tabler icon-tabler-id inline max-lg:w-7" width="44" height="44"
                            viewBox="0 0 24 24" stroke-width="1.5" stroke="#FE8101" fill="none" stroke-linecap="round"
                            stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path d="M3 4m0 3a3 3 0 0 1 3 -3h12a3 3 0 0 1 3 3v10a3 3 0 0 1 -3 3h-12a3 3 0 0 1 -3 -3z" />
                            <path d="M9 10m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />
                            <path d="M15 8l2 0" />
                            <path d="M15 12l2 0" />
                            <path d="M7 16l10 0" />
                        </svg>
                        <label for="area" class="tracking-tight">Área de conocimiento:</label>
                    </div>
                    <div
                        class="max-md:col-span-12 md:col-span-6 lg:col-span-5 xl:col-span-4 max-md:row-start-7 row-start-4">
                        <input type="text" name="area" class="w-full py-1.5 px-3" id="area" value="{{ $project->area}}">
                        @error('area')
                        <small class="text-red-600"> {{ $message }}</small>
                        @enderror
                    </div>
                    <div
                        class="max-md:col-span-12 md:col-span-5 lg:col-span-4 xl:col-span-3 max-md:row-start-6 row-start-5">
                        <svg xmlns="http://www.w3.org/2000/svg"
                            class="icon icon-tabler icon-tabler-id inline max-lg:w-7" width="44" height="44"
                            viewBox="0 0 24 24" stroke-width="1.5" stroke="#FE8101" fill="none" stroke-linecap="round"
                            stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path d="M3 4m0 3a3 3 0 0 1 3 -3h12a3 3 0 0 1 3 3v10a3 3 0 0 1 -3 3h-12a3 3 0 0 1 -3 -3z" />
                            <path d="M9 10m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />
                            <path d="M15 8l2 0" />
                            <path d="M15 12l2 0" />
                            <path d="M7 16l10 0" />
                        </svg>
                        <label for="telefono" class="tracking-tight">Teléfono:</label>
                    </div>
                    <div
                        class="max-md:col-span-12 md:col-span-6 lg:col-span-5 xl:col-span-4 max-md:row-start-7 row-start-5">
                        <input type="text" name="telefono" class="w-full py-1.5 px-3" id="telefono"
                            value="{{$project->telefono}}">
                        @error('telefono')
                        <small class="text-red-600"> {{ $message }}</small>
                        @enderror
                    </div>
                    <div
                        class="max-md:col-span-12 md:col-span-5 lg:col-span-4 xl:col-span-3 max-md:row-start-6 row-start-6">
                        <svg xmlns="http://www.w3.org/2000/svg"
                            class="icon icon-tabler icon-tabler-id inline max-lg:w-7" width="44" height="44"
                            viewBox="0 0 24 24" stroke-width="1.5" stroke="#FE8101" fill="none" stroke-linecap="round"
                            stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path d="M3 4m0 3a3 3 0 0 1 3 -3h12a3 3 0 0 1 3 3v10a3 3 0 0 1 -3 3h-12a3 3 0 0 1 -3 -3z" />
                            <path d="M9 10m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />
                            <path d="M15 8l2 0" />
                            <path d="M15 12l2 0" />
                            <path d="M7 16l10 0" />
                        </svg>
                        <label for="correo" class="tracking-tight">Correo:</label>
                    </div>
                    <div
                        class="max-md:col-span-12 md:col-span-6 lg:col-span-5 xl:col-span-4 max-md:row-start-7 row-start-6">
                        <input type="text" name="correo" class="w-full py-1.5 px-3" id="correo"
                            value="{{$project->correo}}">
                        @error('correo')
                        <small class="text-red-600"> {{ $message }}</small>
                        @enderror
                    </div>
                    <div
                        class="max-md:col-span-12 md:col-span-5 lg:col-span-4 xl:col-span-3 max-md:row-start-8 row-start-7 lg:my-5">
                        <svg xmlns="http://www.w3.org/2000/svg"
                            class="icon icon-tabler icon-tabler-pencil inline max-lg:w-7" width="44" height="44"
                            viewBox="0 0 24 24" stroke-width="1.5" stroke="#FE8101" fill="none" stroke-linecap="round"
                            stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path d="M4 20h4l10.5 -10.5a1.5 1.5 0 0 0 -4 -4l-10.5 10.5v4" />
                            <path d="M13.5 6.5l4 4" />
                        </svg>
                        <label for="descripcion">Descripción:</label>
                    </div>
                    <div class="max-md:col-span-12 md:col-span-7 lg:col-span-9 max-md:row-start-9 row-start-7 mb-5">
                        <textarea name="descripcion" id="descripcion" rows="3" maxlength="1000"
                            class="w-full py-1.5 px-3">{{ $project->descripcion}}</textarea>
                        @error('descripcion')
                        <small class="text-red-600"> {{ $message }}</small>
                        @enderror
                    </div>
                    <div
                        class="max-md:col-span-12 md:col-span-7 lg:col-span-6 xl:col-span-4 max-md:row-start-10 row-start-8">
                        <svg xmlns="http://www.w3.org/2000/svg"
                            class="icon icon-tabler icon-tabler-camera inline max-lg:w-7" width="44" height="44"
                            viewBox="0 0 24 24" stroke-width="1.5" stroke="#FE8101" fill="none" stroke-linecap="round"
                            stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path
                                d="M5 7h1a2 2 0 0 0 2 -2a1 1 0 0 1 1 -1h6a1 1 0 0 1 1 1a2 2 0 0 0 2 2h1a2 2 0 0 1 2 2v9a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2v-9a2 2 0 0 1 2 -2" />
                            <path d="M9 13a3 3 0 1 0 6 0a3 3 0 0 0 -6 0" />
                        </svg>
                        <span>Imagen principal del proyecto:</span>
                    </div>
                    <div
                        class="max-md:col-span-12 md:col-span-5 lg:col-span-3 xl:col-span-6 max-md:row-start-11 row-start-8">
                        <div class="flex items-center">
                            <div id="preview-container" class="mr-5">
                                <img class="object-cover rounded-lg profile-imgborder ml-5"
                                    src="{{ asset('storage/img_principal/'. $project->img_principal)}}" alt=""
                                    width="160" height="100">
                            </div>
                            <label for="img_principal" class="cursor-pointer"><svg xmlns="http://www.w3.org/2000/svg"
                                    class="icon icon-tabler icon-tabler-paperclip inline max-lg:w-7" width="44"
                                    height="44" viewBox="0 0 24 24" stroke-width="1.5" stroke="#FE8101" fill="none"
                                    stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <path
                                        d="M15 7l-6.5 6.5a1.5 1.5 0 0 0 3 3l6.5 -6.5a3 3 0 0 0 -6 -6l-6.5 6.5a4.5 4.5 0 0 0 9 9l6.5 -6.5" />
                                </svg></label>
                            <input type="file" name="img_principal" id="img_principal" class="hidden"
                                value="{{ $project->img_principal}}">
                        </div>
                        @error('img_principal')
                        <small class="text-red-600 ml-6"> {{ $message }}</small>
                        @enderror
                    </div>
                    <div
                        class="max-md:col-span-12 md:col-span-7 lg:col-span-6 xl:col-span-4 max-md:row-start-12 row-start-9">
                        <svg xmlns="http://www.w3.org/2000/svg"
                            class="icon icon-tabler icon-tabler-camera inline max-lg:w-7" width="44" height="44"
                            viewBox="0 0 24 24" stroke-width="1.5" stroke="#FE8101" fill="none" stroke-linecap="round"
                            stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path
                                d="M5 7h1a2 2 0 0 0 2 -2a1 1 0 0 1 1 -1h6a1 1 0 0 1 1 1a2 2 0 0 0 2 2h1a2 2 0 0 1 2 2v9a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2v-9a2 2 0 0 1 2 -2" />
                            <path d="M9 13a3 3 0 1 0 6 0a3 3 0 0 0 -6 0" />
                        </svg>
                        <span class="tracking-tight">Imágenes adicionales del proyecto:</span>
                    </div>
                    <div
                        class="max-md:col-span-12 md:col-span-5 lg:col-span-3 xl:col-span-6 max-md:row-start-13 row-start-9">
                        <div class="flex flex-col gap-5">
                            <div id="current-image-container1" class="flex items-center">
                                @if ($project->imagen1)
                                <img class="object-cover rounded-lg profile-imgborder ml-5"
                                    src="{{ asset('storage/imagen1/'. $project->imagen1)}}" alt="" width="160"
                                    height="100">
                                @else
                                <p class="text-lg ml-5">No hay imagen disponible en este momento.</p>
                                @endif
                                <label for="imagen1" class="cursor-pointer ml-5"><svg xmlns="http://www.w3.org/2000/svg"
                                        class="icon icon-tabler icon-tabler-paperclip inline max-lg:w-7" width="44"
                                        height="44" viewBox="0 0 24 24" stroke-width="1.5" stroke="#FE8101" fill="none"
                                        stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                        <path
                                            d="M15 7l-6.5 6.5a1.5 1.5 0 0 0 3 3l6.5 -6.5a3 3 0 0 0 -6 -6l-6.5 6.5a4.5 4.5 0 0 0 9 9l6.5 -6.5" />
                                    </svg></label>
                                <input type="file" name="imagen1" id="imagen1" class="hidden">
                            </div>
                            <div id="current-image-container2" class="flex items-center">
                                @if ($project->imagen2)
                                <img class="object-cover rounded-lg profile-imgborder ml-5"
                                    src="{{ asset('storage/imagen2/'. $project->imagen2)}}" alt="" width="160"
                                    height="100">
                                @else
                                <p class="text-lg ml-5">No hay imagen disponible en este momento.</p>
                                @endif
                                <label for="imagen2" class="cursor-pointer ml-5"><svg xmlns="http://www.w3.org/2000/svg"
                                        class="icon icon-tabler icon-tabler-paperclip inline max-lg:w-7" width="44"
                                        height="44" viewBox="0 0 24 24" stroke-width="1.5" stroke="#FE8101" fill="none"
                                        stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                        <path
                                            d="M15 7l-6.5 6.5a1.5 1.5 0 0 0 3 3l6.5 -6.5a3 3 0 0 0 -6 -6l-6.5 6.5a4.5 4.5 0 0 0 9 9l6.5 -6.5" />
                                    </svg></label>
                                <input type="file" name="imagen2" id="imagen2" class="hidden">
                            </div>
                            <div id="current-image-container3" class="flex items-center">
                                @if ($project->imagen3)
                                <img class="object-cover rounded-lg profile-imgborder ml-5"
                                    src="{{ asset('storage/imagen3/'. $project->imagen3)}}" alt="" width="160"
                                    height="100">
                                @else
                                <p class="text-lg ml-5">No hay imagen disponible en este momento.</p>
                                @endif
                                <label for="imagen3" class="cursor-pointer ml-5"><svg xmlns="http://www.w3.org/2000/svg"
                                        class="icon icon-tabler icon-tabler-paperclip inline max-lg:w-7" width="44"
                                        height="44" viewBox="0 0 24 24" stroke-width="1.5" stroke="#FE8101" fill="none"
                                        stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                        <path
                                            d="M15 7l-6.5 6.5a1.5 1.5 0 0 0 3 3l6.5 -6.5a3 3 0 0 0 -6 -6l-6.5 6.5a4.5 4.5 0 0 0 9 9l6.5 -6.5" />
                                    </svg></label>
                                <input type="file" name="imagen3" id="imagen3" class="hidden">
                            </div>
                        </div>
                    </div>
                    <p
                        class="max-md:col-span-12  md:col-span-9 max-lg:indent-8 lg:col-span-6 xl:col-span-4 indent-12 max-lg:mt-5 lg:mt-10 font-bold underline max-md:row-start-14 row-start-10">
                        Autores del Proyecto:</p>
                    <p class="col-span-12  lg:ml-12 max-md:row-start-15 row-start-11">Si tu proyecto es desarrollado por
                        varios emprendedores, registra aquí la cédula de cada uno de los integrantes de tu equipo. Si el
                        proyecto está conformado solo por ti, deja este campo vacío.</p>
                    <div
                        class="max-md:col-span-12 md:col-span-5 lg:col-span-5 xl:col-span-3 max-md:row-start-16 row-start-12">
                        <svg xmlns="http://www.w3.org/2000/svg"
                            class="icon icon-tabler icon-tabler-id inline max-lg:w-7" width="44" height="44"
                            viewBox="0 0 24 24" stroke-width="1.5" stroke="#FE8101" fill="none" stroke-linecap="round"
                            stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path d="M3 4m0 3a3 3 0 0 1 3 -3h12a3 3 0 0 1 3 3v10a3 3 0 0 1 -3 3h-12a3 3 0 0 1 -3 -3z" />
                            <path d="M9 10m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />
                            <path d="M15 8l2 0" />
                            <path d="M15 12l2 0" />
                            <path d="M7 16l10 0" />
                        </svg>
                        <label for="dni">Cédula del integrante:</label>
                    </div>
                    <div id="form"
                        class="max-md:col-span-7 md:col-span-3 max-md:row-start-17 lg:col-span-6 row-start-12">
                        @foreach ($project->integrantes as $integrante)
                        <div class="flex gap-10 mb-5">
                            <div class="input-container w-2/4 mb-5">
                                <input type="text" name="integrantes[]" class="w-full py-1.5 px-3" id="dni"
                                    value="{{$integrante->user->cedula}}">
                            </div>
                            <div
                                class="bg-white border-color2 border rounded-lg flex justify-between p-2 text-xl items-center w-3/4">
                                @php
                                $nombres_parts = explode(' ', $integrante->user->nombres);
                                $apellidos_parts = explode(' ', $integrante->user->apellidos);
                                @endphp
                                @if(in_array(strtolower($apellidos_parts[0]), ['de', 'del', 'la', 'las', 'los']))
                                <p class="">{{$nombres_parts[0]}} {{
                                    $apellidos_parts[0] }} {{ $apellidos_parts[1]}} - {{$integrante->user->facultad}}
                                </p>
                                @else
                                <p class="">{{$nombres_parts[0]}} {{
                                    $apellidos_parts[0]}} - {{$integrante->user->facultad}}</p>
                                @endif
                                <a href="{{ route('eliminarintegrante', [$project->id, $integrante->id])}}" class="ml-2 text-red-600 hover:text-red-800">Eliminar</a>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    <div class="row-start-12">
                        <svg id="add-input" xmlns="http://www.w3.org/2000/svg"
                            class="icon icon-tabler icon-tabler-circle-plus ml-3 cursor-pointer inline" width="44"
                            height="44" viewBox="0 0 24 24" stroke-width="1.5" stroke="#FE8101" fill="none"
                            stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path d="M12 12m-9 0a9 9 0 1 0 18 0a9 9 0 1 0 -18 0" />
                            <path d="M9 12l6 0" />
                            <path d="M12 9l0 6" />
                        </svg>
                    </div>
                    <p
                        class="max-md:col-span-12  md:col-span-9 lg:col-span-5 max-lg:indent-8 indent-12 max-lg:mt-5 lg:mt-10 font-bold underline max-md:row-start-18 row-start-13">
                        Redes Sociales del proyecto:</p>
                    <div
                        class="max-md:col-span-12 md:col-span-3 lg:col-span-3 xl:col-span-2 max-md:row-start-19 row-start-14">
                        <svg xmlns="http://www.w3.org/2000/svg"
                            class="icon icon-tabler icon-tabler-brand-facebook inline max-lg:w-7" width="44" height="44"
                            viewBox="0 0 24 24" stroke-width="1.5" stroke="#FE8101" fill="none" stroke-linecap="round"
                            stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path d="M7 10v4h3v7h4v-7h3l1 -4h-4v-2a1 1 0 0 1 1 -1h3v-4h-3a5 5 0 0 0 -5 5v2h-3" />
                        </svg>
                        <label for="facebook">Facebook:</label>
                    </div>
                    <div class="max-md:col-span-12  md:col-span-7 lg:col-span-4 max-md:row-start-20 row-start-14">
                        <input type="text" name="facebook" class="w-full py-1.5 px-3" id="facebook"
                            value="{{ $project->facebook}}">
                    </div>
                    <div
                        class="max-md:col-span-12 md:col-span-3 lg:col-span-3 xl:col-span-2 max-md:row-start-21 row-start-15">
                        <svg xmlns="http://www.w3.org/2000/svg"
                            class="icon icon-tabler icon-tabler-brand-instagram inline max-lg:w-7" width="44"
                            height="44" viewBox="0 0 24 24" stroke-width="1.5" stroke="#FE8101" fill="none"
                            stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path d="M4 4m0 4a4 4 0 0 1 4 -4h8a4 4 0 0 1 4 4v8a4 4 0 0 1 -4 4h-8a4 4 0 0 1 -4 -4z" />
                            <path d="M12 12m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0" />
                            <path d="M16.5 7.5l0 .01" />
                        </svg>
                        <label for="instagram">Instagram:</label>
                    </div>
                    <div class="max-md:col-span-12  md:col-span-7 lg:col-span-4 max-md:row-start-22 row-start-15">
                        <input type="text" name="instagram" class="w-full py-1.5 px-3" id="instagram"
                            value="{{ $project->instagram}}">
                    </div>
                    <div
                        class="max-md:col-span-12 md:col-span-3 lg:col-span-3 xl:col-span-2 max-md:row-start-23 row-start-16">
                        <svg xmlns="http://www.w3.org/2000/svg"
                            class="icon icon-tabler icon-tabler-brand-linkedin inline max-lg:w-7" width="44" height="44"
                            viewBox="0 0 24 24" stroke-width="1.5" stroke="#FE8101" fill="none" stroke-linecap="round"
                            stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path d="M4 4m0 2a2 2 0 0 1 2 -2h12a2 2 0 0 1 2 2v12a2 2 0 0 1 -2 2h-12a2 2 0 0 1 -2 -2z" />
                            <path d="M8 11l0 5" />
                            <path d="M8 8l0 .01" />
                            <path d="M12 16l0 -5" />
                            <path d="M16 16v-3a2 2 0 0 0 -4 0" />
                        </svg>
                        <label for="linkedin">LinkedIn:</label>
                    </div>
                    <div class="max-md:col-span-12  md:col-span-7 lg:col-span-4 max-md:row-start-24 row-start-16">
                        <input type="text" name="linkedin" class="w-full py-1.5 px-3" id="linkedin"
                            value="{{ $project->linkedin}}">
                    </div>
                    <div
                        class="max-md:col-span-12 md:col-span-3 lg:col-span-3 xl:col-span-2 max-md:row-start-25 row-start-17">
                        <svg xmlns="http://www.w3.org/2000/svg"
                            class="icon icon-tabler icon-tabler-brand-tiktok inline max-lg:w-7" width="44" height="44"
                            viewBox="0 0 24 24" stroke-width="1.5" stroke="#FE8101" fill="none" stroke-linecap="round"
                            stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path
                                d="M21 7.917v4.034a9.948 9.948 0 0 1 -5 -1.951v4.5a6.5 6.5 0 1 1 -8 -6.326v4.326a2.5 2.5 0 1 0 4 2v-11.5h4.083a6.005 6.005 0 0 0 4.917 4.917z" />
                        </svg>
                        <label for="tiktok">TikTok:</label>
                    </div>
                    <div class="max-md:col-span-12  md:col-span-7 lg:col-span-4 max-md:row-start-26 row-start-17">
                        <input type="text" name="tiktok" class="w-full py-1.5 px-3" id="tiktok"
                            value="{{ $project->tiktok}}">
                    </div>
                    <div
                        class="max-md:col-span-12 md:col-span-3 lg:col-span-3 xl:col-span-2 max-md:row-start-27 row-start-18">
                        <svg xmlns="http://www.w3.org/2000/svg"
                            class="icon icon-tabler icon-tabler-brand-twitch inline max-lg:w-7" width="44" height="44"
                            viewBox="0 0 24 24" stroke-width="1.5" stroke="#FE8101" fill="none" stroke-linecap="round"
                            stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path
                                d="M4 5v11a1 1 0 0 0 1 1h2v4l4 -4h5.584c.266 0 .52 -.105 .707 -.293l2.415 -2.414c.187 -.188 .293 -.442 .293 -.708v-8.585a1 1 0 0 0 -1 -1h-14a1 1 0 0 0 -1 1z" />
                            <path d="M16 8l0 4" />
                            <path d="M12 8l0 4" />
                        </svg>
                        <label for="twitch">Twitch:</label>
                    </div>
                    <div class="max-md:col-span-12  md:col-span-7 lg:col-span-4 max-md:row-start-28 row-start-18">
                        <input type="text" name="twitch" class="w-full py-1.5 px-3" id="twitch"
                            value="{{ $project->twitch}}">
                    </div>
                    <div
                        class="max-md:col-span-12 md:col-span-3 lg:col-span-3 xl:col-span-2 max-md:row-start-29 row-start-19">
                        <svg xmlns="http://www.w3.org/2000/svg"
                            class="icon icon-tabler icon-tabler-brand-twitter inline max-lg:w-7" width="44" height="44"
                            viewBox="0 0 24 24" stroke-width="1.5" stroke="#FE8101" fill="none" stroke-linecap="round"
                            stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path
                                d="M22 4.01c-1 .49 -1.98 .689 -3 .99c-1.121 -1.265 -2.783 -1.335 -4.38 -.737s-2.643 2.06 -2.62 3.737v1c-3.245 .083 -6.135 -1.395 -8 -4c0 0 -4.182 7.433 4 11c-1.872 1.247 -3.739 2.088 -6 2c3.308 1.803 6.913 2.423 10.034 1.517c3.58 -1.04 6.522 -3.723 7.651 -7.742a13.84 13.84 0 0 0 .497 -3.753c0 -.249 1.51 -2.772 1.818 -4.013z" />
                        </svg>
                        <label for="twitter">Twitter:</label>
                    </div>
                    <div class="max-md:col-span-12  md:col-span-7 lg:col-span-4 max-md:row-start-30 row-start-19">
                        <input type name="twitter" class="w-full py-1.5 px-3" id="twitter"
                            value="{{ $project->twitter}}">
                    </div>
                    <div
                        class="max-md:col-span-12 md:col-span-3 lg:col-span-3 xl:col-span-2 max-md:row-start-31 row-start-20">
                        <svg xmlns="http://www.w3.org/2000/svg"
                            class="icon icon-tabler icon-tabler-brand-youtube inline max-lg:w-7" width="44" height="44"
                            viewBox="0 0 24 24" stroke-width="1.5" stroke="#FE8101" fill="none" stroke-linecap="round"
                            stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path d="M3 5m0 4a4 4 0 0 1 4 -4h10a4 4 0 0 1 4 4v6a4 4 0 0 1 -4 4h-10a4 4 0 0 1 -4 -4z" />
                            <path d="M10 9l5 3l-5 3z" />
                        </svg>
                        <label for="youtube">Youtube:</label>
                    </div>
                    <div class="max-md:col-span-12  md:col-span-7 lg:col-span-4 max-md:row-start-32 row-start-20">
                        <input type="text" name="youtube" class="w-full py-1.5 px-3" id="youtube"
                            value="{{ $project->youtube}}">
                    </div>
                    <button
                        class="button max-md:col-start-4 max-md:col-span-6 md:col-span-4 md:col-start-5 lg:col-span-3 lg:col-start-6 xl:col-span-2 xl:col-start-6 max-md:row-start-33 row-start-21 mt-5"
                        type="submit">Guardar</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
