<?php

namespace App\Models\Property;

use App\Models\Property\Action;
use App\Models\Property\Commune;
use App\Models\Property\Destination;
use App\Models\Property\District;
use App\Models\Property\FloorClassification;
use App\Models\Property\FloorUse;
use App\Models\Property\Inst_3nivel;
use App\Models\Property\Macroproject;
use App\Models\Property\Opportunity;
use App\Models\Property\Polygon;
use App\Models\Property\PropertyType;
use App\Models\Property\Secretaryship;
use App\Models\Property\Treatment;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

//Audit package
use OwenIt\Auditing\Contracts\Auditable;

class Property extends Model implements Auditable
{
	use \OwenIt\Auditing\Auditable;
	use HasFactory;

	protected $fillable = [
		'secure_code',
		'code',
		'link',
		'plate',
		'repeated',
		'discharged',
		'repeated_concept',
		'secretaryship',
		'property_id',
		'fixed_asset_code_id',
		'fixed_asset',
		'commercial_appraisal',
		'sss_address',
		'urbanization_or_neighborhood',
		'sss_description',
		'plate_number',
		'property_deed',
		'units',
		'writing_date',
		'notary_id',
		'cbml',
		'commune_id',
		'district_id',
		'cadastral_address',
		'cadastral_area',
		'construction_area',
		'property_valuation',
		'is_rph',

		'latitude',
		'longitude',

		'map_latitude',
		'map_longitude',
		

		//Información documental
		'photography',
		'loan',
		'loan_start_date',
		'loan_end_date',
		'entity_id',
		'loan_information',
		'cadastral_file',
		'vur',
		'title_study',
		'georeferenced',
		'scriptures',
		'expedient',
		'entity_to_which_is_assigned',
		'building_permit',
		'bic',
		'bic_name',
		'bic_group',
		'bic_order',
		'conservation_level',
		'bic_act',
		'resolution',

		//Análisis
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
		'status'
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

   public function secretaryship()
   {
   	return $this->belongsTo(Secretaryship::class);
   }

   public function floorClassification()
   {
   	return $this->belongsTo(FloorClassification::class, 'floor_clasification_id');
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

   public function inst3nivel()
   {
   	return $this->belongsTo(Inst_3nivel::class, 'inst_3nivel_id');
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
