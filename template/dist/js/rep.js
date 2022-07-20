$(document).ready(function(){
	$(document).on('click', '.report', function(){
		var id=$(this).val();
		var mat=$('#matricula'+id).text();
	
		$('#reporte').modal('show');
		$('#ematricula').val(mat);
	});
});