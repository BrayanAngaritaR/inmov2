<?php

namespace App\Models\User;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InfoRequest extends Model
{
   use HasFactory;

   protected $fillable = ['user_id', 'property_id', 'info', 'type'];
}
