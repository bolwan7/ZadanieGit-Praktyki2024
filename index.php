<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Strona Główna Firmy</title>
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="#">Moja Firma</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link" href="#">Strona Główna</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#o-firmie">O firmie</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#kontakt">Kontakt</a>
        </li>
      </ul>
    </div>
  </nav>

  <div class="jumbotron text-center">
    <h1>Witamy w Mojej Firmie</h1>
    <p>Twoje rozwiązanie dla każdej potrzeby biznesowej</p>
  </div>

  <div class="container mt-5" id="o-firmie">
    <div class="row">
      <div class="col-md-6">
        <h2>O naszej firmie</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet.</p>
      </div>
      <div class="col-md-6">
        <h2>Nasze usługi</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet. </p>
      </div>
    </div>
  </div>

  <div class="container mt-5" id="kontakt">
    <h2>Skontaktuj się z nami</h2>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet.</p>
  </div>

  <div class="container mt-5">
    <div class="row justify-content-center">
      <div class="col-md-6">
        <div class="card">
          <div class="card-header">
            Logowanie
          </div>
          <div class="card-body">
            <form action="ECHO.php" method="post">
              <div class="form-group">
                <label for="username">Nazwa użytkownika</label>
                <input type="text" class="form-control" id="username" name="username" placeholder="Wprowadź nazwę użytkownika" required>
              </div>
              <div class="form-group">
                <label for="password">Hasło</label>
                <input type="password" class="form-control" id="password" name="password" placeholder="Wprowadź hasło" required>
              </div>
              <button type="submit" class="btn btn-primary btn-block">Zaloguj się</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>

  <footer class="bg-dark text-light text-center py-4 mt-5">
    <p>&copy; 2024 Moja Firma. Wszystkie prawa zastrzeżone.</p>
  </footer>

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
