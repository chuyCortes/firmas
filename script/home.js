$(document).ready(function() {
	$('a.delete').click(function(e) {
		var del_id = $(this).attr('id');
		
		e.preventDefault();
		var child= $(this).parent().parent();
		if(confirm('¿Esta seguro que desea eliminarlo?'))
		{
			$.ajax({
				type: 'get',
				url: 'crear.php',
				data:{del_id : del_id},
				beforeSend: function() {
					
				},
				success: function() {
						child.slideUp(300,function() {
						child.remove();
					});

				}
			});
		} //end if
	});
});

function funcionphp(id){
	var ids = "user="+id;
	location.href="crear.php?"+ids;
}

function agregarUser(){
	var accion ="accion=agregar";
	location.href="user.php?"+accion;
}

function modificarUser(){
	var accion ="accion=modificar";
	location.href="user.php?"+accion;
}