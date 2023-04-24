<?php
include("config.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Play video page</title>
    <style>
        video{
            float:left;
        }
    </style>
</head>
<body>
    <div>
        <?php
            $fetchVideos= mysqli_query($con,"SELECT * FROM videos ORDER BY id DESC");
            while($row= mysqli_fetch_assoc($fetchVideos)){
                $location=$row['location'];

                echo"<div>";
                echo"<video src='".$location."'  controls width='500px' height='300px'>";
                echo"</div>";

            }
        ?>
    </div>
</body>
</html>