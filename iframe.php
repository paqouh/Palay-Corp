<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>I Frame</title>
    <style>
        iframe {
            box-shadow:  0 10px rgba(0, 0, 0, 0.8);
        }
    </style>
</head>
<body>
    <a href="seller-centre.php" target="iframe_1">Link</a>
    <iframe src="account.php" frameborder="0" width="600px" height="600px" name="iframe_1"></iframe>
</body>
</html>