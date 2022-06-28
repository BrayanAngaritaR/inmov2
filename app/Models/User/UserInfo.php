<?php

namespace App\Models\User;

use App\Models\User\Dependency;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Contracts\Auditable;

class UserInfo extends Model implements Auditable
{
   use HasFactory;
   use \OwenIt\Auditing\Auditable;

   protected $fillable = ['phone', 'dependency_id', 'position', 'user_id'];

   public function dependency(){
      return $this->belongsTo(Dependency::class);
   }
}
