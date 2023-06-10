@extends("layouts.logobarra")

@section('titulo', 'Perfil')

@section('contenido')
<div class="color1">
    @include('layouts.subnavegacion')
    <div class="p-10">
        <div class="border-color2 border-radius color4">
            <div class="customtitle2 max-lg:text-3xl text-center color3 text-white custom-mt">
                <h2 class="m-0 custom-bordercolor2 font-bold">Datos Personales</h2>
            </div>
            <div class="max-md:mx-6 max-lg:mx-12 mx-10 mt-10 mb-4">
                <form action="{{ route ('perfil') }}" method="POST"
                    class="grid grid-cols-12 grid-rows-12 gap-5 md:text-xl lg:text-2xl lg:py-10 items-center"
                    enctype="multipart/form-data" id="formulario1">
                    @csrf
                    <div class="max-md:col-span-4 md:col-span-3 lg:col-span-2">
                        <svg xmlns="http://www.w3.org/2000/svg"
                            class="icon icon-tabler icon-tabler-user-circle inline max-lg:w-7" width="44" height="44"
                            viewBox="0 0 24 24" stroke-width="1.5" stroke="#FE8101" fill="none" stroke-linecap="round"
                            stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <circle cx="12" cy="12" r="9" />
                            <circle cx="12" cy="10" r="3" />
                            <path d="M6.168 18.849a4 4 0 0 1 3.832 -2.849h4a4 4 0 0 1 3.834 2.855" />
                        </svg>
                        <label for="nombres">Nombres:</label>
                    </div>
                    <div class="max-md:col-span-8  md:col-span-7 lg:col-span-4">
                        <input type="text" name="name" class="w-full py-1.5 px-3" id="nombres"
                            value="{{ Auth::user()->name }}">
                        @error('name')
                        <small class="text-red-600"> {{ $message }}</small>
                        @enderror
                    </div>
                    <div class="max-md:col-span-4 md:col-span-3 lg:col-span-2">
                        <svg xmlns="http://www.w3.org/2000/svg"
                            class="icon icon-tabler icon-tabler-user-circle inline max-lg:w-7" width="44" height="44"
                            viewBox="0 0 24 24" stroke-width="1.5" stroke="#FE8101" fill="none" stroke-linecap="round"
                            stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <circle cx="12" cy="12" r="9" />
                            <circle cx="12" cy="10" r="3" />
                            <path d="M6.168 18.849a4 4 0 0 1 3.832 -2.849h4a4 4 0 0 1 3.834 2.855" />
                        </svg>
                        <label for="apellidos">Apellidos:</label>
                    </div>
                    <div class="max-md:col-span-8  md:col-span-7 lg:col-span-4">
                        <input type="text" name="lastname" class="w-full py-1.5 px-3" id="apellidos"
                            value="{{ Auth::user()->lastname }}">
                        @error('lastname')
                        <small class="text-red-600"> {{ $message }}</small>
                        @enderror
                    </div>
                    <div class="max-md:col-span-4 md:col-span-3 lg:col-span-2">
                        <svg xmlns="http://www.w3.org/2000/svg"
                            class="icon icon-tabler icon-tabler-users inline max-lg:w-7" width="44" height="44"
                            viewBox="0 0 24 24" stroke-width="1.5" stroke="#FE8101" fill="none" stroke-linecap="round"
                            stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <circle cx="9" cy="7" r="4" />
                            <path d="M3 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2" />
                            <path d="M16 3.13a4 4 0 0 1 0 7.75" />
                            <path d="M21 21v-2a4 4 0 0 0 -3 -3.85" />
                        </svg>
                        <label for="gridradio1">Sexo:</label>
                    </div>
                    <div class="max-md:col-span-8  md:col-span-9 lg:col-span-4" id="sexo">
                        <div class="inline-flex items-center p-1">
                            <input type="radio" name="gender" id="gridradio1" value="femenino" @if( Auth::user()->gender
                            == 'femenino') checked @endif class="mr-2">
                            <label for="gridradio1">Femenino</label>
                        </div>
                        <div class="inline-flex items-center p-1">
                            <input type="radio" name="gender" id="gridradio2" value="masculino" @if(
                                Auth::user()->gender == 'masculino') checked @endif class="mr-2">
                            <label for="gridradio2">Masculino</label>
                        </div>
                        <div class="inline-flex items-center p-1">
                            <input type="radio" name="gender" id="gridradio3" value="otro" @if( Auth::user()->gender ==
                            'otro') checked @endif class="mr-2">
                            <label for="gridradio3">Otro</label>
                            @error('gender')
                            <small class="text-red-600"> {{ $message }}</small>
                            @enderror
                        </div>
                    </div>
                    <div class="max-md:col-span-4 md:col-span-3 lg:col-span-2 lg:col-start-7">
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
                        <label for="dni" class="tracking-tight">Cédula:</label>
                    </div>
                    <div class="max-md:col-span-5  md:col-span-3 lg:col-span-2 lg:col-start-9">
                        <input type="text" name="dni" class="w-full py-1.5 px-3" id="dni"
                            value="{{ Auth::user()->dni }}">
                        @error('dni')
                        <small class="text-red-600"> {{ $message }}</small>
                        @enderror
                    </div>
                    <div class="max-md:col-span-6 md:col-span-4 max-lg:row-start-5 lg:col-span-3">
                        <svg xmlns="http://www.w3.org/2000/svg"
                            class="icon icon-tabler icon-tabler-calendar-event inline max-lg:w-7" width="44" height="44"
                            viewBox="0 0 24 24" stroke-width="1.5" stroke="#FE8101" fill="none" stroke-linecap="round"
                            stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path d="M4 5m0 2a2 2 0 0 1 2 -2h12a2 2 0 0 1 2 2v12a2 2 0 0 1 -2 2h-12a2 2 0 0 1 -2 -2z" />
                            <path d="M16 3l0 4" />
                            <path d="M8 3l0 4" />
                            <path d="M4 11l16 0" />
                            <path d="M8 15h2v2h-2z" />
                        </svg>
                        <label for="nacimiento" class="tracking-tighter">Fecha de Nacimiento:</label>
                    </div>
                    <div class="max-md:col-span-5 max-lg:row-start-5 md:col-span-3 lg:col-span-2 lg:col-start-4">
                        <input type="date" name="birthdate" class="w-full py-1.5 px-2" id="nacimiento"
                            value="{{ Auth::user()->birthdate }}">
                        @error('birthdate')
                        <small class="text-red-600"> {{ $message }}</small>
                        @enderror
                    </div>
                    <div class="max-md:col-span-4 md:col-span-3 max-lg:row-start-6 lg:col-span-2 lg:col-start-7">
                        <svg xmlns="http://www.w3.org/2000/svg"
                            class="icon icon-tabler icon-tabler-mail inline max-lg:w-7" width="44" height="44"
                            viewBox="0 0 24 24" stroke-width="1.5" stroke="#FE8101" fill="none" stroke-linecap="round"
                            stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <rect x="3" y="5" width="18" height="14" rx="2" />
                            <polyline points="3 7 12 13 21 7" />
                        </svg>
                        <label for="correo">Correo:</label>
                    </div>
                    <div class="max-md:col-span-8 md:col-span-5 max-lg:row-start-6 lg:col-span-4">
                        <input type="email" name="email" class="w-full py-1.5 px-3" id="correo"
                            value="{{ Auth::user()->email }}">
                    </div>
                    <div class="max-md:col-span-4 md:col-span-3  max-lg:row-start-7 lg:col-span-3">
                        <svg xmlns="http://www.w3.org/2000/svg"
                            class="icon icon-tabler icon-tabler-phone inline max-lg:w-7" width="44" height="44"
                            viewBox="0 0 24 24" stroke-width="1.5" stroke="#FE8101" fill="none" stroke-linecap="round"
                            stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path
                                d="M5 4h4l2 5l-2.5 1.5a11 11 0 0 0 5 5l1.5 -2.5l5 2v4a2 2 0 0 1 -2 2a16 16 0 0 1 -15 -15a2 2 0 0 1 2 -2" />
                        </svg>
                        <label for="cellphone">Teléfono:</label>
                    </div>
                    <div class="max-md:col-span-5  md:col-span-3 lg:col-span-3 max-lg:row-start-7">
                        <input type="text" name="cellphone" id="cellphone" class="w-full py-1.5 px-3"
                            value="{{ Auth::user()->cellphone }}">
                        @error('cellphone')
                        <small class="text-red-600"> {{ $message }}</small>
                        @enderror
                    </div>
                    <div class="max-md:col-span-5 md:col-span-4  max-lg:row-start-8 lg:col-span-2">
                        <svg xmlns="http://www.w3.org/2000/svg"
                            class="icon icon-tabler icon-tabler-camera inline max-lg:w-7" width="44" height="44"
                            viewBox="0 0 24 24" stroke-width="1.5" stroke="#FE8101" fill="none" stroke-linecap="round"
                            stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path
                                d="M5 7h1a2 2 0 0 0 2 -2a1 1 0 0 1 1 -1h6a1 1 0 0 1 1 1a2 2 0 0 0 2 2h1a2 2 0 0 1 2 2v9a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2v-9a2 2 0 0 1 2 -2" />
                            <path d="M9 13a3 3 0 1 0 6 0a3 3 0 0 0 -6 0" />
                        </svg>
                        <span class="tracking-tight">Foto de Perfil:</span>
                    </div>
                    <div class="max-lg:col-span-7 lg:col-span-3 max-lg:row-start-8">
                        <div class="flex items-center">
                            <div id="preview-container" class="mr-5">
                                @if (Auth::user()->avatar)
                                <img class="object-cover rounded-full profile-imgborder ml-5"
                                    src="{{ asset('storage/avatar/'. Auth::user()->avatar)}}" alt="" width="80"
                                    height="80">
                                @else
                                <img class="object-cover rounded-full profile-imgborder ml-5"
                                    src="{{ asset('images/default.png')}}" alt="" width="80" height="80">
                                @endif
                            </div>
                            <label for="avatar" class="cursor-pointer"><svg xmlns="http://www.w3.org/2000/svg"
                                    class="icon icon-tabler icon-tabler-paperclip inline max-lg:w-7" width="44"
                                    height="44" viewBox="0 0 24 24" stroke-width="1.5" stroke="#FE8101" fill="none"
                                    stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <path
                                        d="M15 7l-6.5 6.5a1.5 1.5 0 0 0 3 3l6.5 -6.5a3 3 0 0 0 -6 -6l-6.5 6.5a4.5 4.5 0 0 0 9 9l6.5 -6.5" />
                                </svg></label>
                            <input type="file" name="avatar" id="avatar" class="hidden">
                        </div>
                    </div>
                    <p
                        class="max-md:col-span-8  md:col-span-9 lg:col-span-3 max-lg:indent-7 lg:indent-12 mt-10 font-bold max-lg:row-start-9 underline">
                        Redes Sociales:</p>
                    <div class="max-md:col-span-4 md:col-span-3 lg:col-span-2 max-lg:row-start-10 lg:row-start-6">
                        <svg xmlns="http://www.w3.org/2000/svg"
                            class="icon icon-tabler icon-tabler-brand-facebook inline max-lg:w-7" width="44" height="44"
                            viewBox="0 0 24 24" stroke-width="1.5" stroke="#FE8101" fill="none" stroke-linecap="round"
                            stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path d="M7 10v4h3v7h4v-7h3l1 -4h-4v-2a1 1 0 0 1 1 -1h3v-4h-3a5 5 0 0 0 -5 5v2h-3" />
                        </svg>
                        <label for="facebook">Facebook:</label>
                    </div>
                    <div class="max-md:col-span-8  md:col-span-7 lg:col-span-3 max-lg:row-start-10 lg:row-start-6">
                        <input type="text" name="facebook" class="w-full py-1.5 px-3" id="facebook"
                            value="{{ Auth::user()->facebook }}">
                    </div>
                    <div class="max-md:col-span-4 md:col-span-3 lg:col-span-2 max-lg:row-start-11 lg:row-start-7">
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
                    <div class="max-md:col-span-8  md:col-span-7 lg:col-span-3 max-lg:row-start-11 lg:row-start-7">
                        <input type="text" name="instagram" class="w-full py-1.5 px-3" id="instagram"
                            value="{{ Auth::user()->instagram }}">
                    </div>
                    <div class="max-md:col-span-4 md:col-span-3 lg:col-span-2 max-lg:row-start-12 lg:row-start-8">
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
                    <div class="max-md:col-span-8  md:col-span-7 lg:col-span-3 max-lg:row-start-12 lg:row-start-8">
                        <input type="text" name="linkedin" class="w-full py-1.5 px-3" id="linkedin"
                            value="{{ Auth::user()->linkedin }}">
                    </div>
                    <div class="max-md:col-span-4 md:col-span-3 lg:col-span-2 max-lg:row-start-13 lg:row-start-9">
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
                    <div class="max-md:col-span-8  md:col-span-7 lg:col-span-3 max-lg:row-start-13 lg:row-start-9">
                        <input type="text" name="tiktok" class="w-full py-1.5 px-3" id="tiktok"
                            value="{{ Auth::user()->tiktok }}">
                    </div>
                    <div class="max-md:col-span-4 md:col-span-3 lg:col-span-2 max-lg:row-start-14 lg:row-start-10">
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
                    <div class="max-md:col-span-8  md:col-span-7 lg:col-span-3 max-lg:row-start-14 lg:row-start-10">
                        <input type="text" name="twitch" class="w-full py-1.5 px-3" id="twitch"
                            value="{{ Auth::user()->twitch }}">
                    </div>
                    <div class="max-md:col-span-4 md:col-span-3 lg:col-span-2 max-lg:row-start-15 lg:row-start-11">
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
                    <div class="max-md:col-span-8  md:col-span-7 lg:col-span-3 max-lg:row-start-15 lg:row-start-11">
                        <input type="text" name="twitter" class="w-full py-1.5 px-3" id="twitter"
                            value="{{ Auth::user()->twitter }}">
                    </div>
                    <div class="max-md:col-span-4 md:col-span-3 lg:col-span-2 max-lg:row-start-16 lg:row-start-12">
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
                    <div class="max-md:col-span-8  md:col-span-7 lg:col-span-3 max-lg:row-start-16 lg:row-start-12">
                        <input type="text" name="youtube" class="w-full py-1.5 px-3" id="youtube"
                            value="{{ Auth::user()->youtube }}">
                    </div>
                    <a href="{{ route ('perfil') }}"
                        class="col-span-3 max-md:col-start-5 md:col-start-6 max-lg:row-start-17 lg:row-start-13"><button
                            class="button px-1" type="submit">Guardar</button></a>
                </form>
            </div>
        </div>
    </div>
    <div class="p-10">
        <div class="border-color2 border-radius color4">
            <div class="customtitle2 max-lg:text-3xl text-center color3 text-white custom-mt">
                <h2 class="m-0 custom-bordercolor2 font-bold">Datos Académicos</h2>
            </div>
            <div class="max-md:mx-6 max-lg:mx-12 mx-10 mt-10 mb-4">
                <form action="{{ route ('perfil') }}" method="POST"
                    class="grid grid-cols-12 grid-rows-12 gap-5 md:text-xl lg:text-2xl lg:py-10 items-center" id="formulario2">
                    <div class="max-md:col-span-5 md:col-span-4 lg:col-span-3 xl:col-span-2">
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
                        <label for="universidad" class="tracking-tight">Universidad:</label>
                    </div>
                    <div class="max-md:col-span-7  md:col-span-7 lg:col-span-9 xl:col-span-10">
                        <input type="text" name="universidad" class="w-full py-1.5 px-3" id="universidad" value="{{ Auth::user()->universidad }}">
                        @error('universidad')
                         <small class="text-red-600"> {{ $message }}</small>
                        @enderror
                    </div>
                    <div class="max-md:col-span-5 md:col-span-4 lg:col-span-3 xl:col-span-2">
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
                        <label for="facultad">Facultad:</label>
                    </div>
                    <div class="max-md:col-span-7  md:col-span-7 lg:col-span-9 xl:col-span-10">
                        <input type="text" name="facultad" class="w-full py-1.5 px-3" id="facultad" value="{{ Auth::user()->facultad }}">
                        @error('facultad')
                        <small class="text-red-600"> {{ $message }}</small>
                        @enderror
                    </div>
                    <div class="max-md:col-span-6 md:col-span-4 lg:col-span-4 xl:col-span-3">
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
                        <label for="carrera">Escuela/Carrera:</label>
                    </div>
                    <div class="max-md:col-span-6  md:col-span-7 lg:col-span-8 xl:col-span-9">
                        <input type="text" name="carrera" class="w-full py-1.5 px-3" id="carrera" value="{{ Auth::user()->carrera }}">
                        @error('carrera')
                        <small class="text-red-600"> {{ $message }}</small>
                        @enderror
                    </div>
                    <div class="max-md:col-span-6 md:col-span-4 lg:col-span-4 xl:col-span-3">
                        <svg xmlns="http://www.w3.org/2000/svg"
                            class="icon icon-tabler icon-tabler-book inline max-lg:w-7" width="44" height="44"
                            viewBox="0 0 24 24" stroke-width="1.5" stroke="#FE8101" fill="none" stroke-linecap="round"
                            stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path d="M3 19a9 9 0 0 1 9 0a9 9 0 0 1 9 0" />
                            <path d="M3 6a9 9 0 0 1 9 0a9 9 0 0 1 9 0" />
                            <path d="M3 6l0 13" />
                            <path d="M12 6l0 13" />
                            <path d="M21 6l0 13" />
                        </svg>
                        <label for="semestre">Semestre cursante:</label>
                    </div>
                    <div class="max-md:col-span-6  md:col-span-7 lg:col-span-3">
                        <input type="text" name="semestre" class="w-full py-1.5 px-3" id="semestre" value="{{ Auth::user()->semestre }}">
                        @error('semestre')
                        <small class="text-red-600"> {{ $message }}</small>
                        @enderror
                    </div>
                </form>
                <a href="{{ route ('perfil') }}" class="flex justify-center pb-10"><button class="button px-1"
                    type="submit" id="guardar">Guardar</button></a>
            </div>
        </div>
    </div>
    <div class="p-10">
        <div class="border-color2 border-radius color4">
            <div class="customtitle2 max-lg:text-3xl text-center color3 text-white custom-mt">
                <h2 class="m-0 custom-bordercolor2 font-bold">Cambiar Contraseña</h2>
            </div>
            <div class="max-md:mx-6 max-lg:mx-12 mx-10 mt-10 mb-4">
                <form action="{{ route ('perfil') }}" method="POST"
                    class="grid grid-cols-12 grid-rows-12 gap-5 md:text-xl lg:text-2xl lg:py-10">
                    <div class="max-md:col-span-6 md:col-span-5 lg:col-span-3 lg:col-start-4">
                        <svg xmlns="http://www.w3.org/2000/svg"
                            class="icon icon-tabler icon-tabler-key inline max-lg:w-7" width="44" height="44"
                            viewBox="0 0 24 24" stroke-width="1.5" stroke="#FE8101" fill="none" stroke-linecap="round"
                            stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <circle cx="8" cy="15" r="4" />
                            <line x1="10.85" y1="12.15" x2="19" y2="4" />
                            <line x1="18" y1="5" x2="20" y2="7" />
                            <line x1="15" y1="8" x2="17" y2="10" />
                        </svg>
                        <label for="contraseña">Contraseña actual:</label>
                    </div>
                    <div class="max-md:col-span-6  md:col-span-7 lg:col-span-3">
                        <input type="password" name="password" id="contraseña" class="w-full py-1.5 px-3">
                    </div>
                    <div class="max-md:col-span-6 md:col-span-5 lg:col-span-3 lg:col-start-4">
                        <svg xmlns="http://www.w3.org/2000/svg"
                            class="icon icon-tabler icon-tabler-key inline max-lg:w-7" width="44" height="44"
                            viewBox="0 0 24 24" stroke-width="1.5" stroke="#FE8101" fill="none" stroke-linecap="round"
                            stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <circle cx="8" cy="15" r="4" />
                            <line x1="10.85" y1="12.15" x2="19" y2="4" />
                            <line x1="18" y1="5" x2="20" y2="7" />
                            <line x1="15" y1="8" x2="17" y2="10" />
                        </svg>
                        <label for="contraseña1">Nueva contraseña:</label>
                    </div>
                    <div class="max-md:col-span-6  md:col-span-7 lg:col-span-3">
                        <input type="password" name="contraseña" id="contraseña1" class="w-full py-1.5 px-3">
                    </div>
                    <div class="max-md:col-span-6 md:col-span-5 lg:col-span-3 lg:col-start-4">
                        <svg xmlns="http://www.w3.org/2000/svg"
                            class="icon icon-tabler icon-tabler-key inline max-lg:w-7" width="44" height="44"
                            viewBox="0 0 24 24" stroke-width="1.5" stroke="#FE8101" fill="none" stroke-linecap="round"
                            stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <circle cx="8" cy="15" r="4" />
                            <line x1="10.85" y1="12.15" x2="19" y2="4" />
                            <line x1="18" y1="5" x2="20" y2="7" />
                            <line x1="15" y1="8" x2="17" y2="10" />
                        </svg>
                        <label for="contraseña2">Repetir contraseña:</label>
                    </div>
                    <div class="max-md:col-span-6  md:col-span-7 lg:col-span-3">
                        <input type="password" name="contraseña" id="contraseña2" class="w-full py-1.5 px-3">
                    </div>
                </form>
            </div>
        </div>
    </div>
    <a href="{{ route ('perfil') }}" class="flex justify-center pb-10"><button class="button px-1"
            type="submit">Guardar</button></a>
</div>
@endsection
