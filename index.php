<!DOCTYPE html>
<html>
<head>
<title>METANIT.COM</title>
<meta charset="utf-8" />
</head>
<body>
     
     <?php
if(isset($_POST["firstname"]) && isset($_POST["eduform"]) && 
    isset($_POST["comment"]) && isset($_POST["courses"])) 
{
    $name = htmlentities($_POST["firstname"]);
    $eduform = htmlentities($_POST["eduform"]);
    $hostel = "нет";
    if(isset($_POST["hostel"])) $hostel = "да";
    $comment = htmlentities($_POST["comment"]);
    $courses = $_POST["courses"];
    $output ="
    <html>
    <head>
    <title>Анкетные данные</title>
    </head>
    <body>
    Вас зовут: $name<br />
    Форма обучения: $eduform<br />
    Требуется общежитие: $hostel<br />
    Выбранные курсы:
    <ul>";
    foreach($courses as $item)
        $output.="<li>" . htmlentities($item) . "</li>";
    $output.="</ul></body></html>";
    echo $output;
}
else
{   
    echo "Введенные данные некорректны";
}
?>
     
     
<h2>Анкета</h2>
<form action="input.php" method="POST">
<p>Введите имя:<br> 
<input type="text" name="firstname" /></p>
<p>Форма обучения: <br> 
<input type="radio" name="eduform" value="очно" />очно <br>
<input type="radio" name="eduform" value="заочно" />заочно </p>
<p>Требуется общежитие:<br>
<input type="checkbox" name="hostel" />Да</p>
<p>Выберите курсы: <br>
<select name="courses[]" size="5" multiple="multiple">
    <option value="ASP.NET">ASP.NET</option>
    <option value="PHP">PHP</option>
    <option value="Ruby">RUBY</option>
    <option value="Python">Python</option>
    <option value="Java">Java</option>
</select></p>
<p>Краткий комментарий: <br>
<textarea name="comment" maxlength="200"></textarea></p>
<input type="submit" value="Отправить">
</form>
</body>
</html>
