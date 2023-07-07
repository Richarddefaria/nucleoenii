<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\Rules;
use App\Models\User;

class PerfilController extends Controller
{
    public function update(Request $request)
    {
        $request->validate(
            [
                'nombres' => 'required',
                'apellidos' => 'required',
                'sexo' => 'required',
                'cedula' => 'required',
            ],
            [
                'nombres.required' => 'El campo Nombres es obligatorio.',
                'apellidos.required' => 'El campo Apellidos es obligatorio.',
                'sexo' => 'Debe seleccionar una opción disponible.',
                'cedula.required' => 'El campo Cédula es obligatorio.',
                
            ]
        );

        $user = Auth::user();

        $user->nombres = $request->nombres;
        $user->apellidos = $request->apellidos;
        $user->sexo = $request->sexo;
        $user->correo = $request->correo;
        $user->cedula = $request->cedula;
        $user->fecha_nacimiento = $request->fecha_nacimiento;
        $user->telefono = $request->telefono;
        $user->facebook  = $request->facebook;
        $user->instagram  = $request->instagram;
        $user->linkedin  = $request->linkedin;
        $user->tiktok  = $request->tiktok;
        $user->twitch  = $request->twitch;
        $user->twitter  = $request->twitter;
        $user->youtube  = $request->youtube;
        $user->universidad = $request->universidad;
        $user->facultad = $request->facultad;
        $user->escuela = $request->escuela;
        $user->semestre = $request->semestre;


        if ($request->hasFile('avatar')) {
            $oldAvatar = $user->avatar;
            $filename = $request->file('avatar')->getClientOriginalName();
            $request->file('avatar')->storeAs('public/avatar', $filename);
            $user->avatar = $filename;

            if ($oldAvatar) {
                Storage::delete('public/avatar/' . $oldAvatar);
            }
        }
        if ($request->filled(['current_password', 'new_password', 'new_password_confirmation'])) {
            
            $request->validate([
                'current_password' => 'required',
                'new_password' => ['required', 'confirmed', Rules\Password::defaults()],
            ]);
        
            if (!Hash::check($request->current_password, Auth::user()->password)) {
                return back()->withErrors(['current_password' => 'La contraseña actual es incorrecta.']);
            }
        
            User::whereId(auth()->user()->id)->update([
                'password' => Hash::make($request->new_password)
            ]);
        }

        $request->user()->save();

        return redirect()->route('perfil')->with('success', '¡Contraseña actualizada correctamente!');
    }
}
