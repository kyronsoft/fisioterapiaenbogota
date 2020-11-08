var AuthorizeIcon = function (cell, formatterParams) {
    return "<i class='far fa-check-circle fa-2x' style='color:#0063C0'></i>";
};

var table = new Tabulator("#opiniones_es", {
    maxHeight: "100%",
    layout: "fitColumns",
    responsiveLayout: "hide",
    cellHozAlign: "center",
    cellVertAlign: "middle",
    headerHozAlign: "center",
    layoutColumnsOnNewData: true,
    selectable: true,
    paginationSize: 6,
    pagination: "local",
    ajaxURL: "/ksadmin/blog/opiniones/tabla",
    columns: [
        { title: "ID", field: "id_opinion", width: 40, sorter: "string" },
        { title: "Articulo", field: "titulo_articulo", formatter: "textarea", sorter: "string" },
        { title: "Opinión", field: "nombre_opinion", sorter: "string" },
        { title: "Email", field: "correo_opinion", sorter: "string" },
        { title: "Contenido", field: "contenido_opinion", formatter: "textarea", sorter: "string" },
        { title: "Respuesta", field: "respuesta_opinion", editor: "input", formatter: "textarea", sorter: "string" },
        {
            title: "Aprobación", field: "aprobacion_opinion", width: 70, formatter: "tickCross", formatterParams: {
                allowEmpty: true,
                allowTruthy: true,
                tickElement: "<i class='fa fa-check fa-2x' style='color:#0063C0'></i>",
                crossElement: "<i class='fa fa-times fa-2x' style='color:red'></i>",
            }, sorter: "string"
        },
        { title: "Fecha Comentario", field: "fecha_opinion", sorter: "string" },
        { title: "Fecha Respuesta", field: "fecha_respuesta", sorter: "string" },
        {
            formatter: AuthorizeIcon, width: 40, hozAlign: "center",
            cellClick: function (e, cell) {
                var request = $.ajax({
                    method: "POST",
                    url: "/ksadmin/blog/opiniones/autorizar/" + cell.getRow().getData().id_opinion,
                    data: {
                        "_token": $('#token').val(),
                        aprobacion: cell.getRow().getData().aprobacion_opinion
                    }
                });

                request.done(function (msg) {
                    if (msg.includes('Autorizado')) {
                        window.location.href = '/ksadmin/blog/opiniones';
                    }
                });

                request.fail(function (jqXHR, textStatus) {
                    console.log(textStatus);
                });
            }
        }
    ],
});

var table = new Tabulator("#opiniones_en", {
    maxHeight: "100%",
    layout: "fitColumns",
    responsiveLayout: "hide",
    cellHozAlign: "center",
    cellVertAlign: "middle",
    headerHozAlign: "center",
    layoutColumnsOnNewData: true,
    selectable: true,
    paginationSize: 6,
    pagination: "local",
    ajaxURL: "/ksadmin/blog/opiniones_en/tabla",
    columns: [
        { title: "ID", field: "id_opinion", width: 40, sorter: "string" },
        { title: "Articulo", field: "titulo_en", formatter: "textarea", sorter: "string" },
        { title: "Opinión", field: "nombre_en", sorter: "string" },
        { title: "Email", field: "correo_en", sorter: "string" },
        { title: "Contenido", field: "contenido_en", formatter: "textarea", sorter: "string" },
        { title: "Respuesta", field: "respuesta_en", editor: "input", formatter: "textarea", sorter: "string" },
        {
            title: "Aprobación", field: "aprobacion_en", width: 70, formatter: "tickCross", formatterParams: {
                allowEmpty: true,
                allowTruthy: true,
                tickElement: "<i class='fa fa-check fa-2x' style='color:#0063C0'></i>",
                crossElement: "<i class='fa fa-times fa-2x' style='color:red'></i>",
            }, sorter: "string"
        },
        { title: "Fecha Comentario", field: "fecha_opinion", sorter: "string" },
        { title: "Fecha Respuesta", field: "fecha_respuesta", sorter: "string" },
        {
            formatter: AuthorizeIcon, width: 40, hozAlign: "center",
            cellClick: function (e, cell) {
                var request = $.ajax({
                    method: "POST",
                    url: "/ksadmin/blog/opiniones_en/autorizar/" + cell.getRow().getData().id_opinion,
                    data: {
                        "_token": $('#token').val(),
                        aprobacion: cell.getRow().getData().aprobacion_opinion
                    }
                });

                request.done(function (msg) {
                    if (msg.includes('Autorizado')) {
                        window.location.href = '/ksadmin/blog/opiniones';
                    }
                });

                request.fail(function (jqXHR, textStatus) {
                    console.log(textStatus);
                });
            }
        }
    ],
});

$('#btnactualizar').on('click', function () {
    var selectedData = table.getSelectedData();

    for (var i = 0; i < selectedData.length; i++) {
        var request = $.ajax({
            method: "POST",
            url: "/ksadmin/blog/opiniones/respuesta/" + selectedData[i].id_opinion + '/edit',
            data: {
                "_token": $('#token').val(),
                respuesta_opinion: selectedData[i].respuesta_opinion,
            }
        });

        request.done(function (msg) {
            if (msg.includes("actualizada!")) {
                notie.alert({
                    type: 1,
                    text: 'Respuesta Ingresada!',
                    position: 'top'
                });
            }
            setTimeout(function () {
                window.location.href = "/ksadmin/blog/opiniones";
            }, 1500);
        });

        request.fail(function (jqXHR, textStatus) {
            console.log(textStatus);
        });
    }
});

$('#btnactualizar_en').on('click', function () {
    var selectedData = table.getSelectedData();

    for (var i = 0; i < selectedData.length; i++) {
        var request = $.ajax({
            method: "POST",
            url: "/ksadmin/blog/opiniones_en/respuesta/" + selectedData[i].id_opinion + '/edit',
            data: {
                "_token": $('#token').val(),
                respuesta_opinion: selectedData[i].respuesta_opinion,
            }
        });

        request.done(function (msg) {
            if (msg.includes("actualizada!")) {
                notie.alert({
                    type: 1,
                    text: 'Respuesta Ingresada!',
                    position: 'top'
                });
            }
            setTimeout(function () {
                window.location.href = "/ksadmin/blog/opiniones";
            }, 1500);
        });

        request.fail(function (jqXHR, textStatus) {
            console.log(textStatus);
        });
    }
});