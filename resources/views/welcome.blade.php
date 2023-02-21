<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/js/app.js')
    <title>Document</title>
</head>
<body>    
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>azienda</th>
                    <th>stazione_di_partenza</th>
                    <th>stazione_di_arrivo</th>
                    <th>Orario_di_partenza</th>
                    <th>Orario_di_arrivo</th>
                    <th>codice_treno</th>
                    <th>numero_carrozze</th>
                    <th>In_orario</th>
                    <th>Cancellato</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($trains as $train)
                    <tr>
                        <td>{{ $train['azienda'] }}</td>
                        <td>{{ $train['stazione_di_partenza'] }}</td>
                        <td>{{ $train['stazione_di_arrivo'] }}</td>
                        <td>{{ $train['Orario_di_partenza'] }}</td>
                        <td>{{ $train['Orario_di_arrivo'] }}</td>
                        <td>{{ $train['Codice_Treno'] }}</td>
                        <td>{{ $train['Numero_carrozze'] }}</td>
                        <td>{{ booltoname($train['In_orario']) }}</td>
                        <td>{{ booltoname($train['Cancellato']) }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
</body>
</html>