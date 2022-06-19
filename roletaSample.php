
<!-- roletaSample (223.php)-->
<!-- theyujisamfull   04:29 19/06/2022 -->


<html>
	
	<body>
	
	
		<h1 id='oi'>..</h1>
		
		<h1 id='menosum'>.</h1>
		<h1 id='maisum'>.</h1>
		<h1 id='cima'>.</h1>
	
		
		<button  style='color:rgb(105, 105, 105) ; font-size:15px; background:rgb(235, 173, 194); height:50px;  width:100px; position:absolute; top:800px; left:1500px;' onclick='clearInterval( loop ); '> STOP ! </button>
		
		<input style='position:absolute; top:800px; left:1250px; width:50px;' id='max' value='10'>
		<input style='position:absolute; top:800px; left:1150px; width:50px;' id='min' value='0'>
	
	</body>
	
	<script>
		
		
		
		min = parseInt(document.getElementById('min').value);
		max = parseInt(document.getElementById('max').value);
		
		oi = document.getElementById('oi');
		
		
		//zerandoCoordenadas (transforma px em (0,0) )
		cx = 1200;
		cy = 450;

			
		oi.style.position= 'absolute';

		//marcadores do 'relogio'
		menosum = document.getElementById('menosum');
		menosum.style.position= 'absolute';
		menosum.style.top= cy + 0;
		menosum.style.left= cx -200;		
		
		maisum = document.getElementById('maisum');
		maisum.style.position= 'absolute';
		maisum.style.top= cy + 0;
		maisum.style.left= cx +200;		
		
		cima = document.getElementById('cima');
		cima.style.position= 'absolute';
		cima.style.top= cy -200;
		cima.style.left= cx +0;
		
		
		x1=-200;
		x2=200;
		y=0;
		r=200;
		
		cima=1;
		baixo=0;
		
		//velociodade de giro
		vel=0.2;
		v=0;
		
		//velSort
		count=0;
	
		loop = setInterval(function(){
			
			//comeca rodar devagar e aumenta quadraticamente
			if(v<8){ v = v+0.01 ;	}
			vel = v**2;
			
			//eq circunferencia parte de cima
			if(cima == 1){
				oi.style.top= y + cy;
				oi.style.left= x1 + cx;

				x1 = x1+vel;
				y = -Math.sqrt(  r**2 - x1**2  );
			
			}
			if( x1 >= 200 ) {    cima=0; baixo=1; x1=-200; }
			
			//eq circunferencia parte de baixo
			if(baixo == 1){
				oi.style.top= y + cy;
				oi.style.left= x2 + cx;
				
				x2 = x2-vel;
				y = Math.sqrt(  r**2 - x2**2  );
			}
			if( x2 <= -200 && baixo==1) {    cima=1; baixo=0; x2=200;  }

			
			//a cada 10 sorteia numero
			count = count+1;
			if( count>10  ){
				count=0;
				oi.innerHTML = Math.round(min + Math.random()*(max-min) ) ;
				
			}
			min = parseInt(document.getElementById('min').value);
			max = parseInt(document.getElementById('max').value);
			
			
		},1);
		
		

		
		
		
		
		
	</script>

</html>
