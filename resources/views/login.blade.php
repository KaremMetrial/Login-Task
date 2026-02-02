<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
</head>
<body>

<form method="POST" action="/login">
    @csrf
    <input type="password" name="password" placeholder="Enter Password">
    <button type="submit">Login</button>
</form>

@if ($errors->any())
    <p style="color:red">{{ $errors->first() }}</p>
@endif

</body>
</html>
