<script src="{{ asset('templates/agencia-app/js/jquery.min.js' )}}"></script>
<script src="{{ asset('templates/agencia-app/js/plugins.js' )}}"></script>
<script src="{{ asset('templates/agencia-app/js/scripts.js' )}}"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBuZG3kop9LguoZtwoDdypGB23EnY5f9p4&libraries=places"></script>
<script src="{{ asset('templates/agencia-app/js/map-plugins.js' )}}"></script>

<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

@if(Session::has('info'))
<script type="text/javascript">
   Swal.fire({
      position: 'top-end',
      icon: '{{ Session::get('info')[0] }}',
      title: '{{ Session::get('info')[1] }}',
      showConfirmButton: false,
      timer: 2000
   });
</script>
@endif

@stack('scripts')