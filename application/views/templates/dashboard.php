<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title><?= $title; ?> | Aplikasi Sarana Prasarana</title>

    <!-- Custom fonts for this template-->
    <link href="<?= base_url(); ?>assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="<?= base_url(); ?>assets/css/fonts.min.css" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="<?= base_url(); ?>assets/css/sb-admin-2.min.css" rel="stylesheet">

    <!-- Datepicker -->
    <link href="<?= base_url(); ?>assets/vendor/daterangepicker/daterangepicker.css" rel="stylesheet">

    <!-- DataTables -->
    <link href="<?= base_url(); ?>assets/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
    <link href="<?= base_url(); ?>assets/vendor/datatables/buttons/css/buttons.bootstrap4.min.css" rel="stylesheet">
    <link href="<?= base_url(); ?>assets/vendor/datatables/responsive/css/responsive.bootstrap4.min.css" rel="stylesheet">
    <link href="<?= base_url(); ?>assets/vendor/gijgo/css/gijgo.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://printjs-4de6.kxcdn.com/print.min.css">

    <style>
        #accordionSidebar,
        .topbar {
            z-index: 1;
        }
        .spanduk{
            width: 100%;
            height: 50px;
            background-color: skyblue;
            color: white;
            border-radius: 5px;
            padding-top: 8px;
        }

        .gambar{
            width: 100%;
            width: 135px;
            height: auto;
        }
    </style>
</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-white sidebar sidebar-light accordion shadow-sm" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex text-white align-items-center bg-primary justify-content-center" href="">
                <div class="sidebar-brand-icon">
                <img src='<?php echo base_url(); ?>assets/img/logo.png' style="height: 50px; width: 50px">
                </div>
                <div class="sidebar-brand-text mx-3">Sarana Prasarana</div>
            </a>

            <!-- Nav Item - Dashboard -->
            <li class="nav-item">
                <a class="nav-link" href="<?= base_url('dashboard'); ?>">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span>
                </a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Data Master
            </div>

            <!-- Nav Item - Dashboard -->
            <li class="nav-item">
                <a class="nav-link pb-0" href="<?= base_url('kendaraan'); ?>">
                    <i class="fas fa-fw fa-car"></i>
                    <span>Data Kendaraan</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link pb-0" href="<?= base_url('tools'); ?>">
                    <i class="fas fa-fw fa-tools"></i>
                    <span>Daftar Perlengkapan</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link pb-3" href="<?= base_url('kendaraan/kesimpulan/'); ?>">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>Data Kekurangan</span>
                </a>
            </li>

            <!-- Nav Item - Pages Collapse Menu 
        
            <li class="nav-item">
                <a class="nav-link collapsed " href="#" data-toggle="collapse" data-target="#collapseMaster" aria-expanded="true" aria-controls="collapseMaster">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>Perlengkapan</span>
                </a>
                <div id="collapseMaster" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-light py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Master Perlengkapan:</h6>
                        <a class="collapse-item" href="<?= base_url('satuan'); ?>">Satuan Perlengkapan</a>
                        <a class="collapse-item" href="<?= base_url('jenis'); ?>">Jenis Perlengkapan</a>
                        <a class="collapse-item" href="<?= base_url('barang'); ?>">Data Perlengkapan</a>
                    </div>
                </div>
            </li> -->
            


            <!-- Nav Item - Dashboard -->


            <!-- Divider -->
            <!-- <hr class="sidebar-divider"> -->

            <!-- Heading -->
            <!-- <div class="sidebar-heading">
                Report
            </div> -->

            <!-- <li class="nav-item">
                <a class="nav-link" href="<?= base_url('laporan'); ?>">
                    <i class="fas fa-fw fa-print"></i>
                    <span>Cetak Laporan</span>
                </a>
            </li> -->

            <?php if (is_admin()) : ?>
                <!-- Divider -->
                <hr class="sidebar-divider">

                <!-- Heading -->
                <div class="sidebar-heading">
                    Settings
                </div>

                <!-- Nav Item -->
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('user'); ?>">
                        <i class="fas fa-fw fa-user-plus"></i>
                        <span>User Management</span>
                    </a>
                </li>
            <?php endif; ?>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-dark bg-primary topbar mb-4 static-top shadow-sm">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link bg-transparent d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars text-white"></i>
                    </button>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline small text-capitalize">
                                    <?= userdata('nama'); ?>
                                </span>
                                <img class="img-profile rounded-circle" src="<?= base_url() ?>assets/img/avatar/user.png">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="<?= base_url('profile'); ?>">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Profile
                                </a>
                                <a class="dropdown-item" href="<?= base_url('profile/setting'); ?>">
                                    <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Settings
                                </a>
                                <a class="dropdown-item" href="<?= base_url('profile/ubahpassword'); ?>">
                                    <i class="fas fa-lock fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Change Password
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

                    <?= $contents; ?>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-light">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Aplikasi Sarana Prasarana 2021 &bull; by Bramudiaz Aloy Farera</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Yakin ingin logout?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Klik "Logout" dibawah ini jika anda yakin ingin logout.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Batalkan</button>
                    <a class="btn btn-primary" href="<?= base_url('logout'); ?>">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <?php $CI =& get_instance(); ?>
    <script> 
        var csrf_name = '<?php echo $CI->security->get_csrf_token_name(); ?>';
        var csrf_hash = '<?php echo $CI->security->get_csrf_hash(); ?>';
    </script> 
    

    <!-- Bootstrap core JavaScript-->
    <script src="<?= base_url(); ?>assets/vendor/jquery/jquery.min.js"></script>
    <script src="<?= base_url(); ?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?= base_url(); ?>assets/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="<?= base_url(); ?>assets/js/sb-admin-2.min.js"></script>

    <!-- Datepicker -->
    <script src="<?= base_url(); ?>assets/vendor/daterangepicker/moment.min.js"></script>
    <script src="<?= base_url(); ?>assets/vendor/daterangepicker/daterangepicker.min.js"></script>

    <!-- Page level plugins -->
    <script src="<?= base_url(); ?>assets/vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="<?= base_url(); ?>assets/vendor/datatables/dataTables.bootstrap4.min.js"></script>
    <script src="<?= base_url(); ?>assets/vendor/datatables/buttons/js/dataTables.buttons.min.js"></script>
    <script src="<?= base_url(); ?>assets/vendor/datatables/buttons/js/buttons.bootstrap4.min.js"></script>
    <script src="<?= base_url(); ?>assets/vendor/datatables/jszip/jszip.min.js"></script>
    <script src="<?= base_url(); ?>assets/vendor/datatables/pdfmake/pdfmake.min.js"></script>
    <script src="<?= base_url(); ?>assets/vendor/datatables/pdfmake/vfs_fonts.js"></script>
    <script src="<?= base_url(); ?>assets/vendor/datatables/buttons/js/buttons.html5.min.js"></script>
    <script src="<?= base_url(); ?>assets/vendor/datatables/buttons/js/buttons.print.min.js"></script>
    <script src="<?= base_url(); ?>assets/vendor/datatables/buttons/js/buttons.colVis.min.js"></script>
    <script src="<?= base_url(); ?>assets/vendor/datatables/responsive/js/dataTables.responsive.min.js"></script>
    <script src="<?= base_url(); ?>assets/vendor/datatables/responsive/js/responsive.bootstrap4.min.js"></script>
    <script src="<?= base_url(); ?>assets/js/printThis.js"></script>
    <script src="https://printjs-4de6.kxcdn.com/print.min.js"></script>

    <script src="<?= base_url(); ?>assets/vendor/gijgo/js/gijgo.min.js"></script>


    
    <!-- Javascript dan JQuery fungsi -->
    <script type="text/javascript">
    // Datepicker javascript
        $(function() {
            $('.date').datepicker({
                uiLibrary: 'bootstrap4',
                format: 'yyyy-mm-dd'
            });

            var start = moment().subtract(29, 'days');
            var end = moment();

            function cb(start, end) {
                $('#tangal').val(start.format('YYYY-MM-DD') + ' - ' + end.format('YYYY-MM-DD'));
            }

            $('#tanggal').daterangepicker({
                startDate: start,
                endDate: end,
                ranges: {
                    'Hari ini': [moment(), moment()],
                    'Kemarin': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
                    '7 hari terakhir': [moment().subtract(6, 'days'), moment()],
                    '30 hari terakhir': [moment().subtract(29, 'days'), moment()],
                    'Bulan ini': [moment().startOf('month'), moment().endOf('month')],
                    'Bulan lalu': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')],
                    'Tahun ini': [moment().startOf('year'), moment().endOf('year')],
                    'Tahun lalu': [moment().subtract(1, 'year').startOf('year'), moment().subtract(1, 'year').endOf('year')]
                }
            }, cb);

            cb(start, end);
        });


        // Tabel data kendaraan
        $(document).ready(function() {
            var table = $('#dataKendaraan').DataTable({
                
                buttons: [
                {
                    extend: 'print',
                    title: '<div class="text-center mb-3"><h4>Daftar <?= $title; ?></h4></div>',
                    messageTop: ' Tanggal <?= date("d/m/y"); ?>' 
                },
                {
                    extend: 'excel',
                    title: 'Data <?= $title; ?>',
                    messageTop: ' Tanggal <?= date("d/m/y"); ?>'
                },
                {
                    extend: 'csv',
                    title: 'Data <?= $title; ?>',
                    messageTop: ' Tanggal <?= date("d/m/y"); ?>'
                },
                {
                    extend: 'copy',
                    title: 'Data <?= $title; ?>',
                    messageTop: ' Tanggal <?= date("d/m/y"); ?>'
                },
                {
                    extend: 'pdf',
                    title: 'Data <?= $title; ?>',
                    messageTop: ' Tanggal <?= date("d/m/y"); ?>'
                }],
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

            
        });


        // Tabel daftar perlengkapan
        $(document).ready(function() {
            var table = $('#dataPerlengkapan').DataTable({
                buttons: [
                {
                    extend: 'print',
                    title: '<div class="text-center mb-3"><h4>Daftar <?= $title; ?></h4></div>',
                    messageTop: ' Tanggal <?= date("d/m/y"); ?>'
                },
                {
                    extend: 'excel',
                    title: 'Daftar <?= $title; ?>',
                    messageTop: ' Tanggal <?= date("d/m/y"); ?>'
                },
                {
                    extend: 'csv',
                    title: 'Daftar <?= $title; ?>',
                    messageTop: ' Tanggal <?= date("d/m/y"); ?>'
                },
                {
                    extend: 'copy',
                    title: 'Daftar <?= $title; ?>',
                    messageTop: ' Tanggal <?= date("d/m/y"); ?>'
                },
                {
                    extend: 'pdf',
                    title: 'Daftar <?= $title; ?>',
                    messageTop: ' Tanggal <?= date("d/m/y"); ?>'
                }],
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

        $(document).ready(function(){
            $('#nama_tools').change(function(){
                var nama = $(this).val();
                
                $.ajax({
                    method: "POST",
                    url: "<?= base_url('tools/get_kondisi') ?>",
                    data: {
                        nama: nama},
                    dataType: 'json',
                    success: function(response) {
                        $('#kondisi_ideal').val(response);
                        //console.log(response);
                    }
                });
            });
        });


        // Kalkulasi keterangan kondisi perlengkapan
        $(document).ready(function() {
        $("#kondisi_real, #kondisi_ideal").keyup(function() {
            var real  = $("#kondisi_real").val();
            var ideal = $("#kondisi_ideal").val();

            // var total =  parseInt(real) + parseInt(ideal);
                if (real >= ideal) {
                    var total = "Memadai";
                } else {
                    var total = "Tidak memadai";
                }
            $("#keterangan").val(total);
        });
    });
    </script>
    <!-- Akhir -->
    

    
        <!-- Chart -->
        <script src="<?= base_url(); ?>assets/vendor/chart.js/Chart.min.js"></script>

        <script type="text/javascript">
            // Area Chart Example
            //var ctx = document.getElementById("myAreaChart");
            //var myLineChart = new Chart(ctx, {
            //    type: 'line',
            //    data: {
            //        labels: ["Jan", "Feb", "Mar", "Apr", "Mei", "Jun", "Jul", "Agu", "Sep", "Okt", "Nov", "Des"],
            //        datasets: [{
            //                label: "Total Barang Masuk",
            //                lineTension: 0.3,
            //                backgroundColor: "rgba(78, 115, 223, 0.05)",
            //                borderColor: "rgba(78, 115, 223, 1)",
            //                pointRadius: 3,
            //                pointBackgroundColor: "rgba(78, 115, 223, 1)",
            //                pointBorderColor: "rgba(78, 115, 223, 1)",
            //                pointHoverRadius: 3,
            //                pointHoverBackgroundColor: "#5a5c69",
            //                pointHoverBorderColor: "#5a5c69",
            //                pointHitRadius: 10,
            //                pointBorderWidth: 2,
            //                data: <?= json_encode($cbm); ?>,
            //            },
            //            {
            //                label: "Total Barang Keluar",
            //                lineTension: 0.3,
            //                backgroundColor: "rgba(231, 74, 59, 0.05)",
            //                borderColor: "#e74a3b",
            //                pointRadius: 3,
            //                pointBackgroundColor: "#e74a3b",
            //                pointBorderColor: "#e74a3b",
            //                pointHoverRadius: 3,
            //                pointHoverBackgroundColor: "#5a5c69",
            //                pointHoverBorderColor: "#5a5c69",
            //                pointHitRadius: 10,
            //                pointBorderWidth: 2,
            //                data: <?= json_encode($cbk); ?>,
            //            }
            //        ],
            //    },
            //    options: {
            //        maintainAspectRatio: false,
            //        layout: {
            //            padding: 5
            //        },
            //        scales: {
            //            xAxes: [{
            //                time: {
            //                    unit: 'date'
            //                },
            //                gridLines: {
            //                    display: false,
            //                    drawBorder: false
            //                },
            //                ticks: {
            //                    maxTicksLimit: 7
            //                }
            //            }],
            //            yAxes: [{
            //                ticks: {
            //                    maxTicksLimit: 5,
            //                    padding: 10,
            //                    // Include a dollar sign in the ticks
            //                    callback: function(value, index, values) {
            //                        return number_format(value);
            //                    }
            //                },
            //                gridLines: {
            //                    color: "rgb(234, 236, 244)",
            //                    zeroLineColor: "rgb(234, 236, 244)",
            //                    drawBorder: false,
            //                    borderDash: [2],
            //                    zeroLineBorderDash: [2]
            //                }
            //            }],
            //        },
            //        legend: {
            //            display: false
            //        },
            //        tooltips: {
            //            backgroundColor: "rgb(255,255,255)",
            //            bodyFontColor: "#858796",
            //            titleMarginBottom: 10,
            //            titleFontColor: '#6e707e',
            //            titleFontSize: 14,
            //            borderColor: '#dddfeb',
            //            borderWidth: 1,
            //            xPadding: 15,
            //            yPadding: 15,
            //            displayColors: false,
            //            intersect: false,
            //            mode: 'index',
            //            caretPadding: 10,
            //            callbacks: {
            //                label: function(tooltipItem, chart) {
            //                    var datasetLabel = chart.datasets[tooltipItem.datasetIndex].label || '';
            //                    return datasetLabel + ': ' + number_format(tooltipItem.yLabel);
            //                }
            //            }
            //        }
            //    }
            //});

            // Pie Chart Example
            var ctx = document.getElementById("myPieChart");
            var myPieChart = new Chart(ctx, {
                type: 'doughnut',
                data: {
                    labels: ["Memadai", "Tidak Memadai"],
                    datasets: [{
                        data: ["<?= $memadai['memadai']; ?>", "<?= $tdk_memadai['tidak_memadai']; ?>"],
                        backgroundColor: ['#4e73df', '#e74a3b'],
                        hoverBackgroundColor: ['#5a5c69', '#5a5c69'],
                        hoverBorderColor: "rgba(234, 236, 244, 1)",
                    }],
                },
                options: {
                    maintainAspectRatio: false,
                    tooltips: {
                        backgroundColor: "rgb(255,255,255)",
                        bodyFontColor: "#858796",
                        borderColor: '#dddfeb',
                        borderWidth: 1,
                        xPadding: 15,
                        yPadding: 15,
                        displayColors: false,
                        caretPadding: 10,
                    },
                    legend: {
                        display: false
                    },
                    cutoutPercentage: 80,
                },
            });
        </script>
    
    </script>

    <script>

    
    </script>

    
</body>

</html>