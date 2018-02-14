<?php

namespace App;

use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;

class User extends Model implements Authenticatable
{
    use \Illuminate\Auth\Authenticatable;//Authentification necessaire pour l'utilisateur
    public function posts(){
        return $this->hasMany('App\Post'); // Creation de jointure avec la méthode Post, identique a la base de donnée.
    }
}
