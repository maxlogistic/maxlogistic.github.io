<!DOCTYPE html>
<html class="html">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/png" href="https://maxlogisticpackers.com/img/favicon.ico" />
    <title>Max Logistic Packers Movers || Cost Calculator</title> 
 <meta name="description" content="We seek to maintain our high standards by assigning each move to a single person">
  <link rel="canonical" href="https://maxlogisticpackers.com/about-us">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="plugins/owl.carousel/assets/owl.carousel.css">
    <link rel="stylesheet" href="plugins/owl.carousel/assets/owl.theme.default.min.css">
    <link rel="stylesheet" href="plugins/animate/animate.css">
    <!-- theme css -->
   <!--  <link rel="stylesheet" href="css/style.css">  --> 
    <link rel="stylesheet" href="css/font-awesome.css">
    <link rel="stylesheet" href="css/hover.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsive.css">
    <link rel="stylesheet" href="css/effect.css" >
    <link rel="stylesheet" href="css/jquery.fancybox.css" >

    <!-- Rev slider css -->
    <link href="plugins/revolution/css/settings.css" rel="stylesheet">
    <link href="plugins/revolution/css/layers.css" rel="stylesheet">
    <link href="plugins/revolution/css/navigation.css" rel="stylesheet">

    <link rel="stylesheet" href="css/costcalculator.css" type="text/css">


</head>

<body>

<?php $page = 'index'; include('php/header.php'); ?>

   <section class="costcalculator">
    <div class="container">
        <div class="costcalculator-container">
            <div class="costcalculator-heaiding">
            <h2>Let's Estimate Your Shipping Cost</h2>
            <h4>Get Estimate Price to manage Your moving budget</h4>
            </div>

            <div class="costcalculator-fild">
                <form id="regForm" action="cost-calculator-mail.php" method="post">
                    <!-- Circles which indicates the steps of the form: -->
                    <div style="text-align:center; margin-bottom:30px;">
                        <span class="step">Location</span>
                        <span class="step">Your Goods</span>
                        <span class="step">Your Details</span>
                    </div>
                    <!-- One "tab" for each step in the form: -->
                    <div class="tab">
                        <div class="fild">
                            <h3>Share your location details</h3>
                            <p><input placeholder="Shifting From..." oninput="this.className = ''" name="sfrom"></p>
                            <p><input placeholder="Shifting To..." oninput="this.className = ''" name="sto"></p>
                        </div>
                    </div>
                    <div class="tab">
                    <h3>Share your item details</h3>
                    <ul>
                      <div>
                      <li>
                        <input id="c1" type="checkbox">
                        <label for="c1" name="1bhk">1BHK</label>
                      </li>
                      <li>
                        <input id="c2" type="checkbox" checked>
                        <label for="c2" name="2bhk">2BHK</label>
                      </li>
                      </div>
                      <div>

                        <li>
                          <input id="c1" type="checkbox">
                          <label for="c1" name="3bhk">3BHK</label>
                        </li>
                        <li>
                          <input id="c2" type="checkbox" checked>
                          <label for="c2" name="4bhk">4BHK</label>
                        </li>
                      </div>
                      <div>

                        <li>
                          <input id="c1" type="checkbox">
                          <label for="c1" name="car">CAR</label>
                        </li>
                        <li>
                          <input id="c2" type="checkbox" checked>
                          <label for="c2" name="bike">BIKE</label>
                        </li>
                      </div>
                      <div>

                        <li>
                          <input id="c2" type="checkbox" checked>
                          <label for="c2" name="fewitems">FEW ITEMS</label>
                        </li>
                      </div>
 
                    </ul>

                    </div>
                    <div class="tab">
                    <h3>Share your contact details</h3>

                    <p><input placeholder="Name..." oninput="this.className = ''" name="name"></p>
                    <p><input placeholder="E-mail..." oninput="this.className = ''" name="email"></p>
                        <p><input placeholder="Phone..." oninput="this.className = ''" name="phone"></p>
                        
                    </div>
                    <div style="overflow:auto;">
                        <div style="float:right;">
                        <button type="button" id="prevBtn" onclick="nextPrev(-1)">Previous</button>
                        <button type="button" id="nextBtn" onclick="nextPrev(1)">Next</button>
                        </div>
                    </div>
                </form>                
            </div>
        </div>
    </div>
   </section>

  
    

    <?php $page = 'index'; include('php/footer.php'); ?>
   



    <!-- Start js -->
    <script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
    <script src="js/jquery-2.2.4.js"></script>
    <script src="plugins/bootstrap/js/bootstrap.min.js"></script>
    <script src="plugins/owl.carousel/owl.carousel.min.js"></script>

    <script src="plugins/revolution/js/jquery.themepunch.tools.min.js"></script>
    <script src="plugins/revolution/js/jquery.themepunch.revolution.min.js"></script>
    <script src="plugins/revolution/js/extensions/revolution.extension.video.min.js"></script>
    <script src="plugins/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
    <script src="plugins/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
    <script src="plugins/revolution/js/extensions/revolution.extension.navigation.min.js"></script>

    <!-- Start slider js -->
    <script src="js/nav.js"></script>
    <!-- theme js -->
    <script src="js/theme.js"></script>
    <!-- Start wow js -->
    <script src="js/wow.js"></script>
    <!-- Start gallery js -->
    <script src="js/jquery.fancybox.pack.js"></script>
    <script src="js/jquery.mixitup.min.js"></script>
    <script src="js/isotope.js"></script>
    <script src="js/gallery.js"></script>

    <script type="text/javascript">
       var currentTab = 0; // Current tab is set to be the first tab (0)
showTab(currentTab); // Display the current tab

function showTab(n) {
  // This function will display the specified tab of the form...
  var x = document.getElementsByClassName("tab");
  x[n].style.display = "block";
  //... and fix the Previous/Next buttons:
  if (n == 0) {
    document.getElementById("prevBtn").style.display = "none";
  } else {
    document.getElementById("prevBtn").style.display = "inline";
  }
  if (n == (x.length - 1)) {
    document.getElementById("nextBtn").innerHTML = "Calculate";
  } else {
    document.getElementById("nextBtn").innerHTML = "Next";
  }
  //... and run a function that will display the correct step indicator:
  fixStepIndicator(n)
}

function nextPrev(n) {
  // This function will figure out which tab to display
  var x = document.getElementsByClassName("tab");
  // Exit the function if any field in the current tab is invalid:
  if (n == 1 && !validateForm()) return false;
  // Hide the current tab:
  x[currentTab].style.display = "none";
  // Increase or decrease the current tab by 1:
  currentTab = currentTab + n;
  // if you have reached the end of the form...
  if (currentTab >= x.length) {
    // ... the form gets submitted:
    document.getElementById("regForm").submit();
    return false;
  }
  // Otherwise, display the correct tab:
  showTab(currentTab);
}

function validateForm() {
  // This function deals with validation of the form fields
  var x, y, i, valid = true;
  x = document.getElementsByClassName("tab");
  y = x[currentTab].getElementsByTagName("input");
  // A loop that checks every input field in the current tab:
  for (i = 0; i < y.length; i++) {
    // If a field is empty...
    if (y[i].value == "") {
      // add an "invalid" class to the field:
      y[i].className += " invalid";
      // and set the current valid status to false
      valid = false;
    }
  }
  // If the valid status is true, mark the step as finished and valid:
  if (valid) {
    document.getElementsByClassName("step")[currentTab].className += " finish";
  }
  return valid; // return the valid status
}

function fixStepIndicator(n) {
  // This function removes the "active" class of all steps...
  var i, x = document.getElementsByClassName("step");
  for (i = 0; i < x.length; i++) {
    x[i].className = x[i].className.replace(" active", "");
  }
  //... and adds the "active" class on the current step:
  x[n].className += " active";
}


    </script>

    <!-- end  -->
</body>

</html>