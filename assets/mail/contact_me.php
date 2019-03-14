<?
if((isset($_POST['name'])&&$_POST['name']!="")&&(isset($_POST['email'])&&$_POST['email']!="")&&(isset($_POST['phone'])&&$_POST['phone']!="")){ //Проверка отправилось ли наше поля name и не пустые ли они
        $to = 'itmedia.courses@gmail.com'; 
        $subject = 'Письмо с сайта itmedia.com.ua'; 
        $message = '
                <html>
                    <head>
                        <title>'.$subject.'</title>
                    </head>
                    <body>
                        <p>Имя: '.$_POST['name'].'</p>
                        <p>E-mail: '.$_POST['email'].'</p> 
                        <p>Телефон: '.$_POST['phone'].'</p> 
                        <p>Выбранный курс: '.$_POST['course'].'</p> 
                    </body>
                </html>'; 
        $headers  = "Content-type: text/html; charset=utf-8 \r\n"; 
        $headers .= "From: Отправитель <from@example.com>\r\n"; 
        mail($to, $subject, $message, $headers); 
        echo "<h2>Заявка отправлена</h2>";


}
?> 

