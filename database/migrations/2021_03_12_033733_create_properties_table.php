<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePropertiesTable extends Migration
{
   /**
   * Run the migrations.
   *
   * @return void
   */
   public function up()
   {
      Schema::create('properties', function (Blueprint $table) {
         $table->id();
         $table->uuid('secure_code');
         #######################
         #  Identificación
         #######################

         //ID
         $table->string('code')->unique(); 
         //Link  
         $table->string('link'); 
         //Matrícula - (Es de tipo texto porque puede contener N de Norte o S de Sur)
         $table->string('plate'); 

         #######################
         #  Condición
         #######################

         //Puede tener varios activos fijos
         //En caso de que el valor de "repeated" sea "Repetida", se habilita la opción del concepto. Ej: Tiene la misma matrícula que el ID X
         $table->enum('repeated', [
            'Matrícula única con varios activos fijos', 
            'Matrícula única con un activo fijo',
            'Repetida'
         ]);
         
         //Concepto de por qué está repetida  
         $table->string('repeated_concept')->nullable(); 

         //Matrículas dadas de baja en SAP, sólo queda el registro histórico, desaparecen como matrículas 
         $table->enum('discharged', [
            'Dada de baja en SAP', 
            'No aplica'
         ]); 

         //Secretaría a la que se encuentra adscrito el bien inmueble
         $table->unsignedBigInteger('secretaryship_id'); 
         $table->foreign('secretaryship_id')->references('id')->on('secretaryships');

         //Bien fiscal o de uso público
         $table->unsignedBigInteger('property_id'); 
         $table->foreign('property_id')->references('id')->on('property_types');

         #####################################################################
         #  Información de Secretaría de Suministros y Servicios             
         #####################################################################

         //Código activo fijo - Va relacionado con una secretaría y una secretaría puede tener varios códigos. Ej: OP, BF, SA... en "secretaryship_asset_codes"


         $table->unsignedBigInteger('fixed_asset_code_id');
         $table->foreign('fixed_asset_code_id')->references('id')->on('secretaryship_asset_codes');

         //Tarea pendiente: Activo fijo que le corresponde a cada entidad

         //Tarea pendiente (Brayan Angarita): Agregar varios activos fijos para un bien
         $table->string('fixed_asset'); //Pueden ser varios activos fijos - Código (Ej. 500L) 500L, 501, 502

         $table->mediumText('sss_description'); //Descripción corta (Junta de acción comunal, cancha, Biblioteca Santo Domingo, Cárcel, ...)

         $table->double('commercial_appraisal')->nullable(); //Valor Libros (avalúo comercial) para SSS

         $table->string('sss_address'); //Denominación (Dirección) por parte de SSS
         $table->string('urbanization_or_neighborhood'); //Ubanización/Barrio

         #############################
         #  Información jurídica             
         #############################

         $table->string('plate_number'); //No. Escritura
         $table->double('property_deed'); //Superferficie Jurídica (Escritura)
         $table->string('units')->default('m2'); //Unidades (M2, Varas, Pies2)
         $table->date('writing_date')->nullable(); //Fecha de escritura
         $table->unsignedBigInteger('notary_id')->nullable(); //Notaría municipal 
         $table->string('which_notary_container')->nullable(); //Qué notaría

         ###################################
         #  Información catastral             
         ###################################

         //Filtros: Usuario viajero: Desde Acción hasta el barrio
         //Los otros filtros para el usuario avanzado

         //CBML (Comuna (2), Barrio (3), Manzana (4), Lote (2))
         $table->string('cbml')->nullable(); 

         //Comuna, corregimiento y nombre de comuna
         $table->unsignedBigInteger('commune_id')->nullable(); 
         $table->foreign('commune_id')->references('id')->on('communes'); 

         //Barrio
         $table->unsignedBigInteger('district_id')->nullable(); 
         $table->foreign('district_id')->references('id')->on('districts');

         //Dirección de catastro
         $table->string('cadastral_address')->nullable(); 

         //Área Catastral (lote)
         $table->double('cadastral_area')->default(0); 

         //Área de construcción
         $table->double('construction_area')->default(0); 

         //Avalúo catastral
         $table->double('property_valuation')->default(0); 

         //RPH - Reglamento de Propiedad Horizontal
         $table->boolean('is_rph')->default(false); 

         #######################
         #  Coordenadas            
         #######################

         $table->string('latitude')->nullable();
         $table->string('longitude')->nullable();

         $table->string('map_latitude')->nullable();
         $table->string('map_longitude')->nullable();

         #######################################
         #  Información normativa            
         #######################################

         //Clasificación del suelo
         $table->unsignedBigInteger('floor_classification_id')->nullable(); 
         $table->foreign('floor_classification_id')->references('id')->on('floor_classifications');

         //Macroproyecto
         $table->unsignedBigInteger('macroproject_id')->nullable(); 
         $table->foreign('macroproject_id')->references('id')->on('macroprojects');

         //Tratamiento
         $table->unsignedBigInteger('treatment_id')->nullable(); 
         $table->foreign('treatment_id')->references('id')->on('treatments');

         //Polígono
         $table->unsignedBigInteger('polygon_id')->nullable(); 
         $table->foreign('polygon_id')->references('id')->on('polygons');

         //Uso del suelo
         $table->unsignedBigInteger('floor_use_id')->nullable(); 
         $table->foreign('floor_use_id')->references('id')->on('floor_uses');

         //Instrumento de tercer Nivel
         $table->unsignedBigInteger('third_level_instrument_id')->nullable(); 
         $table->foreign('third_level_instrument_id')->references('id')->on('third_level_instruments');

         #######################################
         #  Suelo de protección        
         #######################################

         //Amenaza avenidas torrenciales
         $table->unsignedBigInteger('threat_torrential_avenues_id')->nullable();  
         $table->foreign('threat_torrential_avenues_id')->references('id')->on('threats');

         //Amenaza inundaciones
         $table->unsignedBigInteger('threat_floods_id')->nullable();  
         $table->foreign('threat_floods_id')->references('id')->on('threats');

         //Amenaza movimientos en masa
         $table->unsignedBigInteger('threat_mass_movements_id')->nullable();  
         $table->foreign('threat_mass_movements_id')->references('id')->on('threats');

         //Otras categorías protección
         $table->unsignedBigInteger('other_protection_categories_id')->nullable(); 
         $table->foreign('other_protection_categories_id')->references('id')->on('threats');

         #######################################
         #  Información documental      
         #######################################

         //Fotografía
         $table->boolean('photography')->default(false); 

         //Ficha Catastral  
         $table->boolean('cadastral_file')->default(false);   

         //VUR 
         $table->boolean('vur')->default(false); 

         //Estudio de títulos
         $table->boolean('title_study')->default(false); 

         //Georeferenciado en ARCGIS
         $table->boolean('georeferenced')->default(false); 

         //Escrituras
         $table->boolean('scriptures')->default(false); 

         //Expediente
         $table->boolean('expedient')->default(false); 

         //Comodato
         $table->boolean('loan')->default(false); 

         //Información del comodato
         $table->date('loan_start_date')->nullable(); 
         $table->date('loan_end_date')->nullable(); 
         $table->mediumText('loan_information')->nullable(); 
         //Entidad a la que se asignó  
         $table->string('entity_to_which_is_assigned')->nullable(); 

         //Licencia de construcción  
         $table->boolean('building_permit')->default(false); 
         //Resolución  - Depende de SI tiene licencia de construcción
         $table->string('resolution')->nullable(); 

         //Bien de Interés Cultural
         $table->boolean('bic')->default(false);  

         //¿Tiene avalúo?
         $table->boolean('has_appraise')->default(false);  
         
         //Nombre del BIC
         $table->string('bic_name')->nullable(); 

         //Grupo del BIC
         $table->enum('bic_group', [
            'Arquitectónico', 
            'Urbano'
         ])->nullable();

         //Orden del BIC  
         $table->enum('bic_order', [
            'Bien de Interés Cultural Nacional', 
            'Bien de Interés Cultural Municipal'
         ])->nullable();  

         //Nivel de conservación del BIC
         $table->enum('conservation_level', [
            'Integral', 
            'Arquitectónico 1',
            'Arquitectónico 2'
         ])->nullable();  

         //Acto administrativo de declaratoria del BIC
         $table->string('bic_act')->nullable();

         #######################################
         #  Análisis   
         #######################################

         //Destinación actual
         $table->unsignedBigInteger('destination_id')->nullable();
         $table->foreign('destination_id')->references('id')->on('destinations');

         //Oportunidad
         $table->unsignedBigInteger('opportunity_id')->nullable();
         $table->foreign('opportunity_id')->references('id')->on('opportunities');


         //Dependiendo del tipo de oportunidad seleccionado, se activará el tipo de acción (Comercial, Residencial...) y además el nivel de priorización. Y basado en lo que ponga, me va a mostrar el ID de la oportunidad. Ej. A-001 (Alta + - + ID del bien)

         //Nivel de priorización
         $table->enum('prioritization_level', ['Alta', 'Media', 'Baja'])->nullable(); 

         //Acción
         $table->unsignedBigInteger('action_id')->nullable(); 
         $table->foreign('action_id')->references('id')->on('actions');

         //Proyecto gestionado es el nombre del proyecto que se gestionó. Ej: Estación de Bomberos Libertadores
         $table->string('project_managed')->nullable(); 

         //ID de oportunidad
         $table->string('opportunity_id_description')->nullable(); 
         
         //Tarea pendiente: Ventana de oportunidad 

         $table->integer('regulatory_use')->nullable(); //Aprovechamiento normativo - Cálculo
         $table->integer('use_of_space')->nullable(); //Aprovechamiento cabida - Cálculo
         $table->integer('use_gap')->nullable(); //Aprovechamiento GAP - Cálculo (Es una resta entre cabina - Normativo)

         $table->mediumText('observations')->nullable(); //Observaciones - Concepto


         #######################################
         #  Disponibilidad
         #######################################

         //Fecha de análisis por Secretaría de Suministros y Servicios
         $table->date('date_of_analysis_by_sss')->nullable(); 

         //Revisada
         $table->enum('revised', ['Falta', 'Lista', 'No disponible'])->default('Falta'); 

         //Disponible para analizar
         $table->enum('available', ['Asignada', 'Por asignar', 'Disponible', 'No disponible'])->default('Por asignar'); 
         
         $table->unsignedBigInteger('responsable_id')->nullable();//Responsable
         $table->foreign('responsable_id')->references('id')->on('users');

         $table->string('status')->default('Pending');
         $table->timestamps();
         $table->softDeletes();
      });
   }

   /**
   * Reverse the migrations.
   *
   * @return void
   */
   public function down()
   {
      Schema::dropIfExists('properties');
   }
}
