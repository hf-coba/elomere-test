<div class="halaman">
	
	<div class="row text-center jdlMenu">
		<div class="col">
			<h2>Contact Me</h2>
		</div>
	</div>
	<p>git init<br>
		git remote add origin https://github.com/hf-coba/????.git<br>
		git branch -M main<br>

		> git add ./nama file<br>
		> git pull ( sync last commit ) -- ambil data dr remote, merge ke lokal<br>
		> git rm (nama file/folder)<br>

		git commit -m "(pesan)"<br>
		git push -u origin main</p>



	<div class="row">
		<div class="col">
				 <div class="clock">
				<div class="display">
				</div>
				</div>
		</div>
	</div>
</div>
<script>
      setInterval(function(){
        const clock = document.querySelector(".display");
        let time = new Date();
        let sec = time.getSeconds();
        let min = time.getMinutes();
        let hr = time.getHours();
        let day = 'AM';
        if(hr > 12){
          day = 'PM';
          hr = hr - 12;
        }
        if(hr == 0){
          hr = 12;
        }
        if(sec < 10){
          sec = '0' + sec;
        }
        if(min < 10){
          min = '0' + min;
        }
        if(hr < 10){
          hr = '0' + hr;
        }
        clock.textContent = hr + ':' + min + ':' + sec + " " + day;
      });
    </script>