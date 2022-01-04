<?php
error_reporting(0);
 $date=date('d-M-Y');
 $subject = 'inquiry on DDM SIGNS.com '.$date.'';
$user_name=$_POST['user_name'];
$user_email=$_POST['user_email'];
$user_phone=$_POST['user_phone']; 
 
 $msg=$_POST['msg']; 
   

// message
$message = '
<html>
<head><meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
   
</head>
<body>
   

 <br>

<br> 
  <table>
    <tr>
      <td> Name : '.$user_name.'</td> 
    </tr>
    <tr>
      <td>Email : '.$user_email.'</td> 
    </tr>
     <tr>
      <td>Phone :'.$user_phone.'</td> 
    </tr> 
      
    <tr>
      <td>Message: '.$msg.'</td> 
    </tr>
     <tr>
      <td>'.$date.'</td> 
    </tr>
  </table>
</body>
</html>
';

// To send HTML mail, the Content-type header must be set
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

// Additional headers
$headers .= 'To: DDMSIGNS.com<sales@ddmsigns.com>, DDMSIGNS.com <sales@ddmsigns.com>' . "\r\n";
$headers .= 'From: DDMSIGNS.com <sales@ddmsigns.com>' . "\r\n";

mail("sales@ddmsigns.com", $subject, $message, $headers);
   
 echo "<script>alert('Post Successful ! Will Get Back Shortly.')</script>";
 echo "<script>window.open('index.html','_self')</script>";
 
                  ?>