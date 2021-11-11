<?php
include_once "data.php";
$array = loadData();
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form method="post">
    <input type="number" name="number" placeholder="Nhập số bất kỳ">
    <button type="submit">ADD</button>
</form>
</body>
</html>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    addData($_POST);
//    sapxep($array);
}

?>

