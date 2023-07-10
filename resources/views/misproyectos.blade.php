@extends("layouts.logobarra")

@section('titulo', 'Mis proyectos')

@section('contenido')
<div class="color1">
    @include('layouts.navegacion')
    <div class="py-10">
        <div class="px-10 pb-10">
            @if ($message = Session::get('success'))
            <div class="p-3 mt-4 text-lg w-full text-green-800 rounded-lg border-2 border-green-800 bg-green-50 flex justify-between items-center" role="alert">
                <strong>{{ $message }}</strong>
            </div>
            @endif
        </div>
        <div class="grid grid-cols-12 gap-4">
            @forelse ($projects as $project)
            <div
                class="max-md:col-span-10 max-md:col-start-2 md:col-span-8 md:col-start-3 lg:col-span-6 lg:col-start-4">
                <div class="border-color2 border-radius color4">
                    <div class="h-60">
                        <img src="{{ asset('storage/img_principal/'. $project->img_principal) }}" alt=""
                            class="h-full w-full object-cover card-imageborder">
                    </div>
                    {{--@php
                    $nombres_parts = explode(' ', Auth::user()->nombres);
                    $apellidos_parts = explode(' ', Auth::user()->apellidos);
                    @endphp
                        --}}
                    <div>
                        <div class="py-3 bg-white text-center">
                            <span class="max-md:text-xl md:text-2xl lg:text-3xl font-bold">{{ $project->nombre }}</span>
                        </div>
                        <p class="my-2 mx-4 md:text-xl lg:text-2xl">{{ $project->descripcion }}</p>
                        {{--
                            <div
                            class="flex justify-between items-center py-3 bg-white  md:text-xl lg:text-2xl card-border">
                            @if(in_array(strtolower($apellidos_parts[0]), ['de', 'del', 'la', 'las', 'los']))
                            <p class="ml-5"><span class="font-bold mr-2">Autor:</span>{{ $nombres_parts[0] }} {{
                                $apellidos_parts[0] }} {{ $apellidos_parts[1] }}</p>
                            @else
                            <p class="ml-5"><span class="font-bold mr-2">Autor:</span>{{ $nombres_parts[0] }} {{
                                $apellidos_parts[0] }}</p>
                            @endif
                            <div class="flex items-center">
                                <a href="{{ route ('actualizarproyecto', $project->id) }}"
                                    class="text-color2 underline font-bold mr-5">Completar</a>
                            </div>
                        </div>
                            --}}
                                <div class="flex justify-between items-center py-3 bg-white md:text-xl lg:text-2xl card-border">
                                    <p class="ml-5"><span class="font-bold mr-2">Autor:</span>
                                        @foreach ($project->integrantes as $integrante)
                                        {{ optional($integrante->user)->nombres }} {{ optional($integrante->user)->apellidos }}
                                            @if (!$loop->last)
                                                ,
                                            @endif
                                        @endforeach
                                    </p>
                                    <div class="flex items-center">
                                        <a href="{{ route ('actualizarproyecto', $project->id) }}" class="text-color2 underline font-bold mr-5">Completar</a>
                                    </div>
                                </div>
                    </div>
                </div>
            </div>
            @empty
            <div class="col-span-8 col-start-3 lg:col-span-4 lg:col-start-5 row-start-12 pb-40 gap-4">
                <p class="md:text-xl lg:text-2xl  text-center ">No hay proyectos para mostrar.</p>
            </div>
            @endforelse
        </div>
    </div>
</div>
@endsection
