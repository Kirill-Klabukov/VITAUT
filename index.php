<!DOCTYPE html>
<html>
<head>
<title>Registration</title>
<meta charset="utf-8" />
</head>
<body>
<h2>Form</h2>
<form action="input.php" method="POST">
<p>Login:<br> 
<input type="text" name="log" /></p>
<p>Password:<br> 
<input type="password" name="pas" /></p>
<p>Форма обучения: <br> 
<input type="radio" name="eduform" value="очно" />Private <br>
<input type="radio" name="eduform" value="заочно" />Open </p>
<p>Выберите курсы: <br>
<select name="courses[]" size="5" multiple="multiple">
    <option value="ASP.NET">ASP.NET</option>
    <option value="PHP">PHP</option>
    <option value="Ruby">RUBY</option>
    <option value="Python">Python</option>
    <option value="Java">Java</option>
</select></p>
<p> Comment: <br>
<textarea name="comment" maxlength="200"></textarea></p>
    
<p> Agree to the newsletter: <br>
<input type="checkbox" name="news" />yes</p>
    
<input type="submit" value="Send">
</form>
</body>
</html>
