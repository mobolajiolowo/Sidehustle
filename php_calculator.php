<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>calculator</title>
</head>
<body>
    <form method="post">
        <input type="text" name="numb1">
        <input type="text" name="numb2">
        <select name="operator" id="">
            <option>add</option>
            <option>subtract</option>
            <option>multiply</option>
            <option>divide</option>
        </select>
        <button type="submit" name="submit" value="submit">calculate</button>
    </form>





<?php
if (isset($_POST['submit'])){
$first = $_POST['numb1'];
$second = $_POST['numb2'];
$operator = $_POST['operator'];
switch($operator)
{
    case "add":
    echo $first + $second;
    break;
    case "subtract":
    echo  $first - $second;
    break;
    case "multiply":
    echo $first * $second;
    break;
    case "divide":
    echo $first / $second;
    break;
    }
}
?>
</body>
</html>