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
         $table->date('writing_date'); //Fecha de escritura
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
         
         //Tarea pendiente: Ventana de oportunidad 

         $table->integer('regulatory_use')->nullable(); //Aprovechamiento normativo - Cálculo
         $table->integer('use_of_space')->nullable(); //Aprovechamiento cabida - Cálculo
         $table->integer('use_gap')->nullable(); //Aprovechamiento GAP - Cálculo (Es una resta entre cabina - Normativo)

         $table->mediumText('observations')->nullable(); //Observaciones - Concepto

         //Venta
         
         #######################################
         #  Información de Catastro   
         #######################################

         //Dejar en blanco por ahora

        // $table->string('cbml_not_found')->nullable(); //CBML no encontrados
        // //??? Dirección es la misma  que la dirección de Información SSS  
         
        // $table->double('cadastral_area')->nullable(); //Área catastral (lote)
        // $table->double('construction_area')->nullable(); //Área construcción
        // $table->double('use')->nullable(); //Uso
        // $table->integer('type')->nullable(); //Tipo ??? A qué corresponde? Se relaciona con algo
         
        // $table->enum('sector', ['Persona natural', 'Sector público', 'Sector privado', 'No aplica'])->nullable(); //Sector

        // $table->double('appraisal_range')->nullable(); //Rango Avalúo
         
        // $table->enum('ph_range', ['RPH', 'NPH', 'No encontrado'])->nullable(); //Rango PH

        // $table->integer('desenglobe_percentage')->nullable(); //Porcentaje Desenglobe  

        //#######################################
        // #  Información de grupo TX 
        // #######################################

        // $table->boolean('fiscal_plate')->default(false); //Matrículas que se encuentran en la base de datos de SAP bienes fiscales

        // $table->boolean('public_plate')->default(false); //Matrículas que se encuentran en la base de datos de SAP uso público

        // #######################################
        // #  Información de UABI
        // #######################################

        // $table->boolean('analysis_in_property_type')->default(false); //Análisis del tipo de bien 
         
        // $table->boolean('analyzed')->default(false); //Analizada

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

         #######################################
         #  Campos adicionales en caso de venta
         #######################################

         //

         //Área del predio según VUR
         $table->double('area_according_to_vur')->default(0); 

         //Áreas comunes (estraida de la ficha catastral)
         $table->double('common_areas')->default(0); 
         
         //Área de Lote Catastral -> Se trae desde el otro campo cadastral_area

         //Campos calculados automáticamente
         $table->double('area_de_lote_catastral')->default(0); 

         //Área Construccion -> Se trae desde el otro campo construction_area 
         $table->double('area_de_construccion')->default(0);  
         
         //Se ingresa manualmente
         

         //Campo automático
         //$table->double('area_privada_total')->default(0);   //Área construida menos áreas comunes extraida de Ficha Catastral
         $table->double('sell_property_valuation')->default(0);   //Valor Ficha Catrastal (avalúo total) - Se trae desde el campo property_valuation

         //$table->boolean('rph'); //RPH - Reglamento de Propiedad Horizontal

         //Se ingresa manualmente
         $table->double('percentage_of_fc_ownership')->default(0);   //Porcentaje de titularidad del Municipio según el RPH extraido de Ficha Catastral ( sobre m2 Área del lote)
         $table->double('ownership_percentage_vur')->default(0);  //Porcentaje de titularidad del Municipio según VUR

         //Automático - (porcentaje_de_titularidad/100) 
         // $table->double('coefficient_of_vur'); //Coeficiente de titularidad del Municipio según VUR
         // //Automático - (porcentaje_de_titularidad/100) (Debe dar menor o igual a 1 y > 0)
         // $table->double('coefficient_of_fc'); //Coeficiente de titularidad del Municipio según el RPH extraido de Ficha Catastral ( sobre m2 Área del lote) (Debe dar menor o igual a 1 y > 0)

         //##########################
         //Fórmulas en el modelo
         //##########################

         
         //Área efectiva RPH = area_privada_total * coeficiente_de_titularidad_fc.
         //Área efectiva NPH (No propiedad horizontal) = area_privada_total * coeficiente_de_titularidad_vur.

         //Área de titularidad del municipio = (area_privada_total * coeficiente_de_titularidad_fc * coeficiente_de_titularidad_vur). 


         //Valor %Catastral = property_valuation *  porcentaje_de_titularidad_fc.
         //Vl M2 Catastral = property_valuation / area_privada_total.
         $table->double('geoeconomic_zone_value')->nullable(); //Valor m² zona geoconómica
         //Valor total por zonas homogéneas = valor_zona_geoeconomica * area_privada_total.

         //Valor de la titularidad del Municipio (% de propiedad) según zonas homogéneas = Área de titularidad del municipio * valor_zona_geoeconomica.
         
         //Valor con el descuento 15% del FONPET = Valor de la titularidad del Municipio (% de propiedad) según zonas homogéneas * 0.85.

         //Valor sin el descuento 3% comisiòn de CISA y 15% del FONPET = Valor de la titularidad del Municipio (% de propiedad) según zonas homogéneas * 0.82.

         //Acción análisis de datos Agencia APP
         
         //Destinación (apartamento, cuarto util, garaje, local, sala multiple, oficina)

         //Para vender //Si o No
         //Observaciones

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
