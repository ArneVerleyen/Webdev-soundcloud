<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SoundCloud | Admin</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <div>
        @if ($message = Session::get('error'))
        <div class="alert alert-danger alert-block">
            <button type="button" class="close" date-dismiss="alert">x</button>
            <strong>{{$message}}</strong>
        </div>
        @endif
        @if (count($errors) > 0)
            <div class="alert alert-danger">
                <ul>
                    @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form method="POST" action="{{route('check.login')}}">
            {{ csrf_field() }}
            <label for="">Enter E-mail</label>
            <input type="email" name="email">
            <label for="">password</label>
            <input type="password" name="password">
            <button type="submit">Login</button>
        </form>
    </div>
</body>
</html>
