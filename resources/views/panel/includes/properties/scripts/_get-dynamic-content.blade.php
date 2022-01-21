<script type="text/javascript">
	//Obtener la lista de barrios según la comuna seleccionada
   $(document).ready(function() {
      $('#commune_id').on('change', function() {
         var commune_id = $(this).val();
         if(commune_id) {
            $.ajax({
               url: '/panel/districts/' + commune_id,
               type: "GET",
               data : {"_token":"{{ csrf_token() }}"},
               dataType: "json",
               success:function(data)
               {
                  if(data){
                     console.log(data);
                     $('#district_id').empty();
                     $('#district_id').append('<option hidden>Seleccionar opción</option>'); 
                     $.each(data, function(key, district){
                        $('select[name="district_id"]').append('<option value="'+ key +'">' + district.name+ '</option>');
                     });
                  } else {
                     $('#district_id').append('<option hidden>Ha ocurrido un error al importar la información</option>');
                  }
               }
             });
         }else{
            $('#district_id').empty();
         }
      });
   });

   //Obtener la lista de acciones según la oportunidad seleccionada
   $(document).ready(function() {
      $('#opportunity_id').on('change', function() {
         var opportunity_id = $(this).val();
         if(opportunity_id) {
            $.ajax({
               url: '/panel/actions/' + opportunity_id,
               type: "GET",
               data : {"_token":"{{ csrf_token() }}"},
               dataType: "json",
               success:function(data)
               {
                  if(data){
                     console.log(data);
                     $('#action_id').empty();
                     $('#action_id').append('<option hidden>Seleccionar opción</option>'); 
                     $.each(data, function(key, action){
                        $('select[name="action_id"]').append('<option value="'+ key +'">' + action.title+ '</option>');
                     });
                  } else {
                     $('#action_id').append('<option hidden>Ha ocurrido un error al importar la información</option>');
                  }
               }
             });
         }else{
            $('#action_id').empty();
         }
      });
   });
</script>