@extends("layouts.logobarra")

@section('titulo', 'Proyectos')
@section('contenido')
<div class="color1">
    <div class="px-5 pt-5 color4">
        <h1 class="ml-10 font-bold customtitle">Proyectos</h1>
        <div class="pt-5 ml-5">
            <nav class="flex w-3/5 gap-10 text-xl items-center">
                <a class="{{ request()->routeIs('proyectos.inicial') ? " py-2 px-6 color2 text-white font-bold tab-border" : "px-6"
                    }}" href="{{ route('proyectos.inicial')}}">Estado Inicial</a>
                <a class="{{ request()->routeIs('proyectos.incubacion') ? " py-2 px-10 color2 text-white font-bold tab-border"
                    : "px-10" }}" href="{{ route ('proyectos.incubacion') }}">Incubación</a>
                <a class="{{ request()->routeIs('proyectos.finalizado') ? " py-2 px-10 color2 text-white font-bold tab-border"
                    : "px-10" }}" href="{{ route ('proyectos.finalizado')}}">Finalizado</a>
            </nav>
        </div>
    </div>
    <div class="grid grid-cols-4 gap-4 px-10 py-20">
        @if(request()->routeIs('proyectos.inicial'))
        @foreach($inicialProjects as $project)
        <div class="border-color2 border-radius color4">
            <div class="h-48">
                <img src="{{ asset('storage/img_principal/'. $project->img_principal) }}" alt="" class="h-full w-full object-cover card-imageborder">
            </div>
            @php
            $user = $project->user;
            $name_parts = explode(' ', $user->name);
            $lastname_parts = explode(' ', $user->lastname);
            @endphp
            <div>
                <div class=" bg-white text-center h-28 flex items-center justify-center">
                    <span class="lg:text-2xl font-bold my-5">{{ $project->nombre }}</span>
                </div>
                <div class="h-96">
                <p class="mx-4 mt-2 md:text-xl lg:text-2xl ellipsis tracking-tight">{{ $project->descripcion }}</p>
            </div>
                <div class="flex flex-col mt-5 bg-white  md:text-xl lg:text-xl card-border">
                    @if(in_array(strtolower($lastname_parts[0]), ['de', 'del', 'la', 'las', 'los']))
                    <p class="mb-3"><span class="font-bold mr-2 ml-3">Autor:</span>{{ $name_parts[0] }} {{ $lastname_parts[0] }} {{ $lastname_parts[1] }}</p>
                    @else
                    <p class="mb-3"><span class="font-bold mr-2 ml-3">Autor:</span>{{ $name_parts[0] }} {{ $lastname_parts[0] }}</p>
                    @endif
                    <div class="flex justify-center mx-auto mb-4">
                        <a href="{{ route('proyectovista', $project->id)}}"><button class="button" type="submit">Ver mas detalles</button></a>
                </div>
                </div>
            </div>
        </div>
        <div class="col-span-2 col-start-3 row-start-4 mt-5">
            <div class="flex justify-end items-center">
                <a href="{{ $inicialProjects->url(1) }}" class="px-2 py-2 mr-5 bg-white rounded-lg border-color2">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-arrow-bar-left" width="32" height="32" viewBox="0 0 24 24" stroke-width="1.5" stroke="#FE8101" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                        <path d="M4 12l10 0" />
                        <path d="M4 12l4 4" />
                        <path d="M4 12l4 -4" />
                        <path d="M20 4l0 16" />
                      </svg>
                </a>
                <a href="{{ $inicialProjects->url($inicialProjects->currentPage() - 1) }}" class="px-2 py-2 mr-10 bg-white rounded-lg border-color2">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-arrow-left" width="32" height="32" viewBox="0 0 24 24" stroke-width="1.5" stroke="#FE8101" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                        <path d="M5 12l14 0" />
                        <path d="M5 12l6 6" />
                        <path d="M5 12l6 -6" />
                    </svg>
                </a>
                <div class="text-2xl">
                    Página {{ $inicialProjects->currentPage() }} de {{ $inicialProjects->lastPage() }}
                </div>
                <a href="{{ $inicialProjects->nextPageUrl() }}" class="px-2 py-2 ml-10 bg-white rounded-lg border-color2">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-arrow-right" width="32" height="32" viewBox="0 0 24 24" stroke-width="1.5" stroke="#FE8101" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                        <path d="M5 12l14 0" />
                        <path d="M13 18l6 -6" />
                        <path d="M13 6l6 6" />
                    </svg>
                </a>
                <a href="{{ $inicialProjects->url($inicialProjects->lastPage()) }}" class="px-2 py-2 ml-5 bg-white rounded-lg border-color2">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-arrow-bar-right" width="32" height="32" viewBox="0 0 24 24" stroke-width="1.5" stroke="#FE8101" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                        <path d="M20 12l-10 0" />
                        <path d="M20 12l-4 4" />
                        <path d="M20 12l-4 -4" />
                        <path d="M4 4l0 16" />
                      </svg>
                </a>
            </div>
        </div>
        @endforeach
        @elseif (request()->routeIs('proyectos.incubacion'))
        @foreach($incubacionProjects as $project)
        <div class="border-color2 border-radius color4">
            <div class="h-48">
                <img src="{{ asset('storage/img_principal/'. $project->img_principal) }}" alt="" class="h-full w-full object-cover card-imageborder">
            </div>
            @php
            $user = $project->user;
            $name_parts = explode(' ', $user->name);
            $lastname_parts = explode(' ', $user->lastname);
            @endphp
            <div>
                <div class=" bg-white text-center h-28 flex items-center justify-center">
                    <span class="lg:text-2xl font-bold my-5">{{ $project->nombre }}</span>
                </div>
                <div class="h-96">
                <p class="mx-4 mt-2 md:text-xl lg:text-2xl ellipsis tracking-tight">{{ $project->descripcion }}</p>
            </div>
                <div class="flex flex-col mt-5 bg-white  md:text-xl lg:text-xl card-border">
                    @if(in_array(strtolower($lastname_parts[0]), ['de', 'del', 'la', 'las', 'los']))
                    <p class="mb-3"><span class="font-bold mr-2 ml-3">Autor:</span>{{ $name_parts[0] }} {{ $lastname_parts[0] }} {{ $lastname_parts[1] }}</p>
                    @else
                    <p class="mb-3"><span class="font-bold mr-2 ml-3">Autor:</span>{{ $name_parts[0] }} {{ $lastname_parts[0] }}</p>
                    @endif
                    <div class="flex justify-center mx-auto mb-4">
                        <a href="{{ route('proyectovista', $project->id)}}"><button class="button" type="submit">Ver mas detalles</button></a>
                </div>
                </div>
            </div>
        </div>
        <div class="col-span-2 col-start-3 row-start-4 mt-5">
            <div class="flex justify-end items-center">
                <a href="{{ $incubacionProjects->url(1) }}" class="px-2 py-2 mr-5 bg-white rounded-lg border-color2">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-arrow-bar-left" width="32" height="32" viewBox="0 0 24 24" stroke-width="1.5" stroke="#FE8101" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                        <path d="M4 12l10 0" />
                        <path d="M4 12l4 4" />
                        <path d="M4 12l4 -4" />
                        <path d="M20 4l0 16" />
                      </svg>
                </a>
                <a href="{{ $incubacionProjects->url($incubacionProjects->currentPage() - 1) }}" class="px-2 py-2 mr-10 bg-white rounded-lg border-color2">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-arrow-left" width="32" height="32" viewBox="0 0 24 24" stroke-width="1.5" stroke="#FE8101" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                        <path d="M5 12l14 0" />
                        <path d="M5 12l6 6" />
                        <path d="M5 12l6 -6" />
                    </svg>
                </a>
                <div class="text-2xl">
                    Página {{ $incubacionProjects->currentPage() }} de {{ $incubacionProjects->lastPage() }}
                </div>
                <a href="{{ $incubacionProjects->nextPageUrl() }}" class="px-2 py-2 ml-10 bg-white rounded-lg border-color2">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-arrow-right" width="32" height="32" viewBox="0 0 24 24" stroke-width="1.5" stroke="#FE8101" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                        <path d="M5 12l14 0" />
                        <path d="M13 18l6 -6" />
                        <path d="M13 6l6 6" />
                    </svg>
                </a>
                <a href="{{ $incubacionProjects->url($incubacionProjects->lastPage()) }}" class="px-2 py-2 ml-5 bg-white rounded-lg border-color2">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-arrow-bar-right" width="32" height="32" viewBox="0 0 24 24" stroke-width="1.5" stroke="#FE8101" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                        <path d="M20 12l-10 0" />
                        <path d="M20 12l-4 4" />
                        <path d="M20 12l-4 -4" />
                        <path d="M4 4l0 16" />
                      </svg>
                </a>
            </div>
        </div>
        @endforeach
        @elseif (request()->routeIs('proyectos.finalizado'))
        @foreach($finalizadoProjects as $project)
        <div class="border-color2 border-radius color4">
            <div class="h-48">
                <img src="{{ asset('storage/img_principal/'. $project->img_principal) }}" alt="" class="h-full w-full object-cover card-imageborder">
            </div>
            @php
            $user = $project->user;
            $name_parts = explode(' ', $user->name);
            $lastname_parts = explode(' ', $user->lastname);
            @endphp
            <div>
                <div class=" bg-white text-center h-28 flex items-center justify-center">
                    <span class="lg:text-2xl font-bold my-5">{{ $project->nombre }}</span>
                </div>
                <div class="h-96">
                <p class="mx-4 mt-2 md:text-xl lg:text-2xl ellipsis tracking-tight">{{ $project->descripcion }}</p>
            </div>
                <div class="flex flex-col mt-5 bg-white  md:text-xl lg:text-xl card-border">
                    @if(in_array(strtolower($lastname_parts[0]), ['de', 'del', 'la', 'las', 'los']))
                    <p class="mb-3"><span class="font-bold mr-2 ml-3">Autor:</span>{{ $name_parts[0] }} {{ $lastname_parts[0] }} {{ $lastname_parts[1] }}</p>
                    @else
                    <p class="mb-3"><span class="font-bold mr-2 ml-3">Autor:</span>{{ $name_parts[0] }} {{ $lastname_parts[0] }}</p>
                    @endif
                    <div class="flex justify-center mx-auto mb-4">
                        <a href="{{ route('proyectovista', $project->id)}}"><button class="button" type="submit">Ver mas detalles</button></a>
                </div>
                </div>
            </div>
        </div>
        <div class="col-span-2 col-start-3 row-start-4 mt-5">
            <div class="flex justify-end items-center">
                <a href="{{ $finalizadoProjects->url(1) }}" class="px-2 py-2 mr-5 bg-white rounded-lg border-color2">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-arrow-bar-left" width="32" height="32" viewBox="0 0 24 24" stroke-width="1.5" stroke="#FE8101" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                        <path d="M4 12l10 0" />
                        <path d="M4 12l4 4" />
                        <path d="M4 12l4 -4" />
                        <path d="M20 4l0 16" />
                      </svg>
                </a>
                <a href="{{ $finalizadoProjects->url($finalizadoProjects->currentPage() - 1) }}" class="px-2 py-2 mr-10 bg-white rounded-lg border-color2">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-arrow-left" width="32" height="32" viewBox="0 0 24 24" stroke-width="1.5" stroke="#FE8101" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                        <path d="M5 12l14 0" />
                        <path d="M5 12l6 6" />
                        <path d="M5 12l6 -6" />
                    </svg>
                </a>
                <div class="text-2xl font-extralight">
                    Página {{ $finalizadoProjects->currentPage() }} de {{ $finalizadoProjects->lastPage() }}
                </div>
                <a href="{{ $finalizadoProjects->nextPageUrl() }}" class="px-2 py-2 ml-10 bg-white rounded-lg border-color2">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-arrow-right" width="32" height="32" viewBox="0 0 24 24" stroke-width="1.5" stroke="#FE8101" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                        <path d="M5 12l14 0" />
                        <path d="M13 18l6 -6" />
                        <path d="M13 6l6 6" />
                    </svg>
                </a>
                <a href="{{ $finalizadoProjects->url($finalizadoProjects->lastPage()) }}" class="px-2 py-2 ml-5 bg-white rounded-lg border-color2">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-arrow-bar-right" width="32" height="32" viewBox="0 0 24 24" stroke-width="1.5" stroke="#FE8101" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                        <path d="M20 12l-10 0" />
                        <path d="M20 12l-4 4" />
                        <path d="M20 12l-4 -4" />
                        <path d="M4 4l0 16" />
                      </svg>
                </a>
            </div>
        </div>
        @endforeach
        @endif
    </div>
</div>
@endsection
