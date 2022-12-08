<!DOCTYPE html>
<html class="html">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/png" href="https://maxlogisticpackers.com/img/favicon.ico" />
    <title>Max Logistic Packers Movers || Tracking</title> 
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
    


</head>
<body>

<?php $page = 'index'; include('php/header.php'); ?>
        
        <!--================Banner Area =================-->
        <section class="banner_area_plane">
            <div class="container">
                <div class="banner_content">
                    <h3>Tracking</h3>
                </div>
            </div>
        </section>
        <div class="banner_link">
            <div class="container">
                <div class="b_crum_link_inner">
                    <a class="active" href="index">Home</a>
                    <a href="about-us">Tracking</a>
                </div>
            </div>
        </div>
        <!--================End Banner Area =================-->
        
        <section>
          <div class="container">
            <div class="row">
              <div class="col-12">
              <div class="tracking">
  <div class="container">
    <?php if(isset($this->error)):?>
      <div class="alert alert-danger">
        <strong>Danger!</strong> <?php echo $this->error; ?>
      </div>
    <?php endif ?>
      <div class="row">
        <div class="col-sm-3">
          <div class="panel panel-default">
            <div class="panel-heading">TRACK YOUR PARCEL</div>
            <div class="panel-body">
              <div class="card-view">
                <div class="card-header">
                  <h4>Get Status Online</h4>
                </div>
                <form action="<?php echo url ?>Consignment_Tracking/run" method="POST">
                  <div class="form-group">
                    <input type="text" class="form-control" id="docket" name="docket_no">
                  </div>
                  <button type="submit" name="submit" class="btn btn-success">Submit</button>
                </form>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-9 left-border">
          <h4>DOCKET TRACKER</h4>
          <form action="<?php echo url ?>Consignment_Tracking/run" method="POST">
            <div class="form-group">
              <label> Docket No (s).</label>
              <input type="text" class="form-control" id="docket" name="docket_no">
            </div>
            <button type="submit" name="submit" class="btn btn-success">Submit</button>
          </form>
          <div class="table-div">
            <table class="table">
              <thead>
                <tr>
                  <th>Docket No</th>
                  <th>Reference No</th>
                  <th>Origin</th>
                  <th>Curent Status</th>
                  <th>Destination</th>
                  <th>Pickup Date</th>
                  <th>Package</th>
                  <th>Status</th>
                </tr>
              </thead>
              <tbody>
                <?php  if(isset($this->docketdata)){
                   foreach($this->docketdata as $docket){?>
            				<tr>
            			<?php	foreach($docket as $key=>$value){?>
            					<th><?php echo $value ?></th>
            			<?php	}?>
            			</tr>
            		  <?php	}
                }?>

              </tbody>
            </table>
          </div>

        </div>
      </div>

  </div>
</div>
              </div>
            </div>
          </div>
        </section>
       


        
        <?php $page = 'index'; include('php/footer.php'); ?>
        <!--================End Footer Area =================-->
       
        
        
<!-- Start js -->
<script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="js/jquery-2.2.4.js"></script>
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

    </body>

</html>