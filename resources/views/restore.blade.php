<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Restore</title>
</head>
<body>
<h1>Your name:</h1>
<form method="post" action="/customer/output_restore">
    @csrf;
    <input type="text" name="your_name">
<button type="submit">Send</button>
</form>
</body>
</html>
