<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register</title>
</head>

<body>
    <form method="POST" action="{{ route('register') }}">
        @csrf
        <div class="form-group">
            <label for="name">Name: </label>
            <input type="text" name="name" id="name" required />
        </div>
        <div class="form-group">
            <label for="email">Email: </label>
            <input type="email" name="email" id="email" required />
        </div>
        <div class="form-group">
            <label for="password">Password: </label>
            <input type="password" name="password" id="password" required />
        </div>
        <div class="form-group">
            <input class="btn btn-primary" type="submit">
        </div>
    </form>

    @if($errors->any())
    {!! implode('', $errors->all('<div>:message</div>')) !!}
    @endif
</body>

</html>