	$(document).ready(function(){
		
		// Cek Resolusi Web Browser Saat Load / Refresh Page
		var wLoad = window.innerWidth;	var hLoad = window.innerHeight;
		
		// Cetak nilai Res ke div id resLoad
		// document.getElementById("resLoad").innerHTML = "ResLoad : " + wLoad + " x "+ hLoad;
		
		if (wLoad > 800) // Jika lebih dari 800 pixel, lihat ukuran min / max width CSS, sesuaikan
			{
				var x = document.getElementById("menuE");
					if (x.className === "panel") { x.className += " topnav"; }
					else { x.className = "topnav"; }
			}
		else
			{
				var x = document.getElementById("menuE");
					if (x.className === "topnav") {  x.className += " panel"; }
					else { x.className = "panel"; }
			}
		
		// Ambil data PHP, lalu taruh di div id badan
		$('.klik_menu').click(function(){
			var menu = $(this).attr('id');
			if(menu == "V_About"){
				$('.badan').load('V_About.php');						
			}else if(menu == "V_Achieve"){
				$('.badan').load('V_Achieve.php');						
			}else if(menu == "V_Skills"){
				$('.badan').load('V_Skills.php');						
			}else if(menu == "V_Edu"){
				$('.badan').load('V_Edu.php');						
			}else if(menu == "V_Experience"){
				$('.badan').load('V_Experience.php');						
			}else if(menu == "V_Project"){
				$('.badan').load('V_Project.php');
			}else if(menu == "V_Contact"){
				$('.badan').load('V_Contact.php');
			}
		});

		// Load awal div id badan
		$('.badan').load('V_About.php');
								
		// Cek Resolusi Web Browser saat Resize
		$(window).resize(function(){
			
			var wResize = window.innerWidth; var hResize = window.innerHeight;
			
			if (wResize > 800) // Jika lebih dari 800 pixel, lihat ukuran min / max width CSS, sesuaikan
				{
					var x = document.getElementById("menuE");
						if (x.className === "panel") { x.className += " topnav"; }
						else { x.className = "topnav"; }
						
					// Cetak nilai Res ke div id resResize
					// document.getElementById("resResize").innerHTML = "ResResize NavBar : " + wResize + " x "+ hResize;
				}
			else
				{
					var x = document.getElementById("menuE");
						if (x.className === "topnav") {  x.className += " panel"; }
						else { x.className = "panel"; }
						
					// Cetak nilai Res ke div id resResize
					// document.getElementById("resResize").innerHTML = "ResResize Accord : " + wResize + " x "+ hResize;
				}
		});
	
		// Fancy Box Transition 
		$("a#ImgFancy").fancybox({
		'transitionIn'	:	'elastic',
		'transitionOut'	:	'elastic',
		'speedIn'		:	600, 
		'speedOut'		:	200, 
		'overlayShow'	:	false
		});
		
		// Menu Scroll Top
		
		$(window).scroll(function () {
            if ($(this).scrollTop() > 50) {
                $('#back-to-top').fadeIn();
            } else {
                $('#back-to-top').fadeOut();
            }
        });
        // scroll body to 0px on click
        $('#back-to-top').click(function () {
            $('#back-to-top').tooltip('hide');
            $('body,html').animate({
                scrollTop: 0
            }, 800);
            return false;
        });
        
        $('#back-to-top').tooltip('show');
	
	});
	
    // Baris Kode JS utk Accordion Menu

	var acc = document.getElementsByClassName("accordion");
	var i;

	for (i = 0; i < acc.length; i++) {
		acc[i].addEventListener("click", function() {
			/* Toggle between adding and removing the "active" class,
			to highlight the button that controls the panel */
			this.classList.toggle("active");

			/* Toggle between hiding and showing the active panel */
			/* Model 1
				var panel = this.nextElementSibling;
				if (panel.style.display === "block") {
					panel.style.display = "none";
				} else {
					panel.style.display = "block";
				}
			*/
			/* Model 2 */
			var panel = this.nextElementSibling;
			if (panel.style.maxHeight) {
				panel.style.maxHeight = null;
			} else {
				panel.style.maxHeight = panel.scrollHeight + "px";
			}
		});
	}