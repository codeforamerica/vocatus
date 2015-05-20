<doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Laravel PHP Framework</title>

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap-theme.min.css">



</head>
<body>

    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="/">Vocatus</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>


<br><br><br>

    <div class="container">

      <div class="starter-template">
        <h1>Welcome to Vocatus</h1>
        <p class="lead">
This system exists to enable all patients to have reliable access to their healthcare records
</p>
      </div>


<form method='POST' action='doctorchoose' class="form-horizontal">
<fieldset>

<!-- Form Name -->
<legend>Your HIPAA Request</legend>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="firstname">First Name</label>  
  <div class="col-md-6">
  <input id="firstname" name="firstname" type="text" placeholder="Enter your first name" class="form-control input-md">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="lastname">Last Name</label>  
  <div class="col-md-6">
  <input id="lastname" name="lastname" type="text" placeholder="Enter your last name" class="form-control input-md">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="birthdate">Birth Date</label>  
  <div class="col-md-4">
  <input id="birthdate" name="birthdate" type="text" placeholder="12/12/1965" class="form-control input-md">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="birthdate">Digital Signature Authorization</label>
  <div class="col-md-4">
  <input id="digitalsig" name="digitalsig" type="text" placeholder="///John Doe///" class="form-control input-md">

  <span class="help-block">Enter your name here prefixed by three backslashes '/' and ending with three backslashes. 
This indicates your willingness to digitally sign this request.
<br>
Adding these slashes is also an indication that you have read our consent documentation carefully and that
you know what you are getting into with this request.

</span>  

  </div>
</div>



<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for=""></label>
  <div class="col-md-4">
    <button id="" name="" class="btn btn-default">Initiate HIPAA Request!</button>
  </div>
</div>

</fieldset>
</form>


    </div><!-- /.container -->




<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>

</body>
</html>
