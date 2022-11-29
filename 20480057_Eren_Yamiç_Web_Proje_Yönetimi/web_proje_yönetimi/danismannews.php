<?php
session_start();
if(isset($_SESSION["danisman"])){
    
}else{
    echo "<script>window.location.href='https://cryptoymc.com/danismaninasor/'</script>";
}
?>

<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>OMÜ Danışmanına Sor</title>
  <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">


<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous"><link rel="stylesheet" href="./style2.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css" integrity="sha512-10/jx2EXwxxWqCLX/hHth/vu2KY3jCF70dCQB8TSgNjbCVAC/8vai53GfMDrO2Emgwccf2pJqxct9ehpzG+MTw==" crossorigin="anonymous" referrerpolicy="no-referrer">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.6.0.slim.js" integrity="sha256-HwWONEZrpuoh951cQD1ov2HUK5zA5DwJ1DNUXaM6FsY=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
<!--

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>

-->
<style>
body{
    background:#f1f1f1;
}
footer{
    position:absolute;bottom:0;width:100%;
}
    @media (max-width: 980px) {
        footer{
            position:relative;
            
        }
    }
</style>
</head>
<body>
    <div class="bg-image">
        <!-- Navbar -->
        <div class="ndiv">
<nav class="navbar navbar-expand-lg fixed-top navbar-dark bg-dark" id="nb">
  <!-- Container wrapper -->
  <div class="container-fluid">
    <!-- Navbar brand -->
    <a class="navbar-brand" href="https://cryptoymc.com/danismaninasor/homepage.php" id="ni">
      <img src="./images/OMULogo.png"  alt="" loading="lazy" />
    </a><p class="ds">OMÜ Danışmanına Sor</p>

    <!-- Toggle button -->
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
       aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" id="bt">
      <i class="fas fa-bars"></i>
    </button>

    <!-- Collapsible wrapper -->
    <div class="collapse navbar-collapse bg-dark" id="navbarSupportedContent">
      <!-- Left links -->
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="https://cryptoymc.com/danismaninasor/danisman.php">Ana Sayfa</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="https://cryptoymc.com/danismaninasor/answerQuestion.php">Soru Cevapla</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Haberler</a>
        </li>
        
        
      </ul>
      
      
      <form class="d-flex input-group w-auto" action="https://cryptoymc.com/danismaninasor/danisman.php" method="post">
        <input type="search" class="form-control" name="ogrid2" placeholder="Öğrenci ara" aria-label="Search" />
        <input type=submit class="btn btn-outline-primary" name="search" type="button" value="Ara" data-mdb-ripple-color="dark" style="padding: .45rem 1.5rem .35rem;" />
          
      </form>
      <ul class="navbar-nav mb-2 mb-lg-0">
          
        <li class="nav-item">
          <a class="nav-link" href="https://cryptoymc.com/danismaninasor/danismannews.php" id="nm">DANIŞMAN</a>
        </li>
        
        <li class="nav-item">
          <a class="nav-link" href="#" id="navbarDropdown" role="button" 
            aria-expanded="false">
            <img src="./images/default-profile.jpg" class="rounded-circle img-fluid"
              height='25' width='25' id="pf">
          </a>
         
          
        </li>
        <li class="nav-item">
            <form action="https://cryptoymc.com/danismaninasor/danismannews.php" method="post">
            <input type="submit" class="btn btn-outline-danger" name="ex" value="Çıkış Yap" style="padding:10px;"/>
            </form>
        </li>
      </ul>

    </div>
    
  </div>
 
</nav>
</div>
<div class="content">
    <div class="card">
  <img src="./images/duyuru-png-5.png" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Sitemiz Kullanıma Açılmıştır !</h5>
    <p class="card-text">Omü Danışmanına Sor sitesi aktif ve an itibariyle yayındadır.</p>
    
  </div>
</div>
<div class="card">
  <img src="./images/omu-logo_kapak.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Danışmanlarımız Siteye Eklenmiştir</h5>
    <p class="card-text">Sitede bulunan tüm danışmanlara anasayfa kısmından ulaşabilirsiniz</p>
    
  </div>
</div>

<?php
$db=new mysqli("localhost","u990586664_danisman","Eren_6161","u990586664_danisman");
            if($db->connect_error){
            die('Error'.('.$db->connect_errno.').$db->connect_error);
            }else{
                $sorgu3=$db->query("SET NAMES UTF8");
                $sorgu4=$db->query("select * from haberler");
               
                if($sorgu4->num_rows>0){
                   
                    while($item=$sorgu4->fetch_assoc()){
                        $disim=$item["baslik"];
                        $dbolum=$item["icerik"];
                        $dresim=$item["resim"];
                        
                        
                        
                       echo "<div class='card'>
                       <img src='$dresim' class='card-img-top' alt='...'>
  <div class='card-body'>
    <h5 class='card-title'>$disim</h5>
    <p class='card-text'>$dbolum</p>
  </div>
                       
                       </div>";
                      
                    }
                    
                }
            }

?>
</div>

<footer class="bg-dark text-center text-white">
 
  <div class="container p-4 pb-0">
    
    <section class="mb-4">
      
      <a class="btn btn-outline-light btn-floating m-1" href="https://www.facebook.com/omurektorluk" role="button"
        ><i class="fab fa-facebook-f"></i
      ></a>

     
      <a class="btn btn-outline-light btn-floating m-1" href="https://twitter.com/omurektorluk" role="button"
        ><i class="fab fa-twitter"></i
      ></a>

      
      <a class="btn btn-outline-light btn-floating m-1" href="https://www.omu.edu.tr/tr" role="button"
        ><i class="fab fa-google"></i
      ></a>

      
      <a class="btn btn-outline-light btn-floating m-1" href="https://www.instagram.com/ondokuz_mayis_universitesi/" role="button"
        ><i class="fab fa-instagram"></i
      ></a>

      
      <a class="btn btn-outline-light btn-floating m-1" href="https://www.linkedin.com/school/ondokuz-may%C4%B1s-%C3%BCniversitesi/" role="button"
        ><i class="fab fa-linkedin-in"></i
      ></a>

      
      <a class="btn btn-outline-light btn-floating m-1" href="https://play.google.com/store/apps/details?id=com.unipa.samsunmobil" role="button"
        ><i class="fab fa-github"></i
      ></a>
    </section>
    
  </div>
  

 
  <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
    © 2022 Copyright:
    omudanismaninasor.com
  </div>
  
</footer>

    </div>
    
    
    
    <script>
    
    </script>
    <?php
    
     $me=$_SESSION["danisman"];
    /*echo "<script>$(document).ready(function(){
        $('#nm').text('$me');
    });</script>";*/
    
    $db=new mysqli("localhost","u990586664_danisman","Eren_6161","u990586664_danisman");
            if($db->connect_error){
            die('Error'.('.$db->connect_errno.').$db->connect_error);
            }else{
                
                
                $sorgu3=$db->query("SET NAMES UTF8");
                $sorgu=$db->query("select * from danismanlar where sifre='$me'");
                if($sorgu->num_rows>0){
                    while($item=$sorgu->fetch_assoc()){
                        $username=$item["isim"];
                        $resim=$item["resim"];
                        echo "<script>$(document).ready(function(){
                            $('#nm').text('$username');
                            $('#pf').attr('src','$resim');
                        });</script>";
                    }
                }
            }
            if(isset($_POST["ex"])){
        session_destroy();
        echo "<script>window.location='https://cryptoymc.com/danismaninasor/';</script>";
    }
    ?>
</body>
</html>