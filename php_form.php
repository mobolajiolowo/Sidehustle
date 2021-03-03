<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">
        First Name: <input type="text" name="firstName"><br><br>
        Last Name: <input type="text" name="lastName"><br><br>
        Nationality: <input type="text" name="nationality"><br><br>
        State of Origin: <input type="text" name="state"><br><br>
        Phone Number: <input type="text" name="number"><br><br>
        e-mail: <input type="text" name="mail"><br><br>
        <input type="submit"><br><br>

    </form>
Welcome  <?php echo $_POST["firstName"];?> <br> 
Your submited details are:<br> First Name =  <?php echo $_POST["firstName"];?> <br>
Last Name =  <?php echo $_POST["lastName"];?><br>
Nationality =  <?php echo $_POST["nationality"];?><br>
State of Origin =  <?php echo $_POST["state"];?> <br>
Phone number =  <?php echo $_POST["number"];?><br>
e-mail =  <?php echo $_POST["mail"];?><br>
</body>
</html>