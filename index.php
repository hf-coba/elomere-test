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

<style>
@import url('https://fonts.googleapis.com/css2?family=Noto+Sans:wght@700&family=Poppins:wght@400;500;600&display=swap');


.wrapperAds{
  position: absolute;
  max-width: 400px;
  top: 50%;
  left: 50%;
  width: 100%;
  padding: 40px 30px;
  background: #fff;
  border-radius: 15px;
  opacity: 0;
  pointer-events: none;
  transform: translate(-50%, -50%) scale(1.2);
  box-shadow: 10px 10px 15px rgba(0,0,0,0.06);
  transition: opacity 0.2s 0s ease-in-out,
  transform 0.2s 0s ease-in-out;
}

.wrapperAds.show{
  opacity: 1;
  pointer-events: auto;
  transform:translate(-50%, -50%) scale(1);
}

.wrapperAds .wrap-konten,
.wrap-konten .ikon-seru,
.ikon-seru .gmbr-seru{
  display: flex;
  align-items: center;
  justify-content: center;
  flex-direction: column; /* Flex diatur model kolom */
}

.wrap-konten .ikon-seru{
  height: 115px;
  width: 115px;
  border-radius: 50%;
  background: linear-gradient(#9b27ca 0%, #9927cf 0%, #d33639 100%, #f92121 100%);
}

.ikon-seru .gmbr-seru{
  height: 80px; 
  width: 80px;
  background: #fff;
  /* border-radius: inherit; atau 50%; /* buat radius kotak border jadi lingkaran */
}

.ikon-seru .gmbr-seru i{
  background-clip: text;
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
  font-size: 100px;
}

.wrap-konten h2{
  margin-top: 35px;
  font-size: 32px;
}

.wrap-konten p{
  font-size: 19px;
  text-align: center;
  margin-top: 20px;
}

.btn_wrapperAds{
  height: 60px;
  width: 220px;
  margin-top: 30px;
  border-radius: 50px;
  position: relative;
  
  /* Beri tanda komentar bila bg dianimasi, agar warna bg yg diambil dari fungsi .btn_wrapper .bg-layer */
  background: -webkit-linear-gradient(135deg, #9b27ca, #d33639, #9b27ca, #d33639);
  overflow: hidden; /* ganti hidden ke visible utk lihat elemen aslinya */
}

/* ==> Set Fungsi ini bila button wrapperAds perlu di ANIMASI */
/* .btn_wrapperAds .bg-layer{
  height: 100%;
  width: 200%;
  position: absolute;
  left: -100%;
  background: -webkit-linear-gradient(135deg, #9b27ca, #d33639, #9b27ca, #d33639);
  transition: all 0.4s ease;
} */

.btn_wrapperAds:hover .bg-layer{
  left: 0;
}

.wrap-konten button{
  position: relative;
  z-index: 1;
  height: 100%;
  width: 100%;
  background: none;
  font-size: 18px;
  border: none;
  outline: none;
  color: #fff;
  cursor: pointer;
}

/* ---------- Wrapper Cookie Browser ------------------- */
/* Set Model Kotak
.wrapper{
  position: absolute;
  bottom: 30px;
  right: 30px;
  max-width: 360px;
  background: #fff;
  padding: 10px 10px 10px 10px;
  border-radius: 15px;
  box-shadow: 1px 7px 14px -5px rgba(0,0,0,0.15);
  text-align: center;
}
*/

.wrapper{
  position: absolute;
  bottom: 10px;
  right: 10px;
    max-width: 360px;
  background: #fff;
  padding: 10px 10px 10px 10px;
  border-radius: 15px;
  box-shadow: 1px 7px 14px -5px rgba(0,0,0,0.15);
  text-align: center;
}

.wrapper.hide{
  opacity: 0;
  pointer-events: none;
  transform: scale(0.8);
  transition: all 0.3s ease;
}

.wrapper img{
  max-width: 100px;
}

.content header{
  font-size: 25px;
  font-weight: 600;
  padding:0px;
  /*   background-color:red; */
}

.content{
  /* margin-top: 10px; */
}

.content p{
  color: #858585;
  /* margin: 5px 0 20px 0; */
}
.content .buttons{
  display: flex;
  align-items: center;
  justify-content: center;
}
.buttons button{
  padding: 10px 20px;
  border: none;
  outline: none;
  color: #fff;
  font-size: 16px;
  font-weight: 500;
  border-radius: 5px;
  background: #FCBA7F;
  cursor: pointer;
  transition: all 0.3s ease;
}
.buttons button:hover{
  transform: scale(0.97);
}
.buttons .item{
  margin: 0 10px;
}
.buttons a{
  color: #FCBA7F;
}

</style>
</head>
<body>

	<div id="detectAds"></div>
	
	<div class="wrapperAds">
		<div class="wrap-konten">
			<div class="ikon-seru">
				<span class="gmbr-seru"><i class="fas fa-exclamation"></i></span>
			</div>
			<h2>AdBlock Terdeteksi</h2>
			<p>Website ini menampilkan Ads kepada visitor. Please supporting us by whitelisting our website.</p>
			<div class="btn_wrapperAds">
				<div class="bg-layer"></div>
				<button>Okay, I'll Whitelist</button>
			</div>
		</div>
	</div>
  
	<div class="wrapper">
    <!--  img src="cookie.png" alt="" -->
		<div class="content">
			<header>Cookies Consent</header>
			<p>This website use cookies to ensure you get the best experience on our website.</p>
			<div class="buttons">
				<button class="item">I understand</button>
				<a href="#" class="item">Learn more</a>
			</div>
		</div>
	</div>
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
	
	<div class="area-utama-konten">
	
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
	
	<script>
	// ====> Wrapper Ads Blocker
    const detectAds = document.querySelector("#detectAds");
    const wrapperAds = document.querySelector(".wrapperAds");
    const buttonAds = wrapperAds.querySelector("button");
 
    let adClasses = ["ad", "ads", "adsbox", "doubleclick", "ad-placement", "ad-placeholder", "adbadge", "BannerAd"];
    for(let item of adClasses){
      detectAds.classList.add(item);
    }
    let getProperty = window.getComputedStyle(detectAds).getPropertyValue("display");
    if(!wrapperAds.classList.contains("show")){
      getProperty == "none" ? wrapperAds.classList.add("show") : wrapperAds.classList.remove("show");
    }
    buttonAds.addEventListener("click", ()=>{
      wrapperAds.classList.remove("show");
    });
	
	// ====> Wrappper Cookies
	const cookieBox = document.querySelector(".wrapper"),
    acceptBtn = cookieBox.querySelector("button");
 
    acceptBtn.onclick = ()=>{
      //setting cookie for 1 month, after one month it'll be expired automatically
      document.cookie = "CookieBy=CodingNepal; max-age="+60*60*24*30;
      if(document.cookie){ //if cookie is set
        cookieBox.classList.add("hide"); //hide cookie box
      }else{ //if cookie not set then alert an error
        alert("Cookie can't be set! Please unblock this site from the cookie setting of your browser.");
      }
    }
    let checkCookie = document.cookie.indexOf("CookieBy=CodingNepal"); //checking our cookie
    //if cookie is set then hide the cookie box else show it
    checkCookie != -1 ? cookieBox.classList.add("hide") : cookieBox.classList.remove("hide");
	
    </script>
  
</html>