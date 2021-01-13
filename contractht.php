<? php 
include("contact.php");
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="contract.css">
    <title>New Contract</title>
  </head>
  <body>
    <style>
      .card-title{
        font-size:30px;
		background-color: #133b5c;
  		color: #f2a365;
		padding:25px;
		margin-top:20px;
		margin-bottom:20px;
		border-radius:15px;
		border-style: ridge;
      }
      .card-title:hover{
        font-size: 20px;
		background-color:#333333;
      }
      p {
        text-align:center;
        color: #f2a365;
        font-size: 20px;
      }
      
    </style>

    <!-- Navbar-->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#">Car Rental</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="home.php">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Add Contract page</a>
            </li>
           
            <li class="nav-item">
              <a class="nav-link disabled" href="allcontracts.php">Contracts</a>
            </li>
          </ul>
          <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
          </form>
        </div>
      </nav>


      <!--================================================JUMBOTRON-->
      <div class="jumbotron " >
        <h1 class="display-1">Car Rental System</h1>
        <p class="lead">We provide Promised Car Rental Services with Security</p>
        <hr class="my-4">
        <p  class="h1">Add a new Contract</p>
        <p class="lead">
          <a class="btn btn-success btn-lg" href="#" role="button">Learn More</a>
        </p>
      </div>


      <!--FORM CARD============-->
      <div class="card mx-auto" id="stylediv" style="width: 40rem; ">
        <img class="card-img-top" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR0EljdRqwj2zWFsOet_2NxU5VPbOBivqDc-Q&usqp=CAU">
        <div class="card-body">
          <h5 class="card-title">Add Information here</h5>
          <p class="card-text">Please review the client information before filling</p>
          <form action="contract.php" method="post">
            <div class="form-group" >
              <label for="ContractNumber">Contract Number</label>
              <input type="number"  class="form-control" id="ContractNumber"  placeholder="Enter contract number" name="ContractNumber">
              <small  class="form-text text-muted">contract number is unique.</small>
            </div>
            <div class="form-group">
                <label for="CarNumber">CarNumber</label>
                <input type="text" class="form-control" id="CarNumber" placeholder="XX-0000" name="CarNumber">
              </div>
              <div class="form-group">
                <label for="CarModel">CarModel</label>
              
                <input type="text" class="form-control" id="CarModel" placeholder="CarModel" name="CarModel" list="listid1">
                <datalist id="listid1">
                <option label='Ford' value='Ford'>
                <option label='Honda' value='Honda'>
                <option label='Mercedes' value='Mercedes'>
                <option label='Nissan' value='Nissan'>
                <option label='Toyota' value='Toyota'>
                <option label='Tesla' value='Tesla'>

                </datalist>
              </div>
              <div class="form-group">
                <label for="BuyORRent">BuyORRent</label>
                <input type="text" class="form-control" id="BuyORRent" placeholder="BuyORRent" name="BuyORRent" list="listid2">

                <datalist id="listid2">
                <option label='Buy' value='Buy'>
                <option label='Rent' value='Rent'>
                </datalist>
              </div>
              <div class="form-group">
                <label for="CarColor">CarColor</label>
                <input type="text" class="form-control" id="CarColor"   name="CarColor" list="listid3">
                <datalist id='listid3'>
                <option label='black' value='black'>
                <option label='white' value='white'>
                <option label='gray' value='gray'>
                <option label='silver' value='silver'>
                <option label='red' value='red'>
                <option label='blue' value='blue'>
                <option label='gold' value='gold'>
               <option label='red' value='red'>
  </datalist>
              </div>
            <div class="form-group">
              <label for="StartDate">Start-Date</label>
              <input type="datetime" class="form-control" id="StartDate"  name="StartDate" placeholder="XXXX-XX-XX">
            </div>
            <div class="form-group">
                <label for="LasttDate">End-Date</label>
                <input type="datetime" class="form-control" id="LasttDate"  name="LasttDate" placeholder="XXXX-XX-XX">
              </div>
              <div class="form-group">
                <label for="TotalPrice">TotalPrice</label>
                <input type="number" class="form-control" id="TotalPrice" placeholder="TotalPrice" name="TotalPrice">
              </div>
              
            <div class="form-check">
              <input type="checkbox" class="form-check-input" id="exampleCheck1">
              <label class="form-check-label" for="exampleCheck1">All Information is valid</label>
            </div>
            <button type="submit" class="btn btn-success">Submit</button>
          </form>
          
        </div>
      </div>







     
 

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>
