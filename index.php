<!DOCTYPE html>
<html>
<head>
	<title></title>

	<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>


<div class="container">
	<form class="form-group" action="/authenticator.php">
		
	<input class="form-control" type="text" name="username" placeholder="Username">
	<input class="form-control" type="password" name="password" placeholder="password">




	</form>


  <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal" onclick="openWin()">Login</button>

  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Modal Header</h4>
        </div>
        <div class="modal-body">
			<input class="form-control" type="text" name="A_Code" placeholder="Authenticator Code">
          	
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Submit</button>
        </div>
      </div>
      
    </div>
  </div>
  
</div>

</body>



<script>
function openWin() {

  window.open("http://localhost/Authenticator/authenticator.php");

  // window.alert("Authentication Code :");
  
}
</script>
</html>