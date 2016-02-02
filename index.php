<?php include 'database.php';?>
<?php 
    $query = "SELECT * from shouts ORDER BY id DESC";
    $shouts = mysqli_query($con, $query);

?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Shoutbox - A Php Chat Application</title>
    <link rel="stylesheet" href="css/style.css" type="text/css"/>
  </head>

  <body>

  	<div id ="container">
  		<div id="header">
  			<h1>Shout it!</h1>
  		</div>

  		<div id="shouts">
  			<ul>
          <?php while($row = mysqli_fetch_assoc($shouts)) :?>

          <li class="shout"><span><?php echo " ". $row['time']. " ";?></span><b><?php echo " " . $row['user'] ." ";?></b><?php echo $row['Message'];?></li>


        <?php endwhile;?>

  				</li>
  			</ul>
  		</div>
  		<div id="input">
        <?php if(isset($_GET['error'])): ?>
        <div class="error"><?php echo $_GET['error'];?></div>
      <?php endif; ?>
  			<form method ="post" action="process.php">
  				<input type="text" name="user" placeholder="Enter your Name" />
  				<input type="text" name="message" placeholder ="Enter Message"/>
  				<br/>
  				<input type="submit" name="submit" value="Enter" /> 
  			</form>	
  		</div>

  	</div>
  
  </body>
</html>