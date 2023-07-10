<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Project extends Model
{
    protected $fillable = [
        'nombre',
        'escuela',
        'area',
        'telefono',
        'correo',
        'descripcion',
        'img_principal',
        'imagen1',
        'imagen2',
        'imagen3',
        'facebook',
        'instagram',
        'linkedin',
        'tiktok',
        'twitch',
        'twitter',
        'youtube',
    ];

    protected static function boot()
    {
        parent::boot();
        static::creating(function ($project) {
            $project->user_id = auth()->id();
        });
    }

    public function integrantes(): BelongsToMany
    {
        return $this->belongsToMany(User::class, 'integrantes', 'project_id', 'user_id');
    }
    public function hipoteses(): HasMany
    {
        return $this->hasMany(Hipoteses::class);
    }
    public function impacto()
    {
        return $this->hasOne(Impacto::class);
    }
    public function tecnologia()
    {
        return $this->hasOne(Tecnologia::class);
    }
    public function empatia()
    {
        return $this->hasOne(Empatia::class);
    }
    public function propuesta()
    {
        return $this->hasOne(Propuesta::class);
    }
    public function negocio()
    {
        return $this->hasOne(Negocio::class);
    }
    public function pitch()
    {
        return $this->hasOne(Pitch::class);
    }

}
