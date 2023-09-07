<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Conditional</title>
</head>
<body>
@if(count($hobbies) == 1)
    <p>I have one hobby</p>
@elseif(count($hobbies) > 1)
    <p>I have multiple hobbies</p>
@else
    <p>I do not have any hobbies</p>
@endif
</body>
</html>
