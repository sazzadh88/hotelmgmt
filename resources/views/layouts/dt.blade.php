<script src="{{ asset('js/jquery.dataTables.min.js') }}"></script>
<script>
	$(document).ready(function(){
    $('#allusers').DataTable( {
        "order": [[ 3, "desc" ]]
    } );
});
</script>