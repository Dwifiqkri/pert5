<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>About Me</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
</head>
<body>

  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
      <a class="navbar-brand" href="{{ url('/') }}">Fiqkri Herbal</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item"><a class="nav-link" href="{{ url('/') }}">Home</a></li>
          <li class="nav-item"><a class="nav-link active" href="{{ url('/about') }}">About Me</a></li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Logo UNU -->
  <div class="text-center my-5">
    <a href="https://instagram.com/unukaltim" target="_blank">
      <img src="{{ asset('images/download.png') }}" alt="Logo UNU" style="max-width: 150px;" />
    </a>
  </div>

  <!-- About Content -->
  <div class="container text-center">
    <h1>About Me</h1>
    <p>Halo! Saya Dwi Fiqkri Hermawanto.</p>
    <p>NIM: 240105016</p>
    <p>Program Studi Teknik Informatika</p>
    <p>Berikut adalah akun sosial media saya. Jangan lupa follow ya!</p>

    <div class="d-flex justify-content-center gap-3 mt-3">
      <a href="https://instagram.com/d_fiqkri" class="btn btn-outline-danger" target="_blank">
        Instagram
      </a>
      <a href="https://facebook.com/fiqkri hermawan" class="btn btn-outline-primary" target="_blank">
        Facebook
      </a>
      <a href="mailto:dwifiqkri@gmail.com" class="btn btn-outline-dark">
        Email
      </a>
    </div>
  </div>

  <!-- Footer -->
  <footer class="bg-dark text-white text-center py-3 mt-5">
    <p>&copy; 2025 Dwi Fiqkri Hermawanto | NIM: 240105016</p>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
