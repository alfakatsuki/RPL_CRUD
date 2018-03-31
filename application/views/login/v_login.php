<!DOCTYPE html>
<html lang="en">
<head>
	<script src="<?php echo base_url() ?>assets/js/jquery.min.js"></script>
	<script src="<?php echo base_url() ?>assets/js/bootstrap.min.js"></script>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CRUD</title>
    <link href="<?php echo base_url() ?>assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style type="text/css">
        body{
            font-family: 'Lato', sans-serif;
            margin: 0;
            font-size: 18px;
        }
    </style>
</head>
<body>

	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
	  <a class="navbar-brand" href="<?php echo base_url() ?>">CRUD-RPL</a>
	  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
	    <span class="navbar-toggler-icon"></span>
	  </button>

	  <div class="collapse navbar-collapse" id="navbarSupportedContent">
	    <ul class="navbar-nav mr-auto">
	      <li class="nav-item">
	        <a class="nav-link" href="https://github.com/alfakatsuki">Github <span class="sr-only">(current)</span></a>
	      </li>
	        <a class="nav-link" href="https://maulvi-cs.blogspot.com">Blog</a>
	      </li>
	      <li class="nav-item">
	        <a class="nav-link" href="about">About</a>
	      </li>
	      <li class="nav-item">
	    </ul>
	    
	  </div>
	</nav>

	 <h1 class="heading" style="margin-top: 10%;"></h1>
	    <div class="container">
	    <div class="row">
	        <div class="col-md-3"></div>
	        <div class="col-md-6 text-center">
	            <h2>Selamat Datang</h2>
	            <hr>
	        </div>
	    
	    </div>
	    
	    <!-- <div><?php echo validation_errors('<div class="alert alert-danger alert-dismissible" role="alert">
	            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
	            <span aria-hidden="true">&times;</span></button>','</div>'); ?></div>
		 -->
		  
		<!-- <form action="<?php echo base_url('login/aksi_login'); ?>" method="post"> -->
	    <?php echo form_open("login/aksi_login"); ?>



	    	


	        <div class="row">
	            <div class="col-md-3"></div>
	            <div class="col-md-6">
	                <div class="form-group has-danger">
	                    <label class="sr-only" for="username">Username</label>
	                    <div class="input-group mb-2 mr-sm-2 mb-sm-0">
	                        <div class="input-group-addon" style="width: 2.6rem"><i class="fa fa-at"></i></div>
	                        <input type="text" name="username" class="form-control" id="username"
	                               placeholder="Username" required autofocus>
	                    </div>
	                </div>
	            </div>
	        </div>
	        <div class="row">
	            <div class="col-md-3"></div>
	            <div class="col-md-6">
	                	<div class="form-group has-danger">
	                    <label class="sr-only" for="password">Password</label>
	                    <div class="input-group mb-2 mr-sm-2 mb-sm-0">
	                        <div class="input-group-addon" style="width: 2.6rem"><i class="fa fa-key"></i></div>
	                        <input type="password" name="password" class="form-control" id="password"
	                               placeholder="Password" required>
	                    </div>
	                </div>
	            </div>
	        </div>
	        <!-- <div class="row""> -->
	        <div class="row">
	            <div class="col-md-3"></div>
	            <div class="col-md-6">
	                	<div class="form-group has-danger">
	                    <label class="sr-only" for="password">Password</label>
	                    <div class="input-group mb-2 mr-sm-2 mb-sm-0">
	                        <div class="input-group-addon" style="width: 2.6rem"><i class="fa fa-key"></i></div>
	                        <button type="submit" class="btn btn-success"><i class="fa fa-sign-in"></i> Login</button>
	                    </div>
	                </div>
	            </div>
	        </div>
	        <!--  -->
	        <!-- <div class="row" style="padding-top: 1rem">
	            <div class="col-md-3"></div>
	            <div class="col-md-6">
	            	<div class="input-group mb-2 mr-sm-2 mb-sm-0">
	                	<button type="submit" class="btn btn-success"><i class="fa fa-sign-in"></i> Login</button>
	            	</div>
	            </div>
	        </div> -->
	   	<?php echo form_close(); ?>
	    </form>
	</div>

</body>
</html>