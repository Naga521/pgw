<?php

namespace App\Services;

use Illuminate\Database\Eloquent\Model;

class ApexUtility extends Model
{
  public static function apexlevel($apex){
    $levelAry=[100,200,300,400,500];
    if($apex!=""){
    foreach($levelAry as $level){
        if($apex->level===$level){
            echo "<option value='$level' selected>$level</option>";
        }else{
            echo "<option value='$level'>$level</option>";
       }
    }
    }else{
        foreach($levelAry as $level){
            echo "<option value='$level'>$level</option>";
       }
    }
    }
  
   public static function apexbattle_royale_rank($apex){
    $battle_royale_rankAry=["ブロンズ","シルバー","ゴールド","プラチナ","ダイヤ","マスター","プレデター"];
    if($apex!=""){
    foreach($battle_royale_rankAry as $battle_royale_rank){
        if($apex->battle_royale_rank===$battle_royale_rank){
            echo "<option value='$battle_royale_rank' selected>$battle_royale_rank</option>";
        }else{
            echo "<option value='$battle_royale_rank'>$battle_royale_rank</option>";
       }
    }
  }else{
        foreach($battle_royale_rankAry as $battle_royale_rank){
            echo "<option value='$battle_royale_rank'>$battle_royale_rank</option>";
       }
     }
    }
  
  public static function apexarena_rank($apex){
    $arena_rankAry=["ブロンズ","シルバー","ゴールド","プラチナ","ダイヤ","マスター","プレデター"];
    if($apex!=""){
    foreach($arena_rankAry as $arena_rank){
        if($apex->arena_rank===$arena_rank){
            echo "<option value='$arena_rank' selected>$arena_rank</option>";
        }else{
            echo "<option value='$arena_rank'>$arena_rank</option>";
       }
    }
  }else{
        foreach($arena_rankAry as $arena_rank){
            echo "<option value='$arena_rank'>$arena_rank</option>";
       }
      }
    }
  
  public static function apexoffer($apex){
    $offerAry=["楽しくカジュアル","バトロワランク","楽しくアリーナ","アリーナランク"];
    if($apex!=""){
    foreach($offerAry as $offer){
        if($apex->offer===$offer){
            echo "<option value='$offer' selected>$offer</option>";
        }else{
            echo "<option value='$offer'>$offer</option>";
       }
    }
  }else{
        foreach($offerAry as $offer){
            echo "<option value='$offer'>$offer</option>";
       }
      }
    }
}