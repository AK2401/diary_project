

<?php

include("connetion.php");
session_start();


?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Profile</title>
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v5.15.4/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />

    </head>
    <body>
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-light" id="mainNav">
            <div class="container px-4 px-lg-5">
                <!-- <a class="navbar-brand" href="index.html">Start Bootstrap</a> -->
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ms-auto py-4 py-lg-0">
                    
                        <!-- <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="about.php">Profile</a></li> -->
                        <!-- <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="write.php">Add Diary Content</a></li> -->
                        
                        <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="about.php">Profile</a></li>
                        <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="write.php">Add Diary Content</a></li>
                        <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="logout.php">Logout</a></li>

                        <!-- <button style="padding:1px;"   class="w3-button w3-green"><a href="logout.php">Logout</a></button> -->
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Page Header-->
        <header class="masthead" style="background-image: url('bookpic3.jpg')">
            <div class="container position-relative px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-md-10 col-lg-8 col-xl-7">
                        <div class="page-heading">
                            <i>  <h1>!! WELCOME !!</h1></i>
                           <i> <h1>Profile</h1></i>
                       
                 
            <?php

$userprofile = $_SESSION['username'];

if($userprofile==true)
{

}
else{

     header('location: login.php');
}



$query="SELECT * FROM data WHERE username='$userprofile'";
$data=mysqli_query($conn,$query);
$result=mysqli_fetch_assoc($data);
$_SESSION['u_id']=$result['id'];
?><center>
<img src="<?php echo "photo/".$result['image']?>" height='100' width='100'/><br/>
</center>
<?php
echo "<tr>
                 <center>
               
                 <td>  FIRST NAME:-    ".$result['firstname']."</td> <br>
                 <td>    LAST NAME:-    ".$result['lastname']."</td> <br>
            MOBAILE NUMBER:-<td>".$result['mob']."</td><br>
            EMAIL ID:-      <td>".$result['email']."</td><br>
            GENDER:-       <td>".$result['gender']."</td><br>
            DATE:-          <td>".$result['date']."</td>
                </center>
               
        </tr>";



?>




</table>
</center>

</div>
                    </div>
                </div>
            </div>
            </header>






        
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>
 <!-- Footer-->
 <footer class="border-top">
            <div class="container px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-md-10 col-lg-8 col-xl-7">
                        <ul class="list-inline text-center">
                            <li class="list-inline-item">
                                <a href="#!">
                                    <span class="fa-stack fa-lg">
                                        <i class="fas fa-circle fa-stack-2x"></i>
                                        <i class="fab fa-twitter fa-stack-1x fa-inverse"></i>
                                    </span>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#!">
                                    <span class="fa-stack fa-lg">
                                        <i class="fas fa-circle fa-stack-2x"></i>
                                        <i class="fab fa-facebook-f fa-stack-1x fa-inverse"></i>
                                    </span>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#!">
                                    <span class="fa-stack fa-lg">
                                        <i class="fas fa-circle fa-stack-2x"></i>
                                        <i class="fab fa-github fa-stack-1x fa-inverse"></i>
                                    </span>
                                </a>
                            </li>
                        </ul>
                        <div class="small text-center text-muted fst-italic">Copyright &copy; Dear Diary 2021</div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js">   </script>
       