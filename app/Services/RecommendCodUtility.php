<?php

namespace App\Services;

use Illuminate\Database\Eloquent\Model;
use App\User;

class RecommendCodUtility extends Model
{
    public static function codoffer(string $codoffer,User $user){
        if($codoffer===$user->cod()->get()[0]->offer){
            return true;
        }else{
            return false;
        }
    }
  }