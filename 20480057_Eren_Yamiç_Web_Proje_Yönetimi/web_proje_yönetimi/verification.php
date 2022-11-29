<?php

        
if(isset($_POST["vb"])){
            $db=new mysqli("localhost","u990586664_danisman","Eren_6161","u990586664_danisman");
            if($db->connect_error){
            die('Error'.('.$db->connect_errno.').$db->connect_error);
            }else{
                $c1=$_POST["vc"];
            session_start();
            $c2=$_SESSION["code"];
           $email=$_SESSION["email"];
           $password=$_SESSION["pass"];
           $dizi=explode("@",$email);
           $username=$dizi[0];
            if($c1==$c2){
                $sorgu1=$db->query("select * from uyeler where email='$email'");
                if($sorgu1->num_rows==0){
                    $sorgu=$db->query("insert into uyeler(email,password,username) values('$email','$password','$username')");
                    echo "<script>alert('Doğrulama Başarılı'); window.location='https://cryptoymc.com/danismaninasor/index.php';</script>";
                }else{
                    echo "<script>alert('Bu email ile kayıtlı hesabınız var');window.location='https://cryptoymc.com/danismaninasor/index.php';</script>";
                }
                
            }else{
                echo "<script>alert('Doğrulama Başarısız');window.location='https://cryptoymc.com/danismaninasor/index.php';</script>";
            }
                
            }
        }

?>