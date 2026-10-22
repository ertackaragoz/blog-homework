<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{$makale['baslik']}}</title>
</head>
<body>
<a href="{{ route('home') }}">← Anasayfaya Dön</a>

<hr>
<h1>{{ $makale['baslik'] }}</h1>

<span>Tarih: {{ $makale['tarih'] }}</span>

<div>
    <p>{{ $makale['icerik'] }}</p>
</div>

</body>
</html>
