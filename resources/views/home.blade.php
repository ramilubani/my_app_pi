<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>myapp</title>
</head>
<body>
    <div style="border:3px solid black;">
        <h2>Register</h2>
        <form action="/register" method="post">
            @csrf
            <input type="text" name="name" placelolder="name">
            <input type="text" name="email" placelolder="email">
            <input type="password" name="password" placelolder="password">
            <button>Register</button>
            </form>
    </div>
</body>
</html>