/*
	obtiene funciones para pasar variables & borrar usuarios
	-ccortes- 
*/
// $(document).ready(function() {
// 	$('a.delete').click(function(e) {
// 		e.preventDefault();
// 		var del_id = $(this).attr('id');
// 		var child= $(this).parent().parent();
		
		
		
// 		if(confirm('¿Esta seguro que desea eliminarlo?'))
// 		{

// 			// $.ajax({
// 			// 	url: 'remove.php',
// 			// 	type: 'post',
// 			// 	data: data
// 			// 	// success: function(result) {
// 			// 	// 		if(result == 1)
// 			// 	// 	    {                    
// 			// 	// 			child.animate({ backgroundColor: "#fbc7c7" }, "fast").animate({ opacity: "hide" }, "slow");
// 			// 	// 	    }
// 			// 	// 	    else
// 			// 	// 	    {
// 			// 	// 	        alert("Data not found");
// 			// 	// 	    }
// 			// })
// 			// .done(function(){
// 			// 	console.log("success");
// 			// 	child.animate({ backgroundColor: "#fbc7c7" }, "fast").animate({ opacity: "hide" }, "slow");
// 			// })
// 			// .fail(function(){
// 			// 	console.log("fail");
// 			// 	alert("Data not found");
// 			// })
			


// 		} //end if
// 	});
	
// });


$(document).ready(function() {
	$('a.delete').click(function(e) {
		e.preventDefault();
		var del_id = $(this).attr('id');
		var child= $(this).parent().parent();
		var userD ="userdel="+del_id;
		
		
		if(confirm('¿Está seguro que desea eliminarlo?'))
		{
			child.animate({ backgroundColor: "#fbc7c7" }, "fast").animate({ opacity: "hide" }, "slow");
			location.href="remove.php?"+userD;
		} 
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

function modificarUser(id){
	var accion ="accion=modificar&";
	var user = "usuario="+id;
	location.href="user.php?"+accion+user;
}

function eliminarUser(id){
	var id = "id="+id;
	location.href="remove.php?"+id;
}