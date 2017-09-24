<html>
<head>
<meta charset="utf-8">
    <title>Online Registration </title>
    <link href="estilos.css" rel="stylesheet" type="text/css">
</head>
<body>
<div class="group">
    <form action="registration.php" method="POST">
        <h2><em>Registration Form</em></h2>
        <label for="name">Name<span><em><b>(Required)</b></em></span></label>
        <label for="las_name">Last name<span><em><b>(Required)</b></em></span></label>
        <label for="emaiel">Email<span><em><b>(Required)</b></em></span></label>
            <label><p>Name: <input type="text" name="name" size="30"/></p></label>
            <label><p>Last Name: <input type="text" name="last_name" size="30"/></p></label>
            <label><p>Email: <input type="text" name="email"size="30"/></p></label>
            <center> <input class="form-btn" name="submit" type="submit" value="To Suscribe"/></center>
    </form>
</div>
</body>
</html>
