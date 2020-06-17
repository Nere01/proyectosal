$(buscar_datos());

function buscar_datos(consulta){
	$.ajax({
		url: 'mostrarsolicitudGE.php' ,
		type: 'POST' ,
		dataType: 'html',
		data: {consulta: consulta},
	})
	.done(function(respuesta){
		$("#tablas_Soli").html(respuesta);
	})
	.fail(function(){
		console.log("error");
	});
}


$(document).on('click','#Filtro', function(){
	var valor = $(this).val();
	if (valor != "") {
		buscar_datos(valor);
	}else{
		buscar_datos();
	}
});

function mostrarUsuarios() {
    // Mostrar encuestas con el método ajax POST
    $.post("mostrarsolicitudGE.php", {}, function(data, status) {
        $("#tablas_Soli").html(data);

     
    });
}

// Mostrar encuestas al cargar la página
$(function() {
    mostrarUsuarios(); // Llamando a la función
});