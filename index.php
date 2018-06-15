<?php
require __DIR__ . "/vendor/autoload.php";
$view = new \Copier\CopierView($_GET);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>CSE 477 Solution Copier</title>
</head>
<body>
<?php
echo $view->presentBody();
?>
<form action="" method="post">
    <label>Student ID: </label>
    <input type="text" name="stuId"> <p></p>
    <button type="button">Copy</button>
</form>


</body>
</html>
