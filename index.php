<?php
 
 
/**   
* The guest book  
* Гостевая книга   
* @author IT studio IRBIS-team   
* @copyright © 2009 IRBIS-team   
*/   
/////////////////////////////////////////////////////////  
/**   
* We establish the charset and level of errors   
* Устанавливаем кодировку и уровень ошибок   
*/   
header("Content-Type: text/html; charset=utf-8");   
error_reporting(E_ALL);  
 
    $text1 = !empty($_POST['text1'])?$_POST['text1']:null;  
    $text2 = !empty($_POST['text2'])?$_POST['text2']:null;   
?>   
<form action="?" method="post">  
<input name="text1" type="text" value="<?php echo htmlspecialchars($text1) ?>"/><br />  
<textarea name="text2" cols="40" rows="10"><?php echo htmlspecialchars($text2); ?></textarea><br />  
<input name="ok" type="submit" />  
</form>   
<?php   
 
    if(!empty($_POST['ok']))  
    {  
        if(!$text1)  
            echo 'Текстовое поле не заполнено.';  
        elseif(!$text2)  
            echo 'Текстовая область не заполнена.';  
        else // Записываем информацию в файл, заканчивая  символом переноса строки \n
            file_put_contents('text.txt', $text2 ."\n", FILE_APPEND);   
    }  
    else  
    {  
        echo 'Напишите что-нибудь';  
    }
