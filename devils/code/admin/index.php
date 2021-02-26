
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../css/register.css">
    <link rel="shortcut icon" type="image/x-icon" href="../img/icon.ico" />
    <title>Admin</title>
  </head>
  <body>

    <!--navbar-->
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top">
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <i class="fa fa-bars" aria-hidden="true"></i>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" href="../">HOME <span class="sr-only">(current)</span></a>
          </li>
           <li class="nav-item active">
            <a class="nav-link" href="index.php">ADMIN PANEL</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../about">ABOUT</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <i class="fa fa-university" aria-hidden="true"></i> SCHOOL
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="#"><i class="fa fa-user" aria-hidden="true"></i>
 Login</a>
              <a class="dropdown-item" href="#"><i class="fa fa-user-plus" aria-hidden="true"></i>
 Register</a>
            </div>
          </li>
        </ul>
      </div>
    </nav>

    <!--hero img-->
    <section class="jumbotron">
        <div id="form" class="container-fluid gradient">
            <div class="container">
			<form id="needs-validation">
				
                <h1>Admin Login Here</h1>
                <hr>
			  <div class="row">
			    <div class="col-sm-12 mb-6">
			      <label for="schoolID">Admin ID</label>
                    <small id="idHelp" class="form-text text-muted">Login ID</small>
			      <input type="text" class="form-control" id="schoolID" name ="id" required>
			      <div class="invalid-feedback">
        			Please Enter Login ID.
      			</div>
			    </div>
                  <div class="col-sm-12 mb-6">
			      <label for="schoolPass">Password</label>
                    <small id="idHelp" class="form-text text-muted">Login Password</small>
			      <input type="password" class="form-control" id="schoolPass" name="pass" required>
			      <div class="invalid-feedback">
        			Please Enter Password.
      			</div>
			    </div>
                </div>
			  <br>
			  <center><button class="btn btn-primary" type="submit">Submit</button></center>
			</form>
            </div>
		
    </div>
    </section>

    <script src="../js/jquery-3.3.1.slim.min.js"></script>
    <script src="../js/popper.min.js" ></script>
    <script src="../js/bootstrap.min.js"></script>
  </body>
</html>
