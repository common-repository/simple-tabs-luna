$$$ = jQuery; //Sin conflictos
function SIMTAB_checkTabs(){
	var elementos = $$$(".simple-tabs-wp-plugin");
	var ancho = 100 / elementos.length;
	elementos.eq(0).addClass("active");
	var contenido = elementos.eq(0).attr("data-content");
	elementos.eq(elementos.length-1).after('<div class="contenido-simple-wp-tabs">'+contenido+'</div>').addClass("last");
	for(i=0;i<elementos.length;i++){
		elementos.eq(i).css("width",ancho+"%");
	}
}
$$$(document).on("click", ".simple-tabs-wp-plugin", function(){
	$$$(".simple-tabs-wp-plugin").removeClass("active");
	$$$(this).addClass("active");
	var contenido = $$$(this).attr("data-content");
	$$$(".contenido-simple-wp-tabs").html(contenido);
});