<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use PhpParser\Node\Stmt\Return_;

class Commande extends Model
{
    use HasFactory;
    protected $fillable = ['numCom', 'dateCom', 'id_Client'];
    public function client()
    {
        return $this->belongsTo(Client::class);
    }
    public function articles()
    {
        return $this->belongsToMany(Article::class);
    }
    public function getClient($id)
    {
        return Client::find($id)->nom;
    }
}
