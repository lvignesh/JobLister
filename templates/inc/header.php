<!DOCTYPE html>
<html>
<head>
	<title>JobLister</title>
	<link rel="stylesheet"  href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/styles.css">
</head>
<body>

     <div class="header clearfix">
        <nav>
          <ul class="nav nav-pills pull-right">
            <li role="presentation" ><a href="index.php">Home</a></li>
            <li role="presentation"><a href="create.php">Create Listing</a></li>
          </ul>
        </nav>
        <h3 class="text-muted"><?php echo SITE_TITLE;?></h3>
      </div>
      <?php displaymessage(); ?>