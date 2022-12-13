<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registration</title>
</head>
<body>
<style>
    .container{
        display: flex;
        justify-content: center;
        text-align: center;
    }
</style>
<div class="container">
<form method="post" action="{{route('register.store')}}" enctype="multipart/form-data">

    @csrf

    <div class="form-group">
        <label for="name">Your name</label>
        <input type="text" class="form-control" id="name" name="name" value="{{old('name')}}">
    </div>

    <div class="form-group">
        <label for="email">Email address</label>
        <input type="email" class="form-control" id="email" name="email" value="{{old('email')}}">
    </div>

    <div class="form-group">
        <label for="password">Password</label>
        <input type="password" class="form-control" id="password" name="password" value="{{old('password')}}">
    </div>

    <div class="form-group">
        <label for="password_confirmation">Confirm Password</label>
        <input type="password" class="form-control" id="password_confirmation" name="password_confirmation">
    </div>

    <div class="form-group">
        <label for="avatar">Avatar</label>
        <input type="file" class="form-control-file" id="avatar" name="avatar">
    </div>



    <button type="submit" class="btn btn-primary">Register</button>

</form>
</div>
</body>
</html>
