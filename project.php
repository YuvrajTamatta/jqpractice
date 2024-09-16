<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Project</title>
    <script src="./js/jquery-3.7.1.min.js"></script>
    <script src="./project.js"></script>
    <link rel="stylesheet" href="../crud/assets/css/bootstrap.css">
</head>
<style>
    .highlight {
        border: 2px solid red;
    }
</style>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">MyBrand</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Services</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Contact</a>
                </li>
               <button id="dark" class="btn btn-dark">dark</button>
            </ul>
        </div>
    </div>
</nav>
<br>
<br>

  <div class="container" id="form">
  <form action="#" id="form">
   <div class="row">
    <div class="col-10">
    <label for="name" class="form-label">Name</label>
   <input type="text" class="form-control" id="name" name="name">

   <label for="email" class="form-label">Email</label>
   <input type="email" class="form-control" name="email" id="email">
   <span id="err"></span>
    </div>
    <div class="col-2">
    <img src="" alt="" id="image1"  > <br>
    <button id="show1" class="btn btn-outline-danger">hide</button>

    </div>
   </div>

   <label for="password" class="form-label">Password</label>
   <input type="password" id="password" name="password" class="form-control">
    <button type="button" id="show2" class="btn-sm btn-info mt-2">show</button><br>

    <label for="city" class="form-label ">City</label>
    <select name="city" id="city" class="form-select">
        <option value="Rajkot">Rajkot</option>
        <option value="Surat">Surat</option>
        <option value="Jamnagar">Jamnagar</option>
        <option value="Morbi">Morbi</option>
    </select>

    <label for="hobby" class="my-3" >Hobby
        <input type="checkbox" name="hobby[]" class="form-input-control mx-3" value="dance">dance 
        <input type="checkbox" name="hobby[]" class="form-input-control mx-3" value="swimming">swimming 
        <input type="checkbox" name="hobby[]" class="form-input-control mx-3" value="cricket">cricket
    </label>
    <br>
    
    <input type="submit" id="submit" value="submit" class="btn-primary">
   </form>
   <div id="result1"></div>
  </div>
    
</body>
</html>