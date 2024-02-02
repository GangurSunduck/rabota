<?php
session_start();
function nav($item){
if(empty($_SESSION['login'])){
    $items=[
        'login.php'=>'Вход',
        'reg.php'=>'Регистрация',
    ];
}else if($_SESSION['login']=='copp'){
    $items=[
        'admin.php'=>'Админ панель',
        'lk.php'=>'Личный кабинет',
        'out.php'=>'Выйти',
    ];
}
else{
    $items=[
        'lk.php'=>'Личный кабинет',
        'out.php'=>'Выйти',
    ];
}
echo "
<header>
<div>
<p><a href='index.php'>Нарушениям.Нет</a></p>
<ul>
";
$i=0;
foreach($items as $key=>$value){
    if($i==$item){
        echo "<a href='$key' class='active'>$value</a>";
    }
    else{
        echo "<a href='$key'>$value</a>";
    }
    $i++;
}
echo "
</ul>
</div>
</header>
";
}
?>