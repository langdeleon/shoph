<html>
<head>
	<title>Shoph</title>
 	<meta charset="utf-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
  	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
  	 <style>
  	   .carousel{
  	   		margin: 20px;
  	   		height: 50%;
  	   		min-width: 400px;
  	   }

	  .carousel-inner > .item > img,
	  .carousel-inner > .item > a > img {
	      width: 60%;
	      height: 100%;
	      min-width: 400px;
	      margin: auto;
	  }
	  </style>
</head>
<body>
	<nav class="navbar navbar-default navbar-inverse">
	  <div class="container-fluid">
	    <div class="navbar-header">
	      <a class="navbar-brand" href="/">Shoph</a>
	    </div>
	    <div>
	      <ul class="nav navbar-nav">
	        <li class="active"><a href="/">Home</a></li>
	        <li><a href="/store">Store</a></li>
	        <li><a href="/contact">Contact</a></li>
	      </ul>
	      <ul class="nav navbar-nav navbar-right">
        <li><a href="/signup"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
        <li><a href="/login"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
      </ul>
	    </div>
	  </div>
	</nav>
	<div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
    <li data-target="#myCarousel" data-slide-to="3"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <img class="img-responsive" src="steelseries.jpg">
    </div>

    <div class="item">
      <img class="img-responsive" src="steelseries.jpg">
    </div>

    <div class="item">
      <img class="img-responsive" src="steelseries.jpg">
    </div>

    <div class="item">
      <img class="img-responsive" src="steelseries.jpg">
    </div>
  </div>

  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div></br></br>

 <div class="container-fluid">
        <div class="row">
            <div class="col-xs-4">
                <h2>Create a Store</h2>
                <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui.</p>
                <p><a href="/signup" target="_blank" class="btn btn-success">Sign up &raquo;</a></p>
            </div>
            <div class="col-xs-4">
                <h2>Login to Shoph</h2>
                <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui.</p>
                <p><a href="/login" target="_blank" class="btn btn-success">Login &raquo;</a></p>
            </div>
            <div class="col-xs-4">
                <h2>View Stores</h2>
                <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui.</p>
                <p><a href="/store" target="_blank" class="btn btn-success">View Stores &raquo;</a></p>
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-xs-12">
                <footer>
                    <p>&copy; Shoph 2015</p>
                </footer>
            </div>
        </div>
    </div>

</body>
</html>