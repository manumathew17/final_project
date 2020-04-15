<html>
    <head>
    <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>result</title>
  <meta content="" name="descriptison">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800|Montserrat:300,400,700" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/ionicons/css/ionicons.min.css" rel="stylesheet">
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
    </head>
    <body>
          <!-- ======= Header ======= -->
  <header id="header">
    <div class="container">

      <div id="logo" class="pull-left">
        <h3><a href="#topbar" class="scrollto">Feedback <span>Analysis</span></a></h3>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="#topbar"><img src="assets/img/logo.png" alt=""></a>-->
      </div>

   
    </div>
  </header>
  <!-- End Header -->
  
  
  
<?php
$positivecount=0;
$negativecount=0;
$neutralcount=0;
function getresult(){
$directory = "imageupload/";
$filecount = 0;
$files = glob($directory . "*");
if ($files){
 $filecount = count($files);
}
if ($filecount>0){
unlink("imageupload/uploadedcsvfile.csv");

}
$servername = "remotemysql.com";
$username = "mi3cVqPqNO";
$password = "xqVF2riQ3D";
$database = "mi3cVqPqNO";

$db = mysqli_connect($servername, $username, $password, $database);
$sql = "SELECT * FROM mi3cVqPqNO.outputs";




$sth = $db->query($sql);
$rows = mysqli_num_rows($sth);
if($rows>0){
  
$result=mysqli_fetch_array($sth);
$positivecount=$result['positive_count'];
$negativecount=$result['negative_count'];
$neutralcount=$result['neutral_count'];
?>

 <section class="bg-dark">
              <div class="p-1  bg-dark"></div>
 <div class="container bg-light">
  <div class="row justify-content-center text-center bg-white">
   <div class="col-12 bg-dark text-white">
    <h1 class="pb-3 bg-dark text-white">RESULTS</h1>
        <div class="p-3 border bg-white"></div> 
   </div>
     
   <div class="col-md-4 bg-success text-white">
       
    <span id="count1" class="display-4"></span>
       <h6 class="pb-3">POSITIVE COMMENTS</h6>
   </div>
      <div class="p-4  bg-white"></div>
   <div class="col-md-4 bg-danger text-white">
      
    <span id="count2" class="display-4"></span>
       <h6 class="pb-3">NEGATIVE COMMENTS</h6>
   </div>
      <div class="p-4 bg-white"></div>
   <div class="col-md-4 bg-info text-white">
       
    <span id="count3" class="display-4"></span>
       <h6 class="pb-3">NEUTRAL COMMENTS</h6>
   </div>
      <div class="p-4 bg-white"></div>
  </div>
 </div>
</section>
        <div class="p-4  bg-dark"></div>
        
  

    <section id="about" class="wow fadeInUp">
      <div class="container">
           <h2>BAR GRAPH</h2>
        <div class="row justify-content-center ">
          <div class="col-lg-6 about-img">
             <?php
          echo '<img src="data:image/jpeg;base64,'.base64_encode( $result['graph1'] ).'"/>';
          ?>
          </div>

          <div class="col-lg-6 content">
           

            <ul>
              <li><i class="ion-android-checkmark-circle"></i> green represnt positive</li>
              <li><i class="ion-android-checkmark-circle"></i> red represnt negative</li>
              <li><i class="ion-android-checkmark-circle"></i> blue represent neutral</li>
            </ul>

          </div>
        </div>


      </div>
    </section>
                    <section id="about" class="wow fadeInUp">
      <div class="container">
           <h2>MOST REPEATED POSITIVE WORDS</h2>
        <div class="row">
          <div class="col-lg-6 about-img">
             <?php
          echo '<img src="data:image/jpeg;base64,'.base64_encode( $result['posworldcount'] ).'"/>';
          ?>
          </div>

          <div class="col-lg-6 content">
            

            <ul>
              <li><i class="ion-android-checkmark-circle"></i> We accept only csv file.</li>
              <li><i class="ion-android-checkmark-circle"></i> The file should contain only one column, that is the original feedback.</li>
              <li><i class="ion-android-checkmark-circle"></i> Click the upload button and wait for few minutes</li>
            </ul>

          </div>
        </div>


      </div>
    </section>
                    <section id="about" class="wow fadeInUp">
      <div class="container">
          <h2>MOST REPEATED POSITIVE WORDS</h2>
        <div class="row">
            
          <div class="col-lg-6 about-img">
          <?php
          echo '<img src="data:image/jpeg;base64,'.base64_encode( $result['negworldcount'] ).'"/>';
          ?>
          </div>

          <div class="col-lg-6 content">
            
           

            <ul>
              <li><i class="ion-android-checkmark-circle"></i> We accept only csv file.</li>
              <li><i class="ion-android-checkmark-circle"></i> The file should contain only one column, that is the original feedback.</li>
              <li><i class="ion-android-checkmark-circle"></i> Click the upload button and wait for few minutes</li>
            </ul>

          </div>
        </div>


      </div>
    </section>
        <script>
        document.addEventListener("DOMContentLoaded", () => {
 function counter(id, start, end, duration) {
  let obj = document.getElementById(id),
   current = start,
   range = end - start,
   increment = end > start ? 1 : -1,
   step = Math.abs(Math.floor(duration / range)),
   timer = setInterval(() => {
    current += increment;
    obj.textContent = current;
    if (current == end) {
     clearInterval(timer);
    }
   }, step);
 }
 counter("count1", 0, <?php echo $positivecount ?>, 3000);
 counter("count2", 0,  <?php echo $negativecount ?>, 2500);
 counter("count3", 0, <?php echo $neutralcount ?>, 3000);
});
</script>

<?php


$sqldelete = "DELETE FROM mi3cVqPqNO.outputs";
$sth1 = $db->query($sqldelete);
mysqli_close($db);

    die();
}      
else{
   mysqli_close($db);
   
    
   
    sleep(60);
    
 getresult();
}
}
 getresult();
?>
        
       

    </body>
</html>
