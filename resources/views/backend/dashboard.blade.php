<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>User Dashboard</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"/>
  <style>
    body {
      font-family: 'Segoe UI', sans-serif;
      background-color: #f8f9fa;
    }
    .sidebar {
      height: 100vh;
      background-color: #343a40;
      color: white;
      padding-top: 1rem;
    }
    .sidebar a {
      color: white;
      text-decoration: none;
      display: block;
      padding: 10px;
    }
    .sidebar a:hover {
      background-color: #495057;
    }
    .dashboard-content {
      padding: 2rem;
    }
  </style>
</head>
<body>
  <div class="container-fluid">
    <div class="row">
      <!-- Sidebar -->
      <nav class="col-md-2 d-none d-md-block sidebar">
        <h4 class="text-center">My Blog</h4>
        <a href="#">Dashboard</a>
        <a href="#">My Posts</a>
        <a href="#">New Post</a>
        <a href="#">Profile</a>
        <a href="#">Logout</a>
      </nav>

      <!-- Main Content -->
      <main class="col-md-10 ms-sm-auto col-lg-10 px-md-4 dashboard-content">
        <div class="d-flex justify-content-between align-items-center pb-3 mb-4 border-bottom">
          <h2>Welcome, John Doe!</h2>
          <a href="#" class="btn btn-primary">+ New Post</a>
        </div>

        <!-- Recent Posts -->
        <h4>Your Recent Posts</h4>
        <div class="list-group">
          <a href="#" class="list-group-item list-group-item-action">
            📘 My First Blog Post <small class="text-muted float-end">July 10, 2025</small>
          </a>
          <a href="#" class="list-group-item list-group-item-action">
            ✍️ Thoughts on Web Development <small class="text-muted float-end">July 5, 2025</small>
          </a>
          <a href="#" class="list-group-item list-group-item-action">
            🌟 Best Coding Practices <small class="text-muted float-end">June 30, 2025</small>
          </a>
        </div>
      </main>
    </div>
  </div>

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
