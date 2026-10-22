<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>LOGIN</title>
</head>
<body>

<h1>Hoşgeldiniz</h1>

@if($errors->any())
    <div class="error">{{ $errors->first() }}</div>
@endif

<form action="{{ route('login') }}" method="POST">
    @csrf
    <input type="text" name="username" placeholder="Kullanıcı Adı" required>
    <input type="password" name="password" placeholder="Şifre" required>
    <button type="submit">Giriş Yap</button>
</form>

</body>
</html>
