<?php

$dbservername="localhost";
$dbuser="root";
$dbpassword="";
$dbname="result";

$conn=mysqli_connect($dbservername,$dbuser,$dbpassword,$dbname);
if($conn)
{
    $q="select * from marks";
    $output=mysqli_query($conn,$q);
}
?>
<!DOCTYPE html>
<html lang="zxx">
   <head>
      <title>*************************</title>
      <!--meta tags -->
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="keywords" content="Lecturing Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
         Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
      <script>
         addEventListener("load", function () {
         	setTimeout(hideURLbar, 0);
         }, false);
         
         function hideURLbar() {
         	window.scrollTo(0, 1);
         }
      </script>
      <!--//meta tags ends here-->
      <!--booststrap-->
      <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" media="all">
      <!--//booststrap end-->
      <!-- font-awesome icons -->
      <link href="css/font-awesome.min.css" rel="stylesheet">
      <!-- //font-awesome icons -->
      <!--stylesheets-->
      <link href="css/style.css" rel='stylesheet' type='text/css' media="all">
      <!--//stylesheets-->
      <link href="//fonts.googleapis.com/css?family=Fira+Sans:400,500,600,700" rel="stylesheet">
      <link href="//fonts.googleapis.com/css?family=Oxygen:400,700" rel="stylesheet">
   </head>
   <body>
      <div class="main-top" id="home">
         <!-- header -->
         <div class="headder-top">
               <!-- nav -->
               <nav >
                  <div id="logo">
                     <h1><a href="index.html">Result</a></h1>
                  </div>
                  <label for="drop" class="toggle">Menu</label>
                  <input type="checkbox" id="drop">
                  <ul class="menu mt-2">
                     
                       
            
                     <li><a href="contact.html">Contact Us</a></li>
                  </ul>
               </nav>
               <!-- //nav -->
            </div>
         <!-- //header -->
         <!-- banner -->
         <div class="main-banner text-center">
            <div class="container">
               <div class="style-banner ">
                  <h4 class="mb-lg-3 mb-2">THIRD SEMESTER </h4>
                  
                           <table align="center" bgcolor="cyan"border=3px bordercolor="black" style="width:600px; line-height:40px;">
                           <tr>
                              <td colspan="5">
                                 MARKS</td></tr>
                              <tr>
                                 <th>name</th>
                                 <td>id</td>
                                 <td>sem</td>
                                 <td>Registration number</td>
                                 
                                 
                              </tr>
                              <?php
                              while($x=mysqli_fetch_assoc($output))
                              {
                            ?>
                      
                             <tr>
                             <td ><font color="black"> 
                             <?php echo $x['Name']; ?></td>
                             <td> <?php echo $x['id']; ?> </td>
                             <td> <?php echo $x['sem']; ?> </td>
                             <td> <?php echo $x['registration']; ?> </td>
                             
                             </font>
                             </tr>
                      
                             <?php
                          }
                          ?>
                           </table>

                           <div class="view-buttn mt-md-4 mt-sm-4 mt-3">
                  <a href="" class="btn">About Us</a>
               </div>


                
               </div>
               <div class="two-demo-button mt-lg-5 mt-md-4 mt-3">
             
               </div>
              
            </div>
         </div>
      </div>
      <!-- //banner -->
      <!-- about -->

      <!--//team -->
      <!-- footer -->
      <footer class="py-lg-4 py-md-3 py-sm-3 py-3" >
         <div class="container py-lg-5 py-md-5 py-sm-4 py-3">
            <div class="row">
               <div class="col-lg-6 col-md-7 footer-left-grid">
                  <div class="footer-w3layouts-head">
                     <h2><a href="index.html">*************** OF ENGINEERING</a></h2>
                  </div>
                  <div class="mb-1 pt-lg-5 pt-md-4 pt-3 footer-address">
                     <ul>
                        <li>
                           <h4>Get In Touch</h4>
                        </li>
                        <li>
                           <p>Block A, Phase III,
******, ****** - 741235 West Bengal
Reception and Accounts: 033 2************</p>
                        </li>
                     </ul>
                  </div>
                  <div class="mb-1 footer-address">
                     <ul>
                        <li>
                           <h4>Email</h4>
                        </li>
                        <li>
                           <p><a href="">info.*******@****.org</a> 
                           </p>
                        </li>
                     </ul>
                  </div>
                  <div class="mb-1 footer-address">
                     <ul>
                        <li>
                           <h4>Phone</h4>
                        </li>
                        <li>
                           <p>033 2582 2138</p>
                        </li>
                     </ul>
                  </div>
               </div>
               <div class="footer-info-bottom col-lg-6 col-md-5">
                  
                  </div>
               </div>
            </div>
            <div class="bottem-wthree-footer text-center pt-lg-5 pt-md-4 pt-3">
               <p> 
              ************************.
               </p>
            </div>
            <!-- move icon -->
            <div class="text-center">
               <a href="#home" class="move-top text-center mt-3"></a>
            </div>
            <!--//move icon -->
         </div>
      </footer>
      <!--//footer -->
   </body>
</html>