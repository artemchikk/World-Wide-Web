<!DOCTYPE html>
<html class="translated-ltr">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">  
    <link rel="stylesheet" href ="//cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.css "/> 
    <link rel='stylesheet' href='/css/style.css'>
    <script src="semantic/dist/semantic.min.js"></script>
    <title>Контактная форма</title>

</head>
<body>

<?php require "blocks/header.php"?>

<div class="ui conteiner header">
<h3> Контактная форма</h3>
<form action="check.php" method="post">
<input type="email" name="email" placeholder="Введите Email" class="form-control ui container"><br>
<textarea name="message" class="form-control ui container" placeholder="Введите сообщение"></textarea><br>
<button class="ui green button container"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Отправить</font></font></button>
</form>
</div>

<?php require "blocks/footer.php"?> 




</body>
</html>