		  <?php
       if(isset($_POST['Submit']))
{
     $shiftingfrom=$_POST['sfrom'];
     $shiftingto=$_POST['sto'];


     $smallbhk=$_POST['1bhk'];
   $mediumbhk=$_POST['2bhk'];
   $largebhk=$_POST['3bhk'];
   $extralargebhk=$_POST['4bhk'];
   $car=$_POST['car'];
   $bike=$_POST['bike'];
   $fewitems=$_POST['fewitems'];
    $email1=array("info@Maxlogisticpackers.com","p.s.8076520597@gmail.com");
    
     $name=$_POST['name'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];

   
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
   $raza=mail($value,"Massage Has Send From Cost Calculators", $body, $headers);
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