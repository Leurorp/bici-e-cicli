<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-compatible" content="IE-edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>meccanica</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <link rel="stylesheet" href="style.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Mohave:wght@500&display=swap" rel="stylesheet">
  <style>
  </style>
</head>

<body>

  <header class="header">
    <a class="logo" href="index.html">BICI E CICLI meccanica</a>
    <input class="menu-btn" id="menu-btn" type="checkbox">
    <label class="menu-icon" for="menu-btn">
      <span class="nav-icon"></span>
    </label>
    <ul class="menu">
      <li><a href="index.html">Strada</a></li>
      <li><a href="pista.html">Pista</a></li>
      <li><a href="meccanica.php">Meccanica</a></li>
      <li><a href="shop.html">Shop</a></li>
      <li><a href="sendgrid/contatti.php">Contatti</a></li>
    </ul>
    <div class="demo" style="margin:5px 0px 0px 0px;">
      <figure>
        <img src="immagini/professional-cyclist-woman-with-helmet-side-view.jpg" width="90%" height="80%">
        <figcaption>
          <h1>Calcolo la misura del telaio per te. Scorri in basso e inserisci i tuoi dati</h1>
        </figcaption>
      </figure>
      <span style="margin-left: 0px;display: block ;color:rgb(161, 168, 175)">Immagine di <a href="https://it.freepik.com/foto-gratuito/ciclista-femminile-in-posa-con-bicicletta-e-casco_32521462.htm#query=ciclismo&position=25&from_view=search&track=sph">
          Freepik</a></span>
    </div>
  </header>

  <div class="container-fluid" style="position:relative;">
    <br>
    <h2>Il telaio</h2><br>
    <p><br>
      E' la parte piu importante della bicicletta, deve essere resistente e allo stesso tempo elastico.<br>
      Il telaio deve resistere alle violente sollecitazioni dell'atleta e deve assorbire anche le vibrazioni dovute alle malformità
      dell'asfalto e all'inclinazione nelle curve.<br>
      Col passare degli anni, la tecnologia ha trovato la soluzione per biciclette sempre piu leggere con materiali innovativi,
      fino ad arrivare alla fibra di carbonio, utilizzata ormai in molte marche di biciclette ma ahimè, molto costose.<br>
    </p><br>
    <h2>Le ruote</h2><br>
    <p><br>
      Possiamo avere ruote a basso o alto profilo, di ceramica o di carbonio, a raggi, a razze o a disco.
      Le più usate sono le ruote a raggi o a razze perchè sono le piu leggere ed offrono maggiore guidabilità alla bici.
      Le ruote a disco o lenticolari vengono usate per le cronometro, hanno piu aerodinamica ma sono pesanti e costosissime.
      I copertoncini hanno sostituito i tubolari perchè sono piu economici e piu affidabili. Resta il fatto che i tubolari sono piu
      performanti ma in caso di foratura sono da cambiare (si possono riparare ma ci vuole molto tempo). Inoltre ho visto cadere
      atleti in curva per il fatto che nelle curve in cui inclini molto la bicicletta la forza che si imprime sulla ruota non è piu
      verticale ma diagonale. Questo fa si che il tubolare può letteralmente sganciarsi dalla ruota e rimanere con il solo cerchione!
    </p><br>
    <h2>Le moltipliche</h2><br>
    <p><br>
      Sono due, quella piu grande (tra 48 e 53 denti) e quella piu piccola (tra 36 e 42 denti). Le MTB hanno anche una terza moltiplica
      ancora piu piccola.
    </p><br>
    <h2>La ruota libera</h2><br>
    <p><br>
      E' un cilindro che si avvita e si blocca sul mozzo posteriore. Serve a trasmettere il moto della catena alla ruota solo se si
      pedala in senso orario.<br>
    </p>
    <h2>Cambio e deragliatore</h2><br>
    <p><br>
      Il cambio si manovra tramite una leva e un pulsante che si trova nel lato destro del manubrio. Tirando o allentando alcune viti
      possiamo tirare o allentare il cavetto del cambio, per permettere un perfetto inserimento della marcia.<br>
      Possiamo anche impostare il fine corsa lato ruota o lato opposto con delle piccole viti poste nella parte esterna del cambio.<br>
      Il deragliatore permette il salto della catena nella corona anteriore piu piccola o piu grande. E' una guida in metallo in
      cui passa la catena e si manovra con la leva posta nel lato sinistro del manubrio.
    </p><br>
    <h2>La sella</h2><br>
    <p><br>
      La sella ha una posizione normalmente orizzontale. Possono verificarsi solo leggere inclinazioni della punta verso il basso.<br>
      La morbidezza della sella non è un parametro importante a differenza di come potrebbe sembrare. Infatti i ciclisti che macinano
      centinaia di chilometri al giorno utilizzano una sella leggera, un po dura e sottile.
    </p>
    <div class="container" style="text-align:center; color:aliceblue; position:absolute;">
      <p style="font-family:'mohave', sans-serif; font-size: 25px;">
        Inserisci la tua altezza in centimetri</p>
      <form name="modulo" method="post">
        <input style="width:150px" type="number" name="altezza" value="170">
        <input style="width:20%; padding:10px; width:90px; border:5px solid rgb(187, 235, 191);" type="button" value="invia" onclick="moduli()">
      </form>
    </div>
    <div id="taglia" style="text-align:center; margin-top:190px; font-family:'mohave', sans-serif;
               font-size: 5px; border-radius:20px; background-color: aqua; color:navy; padding:7px; 
               transition-property:font-size; font-weight:bolder; transition-duration:0.4s;
               max-width:400px" class="container">
    </div>
    <script>
      function moduli() {
        let nome = document.modulo.altezza.value;
        let esito;
        if ((nome == "") || (nome == "undefined")) {
          alert("Il campo Nome è obbligatorio.");
          document.modulo.altezza.focus();
          return false;
        } else {
          if (nome >= 150 & nome <= 160) {
            esito = 'Taglia della bici in centimetri: 47 o 48';
          }
          if (nome >= 161 & nome <= 165) {
            esito = 'Taglia della bici in centimetri: 49 o 50';
          }
          if (nome >= 166 & nome <= 170) {
            esito = 'Taglia della bici in centimetri: 51 o 52';
          }
          if (nome >= 171 & nome <= 175) {
            esito = 'Taglia della bici in centimetri: 53 o 54';
          }
          if (nome >= 176 & nome <= 180) {
            esito = 'Taglia della bici in centimetri: 55 o 56';
          }
          if (nome >= 181 & nome <= 185) {
            esito = 'Taglia della bici in centimetri: 57 o 58';
          }
          if (nome >= 186 & nome <= 190) {
            esito = 'Taglia della bici in centimetri: 59 o 60';
          }
          if (nome >= 191 & nome <= 240) {
            esito = 'Taglia della bici in centimetri: 60';
          }
          if (nome <= 149 || nome >= 241) {
            esito = 'Altezza inserita non conforme allo standard';
          }
          const taglia = document.getElementById('taglia');
          taglia.innerHTML = esito;
          taglia.style.fontSize = "large";
        }
      }
    </script>
    <canvas id="demo" width="85" height="60" style="margin-left:3px; margin-top:50px">
    </canvas>
    <script>
      let canvas = document.getElementById("demo");
      let context = canvas.getContext("2d");
      context.beginPath();
      context.scale(0.5, 0.3);
      context.moveTo(10, 34);
      context.lineTo(10, 190);
      context.lineTo(110, 190);
      context.lineWidth = 30;
      context.strokeStyle = "#0000cd";
      context, lineCap = "round";
      context.stroke();

      context.beginPath();
      context.lineWidth = 15;
      context.strokeStyle = "#dc143c";
      context.moveTo(42, 155);
      context.lineTo(85, 155);
      context.stroke();

      context.beginPath();
      context.arc(86, 125, 30, 0.5 * Math.PI, 1.5 * Math.PI, true);
      context.lineCap = "round";
      context.stroke();

      context.beginPath();
      context.lineCap = "square";
      context.moveTo(80, 95);
      context.lineTo(60, 95);
      context.stroke();

      context.beginPath();
      context.arc(86, 78, 17, 0.5 * Math.PI, 1.5 * Math.PI, true);
      context.lineCap = "round";
      context.stroke();

      context.beginPath();
      context.lineCap = "square";
      context.moveTo(80, 60);
      context.lineTo(43, 60);
      context.stroke();

      context.beginPath();
      context.lineCap = "square";
      context.moveTo(43, 60);
      context.lineTo(43, 155);
      context.stroke();
    </script>
    <h3 style="color:rgb(238, 217, 217); display:inline;"> WEB PRODUCTION </h3>
  </div>
</body>
</html>