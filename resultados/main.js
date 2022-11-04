//Codigo para datatables
$(document).ready(function() {
    $('#example').DataTable({
        order: [[ 3, 'asc' ]],
        language: {
            url: "https://cdn.datatables.net/plug-ins/1.12.1/i18n/es-ES.json",
        },
        lengthMenu: [
            [25, 50, 100, -1],
            [25, 50, 100, 'Todos'],
        ],

        });
    });
