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
	        <p>This is a little site to experiment with AWS' OpsWorks</p>
      	</div>
      </div>
    </div>

    <div class="row">
      <div class="large-8 medium-8 columns">
        <h5>Here&rsquo;s your basic grid:</h5>
        <!-- Grid Example -->

        <div class="row">
          <div class="large-12 columns">
            <div class="callout panel">
              <p><strong>This is a twelve column section in a row.</strong> Each of these includes a div.panel element so you can see where the columns are - it's not required at all for the grid.</p>
            </div>
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
					<h5>Host IP</h5>
        				<p><?php echo gethostbyaddr($_SERVER['REMOTE_ADDR']);?></p>
        	<a href="http://foundation.zurb.com/docs/" class="small button">Go to Foundation Docs</a>          
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
