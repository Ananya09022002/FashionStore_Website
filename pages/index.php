<?php
session_start();
 ?>

<!DOCTYPE html>
<html>
<head><title>E-Store | BEST ONLINE MOBILE SHOPPING STORE</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">

<style type="text/css">

</style>
</head>
<body style="font-family: Montserrat">
<?php
if(!isset($_SESSION['id'])){ 
	require 'header_logged_out.php';
	?>
  <div  class="container" style="margin-top: 60px;">
<b>
    <p>Hello &nbsp;&nbsp;guest &nbsp;&nbsp;Welcome to our E-Store,&nbsp;&nbsp;please <a data-toggle="modal" data-target="#pz" ><span></span> Login </a>/&nbsp;&nbsp;<a href="signup.php">signup</a> to access our services for you</p>
</b>
</div>
<div class="container" style="margin-top: 80px; margin-bottom: 100px">
	<div class="row row-style-login-page-pannel">
                <div class=" col-md-4 col-sm-6 col-xs-12">
			<div class="panel panel-default  ">
				<div class="panel-heading">Mobile 1</div>
				<div class="panel-body">
                                       
                                        <center><img  class="img-responsive" src="images\mobile1.jpg" height="205" >
					<b> Mobile 1 <br></b>Price:12,800/-
                                        
                                        <a  data-toggle="modal" data-target="#pz" title="login to see full specification" ><span></span>specifications</a></center></center>
                                        
					<button class="btn btn-primary form-control" type="button" value="Submit"  name="btn" data-toggle="modal" data-target="#pz">Order Now!</button>


				</div>
			</div>
		</div>	
                <div class=" col-md-4 col-sm-6 col-xs-12">
			<div class="panel panel-default">
				<div class="panel-heading">Mobile 2</div>
				<div class="panel-body" >
                                        <center><img  class="img-responsive" src="images\mobile1.jpg" height="205">
					<b> Mobile 2 <br></b>Price:16,000/-
                                        
                                        <a  data-toggle="modal" data-target="#pz" title="login to see full specification" ><span></span>specifications</a></center></center>
                                     
					<button class="btn btn-primary form-control" type="button" value="Submit"  name="btn" data-toggle="modal" data-target="#pz">Order Now!</button>


				</div>
			</div>
		</div>	
		<div class=" col-md-4 col-sm-6 col-xs-12">
			<div class="panel panel-default ">
				<div class="panel-heading">Mobile 3</div>
				<div class="panel-body">
					
                                    <center><img  class="img-responsive"  src="images\Mobile3.jpg" height="205">
					<b> Mobile 3 <br></b>
                                        Price:13,999/-
                                        <a  data-toggle="modal" data-target="#pz" title="login to see full specification" ><span></span>specifications</a></center>
                                    
					<button class="btn btn-primary form-control" type="button" value="Submit" data-toggle="modal" data-target="#pz" name="btn">Order Now!</button>


				</div>
			</div>
		</div>	

		<div class=" col-md-4 col-sm-6 col-xs-12">
			<div class="panel panel-default ">
				<div class="panel-heading">Mobile 4</div>
				<div class="panel-body">
					<center><img  class="img-responsive" src="images\Mobile4.jpg">
					<b> Mobile 4 <br></b>Price:18,459/-
                                      
                                        <a  data-toggle="modal" data-target="#pz" title="login to see full specification" ><span></span>specifications</a></center></center>
                                        
					<button class="btn btn-primary form-control" type="button" value="Submit"  name="btn" data-toggle="modal" data-target="#pz">Order Now!</button>


				</div>
			</div>
		</div>
                <div class=" col-md-4 col-sm-6 col-xs-12 ">
			<div class="panel panel-default">
				<div class="panel-heading">Mobile 5</div>
				<div class="panel-body" >
					<center><img  class="img-responsive" src="images\mobile2.jpg">
					<b> Mobile 5  <br></b>Price:15,999/-
                                        
                                        <a  data-toggle="modal" data-target="#pz" title="login to see full specification" ><span></span>specifications</a></center></center>
                                        
					<button class="btn btn-primary form-control" type="button" value="Submit"  name="btn" data-toggle="modal" data-target="#pz">Order Now!</button>


				</div>
			</div>
		</div>
		<div class=" col-md-4 col-sm-6 col-xs-12">
			<div class="panel panel-default ">
				<div class="panel-heading">Mobile 6</div>
				<div class="panel-body" >
					<center><img  class="img-responsive" src="images\mobile4.jpg">
					<b> Mobile 6 <br></b>Price:42,000/-
                                       
                                        <a  data-toggle="modal" data-target="#pz" title="login to see full specification" ><span></span>specifications</a></center></center>
                                        
					<button class="btn btn-primary form-control" type="button" value="Submit"  name="btn" data-toggle="modal" data-target="#pz">Order Now!</button>


				</div>
			</div>
		</div>	

		

			

		
	</div>
</div>


<div style="background-color: #333; color:white ;">
<?php require 'foot.php' ?>
</div>



<?php } else { 
	require 'header_logged_in.php'; 
?>

<div  class="container" style="margin-top: 60px;">
<b>

    <p>Hello &nbsp;&nbsp;&nbsp;<?php echo $_SESSION['name'] ?>&nbsp;&nbsp;&nbsp;welcome to our E-Store,&nbsp;&nbsp;We are here to provide you  the best services";</p>
 
</b>
</div>

<div class="container" style="margin-top: 50px; margin-bottom: 100px">
	<div class="row row-style-login-page-pannel">
                <div class=" col-md-4 col-sm-6 col-xs-12">
			<div class="panel panel-default">
				<div class="panel-heading"># 1</div>
				<div class="panel-body">
					<center><img  class="img-responsive" src="images\mobile1.jpg">
                                            <b> Mobile 1<br><br></b>
                                            <b>Price:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;₹&nbsp;&nbsp;12,800/-<br><br></b></center>
                                        <b>Specifications</b>
                                        <p>
                                            Apple,iOS,5.8 inches,Facial Recognition,12 MP Front camera, 12 MP Rear camera
                                           </p>
					<button class="btn btn-primary form-control" title="click here to add this item in the cart" type="button" value="Submit"  name="btn" data-toggle="modal" data-target="#all">Add to Cart</button>


				</div>
			</div>
		</div>
                <div class=" col-md-4 col-sm-6 col-xs-12">
			<div class="panel panel-default">
				<div class="panel-heading"># 2</div>
				<div class="panel-body" >
					
					<center><img  class="img-responsive" src="images\mobile1.jpg">
					<b> Mobile 2 <br><br></b>
                                        <b>Price:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;₹&nbsp;&nbsp;16,000/-<br><br></b></center>
                                        <b>Specifications</b>
                                        <p>
                                            Apple,iOS,6.67 inches,Facial Recognition,18 MP Front camera, 16 MP Quad Rear camera
                                        </p>
					<button class="btn btn-primary form-control" title="click here to add this item in the cart" type="button" value="Submit"  name="btn" data-toggle="modal" data-target="#all">Add to Cart</button>


				</div>
			</div>
		</div>	
		<div class=" col-md-4 col-sm-6 col-xs-12">
			<div class="panel panel-default">
				<div class="panel-heading"># 3</div>
				<div class="panel-body">
					<center><img  class="img-responsive"  src="images\Mobile3.jpg">
					<b> Mobile 3 <br><br></b>
                                        <b>Price:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;₹&nbsp;&nbsp;13,999/-<br><br></b></center>
                                        <b>specifications</b>
                                        <p>
                                            Samsung,Android,6.67 inches,Fingerprint Lock,18 MP Front camera, 18 MP Rear camera
                                        </p>
					<button class="btn btn-primary form-control" title="click here to add this item in the cart" type="button" value="Submit"  name="btn" data-toggle="modal" data-target="#all">Add to Cart</button>


				</div>
			</div>
		</div>	

		<div class=" col-md-4 col-sm-6 col-xs-12">
			<div class="panel panel-default">
				<div class="panel-heading"># 4</div>
				<div class="panel-body">
					<center><img  class="img-responsive" src="images\Mobile4.jpg">
					<b>Mobile 4 <br><br></b>
                                        <b>Price:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;₹&nbsp;&nbsp;18,459/-<br><br></b></center>
                                        <b>specifications</b>
                                        <p>
                                            Samsung,Android,5.4 inches,Fingerprint Lock,18 MP Front camera, 14 MP Rear camera
                                        </p>
					<button class="btn btn-primary form-control" title="click here to add this item in the cart" type="button" value="Submit"  name="btn" data-toggle="modal" data-target="#all">Add to Cart</button>


				</div>
			</div>
		</div>
                <div class=" col-md-4 col-sm-6 col-xs-12">
			<div class="panel panel-default">
				<div class="panel-heading"># 5</div>
				<div class="panel-body" >
					<center><img  class="img-responsive" src="images\mobile2.jpg">
					<b>Mobile 5 <br><br></b>
                                        <b>Price:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;₹&nbsp;&nbsp;15,999/-<br><br></b></center>
                                        <b>specifications</b>
                                        <p>Apple,iOS,6.67 inches,Facial Recognition,18 MP Front camera, 16 MP Quad Rear camera</p>
					<button class="btn btn-primary form-control" title="click here to add this item in the cart" type="button" value="Submit"  name="btn" data-toggle="modal" data-target="#all">Add to Cart</button>


				</div>
			</div>
		</div>

		<div class=" col-md-4 col-sm-6 col-xs-12">
			<div class="panel panel-default">
				<div class="panel-heading"># 6</div>
				<div class="panel-body" >
					<center><img  class="img-responsive" src="images\mobile6.jpg">
					<b>Mobile 6 <br><br></b>
                                        <b>Price:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;₹&nbsp;&nbsp;42,000/-<br><br></b></center>
                                        <b>specifications</b>
                                        <p>
                                        Apple,iOS,5.8 inches,Facial Recognition,12 MP Front camera, 12 MP Rear camera
                                        </p>
					<button class="btn btn-primary form-control" title="click here to add this item in the cart" type="button" value="Submit"  name="btn" data-toggle="modal" data-target="#all">Add to Cart</button>


				</div>
			</div>
		</div>	
	</div>
</div>

<?php } ?>

<?php require 'login_modal.php'; ?>
<?php require 'add_to_cart.php'; ?>


</body>
</html>