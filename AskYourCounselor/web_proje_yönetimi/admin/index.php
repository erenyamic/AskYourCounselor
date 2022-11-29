<?php
session_start();
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
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    </head>
    <body class="bg-primary">
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-5">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Admin Girişi</h3></div>
                                    <div class="card-body">
                                        <form action="https://cryptoymc.com/danismaninasor/admin/" method="post">
                                            <div class="form-floating mb-3">
                                                <input class="form-control" id="inputEmail" type="text" placeholder="Kullanıcı Adı" name="username"/>
                                                <label for="inputEmail">Kullanıcı Adı</label>
                                            </div>
                                            <div class="form-floating mb-3">
                                                <input class="form-control" id="inputPassword" type="password" placeholder="Password" name="pass" />
                                                <label for="inputPassword">Şifre</label>
                                            </div>
                                            
                                            <div class="d-flex align-items-center justify-content-between mt-4 mb-0">
                                                
                                                <input type="submit" name="lgn" class="btn btn-primary" value="Giriş"/>
                                            </div>
                                        </form>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
            <div id="layoutAuthentication_footer">
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
        <?php
        
        if(isset($_POST["lgn"])){
            $username=$_POST["username"];
            $password=$_POST["pass"];
            
            $db=new mysqli("localhost","u990586664_danisman","Eren_6161","u990586664_danisman");
            if($db->connect_error){
            die('Error'.('.$db->connect_errno.').$db->connect_error);
            }else{
                $sorgu3=$db->query("SET NAMES UTF8");
                $sorgu=$db->query("select * from admin where username='$username' and password='$password'");
                if($sorgu->num_rows>0){
                    $_SESSION["admin"]="confirm";
                    echo "<script>alert('Giriş Başarılı');window.location='https://cryptoymc.com/danismaninasor/admin/admin.php';</script>";
                }else
                    echo "<script>alert('Giriş Başarısız');</script>";
            
            }
        }
        ?>
    </body>
</html>
