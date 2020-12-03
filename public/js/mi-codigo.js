$(document).ready(iniciar);

function iniciar() {
	$(".eliminar_producto").click(eliminarProducto);
}

function eliminarProducto() {
	var id = $(this).data("producto");
    var confirmar = confirm("¿Deseas eliminar el producto: " + id + "?");

    if (confirmar) {
        var fila = $(this).parents("tr");

        $.ajax({
            type: 'GET',
            dataType: 'json',
            data: "",
            url: 'http://localhost/Trabajo-Web-MVC/consultaproducto/eliminarProducto/' + id,
            success: function (resultado) {
                $("#mensaje").text(resultado.mensaje);
                fila.remove();
            }
        });
    }
}