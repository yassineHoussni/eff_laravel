<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    

    <form action="/voitures" method="POST">
        @csrf
        <label for="matricule">matricule :</label>
        <input type="text" name="matricule">
        <label for="marque">marque :</label>
        <input type="text" name="marque">
        <label for="couleur">couleur :</label>
        <input type="text" name="couleur">
        <label for="marque">dateMiseEnCirculation :</label>
        <input type="date" name="dateMiseEnCirculation">
        <button type="submit">Valider</button>
    </form>
    
</body>
</html>