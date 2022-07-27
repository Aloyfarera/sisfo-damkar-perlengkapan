 // Datatables
        $(document).ready(function() {
            var table = $('#dataTable').DataTable({
                scrollY: '300px',
                buttons: [
                    {
                extend: 'print',
                messageTop: '<?= $detail['jns_kendaraan']; ?> <br> <?= $detail['merk']; ?> <br> <?= $detail['no_polisi']; ?>'
            },
                    'copy', 'csv', 'excel', 'pdf'],
                dom: "<'row px-2 px-md-4 pt-2'<'col-md-3'l><'col-md-5 text-center'B><'col-md-4'f>>" +
                    "<'row'<'col-md-12'tr>>" +
                    "<'row px-2 px-md-4 py-3'<'col-md-5'i><'col-md-7'p>>",
                lengthMenu: [
                    [5, 10, 25, 50, 100, -1],
                    [5, 10, 25, 50, 100, "All"]
                ],
                columnDefs: [{
                    targets: -1,
                    orderable: false,
                    searchable: false
                }]
            });

            table.buttons().container().appendTo('#dataTable_wrapper .col-md-5:eq(0)');
        });
