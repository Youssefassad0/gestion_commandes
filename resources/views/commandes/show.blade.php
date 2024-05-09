<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <title>Document</title>
</head>

<body>
    <h1 style="text-align: center">
        Commande N° : {{ $commande->numCom }}
    </h1>
    <ul>
        <li>
            Numéro {{ $commande->numCom }}
        </li>
        <li>
            date {{ $commande->dateCom }}
        </li>
        <li>
            Client  {{ $commande->getClient($commande->id) }}
        </li>
    </ul>
    <h2>Detail de commande !</h2>
    <table class="table">
        <thead>
            <tr>
                <th>numero</th>
                <th>Désignation</th>
                <th>price </th>
                <th>quantité</th>
                <th>total</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($articles as $article)
                <tr>
                    <td>
                        {{ $article->numero }}
                    </td>
                    <td>
                        {{ $article->designation }}
                    </td><td>
                        {{ $article->price }}
                    </td><td>
                        {{ $article->quantite }}
                    </td>
               
                <td>{{ $article->quantite * $article->price }}</td>

                    
                </tr>
            @endforeach
        </tbody>
    </table>
</body>

</html>
