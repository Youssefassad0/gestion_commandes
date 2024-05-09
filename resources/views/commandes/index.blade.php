<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        .alert {
            position: absolute;
            top: 2rem;
            right: 2rem
        }

        #show {
            text-decoration: none;
            color: black
        }

        #show:hover {
            text-decoration: underline
        }
    </style>
    <title>Document</title>
</head>

<body>
    @if (session()->has('success'))
        <div id="alert" class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    <div class="container mt-5">
        <div class="d-flex justify-content-between align-items-center">
            <h1 class="text-center">Liste des commandes</h1>
            <a href="{{ route('commandes.create') }}" class="btn btn-primary">Ajouter une commande</a>
        </div>
        <table class="table">
            <thead>
                <tr>
                    <th>Num commande</th>
                    <th>Date commande</th>
                    <th>Client</th>
                    <th>actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($commandes as $commande)
                    <tr>
                        <td>{{ $commande->numCom }}</td>
                        <td>{{ $commande->dateCom }}</td>
                        <td>{{ $commande->nom }}</td>
                        <td class="d-flex justify-content-between">
                            <a href="{{ route('commandes.edit', $commande->id) }}" class="btn btn-success">Modifier</a>
                            <form action="{{ route('commandes.destroy', $commande->id) }}" method="POST"
                                style="display: inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger"
                                    onclick="return confirm('Are you sure?')">Delete</button>
                                
                            </form>
                            <a href="{{ route('commandes.show', $commande->id) }}" id="show">>>></a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <script>
        setTimeout(() => {
            document.getElementById('alert').style.display = "none"
        }, 2000);
    </script>
</body>
</body>

</html>
