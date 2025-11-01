<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login Page</title>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      background-color: #f7f7f7;
    }
    .card {
      border-radius: 12px;
      box-shadow: 0 8px 20px rgba(0,0,0,0.1);
    }
    .card-title {
      font-weight: 600;
      color: #333;
    }
    .form-control:focus {
      box-shadow: none;
      border-color: #4a90e2;
    }
    .btn-primary {
      background-color: #4a90e2;
      border: none;
    }
    .btn-primary:hover {
      background-color: #357ABD;
    }
  </style>
</head>
<body>
  <div class="container vh-100 d-flex justify-content-center align-items-center">
    <div class="card p-4 col-md-6 col-lg-4">
      <h3 class="card-title text-center mb-4">Login</h3>

      <form action="{{ route('login.submit') }}" method="POST">
       @csrf
        <!-- Email -->
        <div class="mb-3">
          <label for="email" class="form-label">Email</label>
          <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email" required>
        </div>

        <!-- Password -->
        <div class="mb-3">
          <label for="password" class="form-label">Password</label>
          <input type="password" class="form-control" id="password" name="password" placeholder="Enter password" required>
        </div>

        <!-- Submit Button -->
        <button type="submit" class="btn btn-primary w-100">Login</button>
      </form>

      <p class="mt-3 text-center">
        Don’t have an account? <a href="{{ route('register.view') }}">Register Here</a>
      </p>
    </div>
  </div>

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
