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
    <h1 class="text-center">Modifier une commande </h1>

    <form action="{{ route('commandes.update', $commande->id) }}" method="POST">
        @csrf
        @method('PUT')
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Num commande</th>
                    <th scope="col">Date commande</th>
                    <th scope="col">Client</th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><input type="number" name="numCom" value="{{ $commande->numCom }}"></td>
                    <td><input type="date" name="dateCom" value="{{ $commande->dateCom }}"></td>
                    <td>
                        <select name="id_Client" class="form-select">
                            @foreach ($clients as $client)
                                <option value="{{ $client->id }}"
                                    @if ($client->id === $commande->id_Client) @selected(true) @endif>
                                    {{ $client->nom }}
                                </option>
                            @endforeach
                        </select>
                    </td>
                    <td><button type="submit" class="btn btn-success">Modifier</button></td>
                </tr>
            </tbody>
        </table>
    </form>
</body>

</html>
