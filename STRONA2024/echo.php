<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dane logowania</title>
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
  <div class="container mt-5">
    <div class="card">
      <div class="card-header">
        Dane logowania
      </div>
      <div class="card-body">
        <p><strong>Nazwa użytkownika:</strong> <?php echo htmlspecialchars($_POST['username']); ?></p>
        <p><strong>Hasło:</strong> <?php echo htmlspecialchars($_POST['password']); ?></p>
        <a href="index.php" class="btn btn-primary">Wróć do strony głównej</a>
      </div>
    </div>
  </div>

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
