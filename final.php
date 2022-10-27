<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Final Output</title>
    <link rel="stylesheet" href="./final-style.css">
    
    <style>
        *{
    margin: 0;
    padding: 0;
    /* transition: all 1000ms ease-in-out; */
}

body{
    background-color: rgba(0, 0, 0, 0.926);
    width: 100vw;
    height: 100vh;
    overflow: hidden;
    padding-top: 30px;
}

.output{
    
    height: 90%; 
    display: flex;
    margin: 10px auto;

    width: 80%;
    padding: 10px;
    background-color: rgba(0, 0, 0, 0.506);
    border-radius: 10px;
    box-shadow: 0 0 10px 0 white;
    display: flex;
    flex-direction: column;
    color: black;
    font-size: 1.5em;

    font-family: fantasy;


}

.menu{
    width: 100%;
    height: 50px;
    background-color: rgba(173, 216, 230, 0.655);  
    border-radius: 10px;
    text-align: center;
}

.left{
    display: flex;
    justify-content: center;
    align-items: center;
    border-radius: 10px;
    width: 50%;
    height: 100%;
    /* background-color: rgb(0, 149, 255); */
    float: left;
   
    
}

.right{
    display: flex;
    justify-content: center;
    align-items: center;
    border-radius: 10px;
    width: 50%;
    height: 100%;
    /* background-color: aquamarine; */
    float: right;
}

.left:hover,.right:hover{
    cursor: pointer;
}

.slide{
    background-color: aquamarine;
    transform: translateX(100%);
    z-index: -2;
    width: 50%;
    height: 100%;    
    
}



p{
    z-index: 1;
}


        table{
            position: absolute;
            top: 15%;
            left: 10%;
            width: 80%;
            text-align: center;
        }
        table, th, td {
            margin-top: 10px;
            border: 1px solid greenyellow;
            border-collapse: collapse;
            color: white;
            font-size: 1em;
            font-family: Arial, Helvetica, sans-serif;
        }

        #tab2{
            position: absolute;
            top: 15%;
            left: 10%;
            width: 80%;
            color:white;
            text-align: center;
            opacity: 0;
            font-size: 2em;

            padding-top: 20px;
            padding-bottom: 20px;
        }
            
        #tab3{
            margin-top: 80px;
        }
       

        /* responsive design */
        @media screen and (max-width: 600px) {

            body{
                overflow: auto;
                height: 100vh;
            }

            .output{
                height: 150vh;

            }
            th{
                display: none;
            }
            table, thead, tbody, td, tr {
                display: block;
            }
            /* thead tr {
                position: absolute;
                top: -9999px;
                left: -9999px;
            } */
            tr { border: 1px solid #ccc; }
            td {
                border: none;
                border-bottom: 1px solid #eee;
                position: relative;
                padding-left: 50%;
                text-align: center;
            }
            td:before {
                position: absolute;
                top: 6px;
                left: 6px;
                width: 45%;
                padding-right: 10px;
                white-space: nowrap;
            }

            td:nth-of-type(10){
                height: 20px;
                margin-bottom: 10px;
            }
            td:nth-of-type(1):before { content: "Name"; top: -1px; position: absolute; }
            td:nth-of-type(2):before { content: "Reg No";top: -1px; position: absolute; }
            td:nth-of-type(3):before { content: "Course";top: -1px; position: absolute; }
            td:nth-of-type(4):before { content: "Course Code"; top: -1px; position: absolute;}
            td:nth-of-type(5):before { content: "CAT-1";top: -1px; position: absolute; }
            td:nth-of-type(6):before { content: "CAT-2"; top: -1px; position: absolute;}
            td:nth-of-type(7):before { content: "DA1";top: -1px; position: absolute; }
            td:nth-of-type(8):before { content: "DA2";top: -1px; position: absolute; }
            td:nth-of-type(9):before { content: "Quiz";top: -1px; position: absolute; }
            td:nth-of-type(10):before { content: "NOTE";top: -1px; position: absolute; }

        /* @media screen and (max-width: 600px) {
            table, #tab2 {
                font-size: 0.8em;
            } */
            
        #tab2{
            position: absolute;
            top: 15%;
            left: 10%;
            width: 80%;
            color:white;
            text-align: center;
            opacity: 0;
            font-size: 2em;

            padding-top: 20px;
            padding-bottom: 20px;
        }
            
        #tab3{
            margin-top: 180px;
            font-size: .5em;
        }

        }
    </style>
</head>
<body>
    <div class="output">
        <div class="menu">
            <div id="left"  class="left"><p>Slow Learners</p></div>
            <div id="right" class="right"><p>Student details</p></div>
            <div id="slide" class="slide"></div>
            

        </div>
    </div>
</body>
</html>

<script>
    const left = document.getElementById("left");
    const right = document.getElementById("right");
    const slide = document.getElementById("slide");
    slide.style.transition = "all 0.5s ease-in-out";
    // const table= document.getElementById("tab1");
    // const table2= document.getElementById("tab2");
    // table.style.transition = "all 1.5s ease-in-out";
    left.addEventListener("click", () => {
        document.getElementById('tab1').style.opacity = "0";
        document.getElementById('tab2').style.opacity = "1";
        slide.style.transform = "translateX(0%)";
    });


    right.addEventListener("click", () => {
        document.getElementById('tab1').style.opacity = "1";
        document.getElementById('tab2').style.opacity = "0";
      
            slide.style.transform = "translateX(100%)";

    });

</script>


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
    // $insert="INSERT INTO `university`(`name`, `reg`, `course`, `code`, `cat1`, `cat2`, `da1`, `da2`, `quiz`, `note`) VALUES ('$name','$reg','$course','$code','$cat1','$cat2','$da1','$da2','$quiz','$note')";
    // $result=mysqli_query($con,$insert);
    //Selecting count students whoese any one of the 5 marks is less than 25
    $less_than_25="SELECT COUNT(*) FROM `university` WHERE cat1<25 OR cat2<25 OR da1<25 OR da2<25 OR quiz<25";



    //Calculating average of all the marks
    $average="SELECT AVG(cat1+cat2+da1+da2+quiz) FROM `university`";
    //selecting students with marks less than average
    $less_than_average="SELECT * FROM `university` WHERE (cat1+cat2+da1+da2+quiz)<(SELECT AVG(cat1+cat2+da1+da2+quiz) FROM `university`)";
    $result=mysqli_query($con,$less_than_average);
    while($row=mysqli_fetch_array($result))
    {
        $update="UPDATE `university` SET `note`='slow learner' WHERE reg='$row[reg]'";
        mysqli_query($con,$update);
    }




    //printing student details as table
    $print="SELECT * FROM `university`";

    //executing queries
    $result4=mysqli_query($con,$print);


    //printing results
    echo "<table id='tab1' border='1'>
    <tr>
    <th>Name</th>
    <th>Reg</th>
    <th>Course</th>
    <th>Code</th>
    <th>CAT1</th>
    <th>CAT2</th>
    <th>DA1</th>
    <th>DA2</th>
    <th>Quiz</th>
    <th>Note</th>
    </tr>";

    while($row = mysqli_fetch_array($result4))
    {
    echo "<tr>";
    echo "<td>" . $row['name'] . "</td>";
    echo "<td>" . $row['reg'] . "</td>";
    echo "<td>" . $row['course'] . "</td>";
    echo "<td>" . $row['course_code'] . "</td>";
    
   
   
     if(45<=$row['cat1'] && $row['cat1']<=50)
    {   
        
        echo "<td style='background-color:green'>" . $row['cat1'] . "</td>";
    }
    elseif($row['cat1']<25)
    {
        echo "<td style='background-color:red'>" . $row['cat1'] . "</td>";
    }

    else
    {
        
        echo "<td>" . $row['cat1'] . "</td>";
    }

    if($row['cat2']<25)
    {
        echo "<td style='background-color:red'>" . $row['cat2'] . "</td>";
    }
    elseif(45<=$row['cat2'] && $row['cat2']<=50)
    {
        echo "<td style='background-color:green'>" . $row['cat2'] . "</td>";
    }
    
        else
        {
            echo "<td>" . $row['cat2'] . "</td>";
        }


    if($row['da1']<25)
    {
        echo "<td >" . $row['da1'] . "</td>";
    }
    elseif($row['da1']>45)
    {
        echo "<td >" . $row['da1'] . "</td>";
    }
        
            else
            {
                echo "<td>" . $row['da1'] . "</td>";
            }


    if($row['da2']<25)
    {
        echo "<td >" . $row['da2'] . "</td>";
    }
    elseif($row['da2']>45)
    {
        echo "<td >" . $row['da2'] . "</td>";
    }
                
                    else
                    {
                        echo "<td>" . $row['da2'] . "</td>";
                    }
  
    if($row['quiz']<25)
    {
        echo "<td >" . $row['quiz'] . "</td>";
    }
    else if($row['quiz']>45)
    {
        echo "<td >" . $row['quiz'] . "</td>";
    }
      else{
        echo "<td>" . $row['quiz'] . "</td>";
      }  

    echo "<td>" . $row['note'] . "</td>";
    echo "</tr>";
    }
    echo "</table>";

    
    echo "<div id='tab2'>";

    //printing the average count of students
    $result1=mysqli_query($con,$average);
    $row1=mysqli_fetch_array($result1);
    echo "Average of all the marks is: ".$row1[0]."<br>";

    //print all students whose note is slow learner
    $query="SELECT * FROM `university` WHERE note='slow learner'";
    $result2=mysqli_query($con,$query);
    echo "Students who are slow learners are: <br>";
    // echo "hi";
    //Table
    echo "<table id='tab3' border='1'>";
    echo "<th> Name </th>";
    echo "<th> Reg </th>";
    while($row2=mysqli_fetch_array($result2))
    {
        echo "<tr>";
        echo "<td>" . $row2['name'] . "</td>";
        echo "<td>" . $row2['reg'] . "</td>";
      
    }

    echo "</table>";
    
    echo "</div>";


   
mysqli_close($con);

?>


