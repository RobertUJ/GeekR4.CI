<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />

  <!-- Always force latest IE rendering engine (even in intranet) & Chrome Frame 
       Remove this if you use the .htaccess -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

  <title>templates</title>
  <meta name="description" content="" />
  <meta name="author" content="RobertUJ" />

  <meta name="viewport" content="width=device-width; initial-scale=1.0" />

  <!-- Replace favicon.ico & apple-touch-icon.png in the root of your domain and delete these references -->
  <link rel="shortcut icon" href="/favicon.ico" />
  <link rel="apple-touch-icon" href="/apple-touch-icon.png" />
  
  <!-- Style -->
  <link rel="stylesheet" media="screen" type="text/css" href="<?= base_url(); ?>assets/css/reset.css" />
  
  <!-- Script -->
  <script type="text/javascript" language="JavaScript" src="<?= base_url();?>assets/js/jquery.js"></script>
  <script type="text/javascript" language="JavaScript" src="<?= base_url();?>assets/js/js.js"></script>
  
  
</head>

<body>
  <div>
    <header>
      <h1 id="tst">templates</h1>
    </header>
    <nav>
      <p><a href="/GeekR4.CI">Home</a></p>
      <p><a href="/contact">Contact</a></p>
    </nav>

    <div>
      
    </div>

    <footer>
     <p>&copy; Copyright  by RobertUJ</p>
    </footer>
  </div>
  
<script type="text/javascript" language="JavaScript">
$(document).ready(function(){
	$("#tst").click(function(e){
            e.preventDefault();
            alert("test");
	});
                
});

</script>
  
</body>
</html>
