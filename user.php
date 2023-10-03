<?php
session_start();
if(empty($_SESSION['nik'])){ ?>
    <script type="text/javascript">
    alert('Maaf Anda Belum Melakukan Login');
    window.location.assign('index.php');
    </script>
<?php } ?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Aplikasi Peduli Diri - User</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

    <!-- Custom styles for this page -->
    <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

    <style>
   .pagination .page-item.active .page-link { background-color: #47ab0e; }

div.dataTables_wrapper div.dataTables_paginate ul.pagination .page-item.active .page-link:focus {
background-color: #47ab0e;
}

.pagination .page-item.active .page-link:hover {
background-color: red;
}
</style>

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-success sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-book"></i>
                </div>
                <div class="sidebar-brand-text mx-3">Peduli Diri</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item">
                <a class="nav-link" href="user.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Interface
            </div>

            <!-- Nav Item - Charts -->
            <li class="nav-item">
                <a class="nav-link" href="?url=tulis_catatan">
                    <i class="fas fa-fw fa-clone"></i>
                    <span>Tulis Catatan / Perjalanan</span></a>
            </li>

            <!-- Nav Item - Tables -->
            <li class="nav-item">
                <a class="nav-link" href="?url=catatan_perjalanan">
                    <i class="fas fa-fw fa-book"></i>
                    <span>Catatan Perjalanan</span></a>
            </li>

            <!-- Nav Item - Tables -->
            <li class="nav-item">
                <a class="nav-link" href="logout.php">
                    <i class="fas fa-fw fa-power-off"></i>
                    <span>Logout</span></a>
            </li>

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
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
                    <h3>Peduli Diri - Aplikasi Pencatatan Perjalanan</h3>
                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="mb-4 text-gray-800">
                        <?php
                        if(!empty(@$_GET['url'])){
                            switch (@$_GET['url']) {
                                case 'tulis_catatan';
                                   include'tulis_catatan.php';
                                    break;

                                case 'catatan_perjalanan';
                                   include'catatan_perjalanan.php';
                                    break;

                                case'edit_catatan';
                                include'edit_catatan.php';
                                break;
                                
                                default:
                                    echo "<h3>Halaman Tidak Ditemukan</h3>";
                                    break;
                            }
                        }else{
                            echo"Selamat Datang Di Aplikasi Peduli Diri, Dimana Aplikasi Ini Digunakan Untuk Mencatat Riwayat Perjalanan.";
                            echo"<br><br>Anda Login Sebagai : ";
                            echo"<h3>".$_SESSION['nama_lengkap']."</h3>";
                        }
                        ?>
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Aplikasi Peduli Diri 2022</span>
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
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <script>
        $(document).ready(function() { $('#dataTable').dataTable( { "language": 
            {
    "emptyTable": "Tidak ada data yang tersedia pada tabel ini",
    "info": "Menampilkan _START_ sampai _END_ dari _TOTAL_ entri",
    "infoEmpty": "Menampilkan 0 sampai 0 dari 0 entri",
    "infoFiltered": "(disaring dari _MAX_ entri keseluruhan)",
    "lengthMenu": "Tampilkan _MENU_ entri",
    "loadingRecords": "Sedang memuat...",
    "processing": "Sedang memproses...",
    "search": "Cari:",
    "zeroRecords": "Tidak ditemukan data yang sesuai",
    "thousands": "'",
    "paginate": {
        "first": "Pertama",
        "last": "Terakhir",
        "next": "Selanjutnya",
        "previous": "Sebelumnya"
    },
    "aria": {
        "sortAscending": ": aktifkan untuk mengurutkan kolom ke atas",
        "sortDescending": ": aktifkan untuk mengurutkan kolom menurun"
    },
    "autoFill": {
        "cancel": "Batalkan",
        "fill": "Isi semua sel dengan <i>%d<\/i>",
        "fillHorizontal": "Isi sel secara horizontal",
        "fillVertical": "Isi sel secara vertikal"
    },
    "buttons": {
        "collection": "Kumpulan <span class='ui-button-icon-primary ui-icon ui-icon-triangle-1-s'\/>",
        "colvis": "Visibilitas Kolom",
        "colvisRestore": "Kembalikan visibilitas",
        "copy": "Salin",
        "copySuccess": {
            "1": "1 baris disalin ke papan klip",
            "_": "%d baris disalin ke papan klip"
        },
        "copyTitle": "Salin ke Papan klip",
        "csv": "CSV",
        "excel": "Excel",
        "pageLength": {
            "-1": "Tampilkan semua baris",
            "_": "Tampilkan %d baris"
        },
        "pdf": "PDF",
        "print": "Cetak",
        "copyKeys": "Tekan ctrl atau u2318 + C untuk menyalin tabel ke papan klip.<br \/><br \/>Untuk membatalkan, klik pesan ini atau tekan esc."
    },
    "searchBuilder": {
        "add": "Tambah Kondisi",
        "button": {
            "0": "Cari Builder",
            "_": "Cari Builder (%d)"
        },
        "clearAll": "Bersihkan Semua",
        "condition": "Kondisi",
        "data": "Data",
        "deleteTitle": "Hapus filter",
        "leftTitle": "Ke Kiri",
        "logicAnd": "Dan",
        "logicOr": "Atau",
        "rightTitle": "Ke Kanan",
        "title": {
            "0": "Cari Builder",
            "_": "Cari Builder (%d)"
        },
        "value": "Nilai",
        "conditions": {
            "date": {
                "after": "Setelah",
                "before": "Sebelum",
                "between": "Diantara",
                "empty": "Kosong",
                "equals": "Sama dengan",
                "not": "Tidak sama",
                "notBetween": "Tidak diantara",
                "notEmpty": "Tidak kosong"
            },
            "number": {
                "between": "Diantara",
                "empty": "Kosong",
                "equals": "Sama dengan",
                "gt": "Lebih besar dari",
                "gte": "Lebih besar atau sama dengan",
                "lt": "Lebih kecil dari",
                "lte": "Lebih kecil atau sama dengan",
                "not": "Tidak sama",
                "notBetween": "Tidak diantara",
                "notEmpty": "Tidak kosong"
            },
            "string": {
                "contains": "Berisi",
                "empty": "Kosong",
                "endsWith": "Diakhiri dengan",
                "equals": "Sama Dengan",
                "not": "Tidak sama",
                "notEmpty": "Tidak kosong",
                "startsWith": "Diawali dengan"
            },
            "array": {
                "equals": "Sama dengan",
                "empty": "Kosong",
                "contains": "Berisi",
                "not": "Tidak",
                "notEmpty": "Tidak kosong",
                "without": "Tanpa"
            }
        }
    },
    "searchPanes": {
        "clearMessage": "Bersihkan Semua",
        "count": "{total}",
        "countFiltered": "{shown} ({total})",
        "title": "Filter Aktif - %d",
        "collapse": {
            "0": "Panel Pencarian",
            "_": "Panel Pencarian (%d)"
        },
        "emptyPanes": "Tidak Ada Panel Pencarian",
        "loadMessage": "Memuat Panel Pencarian"
    },
    "infoThousands": ",",
    "select": {
        "cells": {
            "1": "1 sel terpilih",
            "_": "%d sel terpilih"
        },
        "columns": {
            "1": "1 kolom terpilih",
            "_": "%d kolom terpilih"
        }
    },
    "datetime": {
        "previous": "Sebelumnya",
        "next": "Selanjutnya",
        "hours": "Jam",
        "minutes": "Menit",
        "seconds": "Detik",
        "unknown": "-",
        "amPm": [
            "am",
            "pm"
        ],
        "weekdays": [
            "Min",
            "Sen",
            "Sel",
            "Rab",
            "Kam",
            "Jum",
            "Sab"
        ],
        "months": [
            "Januari",
            "Februari",
            "Maret",
            "April",
            "Mei",
            "Juni",
            "Juli",
            "Agustus",
            "September",
            "Oktober",
            "November",
            "Desember"
        ]
    },
    "editor": {
        "close": "Tutup",
        "create": {
            "button": "Tambah",
            "submit": "Tambah",
            "title": "Tambah inputan baru"
        },
        "remove": {
            "button": "Hapus",
            "submit": "Hapus",
            "confirm": {
                "_": "Apakah Anda yakin untuk menghapus %d baris?",
                "1": "Apakah Anda yakin untuk menghapus 1 baris?"
            },
            "title": "Hapus inputan"
        },
        "multi": {
            "title": "Beberapa Nilai",
            "info": "Item yang dipilih berisi nilai yang berbeda untuk input ini. Untuk mengedit dan mengatur semua item untuk input ini ke nilai yang sama, klik atau tekan di sini, jika tidak maka akan mempertahankan nilai masing-masing.",
            "restore": "Batalkan Perubahan",
            "noMulti": "Masukan ini dapat diubah satu per satu, tetapi bukan bagian dari grup."
        },
        "edit": {
            "title": "Edit inputan",
            "submit": "Edit",
            "button": "Edit"
        },
        "error": {
            "system": "Terjadi kesalahan pada system. (<a target=\"\\\" rel=\"\\ nofollow\" href=\"\\\">Informasi Selebihnya<\/a>)."
        }
    }
} 
         } ); } );
    </script>

</body>

</html>