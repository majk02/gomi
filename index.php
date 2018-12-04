<?php
function make_list()
{
    $list = scandir('data');
    $i = 0 ;
    while($i<count($list)){
        if($list[$i] != '.' && $list[$i] != '..'){
            ?>
            <li><a href="index.php?id=<?=$list[$i]?>"><?=substr($list[$i],14)?></a></li>
            <?php
        }
        $i++;
    }
}
function print_title()
{
    if(isset($_GET['id']))
        echo substr($_GET['id'],14);
    else
        echo "Welcome";
}
function print_contents()
{
    if(isset($_GET['id']))
        echo file_get_contents("data/".$_GET['id']);
    else
        echo file_get_contents("main");
}
?>
<!doctype html>
<head>
    <title>혁신적인 쓰레기; GOMI</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <h1>
        <a href="index.php"style="color:#007acc">하와와...타이틀인 거시에요...</a>
    </h1>
    <div id="grid">
        <ul>
            <li><a href="creat_contents.php"style="color:red">글생성</a></li>
            <?php
            make_list();
            ?>
        </ul>
        <div id="contents">
            <h2>
                <?php
                print_title();
                ?>
            </h2>
            <h3><?php if(isset($_GET['id'])) echo substr($_GET['id'],0,8);?></h3>
            <pre>
<?php
print_contents();
?>
            </pre>
        </div>
    </div>
</body>