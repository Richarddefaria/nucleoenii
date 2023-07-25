@extends("layouts.logobarra")

@section('titulo', 'Hipótesis')

@section('contenido')
<div class="color1">
    @include('layouts.navegacion')
    @include('layouts.subnavegacion')
    <div class="p-10 color1">
        <div class="border-color2 border-radius color4">
            <div class="customtitle2 max-lg:text-3xl text-center color3 text-white custom-mt">
                <h2 class="m-0 custom-bordercolor2 font-bold">{{ $title}}</h2>
            </div>
            @include('layouts.flashmessage')
            <div class="text-2xl grid grid-cols-12 mx-10">
                @if (request()->routeIs('hipoteses.create'))
                <!-------->
                @else
                <a href="{{ route('hipoteses.create', $project->id)}}" class="font-bold text-color2 underline col-span-3">Crear otra hipótesis</a>
                @endif
            @if ($hipoteses->count() > 0)
            <div class="col-span-5 col-start-8 ml-12">
                <label for="hipoteses" class="mr-4">Editar Hipótesis:</label>
                <select name="id" id="hipoteses">
                    <option value="">Selecciona una hipótesis</option>
                    @php
                    $contador = 1;
                    @endphp
                    @forelse ($project->hipoteses as $hipotese)
                    <option value="{{ route('hipoteses.edit', [$project->id, $hipotese->id]) }}" class="hover:bg-slate-900">Hipótesis {{ $contador
                        }}</option>
                    @php
                    $contador++;
                    @endphp
                    @empty
                    a
                    @endforelse
                </select>
            </div>
            @endif
        </div>
            <div class="mx-10 mt-5 mb-4" id="hipotesis-container">
                <form action="{{ $action }}" method="POST"
                    class="clonedForm grid grid-cols-12 grid-rows-12 gap-5 md:text-xl lg:text-2xl max-lg:pb-5 lg:py-10">
                    @csrf
                    @isset ($method)
                    @method($method)
                    @endif
                    <input type="hidden" name="project_id" value="{{ $project->id }}">
                    <input type="hidden" name="hipoteses_id" value="{{ $hipoteses->id }}">
                    <!-- Campos que no están ocultos en el formulario -->
                    <div class="col-span-10">
                        <svg xmlns="http://www.w3.org/2000/svg"
                            class="icon icon-tabler icon-tabler-heart-handshake inline max-lg:w-7" width="44"
                            height="44" viewBox="0 0 24 24" stroke-width="1.5" stroke="#FE8101" fill="none"
                            stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path d="M19.5 12.572l-7.5 7.428l-7.5 -7.428a5 5 0 1 1 7.5 -6.566a5 5 0 1 1 7.5 6.572" />
                            <path
                                d="M12 6l-3.293 3.293a1 1 0 0 0 0 1.414l.543 .543c.69 .69 1.81 .69 2.5 0l1 -1a3.182 3.182 0 0 1 4.5 0l2.25 2.25" />
                            <path d="M12.5 15.5l2 2" />
                            <path d="M15 13l2 2" />
                        </svg>
                        <label for="cree" class="">Cree:</label>
                    </div>
                    <div class="col-span-12">
                        <textarea name="hipoteses[][cree]" id="cree" rows="5" maxlength="1000"
                            class="w-full py-1.5 px-3">@if (request()->routeIs('hipoteses.create'))@else{{ $hipoteses->cree}}@endif</textarea>
                    </div>
                    <div class="col-span-10">
                        <svg xmlns="http://www.w3.org/2000/svg"
                            class="icon icon-tabler icon-tabler-eye inline max-lg:w-7" width="44" height="44"
                            viewBox="0 0 24 24" stroke-width="1.5" stroke="#FE8101" fill="none" stroke-linecap="round"
                            stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <circle cx="12" cy="12" r="2" />
                            <path
                                d="M22 12c-2.667 4.667 -6 7 -10 7s-7.333 -2.333 -10 -7c2.667 -4.667 6 -7 10 -7s7.333 2.333 10 7" />
                        </svg>
                        <label for="observa" class="">Observa:</label>
                    </div>
                    <div class="col-span-12">
                        <textarea name="hipoteses[][observa]" id="observa" rows="5" maxlength="1000"
                            class="w-full py-1.5 px-3">@if (request()->routeIs('hipoteses.create'))@else{{ $hipoteses->observa}}@endif</textarea>
                    </div>
                    <div class="col-span-10">
                        <svg xmlns="http://www.w3.org/2000/svg"
                            class="icon icon-tabler icon-tabler-vocabulary inline max-lg:w-7" width="44" height="44"
                            viewBox="0 0 24 24" stroke-width="1.5" stroke="#FE8101" fill="none" stroke-linecap="round"
                            stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path
                                d="M10 19h-6a1 1 0 0 1 -1 -1v-14a1 1 0 0 1 1 -1h6a2 2 0 0 1 2 2a2 2 0 0 1 2 -2h6a1 1 0 0 1 1 1v14a1 1 0 0 1 -1 1h-6a2 2 0 0 0 -2 2a2 2 0 0 0 -2 -2z" />
                            <path d="M12 5v16" />
                            <path d="M7 7h1" />
                            <path d="M7 11h1" />
                            <path d="M16 7h1" />
                            <path d="M16 11h1" />
                            <path d="M16 15h1" />
                        </svg>
                        <label for="aprende" class="">Aprende:</label>
                    </div>
                    <div class="col-span-12">
                        <textarea name="hipoteses[][aprende]" id="aprende" rows="5" maxlength="1000"
                            class="w-full py-1.5 px-3">@if (request()->routeIs('hipoteses.create'))@else{{ $hipoteses->aprende}}@endif</textarea>
                    </div>
                    <div class="col-span-10">
                        <svg xmlns="http://www.w3.org/2000/svg"
                            class="icon icon-tabler icon-tabler-circle-check inline max-lg:w-7" width="44" height="44"
                            viewBox="0 0 24 24" stroke-width="1.5" stroke="#FE8101" fill="none" stroke-linecap="round"
                            stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path d="M12 12m-9 0a9 9 0 1 0 18 0a9 9 0 1 0 -18 0" />
                            <path d="M9 12l2 2l4 -4" />
                        </svg>
                        <label for="accion" class="">Acción:</label>
                    </div>
                    <div class="col-span-12">
                        <textarea name="hipoteses[][accion]" id="accion" rows="5" maxlength="1000"
                            class="w-full py-1.5 px-3">@if (request()->routeIs('hipoteses.create'))@else{{ $hipoteses->accion}}@endif</textarea>
                    </div>
                    <button class="button max-lg:col-span-5 col-span-2 max-md:col-start-5 md:col-start-6 mt-5"
                        type="submit">Guardar</button>
                </form>
            </div>
        </div>
        @if (request()->routeIs('hipoteses.create'))
        <div class="flex justify-end text-2xl mt-5 items-center">
            <svg id="add-input" xmlns="http://www.w3.org/2000/svg"
                class="icon icon-tabler icon-tabler-circle-plus ml-7 cursor-pointer" width="30" height="30"
                viewBox="0 0 24 24" stroke-width="1.5" stroke="#FE8101" fill="none" stroke-linecap="round"
                stroke-linejoin="round">
                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                <path d="M12 12m-9 0a9 9 0 1 0 18 0a9 9 0 1 0 -18 0" />
                <path d="M9 12l6 0" />
                <path d="M12 9l0 6" />
            </svg>
            <button type="button" class="text-white font-bold clon">Añadir otra Hipótesis</button>
        </div>
        @else
        @endif
    </div>
</div>
<script>
    $(document).ready(function(){
  
  var elm_html = $('#hipotesis-container').html();   //faz uma cópia dos elementos a serem clonados.

  $(document).on('click', '.clon', function(e){
      e.preventDefault();
      var i = $('.clonedForm').length;    //pega a quantidade de clones;
      var elementos = elm_html.replace(/\[[0\]]\]/g, '['+i+++']');  //substitui o valor dos index e incrementa++
      $('#hipotesis-container').append(elementos);  //exibe o clone.
  });

});
</script>
<script>
    document.getElementById('hipoteses').addEventListener('change', function() {
        var url = this.value;
        if (url !== '') {
            window.location.href = url;
        }
    });
</script>
@endsection
