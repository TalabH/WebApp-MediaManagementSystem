<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Orders</title>
    <meta charset="utf-8"></meta>
    <meta name="viewport" content="width=device-width, initial-scale=1"></meta>
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"></link>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <style>
    /* Remove the navbar's default margin-bottom and rounded borders */
    .navbar {
    margin-bottom: 0;
    border-radius: 0;
    }
    
    /* Set height of the grid so .sidenav can be 100% (adjust as needed) */
    .row.content {
    height: 690px;
    }
    
    /* Set gray background color and 100% height */
    .sidenav {
    padding-top: 20px;
    background-color: #f1f1f1;
    height: 100%;
    }
    
    /* Set black background color, white text and some padding */
    footer {
    background-color: #555;
    color: white;
    padding: 15px;
    }
    
    /* On small screens, set height to 'auto' for sidenav and grid */
    @media screen and (max-width: 767px) {
    .sidenav {
    height: auto;
    padding: 15px;
    }
    .row.content {
    height:auto;
    }
    }
    </style>
  </head>
  <body>
    <nav class="navbar navbar-inverse">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.php">Team 10</a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
          <ul class="nav navbar-nav"/>
            <li><a href="index.php">Home</a></li>
            <li><a href="about.php">About</a></li>
            <li class="active"><a href="orders.php">Orders</a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
          </ul>
        </div>
      </div>
    </nav>
    
    <div class="container-fluid text-center">
      <div class="row content">
        <div class="col-sm-2 sidenav">
          <h1>Filters</h1>
          <div class="dropdown">
            <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"> Category
            <span class="caret"></span>
            </button>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
              <li>this week old</a></li>
              <li>this month old</a></li>
              <li>lder than 1 month</a></li>
            </ul>
          </div>
        </div>
        <div class="col-sm-8 text-left">
          <h1>Orders</h1>
          <p>This is the orders page that will display all the customers who placed orders on our website</p>
          <hr>
          <h3>Media Order List</h3>
          <p>List of Customers and Orders available</p>
          <?php include 'orderslist.php';?>
        </div>
        <div class="col-sm-2 sidenav" height=100%>
          <div class="well">
            <p>Search</p>
            <div class="input-group">
              <input type="text" class="form-control" placeholder="Search for..."></input>
              <span class="input-group-btn">
                <button class="btn btn-default" type="button">Go!</button>
              </span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
  <footer class="container-fluid text-center">
    <p>Copyright 2016 Online Store</p>
  </footer>
</html>