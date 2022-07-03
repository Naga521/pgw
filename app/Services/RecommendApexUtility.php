<?php

namespace App\Services;

use Illuminate\Database\Eloquent\Model;
use App\User;

class RecommendApexUtility extends Model
{
    public static function apexoffer(string $apexoffer,User $user){
        if($apexoffer===$user->apex()->get()[0]->offer){
            return true;
        }else{
            return false;
        }
    }
  }
