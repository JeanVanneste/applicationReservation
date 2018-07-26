<!DOCTYPE html>

<html>
<head>
    <title>Passage</title>
</head>
<body>
    <h1>
        Nouveau passager
    </h1>
    <form method="POST">
        <table>
            <tr>
                <th>Nom</th>
                <th><input type="text" name="nom"></th>
            </tr>

            <tr>
                <th>Prénom</th>
                <th><input type="text" name="prenom"></th>
            </tr>
            <tr>
                <th>Age</th>
                <th><input type="text" name="age"></th> 
            </tr>
        </table>
        <button type="submit">Etape suivante</button>
        <button type="reset">Retour à la page précédente</button>
        <button type="submit" name="cancel" value = true>Annuler la réservation</button>
    </form>
</body>
</html>