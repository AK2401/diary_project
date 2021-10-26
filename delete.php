
<?php
include("connetion.php");
 $post_id= $_GET['id'];
$query="DELETE FROM content WHERE id='$post_id'";
$data= mysqli_query($conn,$query);
echo "<script>
    window.location.href = 'view.php';

    </script>";
?>

