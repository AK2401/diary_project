<?php
 $servername ="localhost";


// $username ="id17833901_akshay";
// $password ="mMHC@Y(/WDM0U?FL";
// $dbname="id17833901_diarywrite";

$username ="root";
$password ="";
$dbname="diary";


$conn =   mysqli_connect($servername,$username,$password,$dbname);

if($conn)
{
    echo " ";
}else
{
    die("Error". mysqli_connect_error());
}


?>