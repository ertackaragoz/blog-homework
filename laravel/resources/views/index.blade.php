<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ertaç Karagöz - Blog</title>
</head>
<body>
<h1>Ertaç Karagöz - Makaleler</h1>
<hr>

@foreach($makaleler as $makale)
    <div>
        <h2>{{ $makale['baslik'] }}</h2>
        <p>Eklenme Tarihi: {{ $makale['tarih'] }}</p>
        <p>{{ $makale['ozet'] }}</p>
        <a href="{{ route('makale.detay', $makale['id']) }}" class="detay-buton">Detay</a>
    </div>
@endforeach
</body>
</html>
