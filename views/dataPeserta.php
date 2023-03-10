<!DOCTYPE html>
<html lang="en" class="light-style layout-menu-fixed" dir="ltr" data-theme="theme-default" data-assets-path="assets/" data-template="vertical-menu-template-free">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />
    <title>Sistem Pendukung Keputusan</title>
    <meta name="description" content="" /> <?php include '../templates/cssFile.php' ?>
</head>

<body>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
        <div class="layout-container"> <?php include '../templates/sidebar.php' ?>
            <!-- Layout container -->
            <div class="layout-page">
                <!-- Navbar --> <?php include '../templates/navbar.php' ?>
                <!-- / Navbar -->
                <!-- Content wrapper -->
                <div id="content">
                    <div class="container flex-grow-1 container-p-y">
                        <h4 class="fw-bold py-3 mb-4">
                            <span class="text-muted">Tables Data Peserta
                        </h4>
                        <a href="#tambahdataPeserta" class="btn btn-primary mb-3">Tambah Data Peserta</a>
                        <div class="card">
                            <table class="table">
                                <thead class="">
                                    <tr>
                                        <th>No</th>
                                        <th>Nama Perusahaan</th>
                                        <th>Administhasi</th>
                                        <th>Harga Penawaran</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody class="table-border-bottom-0">
                                    <tr>
                                        <td>1</td>
                                        <td>PT.Pertamina</td>
                                        <td>Lengkap</td>
                                        <td>Tidak Cocok</td>
                                        <td style="width: 20%;">
                                            <a href="#edit" class="btn btn-primary"><i class='bx bxs-edit-alt'></i></a>
                                            <a href="#delete" class="btn btn-danger"><i class='bx bxs-trash-alt'></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>PT.Pertamina</td>
                                        <td>Lengkap</td>
                                        <td>Tidak Cocok</td>
                                        <td style="width: 20%;">
                                            <a href="#edit" class="btn btn-primary"><i class='bx bxs-edit-alt'></i></a>
                                            <a href="#delete" class="btn btn-danger"><i class='bx bxs-trash-alt'></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>PT.Pertamina</td>
                                        <td>Lengkap</td>
                                        <td>Tidak Cocok</td>
                                        <td style="width: 20%;">
                                            <a href="#edit" class="btn btn-primary" ><i class='bx bxs-edit-alt'></i></a>
                                            <a href="#delete" class="btn btn-danger"><i class='bx bxs-trash-alt'></i></a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <!-- Content wrapper -->
            </div>
            <!-- / Layout page -->
        </div>
        <!-- Overlay -->
        <div class=" layout-overlay layout-menu-toggle">
        </div>
    </div>
    <!-- Template untuk javascript -->
    <?php include '../templates/jsFile.php'; ?>
</body>

</html>