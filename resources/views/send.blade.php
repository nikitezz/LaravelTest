<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <form method="post" action="/send">

            @csrf

            <div class="form-group">
                <label for="name">Your name</label>
                <input type="text" class="form-control" id="name" name="name">
            </div>

            <div class="form-group">
                <label for="email">Email address</label>
                <input type="email" class="form-control" id="email" name="email">
            </div>

            <div class="form-group">
                <label for="text">Your message</label>
                <textarea class="form-control" id="text" rows="5" name="text"></textarea>
            </div>

            <button type="submit" class="btn btn-primary">Send</button>

        </form>
    </div>
</body>
</html>
