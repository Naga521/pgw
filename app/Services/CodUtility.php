<?php

namespace App\Services;

use Illuminate\Database\Eloquent\Model;

class CodUtility extends Model
{
   public static function codlevel(int $codLevel){
    $levelAry=[100,200,300,400,500,600,700,800,900,1000];
    foreach($levelAry as $level){
        if($codLevel===$level){
            echo "<option value='$level' selected>$level</option>";
        }else{
            echo "<option value='$level'>$level</option>";
       }
    }
  }
  
  public static function codrank(string $codrank){
    $codrankAry=["ルーキー","ベテラン","エリート","プロ","マスター","レジェンド"];
    foreach($codrankAry as $rank){
        if($codrank===$rank){
            echo "<option value='$rank' selected>$rank</option>";
        }else{
            echo "<option value='$rank'>$rank</option>";
       }
    }
  }
  
  public static function codoffer(string $codoffer){
    $offerAry=["楽しくプレイ","ランク募集"];
    foreach($offerAry as $offer){
        if($codoffer===$offer){
            echo "<option value='$offer' selected>$offer</option>";
        }else{
            echo "<option value='$offer'>$offer</option>";
       }
    }
  }
}
