<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Info Covid-19 Laravel 7</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" >
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" ></script>
</head>
<body>
    <div class="container">
        <p class="h1">Parsing Data JSON Info Covid-19</p><hr>
        <dl class="row">
            @foreach ($data as $datas)   
                <dt class="col-sm-2">Negara</dt>
                <dd class="col-sm-9">{{ $datas['name'] }}</dd>

                <dt class="col-sm-2">Positif</dt>
                <dd class="col-sm-9">{{ $datas['positif'] }}</dd>

                <dt class="col-sm-2">Sembuh</dt>
                <dd class="col-sm-9">{{ $datas['sembuh'] }}</dd>

                <dt class="col-sm-2">Meninggal</dt>
                <dd class="col-sm-9">{{ $datas['meninggal'] }}</dd>
            @endforeach 
        </dl>        
    </div>
</body>
</html>
