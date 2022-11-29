<?php
session_start();
if(isset($_SESSION["admin"])){
    
}else
    echo "<script>window.location='https://cryptoymc.com/danismaninasor/admin/';</script>";

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>OMÜ Danışmanına Sor Admin Paneli</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <!-- Navbar Brand-->
            <a class="navbar-brand ps-3" href="admin.php">Omü Danışmanına Sor</a>
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
                        <form action="" method="post">
                            <input type="submit" name="ex" value="Çıkış Yap" class="dropdown-item"/>
                        </form>
                        
                    </ul>
                </li>
            </ul>
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading">İç</div>
                            <a class="nav-link" href="admin.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Gösterge Paneli
                            </a>
                            
                            <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="layout-static.html">Static Navigation</a>
                                    <a class="nav-link" href="layout-sidenav-light.html">Light Sidenav</a>
                                </nav>
                            </div>
                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapsePages" aria-expanded="false" aria-controls="collapsePages">
                                <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                                Sayfalar
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapsePages" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                                    <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#pagesCollapseAuth" aria-expanded="false" aria-controls="pagesCollapseAuth">
                                        Oturum
                                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                    </a>
                                    <div class="collapse" id="pagesCollapseAuth" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordionPages">
                                        <nav class="sb-sidenav-menu-nested nav">
                                            <a class="nav-link" href="https://cryptoymc.com/danismaninasor/">Giriş</a>
                                            
                                        </nav>
                                    </div>
                                </nav>
                            </div>
                            <div class="sb-sidenav-menu-heading">Eklentiler</div>
                            <a class="nav-link" href="tables.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                                Danışmanlar
                            </a>
                        </div>
                    </div>
                    <div class="sb-sidenav-footer">
                        <div class="small">Panel:</div>
                        Admin
                    </div>
                </nav>
            </div>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Gösterge Paneli</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Gösterge Paneli</li>
                        </ol>
                        <div class="row">
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-primary text-white mb-4">
                                    <div class="card-body">Danışman Ekle</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="https://cryptoymc.com/danismaninasor/admin/addDanisman.php">Tıkla</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-warning text-white mb-4">
                                    <div class="card-body">Öğrenci Ekle-Sil</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="https://cryptoymc.com/danismaninasor/admin/addStudent.php">Tıkla</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-success text-white mb-4">
                                    <div class="card-body">Mesajlar</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="https://cryptoymc.com/danismaninasor/admin/messages.php">Tıkla</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-danger text-white mb-4">
                                    <div class="card-body">Haber Ekle-Sil</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="https://cryptoymc.com/danismaninasor/admin/addNews.php">Tıkla</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-6">
                                <div class="card mb-4">
                                    <div class="card-header">
                                        <i class="fas fa-chart-area me-1"></i>
                                        Alan Grafik
                                    </div>
                                    <div class="card-body"><canvas id="myAreaChart" width="100%" height="40"></canvas></div>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="card mb-4">
                                    <div class="card-header">
                                        <i class="fas fa-chart-bar me-1"></i>
                                        Sütun Grafik
                                    </div>
                                    <div class="card-body"><canvas id="myBarChart" width="100%" height="40"></canvas></div>
                                </div>
                            </div>
                        </div>
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                Öğrenciler
                            </div>
                            <div class="card-body">
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                            <th>Kullanıcı Adı</th>
                                            <th>Resim</th>
                                            <th>Email</th>
                                            <th>Bio</th>
                                            <th>Üyelik Tarihi</th>
                                            <th>Şifre</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>Kullanıcı Adı</th>
                                            <th>Resim</th>
                                            <th>Email</th>
                                            <th>Bio</th>
                                            <th>Üyelik Tarihi</th>
                                            <th>Şifre</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <?php
            $me=$_SESSION["danisman"];
            $db=new mysqli("localhost","u990586664_danisman","Eren_6161","u990586664_danisman");
            if($db->connect_error){
            die('Error'.('.$db->connect_errno.').$db->connect_error);
            }else{
                
                $danismanid="";
                $sorgu3=$db->query("SET NAMES UTF8");
                $sorgu=$db->query("select * from danismanlar where sifre='$me'");
                if($sorgu->num_rows>0){
                    while($item=$sorgu->fetch_assoc()){
                        $danismanid=$item["danismanId"];
                    }
                }
                
                $sorgu4=$db->query("select * from uyeler order by tarih desc");
               
                if($sorgu4->num_rows>0){
                    while($item2=$sorgu4->fetch_assoc()){
                        $ogrname=$item2["username"];
                        $mesaj=$item2["email"];
                        $pass=$item2["password"];
                        $bio=$item2["bio"];
                        $tarih=$item2["tarih"];
                        $resim=$item2["resim"];
                       echo "<tr><td>$ogrname</td><td><img src='$resim' style='width:100px;height:100px;'></td><td>$mesaj</td><td>$bio</td><td>$tarih</td><td>$pass</td></tr>";
                    }
                    
                }
            
            }
    
            if(isset($_POST["search"])){
                echo "<script>$('.tbdy').html('')</script>";
                    $ogrenci=$_POST["ogrid2"];
                  $sorgu7=$db->query("select * from danismansohbet where danisman='$danismanid' and ogrmail='$ogrenci' order by tarih desc");
                if($sorgu7->num_rows>0){
                    while($item3=$sorgu7->fetch_assoc()){
                        $ogrname=$item3["ogrmail"];
                        $mesaj=$item3["mesaj"];
                        $tarih=$item3["tarih"];
                        $resim=$item3["resim"];
                       echo "<tr><td>$ogrname</td><td><img src='$resim' style='width:100px;height:100px;'></td><td>$mesaj</td><td>$tarih</td></tr>";
                    }
                    
                }
            }
            ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </main>
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Telif Hakkı &copy; omudanismaninasor 2022</div>
                            
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/chart-area-demo.js"></script>
        <script src="assets/demo/chart-bar-demo.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
        <script src="js/datatables-simple-demo.js"></script>
        <?php
        if(isset($_POST["ex"])){
        session_destroy();
        echo "<script>window.location='https://cryptoymc.com/danismaninasor/admin/';</script>";
    }
        ?>
    </body>
</html>
