<?php
$server = "localhost";
	$login = "root";
	$password1 = "chai";
  
        // Connect to the database
        $dbLink = mysqli_connect($server, $login, $password1,'test');
        if(mysqli_connect_errno()) {
            die("MySQL connection failed: ". mysqli_connect_error());
        }
       // echo "gcgcgc";
        // Gather all required data
        $name=$_GET["usernamesignup"];
        $email=$_GET["emailsignup"];
        $pass=$_GET["passwordsignup"];
         //$passconf=$_GET["passwordsignup_confirm"];
        $query = "INSERT INTO login (name,email,password) values('$name', '$email', '$pass')";
           
        // Execute the query
        $result = mysqli_query($dbLink,$query);
 
        // Check if it was successfull
       
            echo" <html>";
  echo" <head>";
echo"<style>";
echo"div.background";
  echo"{";
  echo"width:1400px;";
  echo"height:900px;";
 
    echo "}";
echo "div.transbox";
 echo" {";
  echo "width:1200px;";
  echo "height:1500px;";
  echo"margin:30px 50px;";
  echo "background-color:#ffffff;";
  echo "border:0px solid black;";
  echo " opacity:0.8;";
  echo"filter:alpha(opacity=60);"; /* For IE8 and earlier */
  echo"}";
echo "div.transbox p";
  echo"{";
  echo"margin:30px 40px;";
  echo"font-weight:bold;";
  echo"color:#000000;";
  echo"}";
  echo".transbox{";
echo"position:absolute;";
echo"top:355px;";
echo"left:20px;";
echo"}";
echo".two{";
echo"position:absolute;";
echo"top:300px;";
echo"left:100px;";
echo"}";	
echo".one{";
echo"position:absolute;";
echo"top:60px;";
echo"left:200px;";
echo"}";	
echo".four{";
echo"position:absolute;";
echo"top:60px;";
echo"left:600px;";
echo"}";
echo"</style>";
echo"</head>";
	
    echo"<body background=po.jpg>";

echo"<center>";
echo'<img src="en.png" width="1000" height="98" alt="Cup of coffee on saucer" />';
echo"</center>";
echo'<iframe frameborder="0" scrolling="no" width="1350" height="300"
   src="poo.jpg" name="imgbox" id="imgbox" style="position: absolute; top: 100px; left:0px;">';
   echo"</iframe>";
echo'<div class="background">';
echo'<div class="transbox">';
 if($result) {
      echo"<br>";echo"<br>";echo "&nbsp";echo "&nbsp";echo "&nbsp";echo "&nbsp";echo "&nbsp";
           echo"<font size=5 face=Times New Roman color=black>";
            echo 'Success! You have signed up successfully !';
           
           echo"</font>";
            echo'<img src="suc.jpg" width="800" height="400" alt="Cup of coffee on saucer" />';
            //echo "<script type\"text/javascript\">";
            //echo "alert('Success! Your file was successfully added!')";
            //echo "</script>";
             //header("Location:index1.html");
        }
        else {
            echo"<br>";echo"<br>";echo "&nbsp";echo "&nbsp";echo "&nbsp";echo "&nbsp";echo "&nbsp";
            echo"<font size=5 face=Times New Roman color=black>";
            echo ' Failed to Register'
               . "<pre>{$dbLink->error}</pre>";
               echo"</font>";
                echo'<img src="fail.png" width="800" height="400" alt="Cup of coffee on saucer" />';
            //  header("Location:index1.html");  
        }
   
   echo"</div>";
        echo"</div>";


    // Close the mysql connection
    $dbLink->close();
echo'<div class="two">';
echo"<h1>" ;
// Echo a link back to the main page

echo '<p>Click <a href="index1.html">here</a> to go back</p>';echo"</h1>";
echo"</div>";
echo"</body>";
echo"</html>";
?>