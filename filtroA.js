$(buscar_datos());

function buscar_datos(consulta){
	$.ajax({
		url: 'mostrarsolicitudA.php' ,
		type: 'POST' ,
		dataType: 'html',
		data: {consulta: consulta},
	})
	.done(function(respuesta){
		$("#tablas_SoliG").html(respuesta);
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
    $.post("mostrarsolicitudA.php", {}, function(data, status) {
        $("#tablas_SoliG").html(data);

     
    });
}

// Mostrar encuestas al cargar la página
$(function() {
    mostrarUsuarios(); // Llamando a la función
});
