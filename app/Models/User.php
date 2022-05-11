<?php

namespace App\Models;

use App\Models\Base\Audit;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use OwenIt\Auditing\Contracts\Auditable;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable implements Auditable
{
   use HasFactory, Notifiable, SoftDeletes;
   use \OwenIt\Auditing\Auditable;
   use HasRoles;

   /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
   protected $fillable = ['name', 'email', 'password'];

   /**
   * The attributes that should be hidden for arrays.
   *
   * @var array
   */
   protected $hidden = ['password', 'remember_token'];

   /**
   * The attributes that should be cast to native types.
   *
   * @var array
   */
   protected $casts = [
      'email_verified_at' => 'datetime',
   ];

   protected $dates = ['deleted_at'];

   public function auditables(){
      return $this->hasMany(Audit::class);
   }
}
