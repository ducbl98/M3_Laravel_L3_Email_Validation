<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Validate Email</title>
</head>
<body>
<div class="main-content">
    <h1>Email Validation</h1>
    <form method="post" action="{{route('checkEmail')}}">
        <label for="email-input">
            @csrf
            <input id="email-input" type="text" name="email" placeholder="Input email">
            <input type="submit" value="Check">
        </label>
    </form>
    @if(isset($isEmail))
        Conclusion : {{$isEmail ? 'Valid Email':'Invalid Email'}}
    @endif
</div>
</body>
</html>
