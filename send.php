<!--  Connect to database-->
<?php include './connection.php' ?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.84.0">
    <title>Simple Money Transfer System-send</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/carousel/">

    <!-- Bootstrap core CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous"> 

    <!-- Custom styles for this template -->
    <link href="carousel.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
  <!-- Header -->
<header>
  <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="index.php">THE SPARKING BANK</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav me-auto mb-2 mb-md-0">
          <li class="nav-item">
            <a class="nav-link "  href="index.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="send.php">Send</a>
          </li>
          <li class="nav-item">
            <a class="nav-link " href="history.php">Transactions</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
</header>
<!-- Header -->

<!-- Table -->
<table class="listtable table-dark table" style="width: 70%; margin: 80px auto;">
  <thead class="thead-light">
    <tr>
      <th scope="col">Sr No</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Balance</th>
      <th scope="col">Send Money</th>
    </tr>
  </thead>
  <tbody>
 
  <!-- Fetching Data from Database -->
  <?php
    $sql = "SELECT * FROM customers";
    
    $result = mysqli_query($con, $sql);
  
    while($rows=mysqli_fetch_assoc($result)){
?>
    <tr>
        <td class="py-2"><?php echo $rows['id'] ?></td>
        <td class="py-2"><?php echo $rows['name']?></td>
        <td class="py-2"><?php echo $rows['email']?></td>
        <td class="py-2"><?php echo $rows['balance']?></td>
        <td><a href="confirm.php?id= <?php echo $rows['id'] ;?>"> <button type="button" class="btn btn-success">Send Money</button></a></td> 
    </tr>
<?php
    }
?>

  </tbody>
</table>
<!-- Table -->

<!-- Footer -->
<footer class="container">
    <button class="float-end"><a href="#">Back to top</a></button>
    <p>Made for GRIP By Digvijay Kuwar with Love <a href="https://www.linkedin.com/in/digvijay-kuwar-97aaa3240/"><i class="fa fa-linkedin-square" style="font-size:20px"></i></a> 
      &middot; <a href="https://github.com/Digvijaykuwar"><i class="fa fa-github" style="font-size:20px; color:black;"></i>
    </a></p>
  </footer>
</main>
<!-- Footer -->


<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script> 
</body>
</html>