<head>
	<title>Login Page</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css"> 
	<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script> 
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script> 
</head>
<body>
<div class="container">
	<div id="loginbox" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2 loginbox"> 
		<div class="panel panel-info" > 
			<div class="panel-heading"> 
				<div class="panel-title"> Sign In </div> 
			</div> 
			<div class="panel-body panel-pad"> 
					<p class="err">  </p>
					<form id="loginform" method="post" class="form-horizontal" action="http://101.200.209.84/ecloud/login" role="form">
						<div class="form-group"> 
						</div>  
						<div class="input-group margT25"> 
							<span class="input-group-addon">
								<i class="glyphicon glyphicon-user"></i>
							</span> 
							<input id="login-username" type="text" class="form-control" name="username" value="" placeholder="username or email"> 
						</div> 
						<div class="input-group margT25"> 
							<span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span> 
							<input id="login-password" type="password" class="form-control" name="password" placeholder="password"> 
							<input type="hidden" name="_token" value="{{ csrf_token() }}">
						</div> 
						<div class="input-group"> 
							<div class="checkbox"> 
								<label> 
									<input id="login-remember" type="checkbox" name="remember" value="1"> Remember me 
								</label> 
							</div> 
						</div> 
						<div class="form-group margT10"> 
						<!-- Button --> 
							<div class="col-sm-12 controls"> 
								<input id="btn-login" type="submit" class="btn btn-block btn-success" value="登陆"> 
							</div> 
						</div> 
					</form> 
				</div> 
			</div> 
		</div> 
	</div>
</body>
