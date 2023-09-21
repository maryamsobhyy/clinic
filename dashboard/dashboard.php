<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta charset="UTF-8">
    
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <title>Dashboard</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="#">Dashboard</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item active">
          <a class="nav-link" href="../main.php">Website</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="./majors.php">Majors</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="./majors.php">Doctors </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="./view_bookings.php">Booking </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="contacts.php">Contacts</a>
        </li>
      </ul>
    </div>
  </nav>
  <div class="container mt-5">
    <h1>Statistics</h1>

    <table class="table table-bordered mt-4">
      <thead>
        <tr>
          <th>Numbers of users</th>
          <th>Numbers of doctors</th>
          <th>Numbers of messages</th>
          
        </tr>
      </thead>
      <tbody id="cart-items">
        <!-- Cart items will be dynamically added here -->
      </tbody>
    </table>

    

    <!-- Add to cart form -->
    <form id="add-to-cart-form" class="mt-4">
      <div class="form-row align-items-center">
        <div class="col-auto">
          <label for="product-name">Users:</label>
          <input type="text" id="product-name" class="form-control" required>
        </div>

        <div class="col-auto">
          <label for="product-price">Doctors:</label>
          <input type="number" id="product-price" step=".01" min=".01" class="form-control" required>
        </div>
        <div class="col-auto">
          <label for="product-price">Messages:</label>
          <input type="number" id="product-price"  class="form-control" required>
        </div>

  
      </div>
    </form>
  </div>

  <!-- Add your content here -->

  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src=https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>