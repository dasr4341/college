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
        if($_POST['marks']&&$_POST['reg']&&$_POST['nam'])
        {

        
                echo "submitted";
                $registration= $_POST['reg'];
                $num=$_POST['marks'];
                $name=$_POST['nam'];
                $q="insert into marks(registration,sem,Name) values('$registration','$num','$name')";
                $output=mysqli_query($conn,$q);
                if($output)
                {
                    echo "success";
                    header ("location: index.php");
                }
                else{
                    echo "failed ";
                }


        }else{
            header ("location: main.php"); 
        }
        

    }
    if(isset($_POST['main']))
    {
        header ("location: main.php");
    }
    
}
?>