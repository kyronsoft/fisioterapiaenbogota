var DeleteIcon = function (cell, formatterParams) {
    return "<i class='far fa-trash-alt fa-2x' style='color:red'></i>";
};
var EditIcon = function (cell, formatterParams) {
    return "<i class='far fa-edit fa-2x' style='color:#0063C0'></i>";
};

var table = new Tabulator("#articulos_es", {
    maxHeight: "100%",
    layout: "fitColumns",
    responsiveLayout: "collapse",
    cellHozAlign: "center",
    cellVertAlign: "middle",
    headerHozAlign: "center",
    selectable: true,
    paginationSize: 6,
    pagination: "local",
    ajaxURL: "/ksadmin/blog/articulos/tabla",
    columns: [
        { title: "ID", field: "id_articulo", width: 40, sorter: "string" },
        {
            title: "Portada", field: "portada_articulo", formatter: "image", formatterParams: {
                height: "50px",
                width: "50px",
            }, sorter: "string"
        },
        { title: "Título", field: "titulo_articulo", editor: "input", formatter: "textarea", validator: "required", sorter: "string" },
        { title: "Descripción", field: "descripcion_articulo", formatter: "textarea", editor: "input", validator: "required", sorter: "string" },
        { title: "Palabras Claves", field: "p_claves_articulo", editor: "input", validator: "required", sorter: "string" },
        { title: "Vistas", field: "vistas_articulo", sorter: "string" },
        { title: "Me Gusta", field: "megusta", sorter: "string" },
        { title: "Fecha Creación", field: "fecha_articulo", sorter: "string" },
        {
            formatter: EditIcon, width: 40, hozAlign: "center",
            cellClick: function (e, cell) {
                var request = $.ajax({
                    method: "GET",
                    url: "/ksadmin/blog/articulos/" + cell.getRow().getData().id_articulo + '/editar',
                    data: {
                        "_token": $('#token').val()
                    }
                });

                request.done(function (msg) {
                    if (msg.includes('Cargando')) {
                        window.location.href = '/ksadmin/blog/articulos/editar/' + cell.getRow().getData().id_articulo;
                    }
                });

                request.fail(function (jqXHR, textStatus) {
                    console.log(textStatus);
                });
            }
        },
        {
            formatter: DeleteIcon, width: 40, hozAlign: "center",
            cellClick: function (e, cell) {
                Swal.fire({
                    title: '¿Está seguro de eliminar el artículo?',
                    text: "No podrá reversar la acción!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Si, eliminarlo!'
                }).then((result) => {
                    if (result.isConfirmed) {
                        var request = $.ajax({
                            method: "POST",
                            url: "/ksadmin/blog/articulos/" + cell.getRow().getData().id_articulo,
                            data: {
                                "_token": $('#token').val()
                            }
                        });

                        request.done(function (msg) {
                            if (msg.includes("eliminado!")) {
                                Swal.fire(
                                    'Eliminado!',
                                    'El artículo fue eliminado.',
                                    'success'
                                )
                            }
                            setTimeout(function () {
                                window.location.href = "/ksadmin/blog/articulos";
                            }, 1500);
                        });

                        request.fail(function (jqXHR, textStatus) {
                            console.log(textStatus);
                        });
                    }
                })
            }
        },
    ],
});

var table = new Tabulator("#articulos_en", {
    maxHeight: "100%",
    layout: "fitColumns",
    responsiveLayout: "collapse",
    cellHozAlign: "center",
    cellVertAlign: "middle",
    headerHozAlign: "center",
    selectable: true,
    paginationSize: 6,
    pagination: "local",
    ajaxURL: "/ksadmin/blog/articulos_en/tabla",
    columns: [
        { title: "ID", field: "id_articulo", width: 40, sorter: "string" },
        {
            title: "Portada", field: "portada_articulo", formatter: "image", formatterParams: {
                height: "50px",
                width: "50px",
            }, sorter: "string"
        },
        { title: "Título", field: "titulo_en", editor: "input", formatter: "textarea", validator: "required", sorter: "string" },
        { title: "Descripción", field: "descripcion_en", formatter: "textarea", editor: "input", validator: "required", sorter: "string" },
        { title: "Palabras Claves", field: "p_claves_en", editor: "input", validator: "required", sorter: "string" },
        { title: "Vistas", field: "vistas_articulo", sorter: "string" },
        { title: "Me Gusta", field: "megusta", sorter: "string" },
        { title: "Fecha Creación", field: "fecha_articulo", sorter: "string" },
        {
            formatter: EditIcon, width: 40, hozAlign: "center",
            cellClick: function (e, cell) {
                var request = $.ajax({
                    method: "GET",
                    url: "/ksadmin/blog/articulos_en/" + cell.getRow().getData().id_articulo + '/editar',
                    data: {
                        "_token": $('#token').val()
                    }
                });

                request.done(function (msg) {
                    if (msg.includes('Cargando')) {
                        window.location.href = '/ksadmin/blog/articulos_en/editar/' + cell.getRow().getData().id_articulo;
                    }
                });

                request.fail(function (jqXHR, textStatus) {
                    console.log(textStatus);
                });
            }
        },
        {
            formatter: DeleteIcon, width: 40, hozAlign: "center",
            cellClick: function (e, cell) {
                Swal.fire({
                    title: '¿Está seguro de eliminar el artículo?',
                    text: "No podrá reversar la acción!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Si, eliminarlo!'
                }).then((result) => {
                    if (result.isConfirmed) {
                        var request = $.ajax({
                            method: "POST",
                            url: "/ksadmin/blog/articulos_en/" + cell.getRow().getData().id_articulo,
                            data: {
                                "_token": $('#token').val()
                            }
                        });

                        request.done(function (msg) {
                            if (msg.includes("eliminado!")) {
                                Swal.fire(
                                    'Eliminado!',
                                    'El artículo fue eliminado.',
                                    'success'
                                )
                            }
                            setTimeout(function () {
                                window.location.href = "/ksadmin/blog/articulos_en";
                            }, 1500);
                        });

                        request.fail(function (jqXHR, textStatus) {
                            console.log(textStatus);
                        });
                    }
                })
            }
        },
    ],
});