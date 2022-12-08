		  <?php
       if(isset($_POST['Submit']))
{
     $name=$_POST['textfield1'];
   $companyname=$_POST['textfield2'];
    $email1=array("info@Maxlogisticpackers.com","p.s.8076520597@gmail.com");
    
      
    $designation=$_POST['textfield3'];
    $address=$_POST['textfield4'];
    $phone=$_POST['textfield5'];
   
    
    $drawing1=$_POST['drawingroom1'];
    $drawing2=$_POST['drawingroom2'];
    $drawing3=$_POST['drawingroom3'];
    $drawing4=$_POST['drawingroom4'];
    $drawing5=$_POST['drawingroom5'];
    $drawing6=$_POST['drawingroom6'];
    $drawing7=$_POST['drawingroom7'];
    
    
    $CentreRoom1=$_POST['drawingroom8'];
    $CentreRoom2=$_POST['drawingroom9'];
    $CentreRoom3=$_POST['drawingroom10'];
    $CentreRoom4=$_POST['drawingroom11'];
    $CentreRoom5=$_POST['drawingroom12'];
    $CentreRoom6=$_POST['drawingroom13'];
    $CentreRoom7=$_POST['drawingroom14'];
    
    $DiningRoom1=$_POST['drawingroom15'];
    $DiningRoom2=$_POST['drawingroom16'];
    $DiningRoom3=$_POST['drawingroom17'];
    $DiningRoom4=$_POST['drawingroom18'];
    $DiningRoom5=$_POST['drawingroom19'];
    $DiningRoom6=$_POST['drawingroom20'];
    $DiningRoom7=$_POST['drawingroom21'];
    $DiningRoom8=$_POST['drawingroom22'];
    
    $bedroom1=$_POST['drawingroom23'];
    $bedroom2=$_POST['drawingroom24'];
    $bedroom3=$_POST['drawingroom25'];
    $bedroom4=$_POST['drawingroom26'];
    $bedroom5=$_POST['drawingroom27'];
   
    
    
    
     $Kitchen1=$_POST['drawingroom28'];
    $Kitchen2=$_POST['drawingroom29'];
    $Kitchen3=$_POST['drawingroom30'];
    $Kitchen4=$_POST['drawingroom31'];
    $Kitchen5=$_POST['drawingroom32'];
    $Kitchen6=$_POST['drawingroom33'];
    $Kitchen7=$_POST['drawingroom34'];
    $Kitchen8=$_POST['drawingroom35'];
    
    $bedroom12=$_POST['drawingroom36'];
    $bedroom22=$_POST['drawingroom37'];
    $bedroom32=$_POST['drawingroom38'];
    $bedroom42=$_POST['drawingroom39'];
    $bedroom52=$_POST['drawingroom40'];
    $bedroom62=$_POST['drawingroom41'];
    $bedroom72=$_POST['drawingroom42'];
    
    
    
    $ChildrenRoom1=$_POST['drawingroom43'];
    $ChildrenRoom2=$_POST['drawingroom44'];
    $ChildrenRoom3=$_POST['drawingroom45'];
    $ChildrenRoom4=$_POST['drawingroom46'];
    $ChildrenRoom5=$_POST['drawingroom47'];
    
    
    $Misc1=$_POST['drawingroom48'];
    $Misc2=$_POST['drawingroom49'];
    $Misc3=$_POST['drawingroom50'];
    $Misc4=$_POST['drawingroom51'];
    $Misc5=$_POST['drawingroom52'];
    $Misc6=$_POST['drawingroom53'];
    $Misc7=$_POST['drawingroom54'];
    
   
    $BathRoom1=$_POST['drawingroom55'];
    $BathRoom2=$_POST['drawingroom56'];
    $BathRoom3=$_POST['drawingroom57'];
    $BathRoom4=$_POST['drawingroom58'];
    
    $Vehicles1=$_POST['drawingroom59'];
    $Vehicles2=$_POST['drawingroom60'];
    $Vehicles3=$_POST['drawingroom61'];
   
   //echo "name:".$name."<br/>email-id:".$email."<br/>phone number:".$phone."<br/>massage:".$msg;
    $headers = "MIME-Version: 1.0\r\n";
    $headers .= "Content-type: text/html; charset=utf-8\r\n";
    $headers .= "From: ".$name." <".$name.">\r\n";
    //$headers="name:".$name."<$email>";
   $body="<table border='2px' width='500' style='background-color:#F7BE81;color:#08298A; border-color:black'>
        <tr><th colspan='2px' style='background-color:white; height:40px; color:green;font-size:20px;'>....Enquiry....</th></tr>
        <tr><th style='text-align='center'>Name:</th><th>".$_POST['textfield1']."</th></tr>
         <tr><th>Moving From:</th><th>".$_POST['textfield2']."</th></tr>
              <tr><th>Moving To:</th><th>".$_POST['textfield3']."</th></tr>
                   <tr><th>Email ID:</th><th>".$_POST['textfield4']."</th></tr>
                       <tr><th>Phone:</th><th>".$_POST['textfield5']."</th></tr>
      
    
     <tr>
     <th colspan='2'>Drawing-Room:</th>
     </tr>
     <tr>
     <td>A/c/Coolers/fan/Table Fan</td>
     <td>".$_POST['drawingroom1']."</td>
         </tr>
         <tr>
<td>T.VPortable/full size/Trolley</td>
      <td>".$_POST['drawingroom2']."</td>
          </tr>
          <tr>
<td>Sofa, 2+1</td>
       <td>".$_POST['drawingroom3']."</td>
           </tr>
           <tr>
<td>Table / Chairs</td>
        <td>".$_POST['drawingroom4']."</td>
            </tr>
      <tr>
<td>Deewan</td>
<td>".$_POST['drawingroom5']."</td>
    </tr>
    <tr>
<td>Show Case</td>
      <td>".$_POST['drawingroom6']."</td>
          </tr>
          <tr>
<td>Music System</td>
      <td>".$_POST['drawingroom7']."</td>
         </tr>
         <tr>
     <th colspan='2'>Centre Room :</th>
     </tr>
    <tr>
<td>Carpets</td>
     <td>".$_POST['drawingroom8']."</td>
         </tr>
         <tr>
<td>Writing/Side/Center Table</td>
     <td>".$_POST['drawingroom9']."</td>
         </tr>
         <tr>
<td>Chairs</td>
     <td>".$_POST['drawingroom10']."</td>
         </tr>
         <tr>
<td>Sofa 2+1</td>
     <td>".$_POST['drawingroom11']."</td>
         </tr>
         <tr>
<td>Wall Frames / Clocks</td>
     <td>".$_POST['drawingroom12']."</td>
         </tr>
         <tr>
<td>Sewing Machine</td>
     <td>".$_POST['drawingroom13']."</td>
         </tr>
         <tr>
<td>Computer</td>
     <td>".$_POST['drawingroom14']."</td>
         </tr>
         
   <tr>
   <th colspan='2'>Dining Room:</th>
   </tr>
   <tr>
<td>A/c Cooler / Fans</td>
   <td>".$_POST['drawingroom15']."</td>
       </tr>
       <tr>
<td>Dining Table (4+1/6+1)</td>
   <td>".$_POST['drawingroom16']."</td>
       </tr>
       <tr>
<td>Water Cooler</td>
    <td>".$_POST['drawingroom17']."</td>
        </tr>
        <tr>
<td>Fridge (90/165/180/289 Ltr.)</td>
    <td>".$_POST['drawingroom18']."</td>
        </tr>
<tr>
<td>Serving Trolly</td>
    <td>".$_POST['drawingroom19']."</td>
        </tr>
        <tr>
<td>Show Case</td>
     <td>".$_POST['drawingroom20']."</td>
         </tr>
         <tr>
<td>Wall Frames</td>
      <td>".$_POST['drawingroom21']."</td>
</tr>
<tr>
<td>Chest of Drawer</td>
       <td>".$_POST['drawingroom22']."</td>

       </tr>
       

    <tr>
    <th colspan='2'>BedRoom-1:</th>
    </tr>
    <tr>
<td>A/c Cooler / Fan</td>
    <td>".$_POST['drawingroom23']."</td>
        </tr>
        <tr>
<td>Double/Single Cot (Dism/Fix/Box)</td>
    <td>".$_POST['drawingroom24']."</td>
        </tr>
        <tr>
<td>Side Table / Corner Table</td>
     <td>".$_POST['drawingroom25']."</td>
         </tr>
         <tr>
<td>TV / VCR</td>
      <td>".$_POST['drawingroom26']."</td>
          </tr>
          <tr>
<td>Almirah (Big/Small Size)</td>
       <td>".$_POST['drawingroom27']."</td>
           </tr>
        <tr>
     <th colspan='2'>Children Room:</th>
     </tr>
<tr>
<td>A/c Cooler / Fans</td>
    <td>".$_POST['drawingroom28']."</td>
        </tr>
        <tr>
<td>Children Cot</td>
    <td>".$_POST['drawingroom29']."</td>
        </tr>
        <tr>
<td>Computer / Bookshelf</td>
     <td>".$_POST['drawingroom30']."</td>
         </tr>
         <tr>
<td>Chairs/Table (Folding /Fixed)</td>
      <td>".$_POST['drawingroom31']."</td>
          </tr>
          <tr>
<td>Almirah (big / Small)</td>
       <td>".$_POST['drawingroom32']."</td>
           </tr>
          <tr>
      <th colspan='2'>Kitchen:</th>
      </tr>
      <tr>
<td>Exhaust Fan</td>
      <td>".$_POST['drawingroom33']."</td> 
          </tr>
          <tr>
<td>Gas Stove</td>
        <td>".$_POST['drawingroom34']."</td>
            </tr>
            <tr>
<td>Oven / Cooking Range</td>
        <td>".$_POST['drawingroom35']."</td>
            </tr>
            <tr>
<td>Utensils</td>
        <td>".$_POST['drawingroom36']."</td>
            </tr>
            <tr>
<td>Wet Grinder / Mixie</td>
        <td>".$_POST['drawingroom37']."</td>
            </tr>
            <tr>
<td>Fridge (90/165/180/289 Ltr.)</td>
        <td>".$_POST['drawingroom38']."</td>
            </tr>
            <tr>
<td>Crockery</td>
        <td>".$_POST['drawingroom39']."</td>
            </tr>
            <tr>
<td>Microware</td>
         <td>".$_POST['drawingroom40']."</td>
          </tr>
          

    <tr>
    <th colspan='2'>BedRoom-2:</th>
    </tr>
    <tr>
<td>A/c Cooler / Fan</td>
    <td>".$_POST['drawingroom41']."</td>
        </tr>
        <tr>
<td>Double / Single Cot / Deewan</td>
    <td>".$_POST['drawingroom42']."</td>
        </tr>
        <tr>
<td>Mattress</td>
    <td>".$_POST['drawingroom43']."</td>
        </tr>
        <tr>
<td>Dresses Table</td>
    <td>".$_POST['drawingroom44']."</td>
        </tr>
        <tr>
<td>Almirah (Big /Small Size)</td>
    <td>".$_POST['drawingroom45']."</td>
        </tr>
         <tr>
<td>Show Case</td>
    <td>".$_POST['drawingroom46']."</td>
        </tr>
         <tr>
<td>Music System</td>
    <td>".$_POST['drawingroom47']."</td>
        </tr>
      
        
        <tr>
      <th colspan='2'>Misc-items :</th>
      </tr>
     <tr>
      <td>Books</td>
      <td>".$_POST['drawingroom48']."</td>
         </tr>  
         <tr>
       <td>Cloths</td>
       <td>".$_POST['drawingroom49']."</td>
           </tr>
           <tr>
<td>Flower Plots / Vas</td>
       <td>".$_POST['drawingroom50']."</td>
           </tr>
           <tr>
<td>Swing (jhoola)</td>
       <td>".$_POST['drawingroom51']."</td>
           </tr>
           <tr>
<td>Suitcases</td>
       <td>".$_POST['drawingroom52']."</td>
           
</tr>
<tr>
<td>Water Drum</td>
       <td>".$_POST['drawingroom53']."</td>
           </tr>
           <tr>
<td>Invertor / Battery</td>
        <td>".$_POST['drawingroom54']."</td>
          </tr>

     
 
   
      
     
     
     <tr>
     <th colspan='2'>Bath Room:</th>
     </tr>
     <tr>
     <td>Geyser</td>
     <td>".$_POST['drawingroom55']."</td>
         </tr>
         <tr>
     <td>Washing Machine</td>
     <td>".$_POST['drawingroom56']."</td>
         </tr>
         <tr>
     <td>Bathtub</td>
     <td>".$_POST['drawingroom57']."</td>
         </tr>
		 <tr>
     <td>Cloth Box / Stand</td>
     <td>".$_POST['drawingroom58']."</td>
         </tr>
       <tr>
       <th colspan='2'>Vehicles:</th>
      </tr>
      <tr>
<td>Scooter/Motor Cycle/Moped
</td>
       <td>".$_POST['drawingroom59']."</td>
          </tr> 
          <tr>
<td>Car	</td>
       <td>".$_POST['drawingroom60']."</td>
           </tr>
           <tr>
       <td>Cycle</td>
       <td>".$_POST['drawingroom61']."</td>
           </tr>
      
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