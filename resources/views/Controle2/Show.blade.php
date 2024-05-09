<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Show Commade </title>
</head>

<body>
    <h1>
        Commande N° : {{ $Commade->numero }}
    </h1>
    <ul>

        <li> Numéro : {{ $Commade->numero }}</li>
        <li> Date : {{ $Commade->date }}</li>
        <li> Client : {{ $Commade->getClient() }}</li>

    </ul>
    <h1>Détails Commande </h1>
    <table>
        <thead>
            <tr>
                <th>Numéro </th>
                <th>designation </th>
                <th>Prix Unitaire </th>
                <th>Quantité </th>
                <th>Total </th>
            </tr>
        </thead>
            <tbody>

            </tbody>
        </tr>
    </table>
</body>

</html>
