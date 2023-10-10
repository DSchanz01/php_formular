<!doctype html>
<html lang="de">

<head>
  <title>Kunde</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

</head>

<body>
 <div class="container">
    <div class="row justify-content-center align-items-center g-2">
        <h1>Gewählter Kunde</h1>
        <?php
            $id = $_GET['id'];
            $pdo = new PDO('mysql:host=localhost;dbname=php_formular','root', '');
            $results = $pdo->query('SELECT *FROM kunde WHERE id=$id');
            print($results['name']);
        ?>

    </div>
 </div>
</body>

</html>