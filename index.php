<!DOCTYPE html>
<html>
<head>
<title>Registration form</title>
<meta charset="utf-8" />
<link rel="shortcut icon" href="favicon.ico" type="image/ico">
    <style>
        .main {
            width: 100%;
            height: 100%;
            position: absolute;
            top: 0;
            left: 0;
            overflow: auto;
        }
        
        .block {
            width: 250px;
            height: 250px;
            position: absolute;
            top: 30%;
            left: 50%;
            margin: -125px 0 0 -125px;
        

    </style>    

</head>
<body>
    <div class = 'main'>
        
<div class = 'block'>        
<h2>Registration form</h2>
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

</div>     
 </div>
</body>
</html>
