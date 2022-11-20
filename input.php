<?php
if(isset($_POST["log"]) && isset($_POST["pas"]) && isset($_POST["eduform"]) && 
    isset($_POST["comment"]) && isset($_POST["courses"])) 
{
    $login = htmlentities($_POST["log"]);
    $password = htmlentities($_POST["pas"]);
    $eduform = htmlentities($_POST["eduform"]);
    $news = "no";
    if(isset($_POST["hostel"])) $news = "yes";
    $comment = htmlentities($_POST["comment"]);
    $courses = $_POST["courses"];
    $output ="
    <html>
    <head>
    <title>Data</title>
    </head>
    <body>
    Login: $login<br />
    Password: $password<br />
    Edu: $eduform<br />
    Newseller: $hostel<br /> 
    Выбранные курсы:
    <ul>";
    foreach($courses as $item)
        $output.="<li>" . htmlentities($item) . "</li>";
    $output.="</ul></body></html>";
    echo $output;
}
else
{   
    echo "Entered data is incorrect";
}
?>
