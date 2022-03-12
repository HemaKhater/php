<?php
session_start();
echo "<pre>";
print_r($_SESSION['user']);
echo "</pre>";

?>

<html>
<head>
    <title>Register</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<body>

    <div class="container">
        <h2></h2>

        <form action="<?php echo  $_SERVER['PHP_SELF']; ?>" method="post" enctype="multipart/form-data">

            
                TITLE:
                <input type="text" class="form-control" id="exampleInputtitle" aria-describedby=""  name="title" placeholder="your title"> <br>
            


            
                CONTENT:
                <input type="text" class="form-control" id="exampleInputcontent" aria-describedby="" name="content" placeholder=""> <br>
           

            
                IMAGE:
                <input type="file" name="image"> <br>
       

           


            <input type="submit" name="submit" value="submit">
        </form>
    </div>
</body>
</html>