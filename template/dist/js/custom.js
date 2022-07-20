$(document).ready(function(){
	$(document).on('click', '.edit', function(){
		var id=$(this).val();
		var i=$('#id'+id).text();
		var first=$('#nombre'+id).text();
		var mat=$('#matricula'+id).text();
		var last=$('#email'+id).text();
		var grado=$('#grado'+id).text();
		var grupo=$('#grupo'+id).text();
		var ciclo=$('#ciclo'+id).text();
		var nivel=$('#nivel'+id).text();
		var tutor1=$('#nombre1'+id).text();
		var tutor2=$('#nombre2'+id).text();
		var tutor3=$('#nombre3'+id).text();
		var foto=$('#foto'+id).text();
		var foto1=$('#foto1'+id).text();
		var foto2=$('#foto2'+id).text();
		var foto3=$('#foto3'+id).text();
	
		$('#edit').modal('show');
		$('#iid').val(i);
		$('#enombre').val(first);
		$('#ematricula').val(mat);
		$('#eemail').val(last);
		$('#egrado').val(grado);
		$('#egrupo').val(grupo);
		$('#eciclo').val(ciclo);
		$('#enivel').val(nivel);
		$('#etutor1').val(tutor1);
		$('#etutor2').val(tutor2);
		$('#etutor3').val(tutor3);
		$('#efoto').val(foto);
		$('#efoto1').val(foto1);
		$('#efoto2').val(foto2);
		$('#efoto3').val(foto3);
		
	});
});