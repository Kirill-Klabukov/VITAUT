<?php
if(isset($_POST["log"]) && isset($_POST["pas"]) && isset($_POST["privacy"]) && 
    isset($_POST["comment"]) && isset($_POST["spec"])) 
{
    $login = htmlentities($_POST["log"]);
    $password = htmlentities($_POST["pas"]);
    $privacy = htmlentities($_POST["privacy"]);
    $news = "no";
    if(isset($_POST["news"])) $news = "yes";
    $comment = htmlentities($_POST["comment"]);
    $spec = $_POST["spec"];
    $output ="
    <html>
    <head>
    <title>Data</title>
    <style>
         body{
            background: url(https://images.pexels.com/photos/305821/pexels-photo-305821.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1) no-repeat center top fixed;
            -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
            background-size: cover;
        } 
        
        .block {
            
            width: 200;
            height: 200;
            position: absolute;
            top: 40%;
            left: 50%;
            margin: -125px 0 0 -125px;
            font-family: 'Open Sans', sans-serif;
            border: 1px solid black; /* Параметры рамки */
            border-radius: 30px 30px 30px 30px;
            padding: 15px;
            background-color: aliceblue;
            
            
        }
    </style>
    
    </head>
    <body>
    <div class = "block">
    Login: $login<br />
    Password: $password<br />
    Privacy: $privacy<br />
    Newseller: $news<br /> 
    </div>
    Specialization:
    <ul>";
    foreach($spec as $item)
        $output.="<li>" . htmlentities($item) . "</li>";
    $output.="</ul>  </body></html>";
    
    
    
   $file1 = fopen("data.txt","w") or die("Unable to open file!");
   $text1 =  $output ;
        
   fwrite($file1, $text1);
   echo $text1;
   fclose($file1);
}
else
{   
    echo "Entered data is incorrect";
}
?>
