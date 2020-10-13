var tablaCategorias = $("#tablaCategoriasEn").DataTable({
	
	processing: true,
  	serverSide: true,

  	ajax:{
  		url: "http://localhost:8000/ks-admin/blog/categorias_en"		
  	},

  	"columnDefs":[{
  		"searchable": true,
  		"orderable": true,
  		"targets": 0
  	}],

  	"order":[[0, "desc"]],

  	columns: [
	  	{
	    	data: 'id_categoria',
	    	name: 'id_categoria'
	  	},
	  	{
	  		data: 'titulo_en',
	    	name: 'titulo_en'
	  	},
	  	{
	  		data: 'descripcion_en',
	    	name: 'descripcion_en'
	  	},
	  	{
	  		data: 'p_claves_en',
	    	name: 'p_claves_en'
	  	},
	  	{
	  		data: 'ruta_categoria',
	    	name: 'ruta_categoria',
	    	render: function(data, type, full, meta){

	    		return '<p class="validarRuta">'+data+'</p>'
	    		
	    	}
	  	},
	  	{
	  		data: 'img_categoria',
	    	name: 'img_categoria',
	    	render: function(data, type, full, meta){

	    		return '<img src="http://localhost:8000/'+data+'" class="img-fluid">'
	    		
	    	},

	    	orderable: false
	  	},
	  	{
	  		data: 'acciones',
	    	name: 'acciones'
	  	}

	],
 	"language": {

	    "sProcessing": "Procesando...",
	    "sLengthMenu": "Mostrar _MENU_ registros",
	    "sZeroRecords": "No se encontraron resultados",
	    "sEmptyTable": "Ningún dato disponible en esta tabla",
	    "sInfo": "Mostrando registros del _START_ al _END_",
	    "sInfoEmpty": "Mostrando registros del 0 al 0 de un total de 0",
	    "sInfoFiltered": "(filtrado de un total de _MAX_ registros)",
	    "sInfoPostFix": "",
	    "sSearch": "Buscar:",
	    "sUrl": "",
	    "sInfoThousands": ",",
	    "sLoadingRecords": "Cargando...",
	    "oPaginate": {
	      "sFirst": "Primero",
	      "sLast": "Último",
	      "sNext": "Siguiente",
	      "sPrevious": "Anterior"
	    },
	    "oAria": {
	      "sSortAscending": ": Activar para ordenar la columna de manera ascendente",
	      "sSortDescending": ": Activar para ordenar la columna de manera descendente"
	    }

  	}

});

tablaCategorias.on('order.dt search.dt', function(){

	tablaCategorias.column(0, {search:'applied', order:'applied'}).nodes().each(function(cell, i){ cell.innerHTML = i+1})


}).draw();