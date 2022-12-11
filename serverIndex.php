<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meme king</title>
    <link rel="stylesheet" href="css/server.css" />
    <link rel="stylesheet" href="css/bruh.css">
</head>
<body>
    <div class="main">
        <div class="first">

        </div>
<div id="display-image">
		<?php
        $db = mysqli_connect("localhost", "root", "", "meme_maker");
		$query = " select * from image ";
		$result = mysqli_query($db, $query);

		while ($data = mysqli_fetch_assoc($result)) {
		?>
        
			<img src="./image/<?php echo $data['filename']; ?>">
            <br>

            <button id="btn">❤</button>
  
    <p class="para">
       <span 
        id="display">6</span> votes
    </p>
  
    <script type="text/javascript">
        var count = 0;
        var btn = document.getElementById("btn");
        var disp = document.getElementById("display");
  
       
            disp.innerHTML = count++;

        
    </script>
    
   

		<?php
		}
		?>
</div>
<div class="second">

</div>
</div>
</body>
</html>
