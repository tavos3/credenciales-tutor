$(document).ready(function(){
	$(document).on('click', '.edit', function(){
		var id=$(this).val();
		var i=$('#id'+id).text();
		var first=$('#nombre'+id).text();
		var last=$('#email'+id).text();
		var foto=$('#foto'+id).text();

        $('#edit').modal('show');
		$('#iid').val(i);
		$('#enombre').val(first);
		$('#eemail').val(last);
		$('#efoto').val(foto);
		
	});
});