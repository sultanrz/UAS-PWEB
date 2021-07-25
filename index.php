<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>UAS PWEB</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
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
                    
                </div>
            </form>
            <!-- Navbar-->
            <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="login.php">Logout</a></li>
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
                        <div class="small">Logged in ass:</div>
                        SULTAN REZA
                    </div>
                </nav>
            </div>
            <div id="layoutSidenav_content">
                <main>
                <h1 class="mt-4"><center>"BERANDA INFORMASI"</center></h1>
                <hr><br>
                    <div class="card mb-4">
                            <div class="card-body">
                                <h5><center>TEKNIK INFORMATIKA</center></h5>
                                <br>
                                Teknik Informatika merupakan salah satu jurusan pendidikan tingkat perguruan tinggi 
                                yang mempelajari serta menerapkan prinsip-prinsip ilmu komputer dan analisis matematis
                                dalam perancangan, pengujian, pengembangan, dan evaluasi sistem operasi, perangkat lunak 
                                (software), dan kinerja komputer.
                                <br><br>
                                <a target="_blank" href="https://sevima.com/kuliah-jurusan-teknik-informatika-belajar-apa-aja-sih/#:~:text=Teknik%20Informatika%20merupakan%20salah%20satu,software)%2C%20dan%20kinerja%20komputer.">
                                SUMBER INFORMASI</a>
                                <hr>
                            </div>
                            <br><hr>
                            <div class="card-body">
                                <h5><center>UNNIVERSITAS AHMAD DAHLAN</center></h5>
                                <br>
                                Universitas Ahmad Dahlan (disingkat sebagai UAD) adalah sebuah perguruan tinggi swasta yang
                                berdiri di Yogyakarta, Indonesia. Universitas Ahmad Dahlan beralamat di Jl. Kapas No.9
                                , Semaki, Kec. Umbulharjo, Kota Yogyakarta, Daerah Istimewa Yogyakarta yang didirikan pada
                                tanggal 18 November 1960.
                                <br><br>
                                <a target="_blank" href="https://uad.ac.id/id/">
                                LINK UNNIVERSITAS</a>
                                <hr>
                            </div>
                            <br>
                            <div class="card-body">
                                <hr>
                                <h5><center>VISI DAN MISI UAD</center></h5>
                                <br>
                                <h6>VISI UAD</h6>
                                “Menjadi perguruan tinggi yang diakui secara internasional, dan dijiwai nilai-nilai Islam“
                                <br><br>
                                <h6>MISI UAD</h6>
                                1. Memajukan ilmu pengetahuan, teknologi dan seni melalui pendidikan, penelitian, pengabdian kepada masyarakat <br>
                                2. Membangun dan mengembangkan kerja sama yang setara di tingkat lokal, nasional dan internasional <br>
                                3. Menyelenggarakan tatakelola perguruan tinggi yang baik. <br>
                                4. Mengimplementasikan nilai-nilai Islam pada semua aspek kegiatan Universitas. <br><br>
                                <a target="_blank" href="https://uad.ac.id/id/visi-misi/">
                                SUMBER INFORMASI</a>
                            </div>
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
                            <?php
                   $filename = 'counter.txt';	
 
                   function counter(){		
                	global $filename;	
 
             	if(file_exists($filename)){		
            		$value = file_get_contents($filename);	
            	}else{		
	            	$value = 0;		
	           }
 
	            file_put_contents($filename, ++$value);		
               }
               counter();	
 
                echo 'Total pengunjung: '.file_get_contents($filename);	
                ?>
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
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
        <script src="js/datatables-simple-demo.js"></script>
    </body>
</html>
