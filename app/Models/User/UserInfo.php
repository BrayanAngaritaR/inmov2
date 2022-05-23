<?php

namespace App\Models\User;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserInfo extends Model
{
   use HasFactory;

   protected $fillable = ['phone', 'dependency_id', 'position', 'user_id'];
}
