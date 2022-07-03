<?php

namespace App\Services;

use Illuminate\Database\Eloquent\Model;
use App\User;

class RecommendValorantUtility extends Model
{
    public static function valorantoffer(string $valorantoffer,User $user){
        if($valorantoffer===$user->valorant()->get()[0]->offer){
            return true;
        }else{
            return false;
        }
    }
  }
