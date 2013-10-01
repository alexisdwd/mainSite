<?php
$Mail = $_POST['email_data'];
$subject = "Nuevo contacto desde la web de retriever!"; 

$MailTo="info@retrieverfamily.com, alexisdwd@gmail.com";

$contenido .="Mail: $Mail";


$dia=date("d.m.Y");
$hora=date("H:i:s",time()+14400);
$contenido="
El Mensaje se envio el  $dia a las $hora:\n

Mail: $Mail\n";



	


mail($MailTo, $subject, $contenido, "From: retriverfamily.com" );
?>




<!DOCTYPE html>
<!--[if lt IE 7]> <html class="no-js ie6 oldie" lang="es"> <![endif]-->
<!--[if IE 7]>    <html class="no-js ie7 oldie" lang="es"> <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8 oldie" lang="es"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="es"><!--<![endif]-->
<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>Retrieverfamily comunicación y diseño</title>
    <meta name="description" content="En Retrieverfamily creamos soluciones en comunicacción y diseño. Creemos en un mundo más accesible y para lograr esto retamos las formas convencionales de diseño y comunicación.">
    <meta name="keywords" content="empresa comunicación, comunicación uruguay, diseño uruguay, soluciones en comunicación, branding, papeleria, trajetas, community management, diseño web, web design, brand consulting">
    <meta name="author" content="Retrieverfamily">
    <meta name="robots" content="follow">
    <meta name="copyright" content="Abril 2012">
    <meta name="viewport" content="width=device-width">
    
    <!-- metas para facebook -->    
    <meta property="og:title" content="Retrieverfamily comunicación y diseño" />
    <meta property="og:description" content="es hora de que traten tus problemas como propios, así es como surgen las grandes soluciones!" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="http://www.retrieverfamily.com/" />
    <meta property="og:image" content="http://www.retrieverfamily.com/Content/images/face_img.jpg" />
    <meta property="og:site_name" content="Retrieverfamily comunicación y diseño" />
    <meta property="fb:admins" content="1049565670" />
        
    <!-- gral. styles -->
    <link rel="shortcut icon" type="image/ico" href="http://www.retrieverfamily.com/Content/images/favicon.ico">
    <link rel="stylesheet" href="Content/css/normalize.min.css">
    <link rel="stylesheet" type="text/css" media="screen" href="Content/css/layout.css">
    <link rel="stylesheet" type="text/css" media="screen" href="Content/css/style.css">
    <link rel="stylesheet" type="text/css" media="screen" href="Content/css/fonts.css">
    <link rel="stylesheet" type="text/css" media="print"  href="Content/css/apacheprint.css" >
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Bree+Serif' rel='stylesheet' type='text/css'>
 
	<!-- JavaScript --> 
    <!--[if lt IE 9]>
	<script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
    <script src="Scripts/jquery-1.7.1.min.js" type="text/javascript"></script>
    <script src="Scripts/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>
	<!--<script src="Scripts/jquery.corner.js"></script>-->
    <script type="text/javascript">
        var currentPage = "home";
    </script>
	<!--<script>
	  $(document).ready(function() {
		if (!("autofocus" in document.createElement("input"))) {
		  $("#email_data").focus();
		}
	  });
	</script>-->

	<!-- analytics -->
	<script type="text/javascript">
    
      var _gaq = _gaq || [];
      _gaq.push(['_setAccount', 'UA-31254020-1']);
      _gaq.push(['_trackPageview']);
    
      (function() {
        var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
        ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
        var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
      })();
    
    </script>
</head>

<body>

<div id="fb-root"></div>
<script>
	(function(d, s, id) { var js, fjs = d.getElementsByTagName(s)[0];
  	if (d.getElementById(id)) return; js = d.createElement(s); js.id = id; js.src = "//connect.facebook.net/es_LA/all.js#xfbml=1";
  	fjs.parentNode.insertBefore(js, fjs); }(document, 'script', 'facebook-jssdk'));
</script>

<div class="container">
    <header class="head_home">
        <img class="logo" src="Content/images/logo.png" alt="Retrieverfamily logo" itemprop="photo"/>
        <hgroup>
            <h1>
            	es hora de que traten tus problemas como propios, así es como surgen las</br>grandes soluciones!
            </h1>
        </hgroup>
    </header>
    
    <div class="mail_form">
        <form  action="send_email.php" method="post" name="send_email" id="send_email" >
             <fieldset>
              <input class="email_data" name="email_data" id="email_data" value="dejá tu mail aquí para contactarte" onFocus="if(this.value=='dejá tu mail aquí para contactarte'){this.value='';}" onBlur="if(this.value==''){this.value='dejá tu mail aquí para contactarte';}" type="text"  >
              <input class="bt_send" type="submit" value="Enviar" id="bt_send">
             </fieldset> 
      </form>
        <div class="ing_mail">mail</div>
        <p class="msj_send"><span>"<?php echo $_POST['email_data'];?>"</span> <br>
te contactaremos para que sepas mucho más de nosotros, muchas gracias</p>
        <div class="email-error" id="email-empty">Necesitamos tu email para poder contactarte</div><!--email empty-->
        <div class="email-error" id="email-invalid">Por favor ingrese una casilla de email válida</div><!--email invalid-->
  </div><!-- fin mail_form-->
    
  <footer class="main_footer" itemscope>	
  
    <address><span itemprop="mail"><a class="mail" href="mailto:info@retrieverfamily.com">info@retrieverfamily.com</a></span></address>
  
   <div class="social">
                
                <div class="fb-like" data-href="http://www.retrieverfamily.com/" data-send="false" data-layout="button_count" data-width="50" data-show-faces="false" 
                style="float:left;">
            	</div>
            	
                <div style="float:left; margin:0; padding:0 0 0 8px;">
            		<a href="https://twitter.com/share" class="twitter-share-button" data-url="http://www.retrieverfamily.com/" 
                    data-text="es hora de que traten tus problemas como propios, así es como surgen las grandes soluciones!" data-lang="es">Twittear</a>
            		<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=
					"//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
            	</div>
                
    </div><!-- fin social -->
  
  </footer>

</div><!-- fin container-->
<script src="Scripts/custom.js"></script>
</body>
</html>

