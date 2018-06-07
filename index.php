 <!doctype html>
<!--
           Alunno:  Dominissini Christian 
           Classe:  2°a

  Anno scolastico:  2017-2018
             Data:  05/06/2018

-->
<html lang="it">
  <head>
    <title>Hello, world!</title>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap-reboot.min.css">
    <link rel="stylesheet" href="css/bootstrap-grid.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <!-- Your custom external CSS -->
    <link rel="stylesheet" href="css/custom.css">

    <!-- Your custom internal CSS -->
    <style type="text/css">

    </style>

  </head>
  <body>

    <header>
      <div class="container">
        <ul class="nav">
          <li class="nav-item">
            <a class="nav-link active" href="/esercizio_1/index.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/esercizio_1/about.php">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Link</a>
          </li>
          <li class="nav-item">
            <a class="nav-link disabled" href="#">Disabled</a>
          </li>
        </ul>
      </div>
    </header>

    <main>
      <div class="container">

        <?php
          $lista = [
            'elemento 1',
            'elemento 2',
            'elemento 3',
            'elemento 4',
            'elemento 5',
            ];

            foreach ($lista as $key => $item) {
              print '<li>' . $item . '</li>';
          }

        ?>


      </div>
    </main>

    <footer>
      <div class="container">

      </div>
    </footer>

  </body>
</html>
