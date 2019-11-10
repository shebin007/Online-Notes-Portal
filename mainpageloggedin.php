<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>My Notes</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">

    <link href="styling.css" rel="stylesheet">
    
    <style type="text/css">
      #notecontainer {
        margin-top: 100px;
      }  

      #notepad, #allnotes, #done {
        display: none;
      }

      #textpad {
        width: 100%;
        max-width: 100%;
        min-width: 100%;
        font-size: 16px;
        font-weight: 12px;
        line-height: 1.5em;
        border-left-width: 20px;
        border-color: #34AEEA;
        color: #34AEEA;
        background-color: #FFF3F1;
        padding: 10px; 
      }

      .buttons {
        margin-bottom: 20px;
      }
    </style>

  </head>
  
  <link href='https://fonts.googleapis.com/css?family=Arvo' rel='stylesheet' type='text/css'>

  <body>
    <!-- Nav Bar -->
    <nav role="navigation" class="navbar navbar-custom navbar-fixed-top">
    	<div class="container-fluid">
    		<div class="navbar-header">
    			<a class="navbar-brand" href="#">Online Notes</a>

    			<button type="button" class="navbar-toggle" data-target="#navbarCollapse" data-toggle="collapse">
    				<span class="sr-only">Toggle Navigation</span>

    				<span class="icon-bar"></span>

    				<span class="icon-bar"></span>
    				
    				<span class="icon-bar"></span>
    			</button>
    		</div>

    		<div class="navbar-collapse collapse" id="navbarCollapse">
    			<ul class="nav navbar-nav">
    				<li><a href="#">Profile</a></li>
    				<li><a href="#">Help</a></li>
    				<li><a href="#">Contact Us</a></li>
            <li class="active"><a href="#">My Notes</a></li>
    			</ul>

    			<ul class="nav navbar-nav navbar-right">
            <li><a href="#">Logged in as <b>username</b></a></li>
    				<li><a href="#">Logout</a></li>
    			</ul>
    		</div>
    	</div>
    </nav>

    <!-- Container -->
    <div class="container-fluid" id="notecontainer">
      <div class="row">
        <div class="col-md-offset-2 col-md-8">
          <div class="buttons">
            <button id="addnote" type="button" class="btn btn-info btn-lg">Add Note</button>

            <button id="allnotes" type="button" class="btn btn-info btn-lg">All Notes</button>

            <button id="done" type="button" class="btn green btn-lg pull-right">Done</button>

            <button id="edit" type="button" class="btn btn-info btn-lg pull-right">Edit</button>
          </div>

          <div id="notepad">
            <textarea rows="8" id="textpad"></textarea>
          </div>

          <div id="notes" class="notes">
            <!-- Ajax call from a PHP file -->
          </div>
        </div>
      </div>
    </div>

  	<!--Footer-->
  	<div class="footer">
  		<div class="container-fluid">
  			<p>Copyright Sardar Vallabhbhai National Institute of Technology © 2015 - <?php echo date("Y") ?></p>
  		</div>
  	</div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>