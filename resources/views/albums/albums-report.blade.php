<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('css/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <style>
        @page {
            margin: 0cm 0cm;
            font-size: 1em;
        }

        body {
            margin: 1cm 1cm 1cm;
        }
    </style>
    <title>Document</title>
</head>
<body>
        <div class="container">
            <h5 style="text-align: center"><strong>Tabla de Albums</strong></h5>
            <table class="table text-center">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Album Name</th>
                        <th scope="col">Artist Name</th>
                        <th scope="col">Price</th>
                        <th scope="col">Genre</th>
                        <th scope="col">Year</th>
                    </tr>
                </thead>
               <tbody>
                @foreach($albums as $album)
                    <tr>
                        <th scope="row">{{ $album->id }}</th>
                        <td>{{ $album->albumName }}</td>
                        <td>{{ $album->artistName }}</td>
                        <td>{{ $album->price }}</td>
                        <td>{{ $album->genre }}</td>
                        <td>{{ $album->year }}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>


</body>
</html>