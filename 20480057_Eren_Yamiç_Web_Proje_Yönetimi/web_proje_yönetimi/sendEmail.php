<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>OMÜ Danışmanına Sor</title>
  <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css" integrity="sha512-10/jx2EXwxxWqCLX/hHth/vu2KY3jCF70dCQB8TSgNjbCVAC/8vai53GfMDrO2Emgwccf2pJqxct9ehpzG+MTw==" crossorigin="anonymous" referrerpolicy="no-referrer">
<script src="https://code.jquery.com/jquery-3.6.0.slim.js" integrity="sha256-HwWONEZrpuoh951cQD1ov2HUK5zA5DwJ1DNUXaM6FsY=" crossorigin="anonymous"></script>
<style>
*{
    margin:0;
    padding:0;
    box-sizing:border-box;
}
body{
    background:#f1f1f1;
     
    
}
    .box{
        width:100%;
        height:100%;
        display:flex;
        justify-content:center;
        
        padding:20px;
        
        
    }
    
    .vc,.vb{
        display:block;
        
        padding:10px;
        margin: auto;
        border-radius:10px;
        border:none;
        box-shadow:1px 1px 10px;
        
    }
    .vb{
        margin-top:30px;
    }
    .rc,.np,.rb{
        display:block;
        margin:10px;
        padding:10px;
        
        border-radius:10px;
        border:none;
        box-shadow:1px 1px 10px;
    }
    .rb{
        margin:auto;
    }
    
</style>
</head>
<body>
<div class="box">
    <form action="https://cryptoymc.com/danismaninasor/verification.php" method="post">
        <input type="text" name="vc" placeholder="Doğrulama Kodu" class="vc" required/>
        <input type="submit" name="vb" value="Doğrula" class="vb" />
    </form>
    <form action="https://cryptoymc.com/danismaninasor/passwordReset.php" method="post">
        <input type="text" name="rc" placeholder="Şifre Sıfırlama Kodu" class="rc" required/>
        <input type="text" name="np" placeholder="Yeni Şifre" class="np" required/>
        <input type="submit" name="rb" value="Kaydet" class="rb" />
    </form>
</div>

<?php

    
    if(isset($_POST["btn"])){
            $db=new mysqli("localhost","u990586664_danisman","Eren_6161","u990586664_danisman");
            if($db->connect_error){
            die('Error'.('.$db->connect_errno.').$db->connect_error);
            }else{
                
                session_start();
                $to=$_POST["email"];
                $subject="Verify Code";
                $code=rand(1000,9999);
                $_SESSION["code"]=$code;
                $_SESSION["email"]=$to;
                $_SESSION["pass"]=$_POST["pass"];
                $sorgu3=$db->query("SET NAMES UTF8");
                
                $message="Your Verify Code: " .$code;
                mail($to,$subject,$message);
                echo "<script>alert('Doğrulama kodu gönderildi mailinizi kontrol ediniz');</script>";
                
                
                
            }
        
        }else{
            echo "<script>$('.vc').css({'display':'none'});$('.vb').css({'display':'none'});</script>";
        }
        if(isset($_POST["btn1"])){
            $db=new mysqli("localhost","u990586664_danisman","Eren_6161","u990586664_danisman");
            if($db->connect_error){
            die('Error'.('.$db->connect_errno.').$db->connect_error);
            }else{
                
                session_start();
                $to=$_POST["email"];
                $_SESSION["email"]=$to;
                $pass=$_POST["pass"];
                $sorgu3=$db->query("SET NAMES UTF8");
                $sorgu=$db->query("select * from uyeler where email='$to' and password='$pass'");
                if($sorgu->num_rows>0){
                    echo "<script>alert('Giriş Başarılı');window.location='https://cryptoymc.com/danismaninasor/homepage.php';</script>";
                }else
                    echo "<script>alert('Giriş Başarısız');window.location='https://cryptoymc.com/danismaninasor/index.php';</script>";
                
                
                
            }
        }
        if(isset($_POST["btn2"])){
            $db=new mysqli("localhost","u990586664_danisman","Eren_6161","u990586664_danisman");
            if($db->connect_error){
            die('Error'.('.$db->connect_errno.').$db->connect_error);
            }else{
                session_start();
                $to=$_POST["email"];
                $sorgu3=$db->query("SET NAMES UTF8");
                $sorgu=$db->query("select * from uyeler where email='$to'");
                if($sorgu->num_rows>0){
                    $subject="Reset Code";
                    $code=rand(1000,9999);
                    $_SESSION["reset_code"]=$code;
                    $_SESSION["email"]=$to;
                    $message="Your Reset Code: " .$code;
                    mail($to,$subject,$message);
                    echo "<script>alert('Şifre sıfırlama kodunuz gönderildi. Mailinizi kontrol ediniz.');</script>";
                }else
                    echo "<script>alert('Bu email ile kayıtlı hesap bulunmamaktadır !');window.location='https://cryptoymc.com/danismaninasor/index.php';</script>";
            }
        }else{
            echo "<script>$('.rc').css({'display':'none'});$('.np').css({'display':'none'});$('.rb').css({'display':'none'});</script>";
        }
    
?>
</body>
</html>