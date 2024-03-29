<?php

namespace App\Models;

use App\Models\Project;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Hipoteses extends Model
{
    protected $fillable = [
        'cree',
        'observa',
        'aprende',
        'accion',
    ];    
    public function project(): BelongsTo
    {
        return $this->belongsTo(Project::class);
    }
}
