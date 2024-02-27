<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Equipe extends Model
{
    protected $fillable = ['name', 'equipe_id'];

    public function equipe()
    {
        return $this->belongsTo(Equipe::class, 'equipe_id', 'id');
    }
    use HasFactory;
}
