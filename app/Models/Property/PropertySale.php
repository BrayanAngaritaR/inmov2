<?php

namespace App\Models\Property;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PropertySale extends Model
{
   use HasFactory;

   protected $fillable = [
      'area_according_to_vur', 'common_areas', 'percentage_of_fc_ownership', 
      'ownership_percentage_vur', 'geoeconomic_zone_value', 'for_sale_destination', 
      'for_sale_action', 'for_sale', 'for_sale_observations', 'property_id'
   ];

   //Coeficiente de titularidad del Municipio según VUR
   public function vur_coefficient(){
      return ($this->ownership_percentage_vur / 100);
   }

   //Coeficiente de titularidad del Municipio según FC
   public function fc_coefficient(){
      return ($this->percentage_of_fc_ownership / 100);
   }

   //Área efectiva RPH
   public function rph_effective_area(){
      return ($this->common_areas * $this->fc_coefficient());
   }

   //Área efectiva NPH
   public function nph_effective_area(){
      return ($this->common_areas * $this->vur_coefficient());
   }

   //Área de titularidad del municipio
   public function ownership_area(){
      return ($this->common_areas * $this->vur_coefficient() * $this->vur_coefficient());
   }

   //Valor de la titularidad del Municipio (% de propiedad) según zonas homogéneas
   public function ownership_value(){
      return ($this->ownership_area() * $this->geoeconomic_zone_value);
   }

   //Valor con el descuento 15% del FONPET
   public function fonpet_discount(){
      return ($this->ownership_value() * 0.85);
   }

   //Valor sin el descuento 3% comisión de CISA y 15% del FONPET
   public function cisa_discount(){
      return ($this->ownership_value() * 0.82);
   }


   //Porcentaje de titularidad del Municipio según RPH
   //$this->percentage_of_fc_ownership




   //area_privada_total * coeficiente_de_titularidad_fc.

   //Áreas comunes = common_areas
   //% titularidad (RPH)
   //% titularidad (VUR)
   //Valor m² zona geoconómica

}
