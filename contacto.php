<!DOCTYPE html>
<html>

  <head>
    <meta charset="utf-8">
    <title>CONTACTO</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
  </head>

  <body>
    <header>
      <div class="container-fluid slider d-flex justify-content-center align-items-center">
        <h1 class="display-4">PEI - TIC</h1>
      </div>
    </header>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">

            <!--<a class="navbar-brand" href="index.php">
              <img src="images/logo.png" width="30" height="30" class="d-inline-block align-top" alt="">
              PEI - TIC
            </a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>

            <div class=" navbar-collapse">
              <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                  <a class="btn btn-outline-danger mr-2 active" href="index.php">INICIO</a>
                </li>
                <li class="nav-item">
                  <a class="btn btn-outline-primary mr-2" href="pei.php">PEI-TIC</a>
                </li>
                <li class="nav-item">
                  <a class="btn btn-outline-warning mr-2" href="contacto.php">CONTACTANOS</a>
                </li>
              </ul>
              <span class="navbar-text">
                <a href="#"  class="btn btn-danger">SALIR</a>
              </span>
            </div> -->

            <span class="navbar-text navbar-nav mr-2">
              <a href="index.php"  class="btn btn-outline-danger">INICIO</a>
            </span>
            <span class="navbar-text navbar-nav mr-2">
              <a href="pei.php"  class="btn btn-outline-primary">PEI-TIC</a>
            </span>
            <span class="navbar-text navbar-nav mr-auto">
              <a href="contacto.php"  class="btn btn-outline-warning active">CONTÁCTANOS </a>
            </span>
    </nav>

    <main>
      <br><br>
      <section class="site-section">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <form action="index.php" method="POST">
                    <div class="row">
                      <div class="col-md-4 form-group">
                        <label for="name">NOMBRES</label>
                        <input type="text" id="name" name="nombres" class="form-control ">
                      </div>
                      <div class="col-md-4 form-group">
                        <label for="phone">TELÉFONO</label>
                        <input type="text" id="phone" name="telefono" class="form-control ">
                      </div>
                       <div class="col-md-4 form-group">
                        <label for="email">CORREO</label>
                        <input type="email" id="email" name="correo" class="form-control ">
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-md-12 form-group">
                        <label for="message">NOTAS</label>
                        <textarea id="message" name="peticion" class="form-control " cols="30" rows="8"></textarea>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6 form-group">
                        <input type="submit" value="ENVIAR" class="btn btn-primary">
                      </div>
                    </div>
                  </form>
            </div>
          </div>
        </div>
      </section>
    </main>
    <br><br>

    <footer>
      <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="index.php">
          <img src="images/logo.png" width="30" height="30" class="d-inline-block align-top" alt="">
          PEI - TIC
        </a>
        <span class="navbar-text">
          <a href="contacto.php"  class="btn btn-primary">UP</a>
        </span>
      </nav>
      <p align="center">Copyright  2019 - Ronald Fuentes</p>
    </footer>

  </body>
</html>
