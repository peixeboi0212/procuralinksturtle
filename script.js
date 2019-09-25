$(document).ready(function(){
    
    alert("Se divirta!! Procura os links e NÃO TACA CANUDO");

    var possibilidades = "";
    var i = 0;
    var aviso = "";
    var dificuldadeTexto = "";
    var numeroponto = 0;
    var pontos = 0;
    
    $(".pontuacao").html("PONTUAÇÃO: " + pontos);
    
    function carregaLink(){

        var num = $('#fornums input[name="numero"]').val();
        var frase = $('#fornums input[name="frase"]').val();

        $.ajax({

            url: "phpemergencia.php",
            method: "POST",
            data: {numero: num, frase: frase},
            dataType: "json",
            complete: function(verifica){

                var html = "";
                var numero = (verifica.responseJSON.numero);  
                numeroponto = numero;
                var frase = (verifica.responseJSON.frase);
                var listaLinks = (verifica.responseJSON.listaLinks);
                var randomLink = (verifica.responseJSON.randomLink);
                var limite = (verifica.responseJSON.limite);
                var limitetexto = (verifica.responseJSON.limitetexto);
                var um = 1;

                switch(possibilidades){
                    case "um":
                    numero = 1;
                    numeroponto = numero;
                    dificuldadeTexto = "DIFICULDADE = "+numero+"X";
                    $(".dificuldade").html(dificuldadeTexto);
                    break;
                    case "dez":
                    numero = 10;
                    numeroponto = numero;
                    dificuldadeTexto = "DIFICULDADE = "+numero+"X";
                    $(".dificuldade").html(dificuldadeTexto);
                    break;
                    case "medio":
                    numero = 100;
                    numeroponto = numero;
                    dificuldadeTexto = "DIFICULDADE = "+numero+"X";
                    $(".dificuldade").html(dificuldadeTexto);
                    break;
                    case "dificil":
                    numero = 1000;
                    numeroponto = numero;
                    dificuldadeTexto = "DIFICULDADE = "+numero+"X";
                    $(".dificuldade").html(dificuldadeTexto);
                    break;
                    case "chato":
                    numero = 10000;
                    numeroponto = numero;
                    dificuldadeTexto = "DIFICULDADE = "+numero+"X";
                    $(".dificuldade").html(dificuldadeTexto);
                    break;
                    case "extremo":
                    numero = 100000;
                    numeroponto = numero;
                    dificuldadeTexto = "DIFICULDADE = "+numero+"X";
                    $(".dificuldade").html(dificuldadeTexto);
                    break;
                    case "tarta":
                    numero = 1000000;
                    numeroponto = numero;
                    dificuldadeTexto = "DIFICULDADE = "+numero+"X";
                    $(".dificuldade").html(dificuldadeTexto);
                    break;
                    default:
                    numero = (verifica.responseJSON.numero);
                    numeroponto = numero;
                    dificuldadeTexto = "DIFICULDADE = "+numero+"X";
                    $(".dificuldade").html(dificuldadeTexto);
                    break;
                }


                if(frase == ""){

                  frase = "não taca canudo 🥤🐢";
                  aviso = "A frase que você selecionou estava vazia, portanto mudou para " + frase;
                  $(".avisotexto").html(aviso);

              }else{

              }


              if(numero == 0 || numero < 0){
                aviso = "O número selecionado é menor ou igual à zero!!";
                $(".avisotexto").html(aviso);
                numero = 1;
                dificuldadeTexto = "DIFICULDADE = "+numero+"X";
                $(".dificuldade").html(dificuldadeTexto);
            }else if(numero > limite){
                numero = 1;
                console.log("número = " + numero);
                aviso = "O número selecionado é maior que o limite máximo de "+limite;
                $(".avisotexto").html(aviso);
            }else{
                aviso = "É terminantemente proíbido um número maior que 100000<br> e é terminantemente proíbido uma frase que tenha um número maior que 20 caracteres";
                $(".avisotexto").html(aviso);
            }	

					//console.log(" número = " + numero + ", random = " + random + ", frase = " + frase + ", randomLink = " + randomLink);
					
					
                    var random = Math.floor((Math.random() * numero) + 1);
                    
                    if(random == numero){
                        random = numero -1; 
                    }
                    
                    for(i = 0; i <= parseInt(numero)-parseInt(um) ; i++){
                      var html;

                      if(i == random){
                       html += '<a class="aPreto" id="clica" tabindex="-1" href="' + listaLinks[randomLink] + '" target="_blank">' + frase +' </a>';
                   }else{
                       if(frase == ""){
                        html+= 'não taca canudo 🥤🐢';	
                    }else{
                        html+= frase + " ";
                    }

                }
                        //console.log("IHH =" + i);
                    }
                    

                    $(".testeTexto").html(html);

                    
                }


            });
}

carregaLink();


$('.testeTexto').html("não taca canudo 🥤🐢");

$('#fornums').on('submit keyup', function(){
    possibilidades = "";
    carregaLink();
    return false;
});

$("#numero").on('mouseup', function(){
    possibilidades = "";
    carregaLink();
});

$(document).on('click', '#btn1', function(){
   possibilidades = "um";
            //console.log(possibilidades + " mano q?");
            carregaLink();

        });

$(document).on('click', '#btnfacil', function(){
   possibilidades = "dez";
            //console.log(possibilidades + " mano q?");
            carregaLink();

        });

$(document).on('click', '#btnmedio', function(){
   possibilidades = "medio";
            //console.log(possibilidades + " mano q?");
            carregaLink();

        });

$(document).on('click', '#btndificil', function(){
   possibilidades = "dificil";
            //console.log(possibilidades + " mano q?");
            carregaLink();

        });

$(document).on('click', '#btnchato', function(){
   possibilidades = "chato";
            //console.log(possibilidades + " mano q?");
            carregaLink();

        });

$(document).on('click', '#btnextremo', function(){
   possibilidades = "extremo";
            //console.log(possibilidades + " mano q?");
            carregaLink();

        });

$(document).on('click', '#btntarta', function(){
   possibilidades = "tarta";
            //console.log(possibilidades + " mano q?");
            carregaLink();

        });

$(document).on('click', '.aPreto', function(){
    pontos = parseInt(pontos) + parseInt(numeroponto);
    $(".pontuacao").html("PONTUAÇÃO: " + pontos);
    carregaLink();
            //console.log("PONTOS = "+pontos);
        });

});
