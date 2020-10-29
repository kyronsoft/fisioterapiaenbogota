var DeleteIcon = function (cell, formatterParams) {
    return "<i class='far fa-trash-alt fa-2x' style='color:red'></i>";
};

var table = new Tabulator("#categorias_es", {
    maxHeight: "100%",
    layout: "fitColumns",
    responsiveLayout: "collapse",
    cellHozAlign: "center",
    cellVertAlign: "middle",
    selectable: true,
    ajaxURL: "/ksadmin/blog/categorias/tabla",
    columns: [
        { title: "ID", field: "id_categoria", width: 40, sorter: "string" },
        { title: "Título", field: "titulo_categoria", editor: "input", validator: "required", sorter: "string" },
        { title: "Descripción", field: "descripcion_categoria", editor: "input", validator: "required", sorter: "string" },
        { title: "Palabras Clave", field: "p_claves_categoria", editor: "input", validator: "required", sorter: "string" },
        {
            formatter: DeleteIcon, width: 40, hozAlign: "center",
            cellClick: function (e, cell) {
                Swal.fire({
                    title: '¿Está seguro de eliminar la categoría?',
                    text: "No podrá reversar la acción y deberá corregir los artículos ya publicados!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Si, eliminarla!'
                }).then((result) => {
                    if (result.isConfirmed) {
                        var request = $.ajax({
                            method: "POST",
                            url: "/ksadmin/blog/categorias/" + cell.getRow().getData().id_categoria,
                            data: {
                                "_token": $('#token').val()
                            }
                        });

                        request.done(function (msg) {
                            if (msg.includes("eliminada!")) {
                                Swal.fire(
                                    'Eliminada!',
                                    'La categorúa fue eliminada.',
                                    'success'
                                )
                            }
                            setTimeout(function () {
                                window.location.href = "/ksadmin/blog/categorias";
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

$('#btnnuevo').on('click', function () {
    table.addRow({}, false);
});

$('#btninsertar').on('click', function () {
    var selectedData = table.getSelectedData();

    for (var i = 0; i < selectedData.length; i++) {
        var request = $.ajax({
            method: "POST",
            url: "/ksadmin/blog/categorias",
            data: {
                "_token": $('#token').val(),
                titulo_categoria: selectedData[i].titulo_categoria,
                descripcion: selectedData[i].descripcion_categoria,
                palabras_clave: selectedData[i].p_claves_categoria
            }
        });

        request.done(function (msg) {
            if (msg.includes("insertada!")) {
                notie.alert({
                    type: 1,
                    text: 'Categoria Insertada!',
                    position: 'top'
                });
            }
            setTimeout(function () {
                window.location.href = "/ksadmin/blog/categorias";
            }, 1500);
        });

        request.fail(function (jqXHR, textStatus) {
            console.log(textStatus);
        });
    }
});

$('#btnactualizar').on('click', function () {
    var selectedData = table.getSelectedData();

    for (var i = 0; i < selectedData.length; i++) {
        var request = $.ajax({
            method: "POST",
            url: "/ksadmin/blog/categorias/" + selectedData[i].id_categoria + '/edit',
            data: {
                "_token": $('#token').val(),
                titulo_categoria: selectedData[i].titulo_categoria,
                descripcion: selectedData[i].descripcion_categoria,
                palabras_clave: selectedData[i].p_claves_categoria
            }
        });

        request.done(function (msg) {
            if (msg.includes("actualizada!")) {
                notie.alert({
                    type: 1,
                    text: 'Categoria Actualizada!',
                    position: 'top'
                });
            }
            setTimeout(function () {
                window.location.href = "/ksadmin/blog/categorias";
            }, 1500);
        });

        request.fail(function (jqXHR, textStatus) {
            console.log(textStatus);
        });
    }
});