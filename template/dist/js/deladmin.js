$(document).ready(function(){
	$(document).on('click', '.deletebtn', function(){
		var id=$(this).val();
		var mat=$('#id'+id).text();
	
		$('#eliminar').modal('show');
		$('#edelete_id').val(mat);
	});
});