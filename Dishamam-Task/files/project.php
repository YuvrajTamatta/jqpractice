<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customer Page</title>
    <link rel="stylesheet" href="../assets/css/bootstrap.css">
    <script src="../assets/js/jquery-3.6.0.min.js"></script>
    <script src="../assets/js/custom.js"></script>
    <link rel="stylesheet" href="../assets/css/bootstrap.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.5/dist/jquery.validate.js"></script>
    <script src="../assets/js/bootstrap.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="icon" href="../assets/images/4.jpg" type="image/x-icon">

</head>
<style>
    body {
        background-image: url('../assets/images/4.jpg');
        background-repeat: no-repeat;
        background-size: auto;

    }
</style>
<!-- background="../assets/images/black.jpeg" style="background-repeat: no-repeat; height:100%; width:100% " -->

<body>
    <nav class="navbar navbar-expand-lg  shadow bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php">JQuery Task</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
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

    <div class="container my-3">
    
   <!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
 <span class="me-2">Add <i class="fa-solid fa-person-skating"></i>
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Customer Registration</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
         <form method="post" class="d-flex flex-column gap-2 needs-validation" novalidate id="projectform">
               
                <div class="response"></div>
                <label for="project" class="form-label">Project</label>
                <input type="text" class="form-control" name="project" id="project" required oninput="this.value=this.value.replace(/[^a-zA-Z\s]/g,'')">
                <div class="mes invalid-feedback ">
                    <p>Project name is required</p>
                </div>

                <label for="customer" class="form-label">Customer</label>
                <select name="customer" id="customer" class="form-select">
                    <option value="Cus">Select Company</option>
                </select>
                <div class="mes invalid-feedback ">
                    <p>Phone no. is required</p>
                </div>

                <label for="start_date" class="form-label">Start Date</label>
                <input type="date" class="form-control" name="start_date" id="start_date" required>
                <div class="mes invalid-feedback ">
                    <p>Start Date is required</p>
                </div>

                <label for="end_date" class="form-label">State</label>
                <input type="date" class="form-control" name="end_date" id="end_date" required>
                <div class="mes invalid-feedback ">
                    <p>End Date is required</p>
                </div>

                
      </div>
      <div class="modal-footer">
        <!-- <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button> -->
        <input type="submit" name="submit" id="submit" class="btn btn-primary w-25 mt-3">
               
            </form>
      </div>
    </div>
  </div>
</div>


        <div class="shadow p-3 border rounded">
           
        </div>

        <!-- Data Records -->

    </div>
    <script>

    </script>
</body>

</html>