<?php

namespace App\Models\Base;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class File extends Model
{
   use HasFactory;

   protected $fillable = ['url'];

   public function fileable(): \Illuminate\Database\Eloquent\Relations\MorphTo
   {
      return $this->morphTo();
   }
}
