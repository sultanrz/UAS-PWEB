<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>UAS PWEB</title>
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <!-- Navbar Brand-->
            <a class="navbar-brand ps-3" href="index.php">DATA MAHASISWA</a>
            <!-- Sidebar Toggle-->
            <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
            <!-- Navbar Search-->
            <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
                <div class="input-group">
                    <input class="form-control" type="text" placeholder="Search for..." aria-label="Search for..." aria-describedby="btnNavbarSearch" />
                    <button class="btn btn-primary" id="btnNavbarSearch" type="button"><i class="fas fa-search"></i></button>
                </div>
            </form>
            <!-- Navbar-->
            <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="#!">Logout</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <a class="nav-link" href="index.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                HOME
                            </a>
                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                Layouts
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="input.php">INPUT</a>
                                    <a class="nav-link" href="table.php">TABLE</a>
                                </nav>
                            </div>
                            <a class="nav-link" href="profil.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                                PROFIL PEMBUAT
                            </a>
                        </div>
                    </div>
                    <div class="sb-sidenav-footer">
                        <div class="small">Logged in as:</div>
                        SULTAN REZA
                    </div>
                </nav>
            </div>
            <div id="layoutSidenav_content">
                <main>
                    <h1 class="mt-4"><center>"PROFIL PEMBUAT"</center></h1>
                    <hr><br><br><hr>
                    <div class="card-body">
                                <h5><center>BIODATA PEMBUAT</center></h5>
                                <br><hr><br>
                                <center><img src="sultan.jpg" width="250px"></center>
                                <br><br>
                                Nama&ensp;&ensp;&ensp; : Muhammad Sultan Reza Aditya Nurrahman
                                <br>
                                Kelas&ensp;&emsp;&ensp;: D
                                <br>
                                NIM&ensp;&emsp;&ensp;&ensp;: 2000018182
                                <br>
                                Alamat&emsp; : Kutayasa, RT 04 Rw 02 Kec. Madukara , Kab. Banjarnegara, Jawa Tengah
                                <br>
                                No.Wa&ensp;&emsp;: 083861742929
                                <br>
                                FBook&ensp;&emsp; : Muhammad Sultan Reza
                                <br><br>

                                <a href="https://web.whatsapp.com/"><img src="wa.png" width ="40px"></a>
                                <a href="https://web.telegram.org/z/"><img src="tele.png" width ="40px"></a>
                                <a href="https://www.instagram.com/"><img src="ig.png" width ="40px"></a>
                                <a href="https://www.facebook.com/"><img src="fb.png" width ="40px"></a>
                                <hr>
                    </div>
                </main>
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between small">
                        <span>dibuat tanggal 
                        <?php
                            $tanggal= mktime(date("m"),date("d"),date("Y"));
                            echo "Tanggal : <b>".date("d-M-Y", $tanggal)."</b> ";
                            date_default_timezone_set('Asia/Jakarta');
                            $jam=date("H:i:s");
                            echo "| Pukul : <b>". $jam." "."</b>";
                        ?> 
                        </span>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/chart-area-demo.js"></script>
        <script src="assets/demo/chart-bar-demo.js"></script>
        <script src="assets/demo/chart-pie-demo.js"></script>
    </body>
</html>
