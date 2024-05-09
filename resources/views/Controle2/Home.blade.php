<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Commendes Page</title>
</head>

<body>
    <a href=""> Ajouter une Commande </a>
    <h1>Liste des Commandes ! </h1>
    <table class="table">
        <thead>
            <tr>
                <th>N°Com</th>
                <th>date de com</th>
                <th>Client</th>
                <th colspan="2">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($commands as $command)
                <tr>
                    <td>
                        {{ $command->numero }}
                    </td>
                    <td>
                        {{ $command->date }}
                    </td>
                    <td>
                        {{ $command->getClient() }}
                    </td>
                    <td>
                        <a href="{{ url('/edit',$command->id) }}">
                            Edit
                        </a>
                    </td>
                    <td>
                        Delete
                    </td>
                    <td>
                        <a href="{{ url('/show',$command->id) }}">
                            >>>
                        </a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>

</html>
