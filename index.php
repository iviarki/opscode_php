<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>OpsNode</title>
    <link rel="stylesheet" href="css/foundation.css" />
    <script src="js/vendor/modernizr.js"></script>
  </head>
  <body>
    <div class="row">
      <div class="large-12 columns">
      	<div class="panel">
	        <h3>Welcome to OpsNode</h3>
	        <p>This is a little php site to experiment with AWS' OpsWorks</p>
      	</div>
      </div>
    </div>

      <div class="large-4 medium-4 columns">
			  <h5>System Info</h5>
				<div class="panel">
					<h5>Hostname</h5>
        				<p><?php echo gethostname();?></p>
					<h5>UserName</h5>
        				<p><?php echo php_uname('n');?></p>
        </div>
      </div>
    </div>
    
    <script src="js/vendor/jquery.js"></script>
    <script src="js/foundation.min.js"></script>
    <script>
      $(document).foundation();
    </script>
  </body>
</html>
