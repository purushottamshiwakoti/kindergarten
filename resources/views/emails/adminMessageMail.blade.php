<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <h2>{{ $adminMailMessage['title'] }}</h2>
    <p>Message:{{ $adminMailMessage['body'] }}</p>
    <p>{{ $adminMailMessage['from'] }}</p>
    <p>Make reply to this user</p>
</body>

</html>
