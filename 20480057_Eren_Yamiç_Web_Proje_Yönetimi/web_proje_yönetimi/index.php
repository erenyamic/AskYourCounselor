<?php
session_start();

?>
<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>OMÜ Danışmanına Sor</title>
  <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">


<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous"><link rel="stylesheet" href="./style.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css" integrity="sha512-10/jx2EXwxxWqCLX/hHth/vu2KY3jCF70dCQB8TSgNjbCVAC/8vai53GfMDrO2Emgwccf2pJqxct9ehpzG+MTw==" crossorigin="anonymous" referrerpolicy="no-referrer">
<script src="https://code.jquery.com/jquery-3.6.0.slim.js" integrity="sha256-HwWONEZrpuoh951cQD1ov2HUK5zA5DwJ1DNUXaM6FsY=" crossorigin="anonymous"></script>

</head>
<body>
    
<div class="box-form">
	<div class="left">
		<div class="overlay">
		    
		<h1>OMÜ Danışmanına Sor</h1>
		<p>Omü Danışmanına Sor sayfası ile danışman öğretmenlerinle iletişime geç.</p>
	
		    
		
		</div>
	</div>
	
	
		<div class="right">
		    <img src="images/OMULogo.png" width="250px" height="250px">
		<h5>Giriş</h5>
		<div class="btn-group" role="group" aria-label="Basic outlined example">
  <button type="button" class="btn btn-outline-primary" id="ogr">Öğrenci</button>
  
  <button type="button" class="btn btn-outline-primary" id="dns">Danışman</button>
</div>
		<p class="p1">Hesabın yok mu ? <a href="#" class="crt">Hesap Oluştur</a> </p>
		<p class="p2">Hesabın var mı ? <a href="#" class="lgn">Giriş Yap</a> </p>
		<div class="inputs">
		    <form action="https://cryptoymc.com/danismaninasor/sendEmail.php" method="post" id="ogrform">
		        <input type="text" name="email" placeholder="E-posta" class="bl" required />
			<br>
			<input type="password" name="pass" placeholder="Şifre" class="bl" required />
			<br>
			
			
		    <input type="submit" name="btn2" class="p3" value="Şifremi Unuttum" style="border:none;font-size:12px;text-decoration:underline;padding:0;"/>
		    
		    <br>
			<input type="submit" name="btn1" class="b1" value="Giriş"/>
			<input type="submit" name="btn" class="b2" value="Hesap Oluştur"/>
			
			
			</form>
			<form action="" method="post" id="dnmsfr">
			    <input type="password" name="danismanpass" placeholder="Danışman Şifresi" id="dnmsfr" required />
			    <br><br>
			<input type="submit" name="btn2" class="b3" value="Danışman Giriş"/>
			</form>
		</div>
			
			
	</div>
	
</div>

<div class="footer">
    <p>OMÜ Danışmanına Sor <i class="fa-solid fa-copyright"></i> Telif Hakkı</p>
</div>
  <script>
  $(document).ready(function(){
      
      $(".p2").css({"display":"none"});
      $(".b2").css({"display":"none"});
      
     $("#dnmsfr").css({"display":"none"});
      
       
  });
    $(".crt").click(function(){
        $(".p1").css({"display":"none"});
        $(".p2").css({"display":"inline-block"});
        $(".p3").css({"display":"none"});
        $(".b1").css({"display":"none"});
        $(".b2").css({"display":"inline-block"});
        $("#dnmsfr").css({"display":"none"});
        
    });
    $(".lgn").click(function(){
        $(".p2").css({"display":"none"});
        $(".p1").css({"display":"inline-block"});
        $(".p3").css({"display":"block"});
        $(".b2").css({"display":"none"});
        $(".b1").css({"display":"inline-block"});
        $("#dnmsfr").css({"display":"none"});
    });
    $("#dns").click(function(){
        $("#dnmsfr").css({"display":"block"});
        $("#ogrform").css({"display":"none"});
        $(".p1").css({"display":"none"});
        $(".p2").css({"display":"none"});
        
    });
    $("#ogr").click(function(){
        $("#dnmsfr").css({"display":"none"});
        $("#ogrform").css({"display":"block"});
        $(".p1").css({"display":"block"});
       
    });
    
</script>
<?php
if(isset($_POST["btn2"])){
            $db=new mysqli("localhost","u990586664_danisman","Eren_6161","u990586664_danisman");
            if($db->connect_error){
            die('Error'.('.$db->connect_errno.').$db->connect_error);
            }else{
                
                $pass=$_POST["danismanpass"];
                $sorgu3=$db->query("SET NAMES UTF8");
                
                $sorgu=$db->query("select * from danismanlar where sifre='$pass'");
                if($sorgu->num_rows>0){
                    $_SESSION["danisman"]=$pass;
                     echo "<script>alert('Giriş Başarılı');window.location='https://cryptoymc.com/danismaninasor/danisman.php';</script>";
                }else{
                    echo "<script>alert('Hatalı şifre girdiniz');</script>";
                }
                
                
                
            }
        
        }
?>
</body>
</html>
