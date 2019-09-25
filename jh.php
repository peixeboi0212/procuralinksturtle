<?php

          $limite = 1000000;
            $limitetexto = 20; 
            $num = $_POST['numero'];
            $frase = $_POST['frase'];

        	

           
            if($num == "" || $num == null || $num < 0 || $num == 0){
            $num = 1;
            
            if($frase == null || $frase == ""){
            	$frase = "não taca canudo 🥤🐢";
            	header('location:index.php?numero=1&frase=não taca canudo 🥤🐢');
            }else{
            	$frase = $_GET['frase'];
            	header('location:index.php?numero='.$num.'&frase='.$frase);
            }

            }
            
            $listaLinks = array(/*1*/'https://www.youtube.com/watch?v=s_eHTKuCkpc',
			/*2*/'https://www.youtube.com/watch?v=3_52H8bk9WQ',
			/*3*/'https://www.youtube.com/watch?v=FBXaHWbSa48',
			/*4*/'https://www.youtube.com/watch?v=x7W8Y_g3W1s',
			/*5*/'https://www.youtube.com/watch?v=qi0DQKQqNoE',
			/*6*/'https://www.youtube.com/watch?v=wZZ7oFKsKzY',
			/*7*/'https://www.youtube.com/watch?v=S52BM7Y6h5M',
			/*8*/'https://www.youtube.com/watch?v=rxCs1fGxloI',
			/*9*/'https://www.youtube.com/watch?v=XGyzPEdavEY',
			/*10*/'https://www.youtube.com/watch?v=o0_P0miotGQ',
            /*11*/'https://www.google.com/maps/place/Pau+Gordo,+2645-530+Alcabideche,+Portugal/@38.7215574,-9.3923487,15z/data=!3m1!4b1!4m5!3m4!1s0xd1ec59131574f55:0xb5b3fcaaff7ffb5f!8m2!3d38.7215417!4d-9.3835929',
			/*12*/'https://discord.gg/hhZ3UYS',
			/*13*/'https://www.youtube.com/watch?v=G1IbRujko-A',
			/*14*/'https://www.youtube.com/watch?v=jQRb4DZnhn8',
			/*15*/'https://www.youtube.com/watch?v=TWLw2vwBU20',
			/*16*/'https://www.youtube.com/watch?v=VBoxSQeFpJ8',
			/*17*/'https://www.youtube.com/watch?v=gNeTY1D7jZQ',
			/*18*/'https://www.youtube.com/watch?v=-50NdPawLVY',
			/*19*/'https://www.youtube.com/watch?v=UcRtFYAz2Yo',
			/*20*/'https://www.youtube.com/watch?v=eh7lp9umG2I',
			/*21*/'https://www.youtube.com/watch?v=ZnXaWv6FTMU',
			/*22*/'https://www.youtube.com/watch?v=pxw-5qfJ1dk',
			/*23*/'https://www.youtube.com/watch?v=cFVF26XPcAU',
			/*24*/'https://www.youtube.com/watch?v=cd5QuZq5jmg',
			/*25*/'https://www.youtube.com/watch?v=J3pF2jkQ4vc',
			/*26*/'https://www.youtube.com/watch?v=vRyUbGeZVKk',
			/*27*/'https://www.youtube.com/watch?v=kHXsNhaOzLk',
			/*28*/'https://www.youtube.com/watch?v=TqrrsLuyH0w',
			/*29*/'https://www.youtube.com/watch?v=0yeMNIJxIfs',
			/*30*/'https://www.youtube.com/watch?v=6vk6bsRVSok',
			/*31*/'https://www.youtube.com/watch?v=IGL6cNm7T1w',
			/*32*/'https://www.youtube.com/watch?v=oP4bPSfmS8A',
			/*33*/'https://www.youtube.com/watch?v=5ZUOa5aYpcA',
			/*34*/'https://www.youtube.com/watch?v=fwq6GuYmRZQ',
			/*35*/'https://www.youtube.com/watch?v=rlYys58hsCU',
			/*36*/'https://www.youtube.com/watch?v=ETfiUYij5UE&list=PLhz6jYux7sN-h4aSGadruzVOFwHIz3q8l',
			/*37*/'https://www.youtube.com/watch?v=2dbR2JZmlWo&list=PLhz6jYux7sN-h4aSGadruzVOFwHIz3q8l&index=9',
			/*38*/'https://www.youtube.com/watch?v=SW-BU6keEUw&list=PLhz6jYux7sN-h4aSGadruzVOFwHIz3q8l&index=2',
			/*39*/'https://www.youtube.com/watch?v=-jLtYrlVY6Q&list=PLhz6jYux7sN-h4aSGadruzVOFwHIz3q8l&index=20',
			/*40*/'https://www.youtube.com/watch?v=nN4cIWFF6_8',
			/*41*/'https://www.youtube.com/watch?v=rEOp0pugmqM',
			/*42*/'https://www.youtube.com/watch?v=AA1pleu8LJo',
			/*43*/'https://www.youtube.com/watch?v=Yme7fUAIwGs',
			/*44*/'https://www.youtube.com/watch?v=wb6f-zTQ0UM',
			/*45*/'https://www.youtube.com/watch?v=UzjDKfu-CFA',
			/*46*/'https://www.youtube.com/watch?v=sZhz45Ct59Y',
			/*47*/'https://www.youtube.com/watch?v=TiC8pig6PGE',
			/*48*/'https://www.youtube.com/watch?v=3IvMlRsYDR0',
			/*49*/'https://www.youtube.com/watch?v=oKpw_xF4r78',
			/*50*/'https://www.youtube.com/watch?v=ojLTjmPdVJs',
			/*51*/'https://www.youtube.com/watch?v=T7HwBWNqhQY',
			/*52*/'https://www.youtube.com/watch?v=8UlcsAHZfhc',
			/*53*/'https://www.youtube.com/watch?v=r06asrmGLiA',
			/*54*/'https://www.youtube.com/watch?v=moO-EGghudM',
			/*55*/'https://www.youtube.com/watch?v=Syq3QeIQ_IM',
			/*56*/'https://www.youtube.com/watch?v=CLwo8rtnGbU&list=PLjtv_6iRjRkifvcmHU6H0c7GsfVBTq7SH&index=6',
			/*57*/'https://www.youtube.com/watch?v=xiz4Q4H211c',
			/*58*/'https://www.youtube.com/watch?v=oyuHmYSt2iA',
			/*59*/'https://www.youtube.com/user/canalPOETAeATEU',
			/*60*/'https://www.youtube.com/watch?v=nNVZVy60huw',
			/*61*/'https://www.youtube.com/watch?v=D3FXRDxtLJk',
			/*62*/'https://www.youtube.com/watch?v=60mLvBWOMb4',
			/*63*/'https://www.youtube.com/watch?v=PGfj7odfK7Q',
			/*64*/'https://www.youtube.com/watch?v=Kob0G2hE8IY',
			/*65*/'https://www.youtube.com/watch?v=gi5-yi-q2Cs',
			/*66*/'https://www.youtube.com/watch?v=PDvF-bQDXbg',
			/*67*/'https://www.youtube.com/watch?v=gO7gHyrh8g4',
			/*68*/'https://www.youtube.com/watch?v=60hCFaYLgaE',
			/*69*/'https://www.youtube.com/watch?v=foqTB8Rp0D8',
			/*70*/'https://www.youtube.com/watch?v=9b8YdtAdv1g',
            /*71*/'https://www.youtube.com/watch?v=xlrFCxdb1oU');

	if($num == "" || $num < 0){
		$num = 1;
		echo '<p class="text-center">Você não escreveu nada. Por isso o número mudou para <label style="color:red;">'.$num.'</label></p>';

		if($frase == null || $frase == ""){
				$frase = "não taca canudo 🥤🐢";
				echo '<p class="text-center">Você não escreveu nada. Por isso o texto mudou para <label style="color:red;">'.$frase.'</label></p>';
		}

	}elseif($num > $limite){

		if($frase == null || $frase == ""){
				$frase = "não taca canudo 🥤🐢";
				echo '<p class="text-center">Você não escreveu nada. Por isso o texto mudou para <label style="color:red;">'.$frase.'</label></p>';
		}

		echo '<p class="text-center">O número <label style="color:red;">'. $num .'</label> foi mudado pra 1</p>';
		$num = 1;	

		$random = 0;
		$random = rand(1, $num)-1;
		
		$randomLink = array_rand($listaLinks);

			for($i = 0; $i <= $num-1; $i++){ 

				if($i == $random){
					echo '<a class="aPreto"  tabindex="-1" href="'.$listaLinks[$randomLink].'" target="_blank">'.$frase.' </a>';
				}else{
					echo 'não taca canudo 🥤🐢';
				}
			}

	}else{

		if($frase == null || $frase == ""){
				$frase = "não taca canudo 🥤🐢";
				echo '<p class="text-center">Você não escreveu nada. Por isso o texto mudou para <label style="color:red;">'.$frase.'</label></p>';
			}

		$random = 0;
		$random = rand(1, $num)-1;
		$randomLink = array_rand($listaLinks);

		for($i = 0; $i <= $num-1; $i++){ 

			if($i == $random){
				echo '<a class="aPreto"  tabindex="-1" href="'.$listaLinks[$randomLink].'" target="_blank">'.$frase.' </a>';
			}else{
				echo $frase.' ';
			}	
		}
	}

	?>