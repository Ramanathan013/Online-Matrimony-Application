<?php include_once("includes/basic_includes.php");?>
<?php include_once("functions.php"); ?>

<!DOCTYPE HTML>
<html>
<head>
<title>Find Your Perfect Partner - Makemylove | Faq :: Code Projects.org
</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="css/bootstrap-3.1.1.min.css" rel='stylesheet' type='text/css' />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<!-- Custom Theme files -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<link href='//fonts.googleapis.com/css?family=Oswald:300,400,700' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Ubuntu:300,400,500,700' rel='stylesheet' type='text/css'>
<!----font-Awesome----->
<link href="css/font-awesome.css" rel="stylesheet"> 
<!----font-Awesome----->
<script>
$(document).ready(function(){
    $(".dropdown").hover(            
        function() {
            $('.dropdown-menu', this).stop( true, true ).slideDown("fast");
            $(this).toggleClass('open');        
        },
        function() {
            $('.dropdown-menu', this).stop( true, true ).slideUp("fast");
            $(this).toggleClass('open');       
        }
    );
});
</script>
</head>
<body>
<!-- ============================  Navigation Start =========================== -->
<?php include_once("includes/navigation.php");?>
<!-- ============================  Navigation End ============================ -->
<div class="grid_3">
  <div class="container">
   <div class="breadcrumb1">
     <ul>
        <a href="index.php"><i class="fa fa-home home_1"></i></a>
        <span class="divider">&nbsp;|&nbsp;</span>
        <li class="current-page">FAQ</li>
     </ul>
   </div>
   <dl class="faq-list">
	<dt class="faq-list_h">
	<h4 class="marker">Q?</h4>
	<h4>What is Your Application Name?</h4>
	</dt>
	<dd>
	<h4 class="marker1">A.</h4>
	<p class="m_4">is an online matrimony application that helps individuals find their life partners based on compatibility, preferences, and shared values. Our platform offers a user-friendly interface and advanced matchmaking algorithms to facilitate meaningful connections.</p>
	</dd>
	<dt class="faq-list_h">
	<h4 class="marker">Q?</h4>
	<h4>How do I Sign Up?</h4>
	</dt>
	<dd>
	<h4 class="marker">A.</h4>
	<p class="m_4"> Simply click on the "Sign Up" button on the homepage, fill out the required information such as your name, email address, and password, and follow the instructions to verify your email or phone number.</p>
	</dd>
	<dt class="faq-list_h">
	<h4 class="marker">Q?</h4>
	<h4>How do I Create a Profile?</h4>
	</dt>
	<dd>
	<h4 class="marker">A.</h4>
	<p class="m_4">To create a profile on [Your App's Name], navigate to the "Profile" section after signing in. Here, you can upload photos, provide personal details such as age, location, education, and occupation, and specify your preferences for a potential match.</p>
	</dd>
	<dt class="faq-list_h">
	<h4 class="marker">Q?</h4>
	<h4>How do I Search for Matches?</h4>
	</dt>
	<dd>
	<h4 class="marker">A.</h4>
	<p class="m_4">You can search for matches on  by using our advanced search filters. Simply specify your preferences such as age range, location, religion, and more, and our platform will display relevant matches based on your criteria.</p>
	</dd>
	<dt class="faq-list_h">
	<h4 class="marker">Q?</h4>
	<h4>How do I Contact a Match?</h4>
	</dt>
	<dd>
	<h4 class="marker">A.</h4>
	<p class="m_4">Once you've found a potential match, you can initiate contact by sending them a message directly through our messaging feature. You can also express your interest by sending likes or adding them to your favorites list.</p>
	</dd>
	<dt class="faq-list_h">
	<h4 class="marker">Q?</h4>
	<h4>Is Your application Secure?</h4>
	</dt>
	<dd>
	<h4 class="marker">A.</h4>
	<p class="m_4">Yes,  takes the security and privacy of our users very seriously. We use industry-standard encryption protocols to protect your data, and all user profiles are verified to ensure authenticity.</p>
	</dd>
	<dt class="faq-list_h">
	<h4 class="marker">Q?</h4>
	<h4>How do I Report Suspicious Activity?</h4>
	</dt>
	<dd>
	<h4 class="marker">A.</h4>
	<p class="m_4 m_5">If you encounter any suspicious or inappropriate behavior on Your Application, you can report it by clicking on the "Report" button on the user's profile or contacting our customer support team directly. We investigate all reports promptly and take appropriate action.</p>
	</dd>
   </dl>
  </div>
</div>


<?php include_once("footer.php");?>

</body>
</html>	