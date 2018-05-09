<?php
if(isset($_POST['email'])) {
	
	// CHANGE THE TWO LINES BELOW
	$email_to = "ilamin@fabilon.com";
	
	$email_subject = "Fabilon contact";
	
	
	function died($error) {
		// your error code can go here
		echo "Nous sommes désolés, mais le formulaire que vous avez soumis contient des erreurs.<br /><br />"; 
		// "We're sorry, but there's errors found with the form you submitted.<br /><br />";
		echo $error."<br /><br />";
		echo "Veuillez revenir en arrière et corriger ces erreurs.<br /><br />";
		// "Please go back and fix these errors.<br /><br />";
		die();
	}
	
	// validation expected data exists
	if(!isset($_POST['name']) ||
		!isset($_POST['email']) ||
		!isset($_POST['comments'])) {
		died('Nous sommes désolés, mais il semble y avoir un problème avec le formulaire que vous avez soumis.');
		// 'We are sorry, but there appears to be a problem with the form you submitted.'		
	}
	
	$name = $_POST['name']; // required
	$email_from = $_POST['email']; // required
	$comments = $_POST['comments']; // required
	
	$error_message = "";
	$email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
  if(!preg_match($email_exp,$email_from)) {
  	$error_message .= 'L`adresse e-mail que vous avez saisie ne semble pas valide.<br />';
  }	// 'The Email Address you entered does not appear to be valid.<br />'
	$string_exp = "/^[A-Za-z .'-]+$/";
  if(!preg_match($string_exp,$name)) {
  	$error_message .= 'Le nom que vous avez entré ne semble pas être valide.<br />';
  } // 'The First Name you entered does not appear to be valid.<br />'
  if(strlen($comments) < 2) {
  	$error_message .= 'Les commentaires que vous avez entrés ne semblent pas être valides.<br />';
  } // 'The Comments you entered do not appear to be valid.<br />'
  if(strlen($error_message) > 0) {
  	died($error_message);
  }
	$email_message = "Message details below.\n\n";
	
	function clean_string($string) {
	  $bad = array("content-type","bcc:","to:","cc:","href");
	  return str_replace($bad,"",$string);
	}
	
	$email_message .= "Name: ".clean_string($name)."\n";
	$email_message .= "Email: ".clean_string($email_from)."\n";
	$email_message .= "Comments: ".clean_string($comments)."\n";
	
	
// create email headers
$headers = 'From: '.$email_from."\r\n".
'Reply-To: '.$email_from."\r\n" .
'X-Mailer: PHP/' . phpversion();
@mail($email_to, $email_subject, $email_message, $headers);  
?>

<!-- place your own success html below -->


<!DOCTYPE html>
<html lang="en">

<head>
<title>Fabilon - Affichage de produits locaux</title>
<meta charset="utf-8">    
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<meta name="description" content="Your description">
<meta name="keywords" content="Your keywords">
<meta name="author" content="Your name">
<meta name = "format-detection" content = "telephone=no" />

<!--Favicon-->
<link rel="icon" href="img/Fabilon_favicon-B_2017.ico" type="image/ico" sizes="16x16">

<!--CSS-->
<link rel="stylesheet" href="css/bootstrap.css" >
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/camera.css">
<!--JS-->
<script src="js/jquery.js"></script>
<script src="js/jquery-migrate-1.2.1.js"></script>
<script src="js/superfish.js"></script>
<script src="js/jquery.easing.1.3.js"></script>
<script src="js/jquery.mobilemenu.js"></script>
<script src="js/jquery.cookie.js"></script>
<script src="js/jquery.ui.totop.js"></script>
<script src="js/camera.js"></script>
<!--[if (gt IE 9)|!(IE)]><!-->
      <script src="js/jquery.mobile.customized.min.js"></script>
<!--<![endif]-->
<script src="js/jquery.equalheights.js"></script>
<script src="js/jquery.carouFredSel-6.1.0-packed.js"></script>
<script src="js/jquery.mousewheel.min.js"></script>
<script src="js/jquery.touchSwipe.min.js"></script>
<script>
    $(document).ready(function(){
        jQuery('.camera_wrap').camera();
    });
</script> 
<script>
$(window).load(function() {
    $(function() {
            $('#foo2').carouFredSel({
				auto: false,
				responsive: true,
				width: '100%',
				prev: '#prev2',
				next: '#next2',
				scroll: 1,
				items: {
					height: 'auto',
					width:230,
					visible: {
						min: 1,
						max: 6
					}
				},
				mousewheel: true,
				swipe: {
					onMouse: true,
					onTouch: true
				}
			});
		}); 	 				
    });
</script> 

<!--Font awesome for social media footer Icons-->
<script src="https://use.fontawesome.com/064d9358a8.js"></script>

</head>


<body>
<div class="global">

<header>
<!--Header bar-->
    <div class="followBox">
        <div id="header_bar_top" class="container">
            <!--<a href="#">English</a>-->
        </div>
    </div>
<!--Header bar ends-->
    <div class="container">
<!--Logo-->
        <h1 class="navbar-brand navbar-brand_">
            <a href="index.html">
                <img src ="img\Fabilon_Logo_2017.png">
            </a>
        </h1>
    </div>
</header>
    <hr id="header_separator" class="visible-xs">


<div class="container">
    <div id="jumbotron_2" class="jumbotron">
        <p id="jumb_parag_1">Merci d'avoir contacté Fabilon</p>
        <p id="jumb_parag_1">Nous vous répondrons dans les plus brefs délais</p>
        <a href="index.html">
            <button id="Register_button_style" class="button_contact button_send">Retour</button>
        </a>
    </div>
</div>



<!--footer-->
<footer style="margin-top: 400px;">
    <section>
        <div class="container">
            <div class="row">
                
                <br>
                <br>    

            </div>
            <div id="copyright" class="text-center">&copy; 2017 Fabilon Tous droits réservés</div>
        </div>
    </section>
</footer>

<!--Remove this-->
<div class="reyg">Web Design: <a href="http://www.metamorphozis.com" class="zxde">Free Website Templates</a></div> <!--Remove this-->

<script src="js/bootstrap.min.js"></script>
<script src="js/scripts.js"></script>

</div>
</body>
</html>

<!-- Example: Thank you for contacting us. We will be in touch with you very soon. -->

<?php
}
die();
?>