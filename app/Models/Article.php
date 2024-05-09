<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;
    protected $fillable = ['numero', 'designation', 'price'];
    public function commandes()
    {
        return $this->belongsToMany(Commande::class);
    }
}
