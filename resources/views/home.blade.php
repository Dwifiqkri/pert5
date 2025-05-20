<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Manfaat & Jenis Jahe</title>
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
          <li class="nav-item"><a class="nav-link active" href="{{ url('/') }}">Home</a></li>
          <li class="nav-item"><a class="nav-link" href="{{ url('/about') }}">About Me</a></li>
          <li class="nav-item"><a class="nav-link" href="#manfaat">Manfaat</a></li>
          <li class="nav-item"><a class="nav-link" href="#jenis">Jenis</a></li>
          <li class="nav-item"><a class="nav-link" href="#order">Order</a></li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Hero Section -->
  <header class="bg-warning text-dark text-center py-5">
    <h1 class="display-5">Yuk Kenali Manfaat Jahe!</h1>
    <p class="lead">Jahe bukan sekadar bumbu dapur. Ia adalah keajaiban alami!</p>
    <a href="#manfaat" class="btn btn-dark mt-3">Lihat Manfaat</a>
  </header>

  <!-- Gambar -->
  <div class="container my-5 text-center">
    <img src="{{ asset('images/jahe.jpeg') }}" class="img-fluid rounded shadow" alt="Gambar Jahe" />
    <p class="mt-3">Jahe segar siap jadi minuman sehat harianmu!</p>
  </div>

  <!-- Manfaat Jahe -->
  <div class="container" id="manfaat">
    <h2 class="text-center mb-4">Manfaat Utama Jahe</h2>
    <div class="row row-cols-1 row-cols-md-2 g-4">
      <div class="col">
        <div class="card h-100 border-success">
          <div class="card-body">
            <h5 class="card-title">1. Menghangatkan Tubuh</h5>
            <p class="card-text">Cocok dikonsumsi saat cuaca dingin untuk menghangatkan tubuh secara alami.</p>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card h-100 border-success">
          <div class="card-body">
            <h5 class="card-title">2. Redakan Mual & Masuk Angin</h5>
            <p class="card-text">Minum air jahe bisa mengurangi rasa mual dan perut kembung.</p>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card h-100 border-success">
          <div class="card-body">
            <h5 class="card-title">3. Menjaga Daya Tahan Tubuh</h5>
            <p class="card-text">Kaya antioksidan untuk meningkatkan sistem imun dan kesehatan tubuh.</p>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card h-100 border-success">
          <div class="card-body">
            <h5 class="card-title">4. Meredakan Nyeri Otot</h5>
            <p class="card-text">Sifat anti-inflamasi jahe bermanfaat untuk otot dan persendian.</p>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Jenis-Jenis Jahe -->
  <div class="container my-5" id="jenis">
    <h2 class="text-center mb-4">Jenis-Jenis Jahe</h2>
    <div class="row row-cols-1 row-cols-md-3 g-4">
      <div class="col">
        <div class="card h-100 border-warning">
          <div class="card-body">
            <h5 class="card-title">Jahe Merah</h5>
            <p class="card-text">Memiliki rasa paling pedas dan sering digunakan untuk pengobatan tradisional karena kandungan minyak atsiri yang tinggi.</p>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card h-100 border-warning">
          <div class="card-body">
            <h5 class="card-title">Jahe Gajah</h5>
            <p class="card-text">Ukuran paling besar dan dagingnya tidak terlalu pedas. Umumnya digunakan untuk bumbu masak atau minuman herbal.</p>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card h-100 border-warning">
          <div class="card-body">
            <h5 class="card-title">Jahe Emprit</h5>
            <p class="card-text">Bentuk kecil dan rasa sangat tajam. Sering dijadikan bahan utama untuk jamu tradisional Jawa.</p>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Order Section -->
  <div class="container text-center my-5" id="order">
    <h2 class="mb-3">Ingin Pesan Jahe Segar?</h2>
    <p>Hubungi kami langsung melalui WhatsApp!</p>
    <a href="https://wa.me/0895341334074" class="btn btn-success btn-lg" target="_blank">Order Sekarang</a>
  </div>

  <!-- Footer -->
  <footer class="bg-dark text-white text-center py-3">
    <p>&copy; 2025 Dwi Fiqkri Hermawanto | NIM: 240105016</p>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
