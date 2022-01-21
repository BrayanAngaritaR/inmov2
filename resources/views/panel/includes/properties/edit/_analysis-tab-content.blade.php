<div class="tab-pane" id="analysisInfo">

   <span class="preview-title-lg overline-title mt-5 mb-4">Análisis </span>

   <div class="row gy-4 align-center">
      <div class="col-sm-12 col-lg-4">
         <div class="form-group">
            <label class="form-label" for="destination_id">
               Destinación actual
            </label>
            <select class="form-control" name="destination_id" id="destination_id">
               @foreach($destinations as $destination)
                  <option 
                     @if($property->destination_id == $destination->id) 
                     selected 
                     @endif 
                     value="{{ $destination->id }}">
                     {{ $destination->title }}
                  </option>
               @endforeach
            </select>
         </div>
      </div>

      <div class="col-sm-12 col-lg-4">
         <div class="form-group">
            <label class="form-label" for="opportunity_id">
               Oportunidad
            </label>
            <select class="form-control" name="opportunity_id" id="opportunity_id">
               @foreach($opportunities as $opportunity)
                  <option 
                     @if($property->opportunity_id == $opportunity->id) 
                     selected 
                     @endif 
                     value="{{ $opportunity->id }}">
                     {{ $opportunity->title }}
                  </option>
               @endforeach
            </select>
         </div>
      </div>

      <div class="col-sm-12 col-lg-4">
         <div class="form-group">
            <label class="form-label" for="action_id">
               Acción
            </label>
            <select class="form-control" name="action_id" id="action_id">
               <option value="{{ $property->action_id }}">{{ $property->action->title }}</option>
            </select>
         </div>
      </div>

      <div class="col-sm-12 col-lg-4">
         <div class="form-group">
            <label class="form-label" for="prioritization_level">
               Nivel de priorización
            </label>
            <select class="form-control" name="prioritization_level" id="prioritization_level">
               <option @if($property->priorization_level == 'Alta') selected @endif value="Alta">Alta</option>
               <option @if($property->priorization_level == 'Media') selected @endif value="Media">Media</option>
               <option @if($property->priorization_level == 'Baja') selected @endif value="Baja">Baja</option>
            </select>
         </div>
      </div>

      <div class="col-sm-12 col-lg-8">
         <div class="form-group">
            <label class="form-label" for="project_managed">Proyecto gestionado</label>
            <input type="text" name="project_managed" placeholder="Ej: Estación de Bomberos Libertadores" class="form-control" value="{{ $property->project_managed }}" id="project_managed" />
         </div>
      </div>

      <div class="col-sm-12">
         <div class="form-group">
            <label class="form-label" for="observations">Observaciones</label>
            <textarea name="observations" class="form-control" id="observations">{{ $property->observations }}</textarea>
         </div>
      </div>
   </div>

   <span class="preview-title-lg overline-title mt-5 mb-4">Disponibilidad </span>

   <div class="row gy-4 align-center">
      <div class="col-sm-12 col-lg-6">
         <div class="form-group">
            <label class="form-label" for="date_of_analysis_by_sss">
               Fecha de análisis por Secretaría de Suministros y Servicios
            </label>
            <input type="date" value="{{ $property->date_of_analysis_by_sss }}" name="date_of_analysis_by_sss" class="form-control" id="date_of_analysis_by_sss" />
         </div>
      </div>

      <div class="col-sm-12 col-lg-6">
         <div class="form-group">
            <label class="form-label" for="date_of_analysis_by_sss">
               Revisada
            </label>
            <select class="form-control" name="revised" id="revised">
               <option 
                  @if($property->revised == 'Falta') selected 
                  @endif 
                  value="Falta">
                     Falta
               </option>

               <option 
                  @if($property->revised == 'Lista') selected 
                  @endif 
                  value="Lista">
                     Lista
               </option>

               <option 
                  @if($property->revised == 'No disponible') selected 
                  @endif 
                  value="No disponible">
                     No disponible
               </option>
            </select>
         </div>
      </div>

      <div class="col-sm-12 col-lg-4">
         <div class="form-group">
            <label class="form-label" for="available">
               Disponible para analizar
            </label>
            <select class="form-control" name="available" id="available">
               <option 
                  @if($property->available == 'Asignada') selected 
                  @endif 
                  value="Asignada">
                     Asignada
               </option>

               <option 
                  @if($property->available == 'Por asignar') selected 
                  @endif 
                  value="Por asignar">
                     Por asignar
               </option>

               <option 
                  @if($property->available == 'Disponible') selected 
                  @endif 
                  value="Disponible">
                     Disponible
               </option>

               <option 
                  @if($property->available == 'No disponible') selected 
                  @endif 
                  value="No disponible">
                     No disponible
               </option>
            </select>
         </div>
      </div>

      <div class="col-sm-12 col-lg-4">
         <div class="form-group">
            <label class="form-label" for="responsable_id">
               Responsable
            </label>
            <select class="form-control" name="responsable_id" id="responsable_id">
               @foreach($users as $user)
               <option 
                  @if($property->user_id == $user->id) 
                  selected 
                  @endif 
                  value="{{ $user->id }}">
                  {{ $user->name }}
               </option>
               @endforeach
            </select>
         </div>
      </div>

      <div class="col-sm-12 col-lg-4">
         <div class="form-group">
            <label class="form-label" for="publish_now">
               ¿Publicar este inmueble?
            </label>
            <select class="form-control" name="publish_now" id="publish_now">
               <option 
                  @if($property->status == 'Pending') selected 
                  @endif 
                  value="No">
                     No
               </option>

               <option 
                  @if($property->status == 'Published') selected 
                  @endif 
                  value="Sí">
                     Sí
               </option>
            </select>
         </div>
      </div>
   </div>

   <div class="col-sm-12 text-right mt-5 mr-0">
      <div class="form-group">
         <button type="button" onclick="sendAnalysisInfo();" class="btn btn-outline-dark">
            Terminar
         </button>
      </div>
   </div>
</div>