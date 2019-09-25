<?php
	$limite = 1000000;
    $limitetexto = 20; 
	$num = $_POST["numero"];
	$frase = $_POST["frase"];

	
 $listaLinks = array('https://www.youtube.com/watch?v=s_eHTKuCkpc',
			'https://www.youtube.com/watch?v=3_52H8bk9WQ',
			'https://www.youtube.com/watch?v=FBXaHWbSa48',
			'https://www.youtube.com/watch?v=x7W8Y_g3W1s',
			'https://www.youtube.com/watch?v=qi0DQKQqNoE',
			'https://www.youtube.com/watch?v=wZZ7oFKsKzY',
			'https://www.youtube.com/watch?v=S52BM7Y6h5M',
			'https://www.youtube.com/watch?v=rxCs1fGxloI',
			'https://www.youtube.com/watch?v=XGyzPEdavEY',
			'https://www.youtube.com/watch?v=o0_P0miotGQ',
            'https://www.google.com/maps/place/Pau+Gordo,+2645-530+Alcabideche,+Portugal/@38.7215574,-9.3923487,15z/data=!3m1!4b1!4m5!3m4!1s0xd1ec59131574f55:0xb5b3fcaaff7ffb5f!8m2!3d38.7215417!4d-9.3835929',
			'https://discord.gg/hhZ3UYS',
			'https://www.youtube.com/watch?v=G1IbRujko-A',
			'https://www.youtube.com/watch?v=jQRb4DZnhn8',
			'https://www.youtube.com/watch?v=TWLw2vwBU20',
			'https://www.youtube.com/watch?v=VBoxSQeFpJ8',
			'https://www.youtube.com/watch?v=gNeTY1D7jZQ',
			'https://www.youtube.com/watch?v=-50NdPawLVY',
			'https://www.youtube.com/watch?v=UcRtFYAz2Yo',
			'https://www.youtube.com/watch?v=eh7lp9umG2I',
			'https://www.youtube.com/watch?v=ZnXaWv6FTMU',
			'https://www.youtube.com/watch?v=pxw-5qfJ1dk',
			'https://www.youtube.com/watch?v=cFVF26XPcAU',
			'https://www.youtube.com/watch?v=cd5QuZq5jmg',
			'https://www.youtube.com/watch?v=J3pF2jkQ4vc',
			'https://www.youtube.com/watch?v=vRyUbGeZVKk',
			'https://www.youtube.com/watch?v=kHXsNhaOzLk',
			'https://www.youtube.com/watch?v=TqrrsLuyH0w',
			'https://www.youtube.com/watch?v=0yeMNIJxIfs',
			'https://www.youtube.com/watch?v=6vk6bsRVSok',
			'https://www.youtube.com/watch?v=IGL6cNm7T1w',
			'https://www.youtube.com/watch?v=oP4bPSfmS8A',
			'https://www.youtube.com/watch?v=5ZUOa5aYpcA',
			'https://www.youtube.com/watch?v=fwq6GuYmRZQ',
			'https://www.youtube.com/watch?v=rlYys58hsCU',
			'https://www.youtube.com/watch?v=ETfiUYij5UE&list=PLhz6jYux7sN-h4aSGadruzVOFwHIz3q8l',
			'https://www.youtube.com/watch?v=2dbR2JZmlWo&list=PLhz6jYux7sN-h4aSGadruzVOFwHIz3q8l&index=9',
			'https://www.youtube.com/watch?v=SW-BU6keEUw&list=PLhz6jYux7sN-h4aSGadruzVOFwHIz3q8l&index=2',
			'https://www.youtube.com/watch?v=-jLtYrlVY6Q&list=PLhz6jYux7sN-h4aSGadruzVOFwHIz3q8l&index=20',
			'https://www.youtube.com/watch?v=nN4cIWFF6_8',
			'https://www.youtube.com/watch?v=rEOp0pugmqM',
			'https://www.youtube.com/watch?v=AA1pleu8LJo',
			'https://www.youtube.com/watch?v=Yme7fUAIwGs',
			'https://www.youtube.com/watch?v=wb6f-zTQ0UM',
			'https://www.youtube.com/watch?v=UzjDKfu-CFA',
			'https://www.youtube.com/watch?v=sZhz45Ct59Y',
			'https://www.youtube.com/watch?v=TiC8pig6PGE',
			'https://www.youtube.com/watch?v=3IvMlRsYDR0',
			'https://www.youtube.com/watch?v=oKpw_xF4r78',
			'https://www.youtube.com/watch?v=ojLTjmPdVJs',
			'https://www.youtube.com/watch?v=T7HwBWNqhQY',
			'https://www.youtube.com/watch?v=8UlcsAHZfhc',
			'https://www.youtube.com/watch?v=r06asrmGLiA',
			'https://www.youtube.com/watch?v=moO-EGghudM',
			'https://www.youtube.com/watch?v=Syq3QeIQ_IM',
			'https://www.youtube.com/watch?v=CLwo8rtnGbU&list=PLjtv_6iRjRkifvcmHU6H0c7GsfVBTq7SH&index=6',
			'https://www.youtube.com/watch?v=xiz4Q4H211c',
			'https://www.youtube.com/watch?v=oyuHmYSt2iA',
			'https://www.youtube.com/user/canalPOETAeATEU',
			'https://www.youtube.com/watch?v=nNVZVy60huw',
			'https://www.youtube.com/watch?v=D3FXRDxtLJk',
			'https://www.youtube.com/watch?v=60mLvBWOMb4',
			'https://www.youtube.com/watch?v=PGfj7odfK7Q',
			'https://www.youtube.com/watch?v=Kob0G2hE8IY',
			'https://www.youtube.com/watch?v=gi5-yi-q2Cs',
			'https://www.youtube.com/watch?v=PDvF-bQDXbg',
			'https://www.youtube.com/watch?v=gO7gHyrh8g4',
			'https://www.youtube.com/watch?v=60hCFaYLgaE',
			'https://www.youtube.com/watch?v=foqTB8Rp0D8',
			'https://www.youtube.com/watch?v=9b8YdtAdv1g',
            'https://www.youtube.com/watch?v=xlrFCxdb1oU');

		if($num > $limite){
			$num = 1;	
		}

		if($num == null){
			$num = 0;
		}

		if($frase == null){
			$frase = "";
		}

		$random = 0;
		$random = rand(1, $num)-1;
		$randomLink = array_rand($listaLinks);
		$data = array("numero" => $num, "frase" => $frase, "random" => $random ,"randomLink" => $randomLink, "listaLinks" => $listaLinks, $limite => "limite", $limitetexto => "limitetexto");
		

		

	echo json_encode($data, JSON_FORCE_OBJECT);
?>