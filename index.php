<!DOCTYPE html>
<html>
<head>
 <meta name="viewport" content="width=device-width, initial-scale=1"> 
	<title>Elomere Website</title>
	
	<!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" >

	<!-- Fancy Box CSS -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.css" >
	
	<!-- Fontawesome CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" >

	<!-- My CSS -->
	<link rel="stylesheet" type="text/css" href="style.css">

</head>
<body>

	<?php 
	// Buat Progress Bar
	/*echo' <div id="myProgresss">
			<div id="myBars"></div>
		  </div>
		  <div id="kata"></div>'
		*/
	?>
	<!--<div class="parallax">-->
	
	<div class="scroll-left">
		<p>Menguasai Bahasa : HTML, CSS, PHP, WebSocket, JavaScript ( Ajax, JQuery, VueJS, ReactJS, Express JS ), Python, C, C++, C#, dan ASP</p>
	</div>
	
	<div class="content">
	
		<header>
			
			<h1 class="judul">Hi, I`m Riecky Savannah</h1>
			<h3 class="deskripsi">My Web Portofolio</h3>
			<?php //<h5 class="sub-desk">HTML, CSS, Ajax, JS, JQuery</h5> ?>
			
		</header>
		
		<?php // cek Resolusi Layar saat load pertama
			 // echo '<div id="resLoad"></div>' ;
			 // echo '<div id="resResize"></div>' ;
		?>
			
		<button class="accordion">MENU</button>
		<div id="menuE" class="topnav">
			<a class="klik_menu" id="V_About">About</a>
			<a class="klik_menu" id="V_Achieve">Achieve</a>
			<a class="klik_menu" id="V_Skills">Skills</a>
			<a class="klik_menu" id="V_Edu">Education</a>
			<a class="klik_menu" id="V_Experience">Experience</a>
			<a class="klik_menu" id="V_Project">Project</a>
			<a class="klik_menu" id="V_Contact">Contact</a>	
		</div>
		
		<div class="badan"></div>
		
		<div class="bawah">@ M Riecky Savannah, made with <i class="fas fa-heart"></i> and <i class="fab fa-phoenix-framework"></i> | <?php echo date("d-m-Y"); ?></div>

		<a id="back-to-top" href="#" class="back-to-top" role="button" data-toggle="tooltip" data-placement="left"><i class="fas fa-angle-double-up fa-2x"></i></a>
		
	</div>
	<!--</div>-->
	
</body>
	<!--JQuery JS -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" ></script>
	
	 <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" ></script>
	
	<!-- FancyBox JS -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js" ></script>
	
	 <!-- Fontawesome JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js" ></script>
	
	<!-- My Script JS -->
	<script type="text/javascript" src="cekrip.js" ></script>
</html>