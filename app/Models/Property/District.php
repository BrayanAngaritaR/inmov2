<?php

namespace App\Models\Property;

use App\Models\Property\Property;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class District extends Model
{
   use HasFactory;

   public function properties()
   {
      return $this->hasMany(Property::class);
   }
}
