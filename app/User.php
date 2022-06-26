<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','apex_user_id','valorant_user_id','cod_user_id','icon_path','email_verified_at','remember_token','id','created_at','updated_at',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    
    public function getPaginateByLimit(int $limit_count = 10)
    {
      // updated_atで降順に並べたあと、limitで件数制限をかける
      return $this->orderBy('updated_at', 'DESC')->paginate($limit_count);
    }
    public function chatsmessage() 
    {
      return $this->hasMany('App\ChatsMessage', 'user_id');  
    }
    public function Dms_to()
    {
      return $this->hasMany('App\Dm','to_id');
    }
    public function Dms_from()
    {
      return $this->hasMany('App\Dm','user_id');
    }
    public function apex() 
    {
      return $this->belongsTo('App\Apex', 'apex_user_id');  
    }
    public function valorant() 
    {
      return $this->belongsTo('App\Valorant', 'valorant_user_id');  
    }
    public function cod() 
    {
      return $this->belongsTo('App\Cod', 'apex_user_id');  
    }
    
    // フォロワー→フォロー
    public function followUsers()
    {
      return $this->belongsToMany('App\User', 'follow_users', 'followed_user_id', 'following_user_id');
    }

    // フォロー→フォロワー
    public function follows()
    {
      return $this->belongsToMany('App\User', 'follow_users', 'following_user_id', 'followed_user_id');
    }

}
