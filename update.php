
<?php

include("connetion.php");
session_start();
 $post_id= $_GET['id'];
$query="SELECT * FROM content WHERE id=' $post_id'";
$data= mysqli_query($conn,$query);
$result=mysqli_fetch_assoc($data);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Clean Blog - Start Bootstrap Theme</title>
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
                    
                        <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="about.php">Profile</a></li>
                        <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="write.php">Add Diary Content</a></li>
                        <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="view.php">View</a></li>
                        <button style="padding:1px;"   class="w3-button w3-green"><a href="logout.php">Logout</a></button>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Page Header-->
        <header class="masthead" style="background-image: url('img2.jpg')">
            <div class="container position-relative px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-md-10 col-lg-8 col-xl-7">
                        <div class="post-heading">
                        <center>
        <form  method="POST" action="#" >
      
    
      <!-- <p><input value="" class="w3-input w3-padding-16 w3-border" type="datetime-local" placeholder="Date and time"  name="date" required><?php echo $result['date']; ?></p> -->
      <p><input  value="<?php echo $result['tital']; ?>"  class="w3-input w3-padding-16 w3-border" type="text" placeholder="Titale"  name="tital" required></p>
      <p> <textarea    value=""   name="text" id="" cols="30" rows="10" placeholder="Write your Diary"  ><?php echo $result['text']; ?></textarea></p>
      <p><button class="w3-button w3-black w3-block" name="submit" type="submit">Submit Dialy Diary</button></p>
    </form>
    </center>
                        </div>
                    </div>
                </div>
            </div>
        </header>
      
       
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
                        <div class="small text-center text-muted fst-italic">Copyright &copy; Your Website 2021</div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js">   </script>

        <?php

if(isset($_POST['submit']))
{

    
// $date= $_POST['date'];
$tital= $_POST['tital'];
$text= $_POST['text'];

$query="UPDATE content SET  tital='$tital',text='$text' WHERE id='$post_id' ";
$data= mysqli_query($conn,$query);
if($data)
{
    echo "<script>
    window.location.href = 'view.php';

    </script>";
    
    // echo "Record upadate sucessfuly"; password IF]3&36h<up-}q~f
}else
{
    echo "Record Not Upadate";
}


}
?>
 
    </body>
</html>
