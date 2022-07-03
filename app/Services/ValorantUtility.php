<?php

namespace App\Services;

use Illuminate\Database\Eloquent\Model;

class ValorantUtility extends Model
{
  public static function valorantlevel($valorant){
    $levelAry=[100,200,300,400,500];
    if($valorant!=""){
    foreach($levelAry as $level){
        if($valorant->level===$level){
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
  
   public static function valorantrank($valorant){
    $valorantrankAry=["アイアン","ブロンズ","シルバー","ゴールド","プラチナ","ダイヤ","イモータル","レディアント"];
    if($valorant!=""){
    foreach($valorantrankAry as $rank){
        if($valorant->rank===$rank){
            echo "<option value='$rank' selected>$rank</option>";
        }else{
            echo "<option value='$rank'>$rank</option>";
       }
    }
  }else{
        foreach($valorantrankAry as $rank){
            echo "<option value='$rank'>$rank</option>";
       }
     }
    }
  
  public static function valorantoffer($valorant){
    $offerAry=["楽しくプレイ","ランク募集"];
    if($valorant!=""){
    foreach($offerAry as $offer){
        if($valorant->offer===$offer){
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
