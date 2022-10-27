<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <title>DA5</title>  
    <link href="https://fonts.googleapis.com/css2?family=Silkscreen&display=swap" rel="stylesheet">

</head>

<style>
    *{
    margin: 0;
    padding: 0;
}

.heading{
    font-size:4em;
    text-align:center;
    color:white;
    background-color: red;
    font-family: 'Silkscreen', cursive;

    background: -webkit-linear-gradient(-45deg, #ee7752, #e73c7e, #23a6d5, #23d5ab,red,purple);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    /* background: linear-gradient(-45deg, #ee7752, #e73c7e, #23a6d5, #23d5ab); */
	background-size: 400% 400%;
	animation: gradient 10s ease infinite;
	/* height: 0vh; */
    margin-bottom: 0.5em;
    
}


@keyframes gradient {
	0% {
        background-position: 0% 50%;
    }
    50% {
        background-position: 100% 50%;
    }
    100% {
        background-position: 0% 50%;
    }
}


body{
    background-color: rgba(0, 0, 0, 0.926);
}


form{
   
    margin: 0 auto;
    width: 50%;
    padding: 20px;
    background-color: rgba(0, 0, 0, 0.506);
    border-radius: 10px;
    box-shadow: 0 0 10px 0 white;
    display: flex;
    flex-direction: column;
    color: white;
}

input{
    margin: 10px 0;
    padding: 10px;
    border-radius: 5px;
    border: none;
    outline: none;
    font-size: 1em;
    font-family: 'Roboto', sans-serif;
}

textarea{
    max-width: 100%;
}

label{
    font-size: 1.5em;
    font-family: 'Roboto', sans-serif;
    margin-bottom: 10px;
    margin-top: 0.4em;
    background-color: #23d5ab;
   
    border-radius: 5px;
    max-width: 150px;
    text-align: center;
    padding:.2em;
    white-space: nowrap;

    /* border:solid 1.5px white; */
    box-shadow: inset 0 0 10px 0 white;
}

#sub{
    /* Submit button */
    width: 100px;

    margin: 0 auto;
    margin-top: 1em;
    text-align: center;
    transition: all 200ms ease-in-out;
    
}

#sub:hover{
    background-color: #23d5ab;
    color: white;
    cursor: pointer;
    transform: scale(1.2);
}

#sub:active{
    transform: scale(1);
}


.cat1{
    position: relative;
 background-color: red;   
}

.cat1::after{
    content: 'Invalid Marks';
    position: absolute;
    
   /* glass morphism */
    background: rgba(255, 255, 255, 0.2);
    backdrop-filter: blur(20px);
    -webkit-backdrop-filter: blur(20px);
    border-radius: 5px;
    padding: 1px;
    border: 1px solid rgba(255, 255, 255, 0.18);
    /* glass morphism */

    color: red;

    transition: all 200ms ease-in-out;
    transform: scale(0);
    left: 50px;
    
}

.cat1:hover::after{
    left: 120%;

    transform: scale(1);
}



.cat2{
    position: relative;
 background-color: red;   
}

.cat2::after{
    content: 'Invalid Marks';
    position: absolute;
    
   /* glass morphism */
    background: rgba(255, 255, 255, 0.2);
    backdrop-filter: blur(20px);
    -webkit-backdrop-filter: blur(20px);
    border-radius: 5px;
    padding: 1px;
    border: 1px solid rgba(255, 255, 255, 0.18);
    /* glass morphism */

    color: red;

    transition: all 200ms ease-in-out;
    transform: scale(0);
    left: 50px;
    
}

.cat2:hover::after{
    left: 120%;

    transform: scale(1);
}

.next{
    color: white;
}


</style>
<body>
    <div class="heading">
        <p>Student Form</p>
    </div>
    
    <div class="form">
        <form action="index.php" method="POST">
            <label for="name">Name</label>
            <input type="text" name="name" id="name" placeholder="Enter your Name" required>
            <label for="Reg">Reg No</label>
            <input type="text" name="Reg" id="Reg" placeholder="Enter your Registration Number" required>
            <label for="Course">Course</label>
            <input type="text" name="Course" id="Course" placeholder="Enter your Course Name" required>
            <label for="Code">Course Code</label>
            <input type="text" name="Code" id="Code" placeholder="Enter your Course Code:" required>
            <label for="cat1" id="cat1-label" class="test">CAT 1</label>
            <input type="text" oninput="cat1test()"  name="cat1" id="cat1" placeholder="Enter your CAT 1 Marks:" required>
            <label for="cat2" id="cat2-label" class="">CAT 2</label>
            <input type="text" name="cat2" oninput="cat2test()" id="cat2" placeholder="Enter your CAT 2 Marks:" required>
            <label for="da1">DA 1</label>
            <input type="text" name="da1" id="da1" placeholder="Enter your DA 1 Marks:" required>
            <label for="da2">DA 2</label>
            <input type="text" name="da2" id="da2" placeholder="Enter your DA 2 Marks:" required>
            <label for="quiz">Quiz</label>
            <input type="text" name="quiz" id="quiz" placeholder="Enter your Quiz Marks:" required>


            <label for="note">Note</label>
            <textarea name="note" id="note" cols="30" rows="10" placeholder="Enter your Note"></textarea>

            <input id="sub" type="submit" value="Submit">
            <input id="sub" onclick="location.href='./final.php'" value="Details">
            

        </form>
        
    </div>
    <script>
        const label1=document.getElementById("cat1-label");
        const label2=document.getElementById("cat2-label");
        
        function cat1test(){
            // console.log("cat1");
            const cat1=document.getElementById("cat1");
            
        if(cat1.value<0 || cat1.value>50){ 
            label1.classList.add("cat1");
           
            }
        else{
            label1.classList.remove("cat1");
        }
        }
        
        function cat2test(){
            // console.log("cat2");
            const cat2=document.getElementById("cat2");
                    if(cat2.value<0 || cat2.value>50){ 
            label2.classList.add("cat2");
           
            }
        else{
            label2.classList.remove("cat2");
        }
        }
        
    </script>
</body>
</html>


<?php

error_reporting(E_ERROR | E_PARSE);  
    $host = "localhost";  
    $user = "root";  
    $password = '';  
    $db_name = "login_testing";  
      
    //conoecting to the database
    $con = mysqli_connect($host, $user, $password, $db_name,4000);  
    if(mysqli_connect_errno()) {  
        die("Failed to connect with MySQL: ". mysqli_connect_error());  
    }  

    //basic details
    $name=$_POST['name'];
    $reg=$_POST['Reg'];
    $course=$_POST['Course'];
    $code=$_POST['Code'];

    //marks
    $cat1=$_POST['cat1'];
    $cat2=$_POST['cat2'];
    $da1=$_POST['da1'];
    $da2=$_POST['da2'];
    $quiz=$_POST['quiz'];

    //note
    $note=$_POST['note'];

    //inserting values into database
    if($name!=""){
        $insert="INSERT INTO `university`(`name`, `reg`, `course`, `course_code`, `cat1`, `cat2`, `da1`, `da2`, `quiz`, `note`) VALUES ('$name','$reg','$course','$code','$cat1','$cat2','$da1','$da2','$quiz','$note')";
        $result=mysqli_query($con,$insert);
    }
   


?>



