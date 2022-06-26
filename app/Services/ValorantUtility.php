<?php

namespace App\Services;

use Illuminate\Database\Eloquent\Model;

class ValorantUtility extends Model
{
  public static function valorantlevel(int $valorantLevel){
    $levelAry=[100,200,300,400,500];
    foreach($levelAry as $level){
        if($valorantLevel===$level){
            echo "<option value='$level' selected>$level</option>";
        }else{
            echo "<option value='$level'>$level</option>";
       }
    }
  }
  
   public static function valorantrank(string $valorantrank){
    $valorantrankAry=["アイアン","ブロンズ","シルバー","ゴールド","プラチナ","ダイヤ","イモータル","レディアント"];
    foreach($valorantrankAry as $rank){
        if($valorantrank===$rank){
            echo "<option value='$rank' selected>$rank</option>";
        }else{
            echo "<option value='$rank'>$rank</option>";
       }
    }
  }
  
  public static function valorantoffer(string $valorantoffer){
    $offerAry=["楽しくプレイ","ランク募集"];
    foreach($offerAry as $offer){
        if($valorantoffer===$offer){
            echo "<option value='$offer' selected>$offer</option>";
        }else{
            echo "<option value='$offer'>$offer</option>";
       }
    }
  }
}
