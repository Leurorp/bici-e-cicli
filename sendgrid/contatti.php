<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-compatible" content="IE-edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>contatti_bici_e_cicli</title>
  <script src="https://cdn.plot.ly/plotly-latest.min.js"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <link rel="stylesheet" href="../style.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Mohave:wght@500&display=swap" rel="stylesheet">
  <style>
    p {
      font-family: 'mohave', sans-serif;
    }
  </style>
</head>

<body>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
    crossorigin="anonymous"></script>
  <header class="header">
    <a class="logo" href="../index.php">&nbsp BICI E CICLI contatti</a>
    <input class="menu-btn" id="menu-btn" type="checkbox">
    <label class="menu-icon" for="menu-btn">
      <span class="nav-icon"></span>
    </label>
    <ul class="menu">
      <li><a href="../index.php">Strada</a></li>
      <li><a href="../pista.php">Pista</a></li>
      <li><a href="../meccanica.php">Meccanica</a></li>
      <li><a href="../shop.html">Shop</a></li>
      <li><a href="contatti.php">Contatti</a></li>
    </ul>
    <div style="padding:5px 0px 10px 5px">
      <img src="../immagini/urban-traffic-with-cityscape.jpg" class="img-fluid foto" height="210" width="600">
    </div>
  </header>

  <div class="container-fluid text-center" style="font-family:'mohave', sans-serif; color:blanchedalmond; font-size:22px; 
           padding:10px 10px 10px 0px;">
    Invia una email, ti risponderemo al più presto. Il tuo nome non comparirà nei commenti.
    <form method="post" action="contatti.php" style="display:grid; grid-template-columns:80px; 
        grid-gap:15px; padding:20px 0px 30px 2px; font-size:20px; margin-left:20%">
      <label for="nome">Nome:</label>
      <input type="text" name="nome" required style="width:250px; height:10px">
      <label for="email">Email:</label>
      <input type="email" name="email" required style="width:250px;">
      <label for="messaggio">Messaggio:</label>
      <textarea style="width:250px" name="testo" rows="5" required></textarea>
      <label></label>
      <input style="width:150px" type="submit" name="invia" value="invia">
    </form>
  </div>

  <?php
  require_once './config/config.php';
  require 'vendor/autoload.php'; // If you're using Composer (recommended)
  // Comment out the above line if not using Composer
  // require("<PATH TO>/sendgrid-php.php");
  // If not using Composer, uncomment the above line and
  // download sendgrid-php.zip from the latest release here,
  // replacing <PATH TO> with the path to the sendgrid-php.php file,
  // which is included in the download:
  // https://github.com/sendgrid/sendgrid-php/releases
  if (isset($_POST['invia'])) {
    $nome = $_POST['nome'];
    $emailMittente = $_POST['email'];
    $testo = $_POST['testo'];

    $email = new \SendGrid\Mail\Mail();
    $email->setFrom("leuro.borsini@libero.it", "bici_e_cicli");
    $email->setSubject("Messaggio da ".$emailMittente);
    $email->addTo("borsinileuro@gmail.com");
    $email->addContent("text/plain", "and easy to do anywhere, even with PHP");
    $email->addContent(
      "text/html",
      "<strong>Messaggio scritto da ".$nome.":<br></strong>".$testo);
    $sendgrid = new \SendGrid(SENDGRID_API_KEY);
    try {
      // $response = $sendgrid->send($email);
      // print $response->statusCode() . "\n";
      // print_r($response->headers());
      // print $response->body() . "\n";
    } 
    catch (Exception $e) {
      echo '<p style="color:white"> Caught exception: ' . $e->getMessage() . "\n"."</p>";
    }
    if ($sendgrid->send($email)) {
      echo "<p style='color:white; text-align:center;'> Messaggio inviato con successo!</p>";
    }
  }
?>

  <div class="foot" style="color:blanchedalmond">
    COMMENTI
    <div style="position:absolute; border:1px solid ghostwhite; border-radius: 20px">
      <p style="padding:3px 3px 0px 3px; font-size:14px"><i><b>utente 1:</b> ' vorrei essere piu allenato ma ho poco tempo. Come posso fare ? '
          <br><b>bici&cicli:</b> 'allenati nei ritagli della giornata, per esempio nella prima della pausa pranzo
           o la mattina prima di andare al lavoro. Accontentati della tua forma, non strafare. '
        </i></p>
    </div> <br><br>
  </div><br><br><br>

  <canvas id="demo" width="85" height="60" style="margin-left:20px;">
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