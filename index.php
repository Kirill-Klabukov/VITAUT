<!DOCTYPE html>
<html>
<head>
<title>Registration</title>
<meta charset="utf-8" />
<link rel="shortcut icon" href="favicon.ico" type="image/ico">
</head>
<body>
<h2>Form p</h2>
<form action="input.php" method="POST">
<p>Login:<br> 
<input type="text" name="log" /></p>
<p>Password:<br> 
<input type="password" name="pas" /></p>
<p>Форма обучения: <br> 
<input type="radio" name="privacy" value="очно" />Private <br>
<input type="radio" name="privacy" value="заочно" />Open </p>
<p>Выберите курсы: <br>
<select name="courses[]" size="5" multiple="multiple">
    <option value="Game Developer">Game Developer</option>
    <option value="Software Developer">Software Developer</option>
    <option value="Software QC Or Quality Control Specialist">Software QC Or Quality Control Specialist</option>
    <option value="Database Developer">Database Developer</option>
    <option value="Web Developer">Web Developer</option>
    <option value="System Hardware Developer">System Hardware Developers</option>
    <option value="Network System Administrator">Network System Administrator</option>
    <option value="Analyst Programmer">Analyst Programmer</option>
</select></p>
    
<p> Briefly about myself: <br>
<textarea name="comment" maxlength="200"></textarea></p>
    
<p> Agree to the newsletter: <br>
<input type="checkbox" name="news" />yes</p>
    
<input type="submit" value="Send">
</form>
</body>
</html>
