<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kategoria extends Model
{
    use HasFactory;
    protected $table='kategoriak';
    protected $fillable = ['kategorianev'];

    public function tesztek()
    {
        return $this->hasMany(Teszt::class, 'kategoria_id');
    }
}