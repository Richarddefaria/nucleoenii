@auth
<div
    class="border-color2 color4 subnav-border {{ request()->routeIs('actualizarproyecto', 'hipoteses.*' , 'impacto.*', 'tecnologias.*', 'empatia.*', 'propuesta.*', 'negocio.*', 'pitch.*') ? '' : 'hidden' }}">
    <h2 class="m-0 color3 font-bold  text-white customtitle2 max-lg:text-3xl text-center subnav-titleborder">
        {{$project->nombre}} </h2>
    <nav class="flex flex-col lg:flex-row mx-8 items-center justify-between gap-5 max-lg:py-5 lg:pt-5 text-xl">
        <a class="{{ request()->routeIs('actualizarproyecto') ? " py-2 px-6 color2 text-white font-bold
            max-lg:rounded-lg tab-border" : "px-6" }}"
            href="{{ route ('actualizarproyecto', $project->id)}}">Proyecto</a>
        <a class="{{ request()->routeIs('hipoteses.create', 'hipoteses.store', 'hipoteses.update') ? 'py-2 px-6 color2 text-white font-bold max-lg:rounded-lg tab-border' : 'px-6' }}"
            href="{{ route ('hipoteses.create', $project->id)}}">Hipótesis</a>
        <a class="{{ request()->routeIs('impacto.create', 'impacto.store', 'impacto.update') ? " py-2 px-6 color2
            text-white font-bold max-lg:rounded-lg tab-border" : "px-6" }}"
            href="{{ route ('impacto.create', $project->id)}}">Impacto</a>
        <a class="{{ request()->routeIs('tecnologias.create', 'tecnologias.store', 'tecnologias.update') ? " py-2 px-6
            color2 text-white font-bold max-lg:rounded-lg tab-border" : "px-6" }}"
            href="{{ route ('tecnologias.create', $project->id)}}">Tecnologías</a>
        <a class="{{ request()->routeIs('empatia.create', 'empatia.store', 'empatia.update') ? " py-2 px-6 color2
            text-white font-bold max-lg:rounded-lg tab-border" : "px-6" }}"
            href="{{ route ('empatia.create', $project->id)}}">Mapa Empatía</a>
        <a class="{{ request()->routeIs('propuesta.create', 'propuesta.store', 'propuesta.update') ? " py-2 px-6 color2
            text-white font-bold max-lg:rounded-lg tab-border" : "px-6" }}"
            href="{{ route ('propuesta.create', $project->id)}}">Propuesta</a>
        <a class="{{ request()->routeIs('negocio.create', 'negocio.store', 'negocio.update') ? " py-2 px-6 color2
            text-white font-bold max-lg:rounded-lg tab-border" : "px-6" }}"
            href="{{ route ('negocio.create', $project->id)}}">Modelo Negocio</a>
        <a class="{{ request()->routeIs('pitch.create', 'pitch.store', 'pitch.update') ? " py-2 px-6 color2 text-white
            font-bold max-lg:rounded-lg tab-border" : "px-6" }}"
            href="{{ route ('pitch.create', $project->id)}}">Pitch</a>
    </nav>
</div>
@endauth