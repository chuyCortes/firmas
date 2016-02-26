$(document).ready(function() {
	$('a.delete').click(function(e) {
		var del_id = $(this).attr('id');
		
		e.preventDefault();
		var child= $(this).parent().parent();
		// var parent = $( ".father" ).parent( ".grandFather" );
		// var family= child.parent(".grandFather");
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
	
	 var ids = id;
	alert(ids);
	location.href="crear.php?"+ids;
}