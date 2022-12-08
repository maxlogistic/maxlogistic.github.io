		  <?php
       if(isset($_POST['Submit']))
{
     $name=$_POST['textfield1'];
   $companyname=$_POST['textfield2'];
    $email1=array("info@Maxlogisticpackers.com","p.s.8076520597@gmail.com");
    
      
    $address=$_POST['textfield4'];
    $phone=$_POST['textfield5'];

   
   //echo "name:".$name."<br/>email-id:".$email."<br/>phone number:".$phone."<br/>massage:".$msg;
    $headers = "MIME-Version: 1.0\r\n";
    $headers .= "Content-type: text/html; charset=utf-8\r\n";
    $headers .= "From: ".$name." <".$name.">\r\n";
    //$headers="name:".$name."<$email>";
   $body="<table border='2px' width='500' style='background-color:#F7BE81;color:#08298A; border-color:black'>
        <tr><th colspan='2px' style='background-color:white; height:40px; color:green;font-size:20px;'>....Enquiry....</th></tr>
        <tr><th style='text-align='center'>Name:</th><th>".$_POST['textfield1']."</th></tr>
         <tr><th>Comment:</th><th>".$_POST['textfield2']."</th></tr>
                   <tr><th>Email ID:</th><th>".$_POST['textfield4']."</th></tr>
                       <tr><th>Phone:</th><th>".$_POST['textfield5']."</th></tr>
      
            </table>";
   foreach ($email1 as $value)
  {
   $raza=mail($value,"Massage Has Send From Sahara Packers", $body, $headers);
  }
    if($raza)
    {
        header('Location: thankyou.php');
        exit;
    }
     
    else
    {
        echo" sorry....";
    }
}




?>