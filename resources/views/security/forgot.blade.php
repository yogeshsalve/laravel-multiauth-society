<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forgot Password</title>
</head>
<body>
    <form action="forgot_password" method="post">
    @csrf

    @if(session('error'))
        <div>
        {{session('error')}}
        </div>
    @endif

    @if(session('success'))
        <div>{{session('success')}}</div>
    @endif
    <input type="email" name="email" id="email">
    <button class="submit">Submit</button>
    </form>
</body>
</html>