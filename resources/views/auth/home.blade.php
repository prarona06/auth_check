<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Home Page</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      font-family: 'Poppins', sans-serif;
    }
    .hero {
      background: linear-gradient(to right, #0062E6, #33AEFF);
      color: white;
      padding: 100px 0;
      text-align: center;
    }
    .hero h1 {
      font-size: 3rem;
      font-weight: 700;
    }
    .features .icon {
      font-size: 40px;
      color: #0d6efd;
    }
    footer {
      background-color: #f8f9fa;
      padding: 20px 0;
      text-align: center;
      margin-top: 50px;
    }
  </style>
</head>
<body>

  <!-- 🔹 Navbar -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="container">
      <a class="navbar-brand fw-bold" href="#">MyWebsite</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item"><a class="nav-link active" href="#">Home</a></li>
          <li class="nav-item"><a class="nav-link" href="#">About</a></li>
          <li class="nav-item"><a class="nav-link" href="#">Features</a></li>
          <li class="nav-item"><a class="nav-link" href="#">Contact</a></li>
          @guest
          <li class="nav-item"><a class="btn btn-light text-primary ms-2" href="{{ route ('login.view') }}">Login</a></li>
           <li class="nav-item"><a class="btn btn-light text-primary ms-2" href="{{ route ('register.view') }}">SignUp</a></li>
         @endguest
  @auth

<form action ="{{ route ('logout') }}" method ="post">
    @csrf
            <li class="nav-item"><a class="btn btn-light text-primary ms-2" href="{{ route ('logout') }}">Logout</a></li>
            </form>
           @endauth

        </ul>
      </div>
    </div>
  </nav>

  <!-- 🔹 Hero Section -->
  <section class="hero">
    <div class="container">
      <h1>Welcome to MyWebsite</h1>
      <p class="lead mt-3">Your one-stop solution for modern web design and development.</p>
      <a href="#features" class="btn btn-light btn-lg mt-3">Explore Features</a>
    </div>
  </section>

  <!-- 🔹 About Section -->
  <section class="py-5">
    <div class="container text-center">
      <h2 class="fw-bold mb-4">About Us</h2>
      <p class="text-muted mx-auto" style="max-width: 700px;">
        We are a team of passionate developers creating elegant and efficient web applications using the latest technologies like Laravel, Bootstrap, and Vue.js.
      </p>
    </div>
  </section>

  <!-- 🔹 Features Section -->
  <section class="features py-5 bg-light" id="features">
    <div class="container">
      <h2 class="text-center fw-bold mb-5">Our Features</h2>
      <div class="row text-center">
        <div class="col-md-4">
          <div class="icon mb-3">⚡</div>
          <h5>Fast Performance</h5>
          <p>Our apps are optimized for speed and scalability.</p>
        </div>
        <div class="col-md-4">
          <div class="icon mb-3">🔒</div>
          <h5>Secure System</h5>
          <p>We follow modern security practices to protect your data.</p>
        </div>
        <div class="col-md-4">
          <div class="icon mb-3">🎨</div>
          <h5>Beautiful Design</h5>
          <p>We focus on creating visually appealing user interfaces.</p>
        </div>
      </div>
    </div>

  </section>

  <!--Footer -->
  <footer>
    <p class="mb-0">&copy; 2025 MyWebsite. All rights reserved.</p>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
