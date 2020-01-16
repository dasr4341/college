<?php

$dbservername="localhost";
$dbuser="root";
$dbpassword="";
$dbname="result";

$conn=mysqli_connect($dbservername,$dbuser,$dbpassword,$dbname);
if($conn)
{
    if(isset($_POST['submit']))
    {
        if($_POST['reg'])
        {
            $a=$_POST['reg'];
            $q="select sem from marks where registration='$a'";
            $x=mysqli_query($conn,$q);
            $res=mysqli_fetch_assoc($x);
            echo $res['sem'];
            $qq="select * from marks";
            $output=mysqli_query($conn,$qq);
            $re=mysqli_fetch_assoc($output);
          echo "<br>"; echo $re['registration'];
          echo "<br>";  echo $re['Name'];

        }
    }
        
}
?>