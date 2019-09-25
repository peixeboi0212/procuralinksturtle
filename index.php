<!DOCTYPE html>
<html>
<head>
	<title>Procura os Links aí</title>
	<link rel="stylesheet" type="text/css" href="bootstrap/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="estilo.css">
	<link rel="icon" type="image/png" sizes="32x32" href="favicon_io/favicon-32x32.png">
	<script type="text/javascript" src="jquery-3.3.1.min.js"></script>
	<script type="text/javascript" src="script.js"></script>
  <script type="text/javascript" src="popper/popper.min.js"></script>
	<script type="text/javascript" src="bootstrap/bootstrap.js"></script>
  
</head>
<body>

  <script>
    $(document).ready(function(){
      $('[data-toggle="tooltip"]').tooltip();
    });
  </script>

    <header class="navMain nav">

      <a data-toggle="tooltip" title="Home" class="aIcone" href="index.php">🐢</a>

      <ul>

        <li class="aItem nav-item">
          <a class="aBranco nav-link active" data-toggle="tooltip" title="Twitter do Dev: @peixeboi_0212" href="https://twitter.com/Peixeboi_0212" target="_blank"><img class="iconesRedes" src="icones/twitter.ico"> Twitter</a>
        </li>

        <li class="aItem nav-tem">
          <a class="aBranco nav-link" 
          data-toggle="tooltip" title="Instagram do Dev: @peixeboi_0212"
          href="https://www.instagram.com/peixeboi_0212/" target="_blank"><img class="iconesRedes instagram" src="icones/instagram.ico"> Instagram</a>
        </li>

        <li class="aItem nav-item">
          <a class="aBranco nav-link active" data-toggle="tooltip" title="Github do Dev: /peixeboi0212" href="https://github.com/peixeboi0212" target="_blank"><img class="iconesRedes github" src="icones/github.ico"> Github</a>
        </li>

        <li class="aItem nav-item text-truncate">
         <a class="aBranco text-truncate  nav-link active" data-toggle="tooltip" title="Servidor do Discord Dos Meus Amigos: Caixa Laranja Em Inglês" href="https://discord.gg/hhZ3UYS" target="_blank"><img class="iconesRedes" src="icones/discord.ico"> Nosso Servidor do Discord</a>
       </li>

        <!--<div style="width:10px;height:10px;background-color:aquamarine;filter:hue-rotate(270deg);"></div>-->

     </ul>

    

   </header>
    <p class="pontuacao float-right disabled"></p>

   <div class="divTexto text-center">

    <label class="dificuldade text-center disabled" style="font-weight:bold; font-size:20pt;"></label>
    <br><br>
    <a class="aBotao" id="btn1"><div data-toggle="tooltip" title="DIFICULDADE 1x" class="btn btn-primary botaodif">UM</div></a>
    <a class="aBotao"  id="btnfacil"><div data-toggle="tooltip" title="DIFICULDADE 10x" class="btn btn-primary botaodif">FÁCIL</div></a>
    <a class="aBotao" id="btnmedio"><div data-toggle="tooltip" title="DIFICULDADE 100x" class="btn btn-primary botaodif">MÉDIO</div></a>
    <a class="aBotao" id="btndificil"><div data-toggle="tooltip" title="DIFICULDADE 1000x" class="btn btn-primary botaodif">DIFÍCIL</div></a>
    <a class="aBotao" id="btnchato"><div data-toggle="tooltip" title="DIFICULDADE 10000x" class="btn btn-primary botaodif">CHATO</div></a>
    <a class="aBotao" id="btnextremo"><div data-toggle="tooltip" title="DIFICULDADE 100000x" class="btn btn-primary botaodif">EXTREMO</div></a>
    <a class="aBotao" id="btntarta"><div data-toggle="tooltip" title="DIFICULDADE 1000000x" data-placement="bottom" class="btn btn-primary botaodif">...🐢</div></a>

    <br><br>

    <div class="divdivTexto">
     <label class="testeTexto text-justify"></label>
   </div>

   <p class="avisotexto text-center" style="color:red; background-color:white; border-radius:15px; border:2px black solid;"></p>

   <form id="fornums" method="get">

     <div class="input-group mb-3">

      <div class="input-group-prepend">

        <span data-toggle="tooltip" title="SELECIONA A DIFICULDADE MANUALMENTE" data-placement="bottom" class="input-group-text" id="basic-addon1">🥤</span>

      </div>

      <input type="number" class="form-control" id="numero" max="1000000" min="0" placeholder="UM NÚMERO PÔ!" aria-label="MANDAR" 
      aria-describedby="basic-addon1" name="numero">
      <br>

      <div class="input-group-prepend">
        <span data-toggle="tooltip" title="MUDA A FRASE UTILIZADA" data-placement="bottom" class="input-group-text" id="basic-addon1">🐢</span>
      </div>

      <input type="text" class="form-control" maxlength="20" placeholder="UMA FRASE PÔ!" aria-label="MANDAR" aria-describedby="basic-addon1" name="frase">

    </div>

    <br>

    <div class="mx-auto text-center">

      <button type="submit" class="btn btn-primary botaodif">Enviar</button>

    </div>

  </form>

</div>

<footer class="footerTp footer navbar-fixed-bottom">

  <div class="footer-copyright text-center py-3">© 2019 Copyright:
    <a class="aBranco copyright" data-toggle="tooltip" title="Github do Dev: /peixeboi0212" href="https://github.com/peixeboi0212"> PEIXEBOI0212</a>
  </div>

</footer>

</body>

</html>