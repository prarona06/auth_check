<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>User Registration</title>

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

  <style>
    body {
      background-color: #f8f9fa;
    }
    .register-card {
      max-width: 450px;
      margin: 60px auto;
      border-radius: 15px;
      box-shadow: 0 4px 15px rgba(0,0,0,0.1);
    }
    .card-header {
      background-color: #0d6efd;
      color: white;
      border-top-left-radius: 15px;
      border-top-right-radius: 15px;
      text-align: center;
      font-size: 1.5rem;
      font-weight: 500;
      padding: 15px 0;
    }
  </style>
</head>
<body>

  <div class="card register-card">
    <div class="card-header">
      User Registration
    </div>
    <div class="card-body p-4">
      <form>
        <!-- Name -->
        <div class="mb-3">
          <label for="name" class="form-label">Full Name</label>
          <input type="text" class="form-control" id="name" placeholder="Enter your full name" required>
        </div>

        <!-- Email -->
        <div class="mb-3">
          <label for="email" class="form-label">Email Address</label>
          <input type="email" class="form-control" id="email" placeholder="Enter your email" required>
        </div>

        <!-- Password -->
        <div class="mb-3">
          <label for="password" class="form-label">Password</label>
          <input type="password" class="form-control" id="password" placeholder="Enter password" required>
        </div>

        <!-- Confirm Password -->
        <div class="mb-3">
          <label for="confirmPassword" class="form-label">Confirm Password</label>
          <input type="password" class="form-control" id="confirmPassword" placeholder="Re-enter password" required>
        </div>

        <!-- Submit -->
        <button type="submit" class="btn btn-primary w-100">Register</button>
      </form>

      <p class="text-center mt-3 mb-0">
        Already have an account? <a href="{{ route('login.view')}}">Login Here</a>
      </p>
    </div>
  </div>

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
