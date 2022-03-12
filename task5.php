<?php
echo "<pre>";
session_start();
echo "</pre>";


function clean($input){
    return stripslashes(strip_tags(trim($input)));
}

if ($_SERVER['REQUEST_METHOD'] == "POST"){ 
    // CODE ..... 

    $title= clean($_POST['title']);

    $content= clean($_POST['content']);

    $image= $_FILES['image'];

    
    # Errors Array ... 
    $errors = []; 

    //validation

    if(empty($title)){
        $errors['title'] = "Required Field ";
    }

    if(empty($content)){
        $errors['content'] = "Required Field ";
    }
    elseif(strlen($content)>50){
        $errors['content']="Length Must Be > 50 Chars";
    }
    if(count($errors) > 0 ){
        foreach ($errors as $key => $value) {
            # code...
           echo '* '.$key.' : '.$value.'<br>';
        }
    } 

    //create txt file
    $file=fopen('document.txt','a') or die('unable to open file');
    $text= $title .' || '.$content .' || ' ."\n";
    fwrite($file,$text);
    fclose($file);

    //set session
    
    
    $_SESSION['user']=["title" =>$title ,"content" =>$content , "image" =>$image];


   // echo "title is" .$title ."<br>" . "content is" .$content;
        

    
    //create image file

    if(isset($_FILES['image'])){
        $errors= array();
        $file_name = $_FILES['image']['name'];
        $file_size =$_FILES['image']['size'];
        $file_tmp =$_FILES['image']['tmp_name'];
        $file_type=$_FILES['image']['type'];
        
        $extensions= array("jpeg","jpg","png");
        
        
        if(empty($errors)==true){
           echo "Success";
        }else{
           print_r($errors);
        }
     }
    }
    
    
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