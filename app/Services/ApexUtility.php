<?php

namespace App\Services;

use Illuminate\Database\Eloquent\Model;

class ApexUtility extends Model
{
  public static function apexlevel(int $apexLevel){
    $levelAry=[100,200,300,400,500];
    foreach($levelAry as $level){
        if($apexLevel===$level){
            echo "<option value='$level' selected>$level</option>";
        }else{
            echo "<option value='$level'>$level</option>";
       }
    }
  }
  
   public static function apexbattle_royale_rank(string $apexbattle_royale_rank){
    $battle_royale_rankAry=["ブロンズ","シルバー","ゴールド","プラチナ","ダイヤ","マスター","プレデター"];
    foreach($battle_royale_rankAry as $battle_royale_rank){
        if($apexbattle_royale_rank===$battle_royale_rank){
            echo "<option value='$battle_royale_rank' selected>$battle_royale_rank</option>";
        }else{
            echo "<option value='$battle_royale_rank'>$battle_royale_rank</option>";
       }
    }
  }
  
  public static function apexarena_rank(string $apexarena_rank){
    $arena_rankAry=["ブロンズ","シルバー","ゴールド","プラチナ","ダイヤ","マスター","プレデター"];
    foreach($arena_rankAry as $arena_rank){
        if($apexarena_rank===$arena_rank){
            echo "<option value='$arena_rank' selected>$arena_rank</option>";
        }else{
            echo "<option value='$arena_rank'>$arena_rank</option>";
       }
    }
  }
  
  public static function apexoffer(string $apexoffer){
    $offerAry=["楽しくカジュアル","バトロワランク","楽しくアリーナ","アリーナランク"];
    foreach($offerAry as $offer){
        if($apexoffer===$offer){
            echo "<option value='$offer' selected>$offer</option>";
        }else{
            echo "<option value='$offer'>$offer</option>";
       }
    }
  }
}
