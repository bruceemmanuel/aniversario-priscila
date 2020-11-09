<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Feliz aniversário Priscila</title>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;500&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="/css/app.css?v=<?php echo filemtime(__DIR__ . '/css/app.css'); ?>">
</head>
<body>

  <section class="main">

        <header>
          <div class="content">

            <div class="phrase">
              <blockquote cite="http://">
                <p>“O valor das coisas não está no tempo que elas duram, mas na intensidade com que acontecem. Por isso, existem momentos inesquecíveis, coisas inexplicáveis e pessoas incomparáveis.”</p>
                <footer>
                  Fernando Pessoa
                </footer>
              </blockquote>
            </div>

          </div><!-- end content -->

        </header>

        <?php require __DIR__ . '/messages.php';  shuffle($messages); ?>

        <section id="testimonials">
            <div class="content">
              <?php foreach($messages as $message): ?>
              <div class="testimony">
                  <img src="/images/<?php echo $message['image'] ?>" alt="<?php echo $message['name'] ?>">
                <blockquote>
                  <p><?php echo $message['message']; ?></p>
                <footer><?php echo $message['name']; ?></footer>
                </blockquote>
              </div>
            <?php endforeach;?>
            </div>
        </section>

        <footer class="footer">
          <div class="content">
              <footer>Feliz aniversário, Priscila - 10/11/2020 / NTSWEB</footer>
          </div>
        </footer>

  </section>

</body>
</html>
