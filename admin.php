<?php
session_start();

if (!isset($_SESSION['user_type']) || $_SESSION['user_type'] !== 'admin') 
{
    header("Location: homepage.html");
    exit();
}
?>

<!doctype html>
<html lang="en">
  <head>
    <title>Admin Page</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  </head>
  <body>
    <div>
        <nav class="navbar navbar-expand-lg bg-body-primary">
            <div class="container-fluid">
              <a class="navbar-brand" href="#"><img src="logo.jpg" alt="" height="40px"></a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                  </li>
                </ul>
                <!-- <form class=" mx-5 px-5" role="search">                
                  <button class="btn btn-outline-success">Login </button>
                  <button class="btn btn-success">Register </button>
                </form> -->
              </div>
            </div>
          </nav>
    </div>
    <hr>
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                        <h3 class="text-center">Menus / Links</h3>
                        <hr>
                        <ul>
                            <li><a href="Branch.html">Add / Edit</a>
                            <span>Branch</span>
                            </li>
                            <li><a href="PaymentOption.html">Add / Edit</a>
                                <span>Payment Option</span>
                                </li>
                                <li><a href="DemandType.html">Add / Edit</a>
                                    <span>Demand Type</span>
                                    </li>
                                    <li><a href="Customer.html">Add / Edit</a>
                                        <span>Customer Details</span>
                                        </li>
                                        <li><a href="Payment.html">Add / Edit</a>
                                          <span>Payment Details</span>
                                          </li>
                                          <li><a href="Bill.html">Add / Edit</a>
                                            <span>Bill Details</span>
                                            </li>
                                            <li><a href="DemandRate.html">Add / Edit</a>
                                              <span>Demand Rate</span>
                                              </li>
                        </ul>
                </div>
               
                <!-- <div class="col-md-6">
        <h3 class="text-center">Welcome to Nepal Electricity Authority</h3>
                  <hr>
                  <form action="" class="m-auto">
                    <div class="mb-3">
                      <label for="" class="form-label">Username</label>
                      <input type="text" class="form-control" placeholder="username">
                    </div>
                    <div class="mb-3">
                      <label for="" class="form-label">Password</label>
                      <input type="password" class="form-control" placeholder="Password">
                    </div>
                    <div class="mb-3">
                      <input type="submit" class="form-control btn btn-success">
                    </div>
                  </form>
                </div>
            </div>
        </div> -->
    </section> 
    
      <section class="mt-5">
        <div class="container-fluid bg-info text-center p-3">
            <p>Nepal Electricity Authority &copy;2023</p>
        </div>
      </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  </body>
</html>