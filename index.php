<!DOCTYPE html>
<html>
<head>
<title>Registration</title>
<meta charset="utf-8" />
<link rel="shortcut icon" href="favicon.ico" type="image/ico">
    <style>
        
        body{
            background: url(https://images.pexels.com/photos/305821/pexels-photo-305821.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1) no-repeat center top fixed;
            -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
            background-size: cover;
        } 
        
        .glow-button {
            
            text-decoration: none;
            display: inline-block;
            padding: 6px 30px;
            margin: 5px 20px;
            border-radius: 10px;
            box-shadow: 0 0 40px 40px #529b49 inset, 0 0 0 0 #529b49;
            font-family: 'Montserrat', sans-serif;
            font-weight: bold;
            letter-spacing: 2px;
            color: white;
            transition: .15s ease-in-out;
        }
        .glow-button:hover {
            box-shadow: 0 0 10px 0 #529b49 inset, 0 0 10px 4px #529b49;
            color: #529b49;
        }
        
        }
        .main {
            width: 100%;
            height: 100%;
            position: absolute;
            top: 0;
            left: 0;
            overflow: auto;
        }
        
        .block {
            
            width: 350;
            height: 750;
            position: absolute;
            top: 20%;
            left: 50%;
            margin: -125px 0 0 -125px;
            font-family: 'Open Sans', sans-serif;
            border: 1px solid black; /* Параметры рамки */
            border-radius: 30px 30px 30px 30px;
            padding: 15px;
            background-color: aliceblue;
            
            
        }
        
        .two {
            background: aliceblue;
            padding: 50px 20px;
            text-align: center;
        } 
        .two h1 {
            font-family: 'Open Sans', sans-serif;
            position: relative;
            color: #529b49;
            font-size: 3em;
            font-weight: normal;
            line-height: 1;
            padding: 10px 0;
            margin: 0;
            display: inline-block;
        }
        .two h1:before {
            content: ""; 
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%,-50%);
            width: 80%;
            height: 200%;
            border-radius: 50%/30%;
            border: 6px solid #529b49;
            border-left-color: transparent;
            border-right-color: transparent;
        }
        @media (max-width: 420px) {
            .two h1 {font-size: 2em;}
        }
        
        .te {
            
            border-radius: 10px 10px 10px 10px;
            
 
            background: #e8e8e8;
            border: 3px solid #FFF;

  
        outline: 1px solid #999;
        }
        
        .fo {
         
            border-radius: 10px 10px 10px 10px;
            border: 3px solid #FFF;
            
        }
        
        
        
        

    </style>    

</head>
<body>
    <div class = 'main'>
        
<div class = 'block'>  
<div class="two"><h1>Registration</h1></div>
<form action="input.php" method="POST">
<p>Login:<br> 
<input type="text" name="log" class = "te"/></p>
<p>Password:<br> 
<input type="password" name="pas" class = "te" /></p>
<p>Profile: <br> 
<input type="radio" name="privacy" value="Private" />Private <br>
<input type="radio" name="privacy" value="Open" />Open </p>
<p>Your specialization: <br>
<select name="specialization[]" size="5" multiple="multiple" class = "fo">
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
<textarea name="comment" maxlength="200" class = "fo"></textarea></p>
    
<p> Agree to the newsletter: <br>
<input type="checkbox" name="news" />yes</p>
    
<input type="submit" value="Send" class="glow-button" >
</form>

</div>     
 </div>
</body>
</html>
