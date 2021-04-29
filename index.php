<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <!-- Link de boostrap-->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous" />
  <!-- Link de font awesome-->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w==" crossorigin="anonymous" />
  <title>IMC</title>
  <link rel="stylesheet" href="index.css" />
</head>

<body>
  <div class="container div1 my-5">
    <div class="card container py-5">
      <center>
        <h1>IMC</h1>
      </center>
      <form method="POST" action="#">
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label"> Peso (kg)</label>
          <input type="number" name="peso" class="form-control" min="0"/>
        </div>
        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">Estatura - Talla (m)</label>
          <input type="float" name="estatura" class="form-control"/>
        </div>
        <center>
          <button type="submit" name="calcular" class="btn buttonCalcular">
            <b>Calcular</b>
          </button>
        </center>
      </form>

      <?php
      if (isset($_POST['calcular'])) {
        $peso = $_POST['peso'];
        $estatura = $_POST['estatura'];
        $IMC = $peso / ($estatura * $estatura);
        $IMC=number_format($IMC,2);

        echo "<div class='container my-3'><center>Su Indice de Masa Corporal es: <br>$IMC</center></div>";
      }
      ?>
    </div>
  </div>
  <!-- Scripts de boostrap-->
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
</body>

</html>