<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>
<body style="background: url(https://media.giphy.com/media/Hh9sPYeSWhAUx6NDBM/giphy.gif) no-repeat center center fixed;-webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;">

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <div style="margin-right: 20px;">
    <img src="https://www.ricoh-americalatina.com/-/media/ricoh/common/images/designelements/ricoh-logo-lockup.svg" style="height: 40px;">
    </div>

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
     
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Busqueda" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Buscar</button>
      </form>
    </div>
  </div>
</nav>


<!-- ## ingreso Participante -->
<div id="ingresoParticipante" >
<div class="container" style="margin-top: 60px;">

<div class="row row-cols-2 row-cols-md-8 g-4">
  <div class="col">
    <div class="card h-100">
      <img id="imgP1" style="height: 250px;border: 3px solid #00000042;" src="https://media.gettyimages.com/vectors/superhero-couple-silhouette-in-the-city-vector-id613322400?k=6&m=613322400&s=612x612&w=0&h=G61cocX4PdgjVt6dKEC9uOAK0qmzAsquh4poo0HpMUI=" class="card-img-top" alt="...">
      <div class="card-body" style="background: #d5d6d6;">
      <h5 class="card-title" style="text-align: center;">Participante N°1</h5>
        <div class="col" style="margin-left: 40%;margin-bottom: 10px;margin-top: 10px;">
            <div class="form-check form-check-inline">
                <input class="form-check-input inlineRadioOptionsP1" type="radio" name="inlineRadioOptionsP1" id="inlineRadio1P1" value="M">
                <label class="form-check-label" for="inlineRadio1">M</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input inlineRadioOptionsP1" type="radio" name="inlineRadioOptionsP1" id="inlineRadio2P1" value="F">
                <label class="form-check-label" for="inlineRadio2">F</label>
            </div>
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text" id="inputGroup-sizing-default">Nombre: </span>
            <input id="txtParticipante1" type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
        </div>
      </div>
     
    </div>
  </div>
  <div class="col">
    <div class="card h-100">
      <img id="imgP2" style="height: 250px;border: 3px solid #00000042;" src="https://media.gettyimages.com/vectors/superhero-couple-silhouette-in-the-city-vector-id613322400?k=6&m=613322400&s=612x612&w=0&h=G61cocX4PdgjVt6dKEC9uOAK0qmzAsquh4poo0HpMUI=" class="card-img-top" alt="...">
      <div class="card-body" style="background: #d5d6d6;">
        <h5 class="card-title" style="text-align: center;">Participante N°2</h5>
        <div class="col" style="margin-left: 40%;margin-bottom: 10px;margin-top: 10px;">
            <div class="form-check form-check-inline">
                <input class="form-check-input inlineRadioOptionsP2" type="radio" name="inlineRadioOptionsP2" id="inlineRadio1P2" value="M">
                <label class="form-check-label" for="inlineRadio1">M</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input inlineRadioOptionsP2" type="radio" name="inlineRadioOptionsP2" id="inlineRadio2P2" value="F">
                <label class="form-check-label" for="inlineRadio2">F</label>
            </div>
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text" id="inputGroup-sizing-default">Nombre: </span>
            <input id="txtParticipante2"  type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
        </div>
 
    </div>
  </div>
</div>

</div>
    
    <div id="btnSiguiente" class="alert alert-success" role="alert" style="
        margin-top: 30px;
        width: 20%;
        right: 1px;    
        text-align: center;
        float: right;
        cursor: pointer;
    ">Continuar
    </div>
</div>
</div>
<!-- ## Fin Participante -->

<!-- ## ingreso Pregunta -->

<div id="ingresoPregunta"  style="display:none">

    <div class="container" style="margin-top: 60px;">
        <div class="row row-cols-1 row-cols-md-12 g-4">
            <div class="col">
                <div class="input-group mb-3">
                <label id="cboPreguntas" class="input-group-text" for="inputGroupSelect01">Seleccione pregunta</label>
                <select class="form-select" id="inputGroupSelect01" style="
                        font-weight: bold;
                        font-size: 20px;
                        background: #d61b3e;
                        color: white;
                    ">
                    <option selected>-- Seleccione --</option>
                    <option value="1">COSAS QUE NO DEBEN FALTAR EN UN DIA DE PLAYA EN AGUADULCE</option>
                    <option value="2">MENCIONA QUE SE TE PUEDE PERDER Y TE VUEVES LOCO</option>
                    <option value="3">UN LUGAR TÍPICO DE LIMA EN EL QUE LOS NOVIOS SE TOMAN FOTOS DESPUES DE LA CEREMONIA DE MATRIMONIO</option>
                    <option value="4">UN "PEDRO" FAMOSO </option>
                    <option value="5">MÉTODOS PARA ALIVIAR LA RESACA</option>
                    <option value="6">¿QUÉ COMERIAS A LAS 5AM DESPUES DE SALIR DE UNA FIESTA?</option>
                    <option value="7">QUÉ NO DEBE FALTAR EN UNA REUNIÓN PARA VER UN PARTIDO DE LA SELECCIÓN</option>
                    <option value="8">DECISIONES QUE SE DEBEN TOMAR EN PAREJA</option>
                    
                </select>
                </div>
            </div>
        </div>

    <div id="divRespues" style="display:none">
        <div class="row row-cols-2 " style="margin-top: 30px;">
            <div class="col-8">
                
            <table id="tblRespuesta" class="table table-bordered" style="background: white">
                <thead>
                <tr>
                <th scope="col" style="text-align: center;width: 10%;cursor: no-drop;">#</th>
                                <th scope="col" style="width: 75%;text-align: center;cursor: no-drop;">Respuesta</th>
                                <th scope="col" style="width: 15%;text-align: center;cursor: no-drop;">Puntaje</th>
                </tr>
                </thead>
            <tbody>
                <tr>
                <th id="itemRespuesta1" class="itemRespuesta" scope="row" style="text-align: center;">1</th>
                <td id="respuesta1" class="oculto" style="cursor: no-drop;"></td>
                <td id="puntaje1" class="oculto" style="text-align: center;cursor: no-drop;"></td>
                </tr>
                <tr>
                <th id="itemRespuesta2" class="itemRespuesta"  scope="row" style="text-align: center;">2</th>
                <td id="respuesta2" class="oculto" style="cursor: no-drop;"></td>
                <td id="puntaje2" class="oculto" style="text-align: center;cursor: no-drop;"></td>
                </tr>
                <tr>
                <th id="itemRespuesta3" class="itemRespuesta"  scope="row" style="text-align: center;">3</th>
                <td id="respuesta3" class="oculto" style="cursor: no-drop;"></td>
                <td id="puntaje3" class="oculto" style="text-align: center;cursor: no-drop;"></td>
                </tr>
                <tr>
                <th id="itemRespuesta4" class="itemRespuesta"  scope="row" style="text-align: center;">4</th>
                <td id="respuesta4" class="oculto" style="cursor: no-drop;"></td>
                <td id="puntaje4" class="oculto" style="text-align: center;cursor: no-drop;"></td>
                </tr>
                <tr>
                <th id="itemRespuesta5" class="itemRespuesta"  scope="row" style="text-align: center;">5</th>
                <td id="respuesta5" class="oculto"  style="cursor: no-drop;"></td>
                <td id="puntaje5" class="oculto" style="text-align: center;cursor: no-drop;"></td>
                </tr>
                <tr>
                <th id="itemRespuesta6"  class="itemRespuesta"  scope="row" style="text-align: center;">6</th>
                <td id="respuesta6" class="oculto" style="cursor: no-drop;"></td>
                <td id="puntaje6" class="oculto" style="text-align: center;cursor: no-drop;"></td>
                </tr>
            </tbody>

            </table>

            </div>

            <div class="col-4">

                <table class="table table-bordered" style="background: white;">
                    <thead>
                        <tr>
                        <th scope="col" style="width: 50%;text-align: center;" class="usuarioParticipante1"><img id="imgPP1" style="height: 100px;cursor: pointer;" src="" class="card-img-top imgRespuestaPar usuarioParticipante1" alt="..."></th>
                        <th scope="col" style="width: 50%;text-align: center;" class="usuarioParticipante2"><img id="imgPP2" style="height: 100px;cursor: pointer;" src="" class="card-img-top imgRespuestaPar usuarioParticipante2" alt="..."></th>
                        </tr>
                    </thead>
                    <tbody>
                    <tr>
                    <td class="usuarioParticipante1" style="text-align: center;font-weight: bold;" id="rowParticipante1"></td>
                    <td class="usuarioParticipante2" style="text-align: center;font-weight: bold;" id="rowParticipante2"></td>
                    </tr>

                    <tr>
                    <td class="usuarioParticipante1" style="text-align: center;" id="rowRespuesta1">0</td>
                    <td class="usuarioParticipante2" style="text-align: center;" id="rowRespuesta2">0</td>
                    </tr>
                    </tbody>
                </table>


            </div>

        </div>
    <div>
<div id="btnFinalizar" class="alert alert-success" role="alert" style="
        margin-top: 30px;
        width: 20%;
        right: 1px;    
        text-align: center;
        float: right;
        cursor: pointer;
    ">Finalizar
    </div>
    <div id="btnError" class="alert alert-danger" role="alert" style="
        margin-top: 30px;
        width: 5%;
        right: 1px;
        text-align: center;
        float: left;
        cursor: pointer;
    ">X</div>
    </div>

    <img id="imgError" style="height: 500px;cursor: pointer;position: absolute;left: 0;top: 100px;display:none" src="https://i.ibb.co/m5WzPdx/equis.png" class="card-img-top" alt="...">

</div>
<!-- ## Fin Pregunta -->


<style>
.imgSelected{
    border: 3px solid #0089ff;
}
.usuarioSelected{
    background: #87e481!important;
}
.oculto{
    display:none;
}
</style>
<script>
    var imgM1 = "https://media.gettyimages.com/vectors/cartoon-african-man-transforms-into-superhero-vector-id1025725540?k=6&m=1025725540&s=612x612&w=0&h=KFEcqiK5sAGfcsGqKpdm-enBoSgRdosrFdFIB7rfoGo=";
    var imgF1 = "https://media.gettyimages.com/vectors/vector-female-superhero-transformation-opening-shirt-vector-id869265556?k=6&m=869265556&s=612x612&w=0&h=S0Rs5MAVcQFJqOFPcIhg5nhslhMPOaf71kDiQEXgNQ4=";

    var imgM2 = "https://media.gettyimages.com/vectors/vector-man-opens-his-shirt-reveals-a-superhero-costume-inside-vector-id871275032?k=6&m=871275032&s=612x612&w=0&h=E2UFZJqtbozlInxNjQdoIKDZIZi-_jN0jlfTIDDqn5s=";
    var imgF2 = "https://media.gettyimages.com/vectors/vector-african-american-woman-superhero-change-pop-art-illustration-vector-id1173057502?k=6&m=1173057502&s=612x612&w=0&h=chOHWStXuqIM6v72nZ7FkkQcTnzkj4PpVhHnkaRsJfI=";

    var puntajeParticipante1 = 0;
    var puntajeParticipante2 = 0;

    var usuarioParticipante = 0;
    var jsonPreguntas="{\"preguntas\":{\"pregunta1\":{\"desc\":\"COSAS QUE NO DEBEN FALTAR EN UN DIA DE PLAYA EN AGUADULCE\",\"respuestas\":{\"respuesta1\":{\"desc\":\"SOMBRILLA\",\"puntaje\":10},\"respuesta2\":{\"desc\":\"COMIDA EN OLLA\",\"puntaje\":10},\"respuesta3\":{\"desc\":\"REFRESCO EN BOTELLA\",\"puntaje\":20},\"respuesta4\":{\"desc\":\"FLOTADOR\",\"puntaje\":10},\"respuesta5\":{\"desc\":\"CAJA DE CHELAS\",\"puntaje\":20},\"respuesta6\":{\"desc\":\"PISCINA INFLABLE\",\"puntaje\":30}}},\"pregunta2\":{\"desc\":\"MENCIONA QUE SE TE PUEDE PERDER Y TE VUEVES LOCO\",\"respuestas\":{\"respuesta1\":{\"desc\":\"CELULAR\",\"puntaje\":10},\"respuesta2\":{\"desc\":\"LLAVES\",\"puntaje\":10},\"respuesta3\":{\"desc\":\"DOCUMENTOS\",\"puntaje\":20},\"respuesta4\":{\"desc\":\"HIJOS\",\"puntaje\":20},\"respuesta5\":{\"desc\":\"PLATA\",\"puntaje\":20},\"respuesta6\":{\"desc\":\"PERRO\",\"puntaje\":20}}},\"pregunta3\":{\"desc\":\"LUGAR T\u00cdPICO EN LIMA DONDE SE TOMAN FOTOS DESPUES DE LA CEREMONIA DE MATRIMONIO\",\"respuestas\":{\"respuesta1\":{\"desc\":\"PARQUE DEL AMOR\",\"puntaje\":20},\"respuesta2\":{\"desc\":\"CHORRILLOS\",\"puntaje\":10},\"respuesta3\":{\"desc\":\"EL OLIVAR\",\"puntaje\":20},\"respuesta4\":{\"desc\":\"PLAZA MAYOR\",\"puntaje\":20},\"respuesta5\":{\"desc\":\"PARQUE DE LA AMISTAD\",\"puntaje\":10},\"respuesta6\":{\"desc\":\"PUENTE DE LOS SUSPIROS\",\"puntaje\":20}}},\"pregunta4\":{\"desc\":\"UN PEDRO FAMOSO \",\"respuestas\":{\"respuesta1\":{\"desc\":\"PEDRO SUAREZ VERTIZ\",\"puntaje\":10},\"respuesta2\":{\"desc\":\"PEDRO EL APOSTOL\",\"puntaje\":30},\"respuesta3\":{\"desc\":\"PEDRO EL ESCAMOSO\",\"puntaje\":10},\"respuesta4\":{\"desc\":\"PEDRO PABLO KUCZYNSKI \",\"puntaje\":20},\"respuesta5\":{\"desc\":\"PEDRO PICAPIEDRA\",\"puntaje\":10},\"respuesta6\":{\"desc\":\"PEDRO INFANTE\",\"puntaje\":20}}},\"pregunta5\":{\"desc\":\"M\u00c9TODOS PARA ALIVIAR LA RESACA\",\"respuestas\":{\"respuesta1\":{\"desc\":\"REHIDRANTES\",\"puntaje\":20},\"respuesta2\":{\"desc\":\"AGUA\",\"puntaje\":20},\"respuesta3\":{\"desc\":\"M\u00c1S LICOR\",\"puntaje\":20},\"respuesta4\":{\"desc\":\"SOPA\",\"puntaje\":10},\"respuesta5\":{\"desc\":\"MEDICAMENTOS\",\"puntaje\":20},\"respuesta6\":{\"desc\":\"CEVICHE\",\"puntaje\":10}}},\"pregunta6\":{\"desc\":\"\u00bfQU\u00c9 COMERIAS A LAS 5AM DESPUES DE SALIR DE UNA FIESTA?\",\"respuestas\":{\"respuesta1\":{\"desc\":\"CALDO DE GALLINA\",\"puntaje\":10},\"respuesta2\":{\"desc\":\"SANGUCHON\",\"puntaje\":10},\"respuesta3\":{\"desc\":\"LOMITO\",\"puntaje\":20},\"respuesta4\":{\"desc\":\"PESCADO FRITO\",\"puntaje\":20},\"respuesta5\":{\"desc\":\"ANTICUCHOS\",\"puntaje\":10},\"respuesta6\":{\"desc\":\"7 COLORES\/CHIFA\",\"puntaje\":30}}},\"pregunta7\":{\"desc\":\"QU\u00c9 NO DEBE FALTAR EN UNA REUNI\u00d3N PARA VER UN PARTIDO DE LA SELECCI\u00d3N\",\"respuestas\":{\"respuesta1\":{\"desc\":\"CHELAS \/ALCOHOL\",\"puntaje\":10},\"respuesta2\":{\"desc\":\"POLOS DE LA SELECCI\u00d3N\",\"puntaje\":20},\"respuesta3\":{\"desc\":\"PIQUEOS \/COMIDA\",\"puntaje\":30},\"respuesta4\":{\"desc\":\"TV\",\"puntaje\":10},\"respuesta5\":{\"desc\":\"AMIGOS\",\"puntaje\":20},\"respuesta6\":{\"desc\":\"BANDERA\",\"puntaje\":10}}},\"pregunta8\":{\"desc\":\"DECISIONES QUE SE DEBEN TOMAR EN PAREJA \",\"respuestas\":{\"respuesta1\":{\"desc\":\"CASARSE\",\"puntaje\":10},\"respuesta2\":{\"desc\":\"TENER UN HIJO\",\"puntaje\":20},\"respuesta3\":{\"desc\":\"EDUCACION DE LOS HIJOS\",\"puntaje\":20},\"respuesta4\":{\"desc\":\"COMPRAR UNA CASA\",\"puntaje\":20},\"respuesta5\":{\"desc\":\"DIVORCIARSE\",\"puntaje\":20},\"respuesta6\":{\"desc\":\"COMPRAR UN CARRO\",\"puntaje\":10}}}}}"


$( document ).ready(function() {

$('.inlineRadioOptionsP1').click(function (e) {
    var result = $(this).val()
    if(result == "M"){
        $("#imgP1").attr("src",imgM1)
    }else{
        $("#imgP1").attr("src",imgF1)
    }
})

$('.inlineRadioOptionsP2').click(function (e) {
    var result = $(this).val()
    if(result == "M"){
        $("#imgP2").attr("src",imgM2)
    }else{
        $("#imgP2").attr("src",imgF2)
    }
})

$('#btnSiguiente').click(function (e) {

    localStorage.setItem("nameP1",$("#txtParticipante1").val());
    localStorage.setItem("sexoP1",$('#imgP1').attr("src"));

    localStorage.setItem("nameP2",$("#txtParticipante2").val());
    localStorage.setItem("sexoP2",$('#imgP2').attr("src"));

    $("#ingresoParticipante").hide();
    $("#ingresoPregunta").show();
});

$('.imgRespuestaPar').click(function (e) {
    $(".imgRespuestaPar").removeClass("imgSelected");
    $(this).addClass("imgSelected");

    $(".usuarioParticipante1").removeClass("usuarioSelected");
    $(".usuarioParticipante2").removeClass("usuarioSelected");

    if($(this).hasClass("usuarioParticipante1")) {
        $(".usuarioParticipante1").addClass("usuarioSelected");
        usuarioParticipante = 1;
    }else{
        $(".usuarioParticipante2").addClass("usuarioSelected");
        usuarioParticipante = 2;
    }
    $(".itemRespuesta").css("cursor","pointer")
});

$('#inputGroupSelect01').change(function (e) {
    var pregunta = $(this).val()
    $("#divRespues").show();
    $("#rowParticipante1").html(localStorage.getItem("nameP1"))
    $("#rowParticipante2").html(localStorage.getItem("nameP2"))
    
    $("#imgPP1").attr("src",localStorage.getItem("sexoP1"))
    $("#imgPP2").attr("src",localStorage.getItem("sexoP2"))

    $(this).attr("disabled","true")
    $(".itemRespuesta").css("cursor","no-drop")
    listarPreguntas(pregunta);
});

$(document).on("click",'.itemRespuesta',function(event){
    if(usuarioParticipante > 0){
        var pos = $(this).text();
        $("#respuesta"+pos).removeClass("oculto")
        $("#puntaje"+pos).removeClass("oculto")

        $("#respuesta"+pos).addClass("usuarioSelected")
        $("#puntaje"+pos).addClass("usuarioSelected")
        $("#itemRespuesta"+pos).addClass("usuarioSelected")

        if(usuarioParticipante == 1){
            puntajeParticipante1 = puntajeParticipante1 + parseFloat($("#puntaje"+pos).text());
            $("#rowRespuesta1").text(puntajeParticipante1)
        }else{
            puntajeParticipante2 = puntajeParticipante2 + parseFloat($("#puntaje"+pos).text());
            $("#rowRespuesta2").text(puntajeParticipante2)
        }

        $(this).removeClass("itemRespuesta");

    }

});
$(document).on("click",'#btnError',function(event){

if(usuarioParticipante > 0){
    
    $("#imgError").show("slow")
    setTimeout(function(){ 
        $("#imgError").hide("slow") 
        
        if(usuarioParticipante == 1){
            $(".usuarioParticipante2").click()
        }else{
            $(".usuarioParticipante1").click()
        }
        
        }, 2000);

}

});  

$(document).on("click",'#btnFinalizar',function(event){
    location.reload();
});

});


function listarPreguntas(pregunta){
    var preguntaSeleccionada = "pregunta"+ pregunta
    var objPreguntasRespuesta = JSON.parse(jsonPreguntas);
    var jsonRespuestas = objPreguntasRespuesta.preguntas[preguntaSeleccionada].respuestas

    $("#respuesta1").html(jsonRespuestas.respuesta1.desc);
    $("#respuesta2").html(jsonRespuestas.respuesta2.desc);
    $("#respuesta3").html(jsonRespuestas.respuesta3.desc);
    $("#respuesta4").html(jsonRespuestas.respuesta4.desc);
    $("#respuesta5").html(jsonRespuestas.respuesta5.desc);
    $("#respuesta6").html(jsonRespuestas.respuesta6.desc);

    $("#puntaje1").html(jsonRespuestas.respuesta1.puntaje);
    $("#puntaje2").html(jsonRespuestas.respuesta2.puntaje);
    $("#puntaje3").html(jsonRespuestas.respuesta3.puntaje);
    $("#puntaje4").html(jsonRespuestas.respuesta4.puntaje);
    $("#puntaje5").html(jsonRespuestas.respuesta5.puntaje);
    $("#puntaje6").html(jsonRespuestas.respuesta6.puntaje);


}
</script>

</body>
</html>