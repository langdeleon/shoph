<html>
<head>
	<title>Shoph</title>
 	<meta charset="utf-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
  	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
  
</head>
<body>
	<nav class="navbar navbar-default navbar-inverse">
	  <div class="container-fluid">
	    <div class="navbar-header">
	      <a class="navbar-brand" href="/">Shoph</a>
	    </div>
	    <div>
	      <ul class="nav navbar-nav">
	        <li><a href="/">Home</a></li>
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

	<div class="container-fluid">
    <section class="container">
		<div class="container-page">	
			{!! Form::open(array('id'=>'identicalForm')) !!}	
			<div class="col-md-6">
				<h3 class="dark-grey">Registration</h3>
				@if(Session::has('message'))
			    <div class="alert alert-info col-md-12">
			      {{Session::get('message')}}
			    </div>
				@endif
				<div class="form-group col-lg-12">
					<label>Username</label>
					<input type="" name="username" class="form-control" id="" value="">
				</div>
				
				<div class="form-group col-lg-6">
					<label>Password</label>
					<input type="password" name="password" class="form-control">
				</div>
				
				<div class="form-group col-lg-6">
					<label>Repeat Password</label>
					<input type="password" name="confirm_password" class="form-control">
				</div>
								
				<div class="form-group col-lg-6">
					<label>Email Address</label>
					<input type="email" name="email" class="form-control" id="" value="">
				</div>
				
				<div class="form-group col-lg-6">
					<label>Repeat Email Address</label>
					<input type="email" name="confirm_email" class="form-control" id="" value="">
				</div>

				<div class="form-group col-lg-12">
					<label>Store Name</label>
					<input type="" name="store_name" class="form-control" id="" value="">
				</div>			
				
				<div class="form-group col-lg-12">
					<label>Address</label>
					<input type="" name="address" class="form-control" id="" value="">
				</div>
				<div class="form-group col-lg-6">
					<label>City</label>
					<input type="" name="city" class="form-control" id="" value="">
				</div>
				<div class="form-group col-lg-6">
					<label>State</label>
					<input type="" name="state" class="form-control" id="" value="">
				</div>

				<div class="form-group col-lg-12">
					<label>Store Category</label>
					<div class="dropdown">
				    <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Store Category
				    <span class="caret"></span></button>
				    <ul class="dropdown-menu">
				      <li><a href="#">HTML</a></li>
				      <li><a href="#">CSS</a></li>
				      <li><a href="#">JavaScript</a></li>
				    </ul>
				  </div>
				</div>
			
			</div>

		
			<div class="col-md-6">
				<h3 class="dark-grey">Terms and Conditions</h3>
				<p>
					By clicking on "Register" you agree to The Company's' Terms and Conditions
				</p>
				<p>
					While rare, prices are subject to change based on exchange rate fluctuations - 
					should such a fluctuation happen, we may request an additional payment. You have the option to request a full refund or to pay the new price. (Paragraph 13.5.8)
				</p>
				<p>
					Should there be an error in the description or pricing of a product, we will provide you with a full refund (Paragraph 13.5.6)
				</p>
				<p>
					Acceptance of an order by us is dependent on our suppliers ability to provide the product. (Paragraph 13.5.6)
				</p>
				
				<button type="submit" class="btn btn-primary">Register</button>
				{!! Form::close() !!}
			</div>
		</div>
	</section>
</div>



</body>
</html>