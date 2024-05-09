<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Commande </title>
</head>

<body>
    <h1>Gestion Des commande ! </h1>
    <h3>Modifier Commande N°:  {{ $commade->numero }} </h3>
    <form action="{{ url('/update',$commade->id) }}" method="POST" >
        @csrf
        <div class="form-input">
            <label for="numero">
                Numéro Commande :
            </label>
            <input type="text" placeholder="com333" value="{{ $commade->numero }}" >
        </div>
        <div class="form-input">
            <label for="numero">
                date Commande
            </label>
            <input type="date" value="{{ $commade->date }}" >
        </div>
        <div class="form-input">
            <label for="numero">
                Client
            </label>
            <select name="" id="">
                <option value="">Sélectionner Client </option>
@foreach ($clients as $client)
    <option value={{ $client->id }} @if ($client->id===$commade->id_client)
        @selected(true)
    @endif >{{ $client->nom }}</option>
@endforeach
            </select>
        </div>
        <div>
            <button>Modifier</button>
            <button>Annuler</button>
        </div>
    </form>
</body>

</html>
