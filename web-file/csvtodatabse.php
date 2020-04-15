<html>
    <head>
        <title>analysing please wait</title>
         <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
   <meta http-equiv="refresh" content="30;url=https://project17i.000webhostapp.com/imageviewer.php">     
        
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
    <style>
        /* Config */
:root {
  --sk-size: 100px;
  --sk-color: #0c2e8a;
}


/* Utility class for centering */
.sk-center { margin: auto; }









/*  Grid
    <div class="sk-grid">
      <div class="sk-grid-cube"></div>
      <div class="sk-grid-cube"></div>
      <div class="sk-grid-cube"></div>
      <div class="sk-grid-cube"></div>
      <div class="sk-grid-cube"></div>
      <div class="sk-grid-cube"></div>
      <div class="sk-grid-cube"></div>
      <div class="sk-grid-cube"></div>
      <div class="sk-grid-cube"></div>
    </div>
 */
        
        .animation-container{
            padding-top: 100px;
        }
.sk-grid {
  width: var(--sk-size);
  height: var(--sk-size);
    
  /* Cube positions
   * 1 2 3
   * 4 5 6
   * 7 8 9
   */ 
 }
.sk-grid-cube {
    width: 33.33%;
    height: 33.33%;
    background-color: var(--sk-color);
    float: left;
    animation: sk-grid 1.3s infinite ease-in-out; 
}
.sk-grid-cube:nth-child(1) { animation-delay: 0.2s; }
.sk-grid-cube:nth-child(2) { animation-delay: 0.3s; }
.sk-grid-cube:nth-child(3) { animation-delay: 0.4s; }
.sk-grid-cube:nth-child(4) { animation-delay: 0.1s; }
.sk-grid-cube:nth-child(5) { animation-delay: 0.2s; }
.sk-grid-cube:nth-child(6) { animation-delay: 0.3s; }
.sk-grid-cube:nth-child(7) { animation-delay: 0.0s; }
.sk-grid-cube:nth-child(8) { animation-delay: 0.1s; }
.sk-grid-cube:nth-child(9) { animation-delay: 0.2s; }

@keyframes sk-grid {
  0%, 70%, 100% {
    transform: scale3D(1, 1, 1); 
  } 35% {
    transform: scale3D(0, 0, 1); 
  } 
}


        .animation-container{
            padding-top: 100px;
        }
        
        
        
        
        
        .frame {
	position: relative;
	top: 50%;
	
	width: 100%;
	height: 400px;
	margin-top: 10px;
	
	border-radius: 2px;
	box-shadow: 4px 8px 16px 0 rgba(0, 0, 0, 0.1);
	overflow: hidden;
	
	font-family: "Open Sans", Helvetica, sans-serif;
}

.center {
	position: absolute;
	top: 50%;
	left: 50%;
	transform: translate(-50%, -50%);
	width: 300px;
	height: 260px;
	border-radius: 3px;
	box-shadow: 8px 10px 15px 0 rgba(0, 0, 0, 0.2);
	background:#b34d4d ;
	display: flex;
	align-items: center;
	justify-content: space-evenly;
	flex-direction: column;
}

.title {
	width: 100%;

	border-bottom: 1px solid #ff0000;
	text-align: center;
}

h1 {
	font-size: 16px;
	font-weight: 3000;
	color: white;
}

h2 {
	font-size: 12px;
	font-weight: 3000;
	color: white;
}


h5 {
	font-size: 12px;
	font-weight: 3000;
	color: #50d8af;
}

h6 {
	font-size: 12px;
	font-weight: 3000;
	color: red;
}
}

.dropzone {
	width: 100px;
	height: 80px;
	border: 1px dashed #999;
	border-radius: 3px;
	text-align: center;
}

.upload-icon {
	margin: 25px 2px 2px 2px;
}

.upload-input {
	position: relative;
	top: -62px;
	left: 0;
	width: 100%;
	height: 100%;
	opacity: 0;
}

.btn {
	display: block;
	width: 140px;
	height: 40px;
	background: #e6e6e6;
	color: black;
	border-radius: 3px;
	border: 0;
	box-shadow: 0 3px 0 0 #ff0000;
	transition: all 0.01s ease-in-out;
	font-size: 14px;
}

.btn:hover {
	background:#e6e6e6;
	box-shadow: 0 3px 0 0 #50d8af ;
    color: black;
    text-justify: inter-word;
    
}
        </style>
    </head>
    <body>
    <header id="header">
    <div class="container">

      <div id="logo" class="pull-left">
        <h3><a href="#topbar" class="scrollto">Feedback <span>Analysis</span></a></h3>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="#topbar"><img src="assets/img/logo.png" alt=""></a>-->
      </div>

  
    </div>
  </header><!-- End Header -->      
        
<?php
$moved=0;
$target_dir ="imageupload/";
$newFileName = $target_dir .'uploadedcsvfile'.'.'. pathinfo($_FILES["file1"]["name"] ,PATHINFO_EXTENSION);
$filecount=0;

$filecount = 0;
$files = glob($target_dir . "*");
if ($files){
 $filecount = count($files);
}
if ($filecount==0){

if (isset($_POST["submit"])){
  
     $file_tmp =$_FILES['file1']['tmp_name'];
  
    $fileName = $_FILES["file1"]["tmp_name"];
    $info = pathinfo($_FILES["file1"]["tmp_name"]);  
    $mimes = array('application/vnd.ms-excel','text/plain','text/csv','text/tsv', 'text/comma-separated-values');
    if(in_array($_FILES['file1']['type'],$mimes)){
        if ($_FILES["file1"]["size"] > 0 ) {       
            $file = fopen($file_tmp,"r");
            $line1 = fgetcsv($file);
            $numcols = count($line1);
                if ($numcols == 1){
                    
              
               
                 
                 

                  if(move_uploaded_file($_FILES["file1"]["tmp_name"], $newFileName)){
                        ?>
       
                <center>
                <div class="animation-container">
                <div class="details">
                <h3>Successfuly Uploaded</h3>
                <span><h5></h5>analysing your file please wait..<h5></h5></span><span><h6>do not refresh or close tab !</h6></span>            
                </div>
                <div class="sk-grid">
                <div class="sk-grid-cube"></div>
                <div class="sk-grid-cube"></div>
                <div class="sk-grid-cube"></div>
                <div class="sk-grid-cube"></div>
                <div class="sk-grid-cube"></div>
                <div class="sk-grid-cube"></div>
                <div class="sk-grid-cube"></div>
                <div class="sk-grid-cube"></div>
                <div class="sk-grid-cube"></div>
                </div>
                </div>
                </center>
                <?php
                        
                    
                                
             
                          
                           
                
            } 
            else {
             ?>        
        <div class ="upload_section">        
        <div class="frame">        
	    <div class="center">
		<div class="title">
		    <h1>ERROR !</h1>
			<h2>file is not uploaded please try again</h2>  
		</div>
            <button id="myButton" class="btn" >BACK</button>      
	   </div>
            
    </div>
             
             
      
    </div>
            <?php
                    }
               
                   
                   
                   
                   
                    
    }
   
     
    else{
        
        ?>        
        <div class ="upload_section">        
        <div class="frame">        
	    <div class="center">
		<div class="title">
		    <h1>ERROR !</h1>
			<h2>selected file contains more than one columns.</h2>  
		</div>
            <button id="myButton" class="btn" >BACK</button>      
	   </div>
            
    </div>
             
             
      
    </div>
            <?php
    }

            
}
}
else{
    ?>
         <div class ="upload_section">
         <div class="frame">           
	     <div class="center">
		 <div class="title">
			<h1>ERROR!</h1>
			<h2>please select csv file</h2>            
		 </div>
             <button id="myButton" class="btn" >BACK</button>      
             </div>
             </div>
             </div>
            <?php
}
}
else{
    echo "no file selected";
}
}
else{
     ?>
         <div class ="upload_section">
         <div class="frame">           
	     <div class="center">
		 <div class="title">
			<h1>SorrY!</h1>
			<h2>servor is busy with another request please try after some times..!</h2>            
		 </div>
             <button id="myButton" class="btn" >BACK</button>      
             </div>
             </div>
             </div>
            <?php
}


?>
      
        <script type="text/javascript">
    document.getElementById("myButton").onclick = function () {
         window.history.back();
    };
</script>  
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.2/jquery-ui.min.js"></script>

<script>
    $(document).ready(function() {
        function disableBack() { window.history.forward() }

        window.onload = disableBack();
        window.onpageshow = function(evt) { if (evt.persisted) disableBack() }
    });
</script>


       
    </body>
</html>
