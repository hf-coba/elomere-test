<script>
		$(document).ready(function() {
			$("a#ImgFancy").fancybox();
			
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
</script>

<div class="halaman">

	<div class="row text-center jdlMenu">
		<div class="col">
			<h2>My Experience</h2>
		</div>
	</div>
	
	<div class="row">
		<div class="col text-center pb-5">
			<div class="timeline">
			
					<div class="bagan left">
						<div class="isiNe">
						<h4>2013</h4>
						<p>SMK YPM 1 Taman</p>
						</div>
					</div>
					<div class="bagan right">
						<div class="isiNe">
						<h4>2014</h4>
						<p>SMP YPM 1 Taman</p>
						</div>
					</div>
					<div class="bagan left">
						<div class="isiNe">
						<h4>2015</h4>
						<p>SMK YPM 1 Taman</p>
						</div>
					</div>
					<div class="bagan right">
						<div class="isiNe">
						<h4>2016</h4>
						<p>SMP YPM 1 Taman</p>
						</div>
					</div>
					
			</div>
		</div>
	</div>
	
	<div class="row">
		<div class="col text-center"><h2>Sertifikat Organisasi</h2></div>
	</div>
	
	<div class="row row-cols-2 text-center pb-5">
		<div class="col-sm pb-3"><a id="ImgFancy" href="Ane.jpg"><img src="Ane.jpg" class="img-fluid"></a><p>Organisasi 1</p></div>
		<div class="col-sm pb-3"><a id="ImgFancy" href="Ane.jpg"><img src="Ane.jpg" class="img-fluid"></a><p>Organisasi 2</p></div>
	</div>
	
	<div class="row">
		<div class="col text-center"><h2>Sertifikat Kursus</h2></div>
	</div>
	
	<div class="row row-cols-4 text-center pb-5">
		<div class="col-sm pb-3"><a id="ImgFancy" href="Ane.jpg"><img src="Ane.jpg" class="img-fluid"></a><p>Kursus 1</p></div>
		<div class="col-sm pb-3"><a id="ImgFancy" href="Ane.jpg"><img src="Ane.jpg" class="img-fluid"></a><p>Kursus 2</p></div>
		<div class="col-sm pb-3"><a id="ImgFancy" href="Ane.jpg"><img src="Ane.jpg" class="img-fluid"></a><p>Kursus 3</p></div>
		<div class="col-sm pb-3"><a id="ImgFancy" href="Ane.jpg"><img src="Ane.jpg" class="img-fluid"></a><p>Kursus 4</p></div>
	</div>
	
	<div class="row">
		<div class="col text-center"><h2>Sertifikat Lomba</h2></div>
	</div>
	
	<div class="row row-cols-3 text-center pb-5">
		<div class="col-sm pb-3"><a id="ImgFancy" href="Ane.jpg"><img src="Ane.jpg" class="img-fluid"></a><p>Lomba 1</p></div>
		<div class="col-sm pb-3"><a id="ImgFancy" href="Ane.jpg"><img src="Ane.jpg" class="img-fluid"></a><p>Lomba 2</p></div>
		<div class="col-sm pb-3"><a id="ImgFancy" href="Ane.jpg"><img src="Ane.jpg" class="img-fluid"></a><p>Lomba 3</p></div>
	</div>
	
	
</div>
<a id="back-to-top" href="#" class="back-to-top" role="button" data-toggle="tooltip" data-placement="left"><i class="fas fa-angle-double-up fa-2x"></i></a>