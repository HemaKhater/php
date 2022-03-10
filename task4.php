<?php

if($_SERVER['REQUEST_METHOD']=="POST"){
    $name= $_POST['name'];
    $email= $_POST['email'];
    $password= $_POST['password'];
    $address= $_POST['address'];
    $gender= $_POST['gender'];
    $url= $_POST['url'];
   // $cv= $_FILES['cv'];

  // $allowedExtensions = ['PDF'];


    // error array
    $errors=[];
    
    //validation
    if(empty($name)){
        $errors['name']="is required";
    }
    
    elseif(filter_var($name,FILTER_SANITIZE_STRING)){

    }
    

    if(empty($email)){
        $errors['email']="is required";
    }
    elseif(filter_var($email,FILTER_VALIDATE_EMAIL)){
        $errors['email']="is valid";
    }
    if(empty($password)){
        $errors['Password']  = "Required Field"; 
    }
    elseif(strlen($password) >= 6){
        $errors['Password']  = "Length Must Be >= 6 Chars"; 
    }
    if(empty($address)){
        $errors['address']="is required";
    }
    elseif(strlen($address)<=10){
        $errors['address']  = "Length Must Be <= 10 Chars";
    }
    if(empty($gender)){
        $errors['gender']="is required";
    }
    if(empty($url)){
        $errors["url"]="is required";
    }
    elseif(filter_var(FILTER_VALIDATE_URL)){
        $errors['url']="is valid";
    }
    /*
    if (!empty($_FILES['cv']['name'])){
        $errors['cv']="is required";
    }
    elseif($cvFileType="pdf"){
        echo "success";
    }
    else{
        echo "sorry try again";
    }
    */





 echo strip_tags($name) .' : '.$email.' : '.$password . ' : ' .$address ." : " .$gender ." : " .$url; //." : ".$CV
 ECHO  filter_var($url,FILTER_SANITIZE_URL);

}



?>





<!DOCTYPE html>
<html>
    <head> </head>
    <body>
        <h1>REGESTRATION</h1>
        <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>" enctype="multipart/form-data">
        NAME:
        <input type="text" name="name" placeholder="enter your name"> <br>
        EMAIL:
        <input type="email" name="email" placeholder="enter your email"> <br>
        PASSWORD:
        <input type="password" name="password" placeholder="enter your password"> <br>
        ADDRESS:
        <input type="text" name="address" placeholder="enter your address"> <br>
        GENDER:
        <input type="radio" name="gender" value="female">Female 
        <input type="radio" name="gender" value="male">Male <br>
        LINKEDIN URL:
        <input type="url" name="url" placeholder="enter url"> <br>
        CV:
        <input type="file" name="cv"> <br>
        <input type="submit" name="submit" value="submit">



        
</form>
</body>
</html>