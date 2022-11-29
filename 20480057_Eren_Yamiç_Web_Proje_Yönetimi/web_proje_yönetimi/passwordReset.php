<?php

        
if(isset($_POST["rb"])){
            $db=new mysqli("localhost","u990586664_danisman","Eren_6161","u990586664_danisman");
            if($db->connect_error){
            die('Error'.('.$db->connect_errno.').$db->connect_error);
            }else{
                $res_code1=$_POST["rc"];
            session_start();
            $res_code2=$_SESSION["reset_code"];
            $sorgu3=$db->query("SET NAMES UTF8");
           $email=$_SESSION["email"];
           $password=$_POST["np"];
            if($res_code1==$res_code2){
                $sorgu1=$db->query("select * from uyeler where email='$email'");
                if($sorgu1->num_rows>0){
                    $sorgu=$db->query("update uyeler set password='$password' where email='$email'");
                    echo "<script>alert('Şifreniz Değiştirildi'); window.location='https://cryptoymc.com/danismaninasor/index.php';</script>";
                }else{
                    echo "<script>alert('Bu email ile kayıtlı bir hesabınız yok');window.location='https://cryptoymc.com/danismaninasor/index.php';</script>";
                }
                
            }else{
                echo "<script>alert('Şifre Sıfırlama Kodu Eşleşmedi');window.location='https://cryptoymc.com/danismaninasor/index.php';</script>";
            }
                
            }
        }

?>