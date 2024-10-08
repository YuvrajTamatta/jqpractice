<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Disha Mam Task</title>
  <link rel="stylesheet" href="../assets/css/bootstrap.css">
  <script src="../assets/js/jquery-3.6.0.min.js"></script>
  <script src="../assets/js/custom.js"></script>

</head>
<style>
  body {
    background-image: url('../assets/images/4.jpg');
    background-repeat: no-repeat;
    background-size: auto;


  }
 
</style>

<body>
  <nav class="navbar navbar-expand-lg bg-dark text-light" >
    <div class="container-fluid text-light">
      <a class="navbar-brand" href="#">JQuery Task</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse text-danger" id="navbarNavAltMarkup">
        <div class="navbar-nav">
          <a class="nav-link active" aria-current="page" href="Customer.php">Customer</a>
          <a class="nav-link" href="contact.php">Contact</a>
          <a class="nav-link" href="project.php">Project</a>
          <a class="nav-link" href="counter.php">Counter</a>
          <a class="nav-link" href="joindata.php">Join Data Table</a>

        </div>
      </div>
    </div>
  </nav>

  <div class="container">
    <div class="shadow p-3 border rounded my-5">
    <p id="time" class="text-end fw-bold"></p>

      <center>
        <h1 class="">Ajax JQuery Task</h1>
      </center>
      <div class="responses"></div>

      <table class="table table-striped table-hover table-dark rounded" id="mytable">
        <thead>
          <th span="col">Id</th>
          <th span="col">Company</th>
          <th span="col">Full Name</th>
          <th span="col">Email</th>
          <th span="col">Phone</th>
          <th span="col">Actions</th>
        </thead>
        <tbody id='showndata'>

        </tbody>
      </table>
    </div>
  </div>




</body>

</html>