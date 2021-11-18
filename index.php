<!DOCTYPE html>
<html class="translated-ltr">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">  
    <link rel="stylesheet" href ="//cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.css "/> 
    <link rel='stylesheet' href='/css/style.css'>
    <script src="semantic/dist/semantic.min.js"></script>
    <title>PHP веб сайт</title>


</head>
<body>


<?php require "blocks/header.php"?>

<!--
<?php
$i = 0;
$array_menu = array();

$array_menu[$i]['url']='/';
$array_menu[$i++]['name']='Главная';

$array_menu[$i]['url']='-----';
$array_menu[$i++]['name']='Название раздела 1';

$array_menu[$i]['url']='-----';
$array_menu[$i++]['name']='Название раздела 2';

echo "<ul>\n";
for ($i=0; $i<count($array_menu); $i++)
{
       echo ($_SERVER["REQUEST_URI"] == $array_menu[$i]['url']) ? '<li class="active">': '<li>';
       echo "<a href=\"".$array_menu[$i]['url']."\">".$array_menu[$i]['name']."</a></li>\n";
}
echo "</ul>";
?>
-->

<div class="ui main text container">
    <h1 class="ui header"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Два пастуха из Чашникского района угнали трактор, чтобы не идти пешком</font></font></h1>
    <p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Задушевный разговор на пастбище между двумя пастухами завершился угоном трактора и уголовным делом.</font></font></p>
    <img class="wireframe ui centered huge image" src="/img/paragraph.jpg">
    <p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Как оказалось, один из работников сельхозпредприятия решил кардинально поменять образ жизни и уволиться с места своей работы. Его коллега поддержал такие намерения и предложил помочь другу добраться до дома. Однако идти пешком приятели не захотели, поэтому решили прокатиться на оставленном неподалеку тракторе, который сельхозпредприятие использовало для обслуживания летней дойки. Не без трудностей пастухи завели колхозную технику поехали на ней в ближайшую деревню. Тем временем другие работники хозяйства обнаружили пропажу машины и заявили о ней в милицию. Для поиска угонщиков правоохранителям не потребовалось много времени: они задержали пастуха, когда он уже отвез своего пассажира и возвращался назад.</font></font></p>
</div>

<?php require "blocks/footer.php"?>


</body>
</html>
