<?php

namespace App\Models\Property;

use App\Models\Property\Action;
use App\Models\Property\Commune;
use App\Models\Property\Destination;
use App\Models\Property\District;
use App\Models\Property\FloorClassification;
use App\Models\Property\FloorUse;
use App\Models\Property\Image;
use App\Models\Property\Inst_3nivel;
use App\Models\Property\Macroproject;
use App\Models\Property\Opportunity;
use App\Models\Property\Polygon;
use App\Models\Property\PropertyType;
use App\Models\Property\Secretaryship;
use App\Models\Property\ThirdLevelInstrument;
use App\Models\Property\Treatment;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Contracts\Auditable;

class Property extends Model implements Auditable
{
   use \OwenIt\Auditing\Auditable;
   use HasFactory;

   protected $fillable = [
      //Identificación
      'secure_code',
      'code',
      'link',
      'plate',
      'repeated',
      'repeated_concept',
      'discharged',
      'secretaryship_id',
      'property_id',
      'fixed_asset_code_id',
      'fixed_asset',
      'sss_description',
      'commercial_appraisal',

      //Información catastral
      'plate_number',
      'property_deed',
      'units',
      'writing_date',
      'notary_id',
      'which_notary_container',
      'cbml',
      'commune_id',
      'district_id',
      'cadastral_address',
      'cadastral_area',
      'construction_area',
      'property_valuation',
      'sss_address',
      'urbanization_or_neighborhood',
      'is_rph',

      //Información normativa
      'latitude',
      'longitude',
      'map_latitude',
      'map_longitude',
      'floor_classification_id',
      'macroproject_id',
      'treatment_id',
      'polygon_id',
      'floor_use_id',
      'third_level_instrument_id',
      'threat_torrential_avenues_id',
      'threat_floods_id',
      'threat_mass_movements_id',
      'other_protection_categories_id',

      //Información documental
      'photography',
      'cadastral_file',
      'vur',
      'title_study',
      'georeferenced',
      'scriptures',
      'loan',
      'loan_start_date',
      'loan_end_date',
      'entity_to_which_is_assigned',
      'loan_information',
      'expedient',
      'building_permit',
      'resolution',
      'bic',
      'bic_name',
      'bic_group',
      'bic_order',
      'conservation_level',
      'bic_act',

      //Análisis
      'status',
      'destination_id',
      'opportunity_id',
      'prioritization_level',
      'action_id',
      'project_managed',
      'observations',
      'date_of_analysis_by_sss',
      'revised',
      'available',
      'responsable_id',
   ];

   public function getRouteKeyName()
   {
      return 'code';
   }

   //Relaciones
   public function destination()
   {
      return $this->belongsTo(Destination::class);
   }

   public function propertyType()
   {
      return $this->belongsTo(PropertyType::class, 'property_type');
   }

   public function district()
   {
      return $this->belongsTo(District::class);
   }

   public function commune()
   {
      return $this->belongsTo(Commune::class);
   }

   public function images()
   {
      return $this->hasMany(Image::class);
   }

   public function secretaryship()
   {
      return $this->belongsTo(Secretaryship::class);
   }

   public function floorClassification()
   {
      return $this->belongsTo(FloorClassification::class, 'floor_classification_id');
   }

   public function macroproject()
   {
      return $this->belongsTo(Macroproject::class);
   }

   public function treatment()
   {
      return $this->belongsTo(Treatment::class);
   }

   public function polygon()
   {
      return $this->belongsTo(Polygon::class);
   }

   public function floorUse()
   {
      return $this->belongsTo(FloorUse::class);
   }

   public function thirdLevelInstrument()
   {
      return $this->belongsTo(ThirdLevelInstrument::class, 'third_level_instrument_id');
   }

   public function opportunity()
   {
      return $this->belongsTo(Opportunity::class);
   }

   public function action()
   {
      return $this->belongsTo(Action::class);
   }

   //$post = Post::with('audits')->first();  //Get the first post
}
