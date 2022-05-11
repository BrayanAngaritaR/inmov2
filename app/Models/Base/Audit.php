<?php

namespace App\Models\Base;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Audit extends Model
{
   use HasFactory;

   protected $table = 'audits';

   public function user(){
      return $this->belongsTo(User::class);
   }

   public function auditable()
   {
      return $this->morphTo($this->auditable_type);
   }
}
