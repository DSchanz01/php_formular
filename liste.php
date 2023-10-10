<!doctype html>
<html lang="de">

<head>
  <title>Liste</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

</head>

<body>
  
<dic class="container">
    <h1>Kundenliste</h1>
    <?php
        $pdo = new PDO('mysql:host=localhost;dbname=php_formular','root', '');
        if ($pdo) {
            $results = $pdo->query('SELECT *FROM kunde');
            foreach($results as $result) {
                print('<a href="kunde.php?id=');
                print($result['id']);
                print('"target="_blank" >');
                print($result['vorname']." ");
                print($result['name']);
                //print("ID= ".$result['id']);
                print("</a>");
                print("<br />");
            }
            
        } else {
            print("Datenbankzugriff gescheitert");
        }
    ?>

        <div class="row justify-content-center align-items-center g-2">


    </div>
</dic>
</body>

</html>