<?php

namespace App\Services;

use Illuminate\Database\Eloquent\Model;

class CodUtility extends Model
{
   public static function codlevel($cod){
    $levelAry=[100,200,300,400,500,600,700,800,900,1000];
     if($cod!=""){
    foreach($levelAry as $level){
        if($cod->level===$level){
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
  
  public static function codrank($cod){
    $codrankAry=["ルーキー","ベテラン","エリート","プロ","マスター","レジェンド"];
    if($cod!=""){
    foreach($codrankAry as $rank){
        if($cod->rank===$rank){
            echo "<option value='$rank' selected>$rank</option>";
        }else{
            echo "<option value='$rank'>$rank</option>";
       }
    }
  }else{
        foreach($codrankAry as $rank){
            echo "<option value='$rank'>$rank</option>";
       }
     }
    }
  
  public static function codoffer($cod){
    $offerAry=["楽しくプレイ","ランク募集"];
    if($cod!=""){
    foreach($offerAry as $offer){
        if($cod->offer===$offer){
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
