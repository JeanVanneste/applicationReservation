<!DOCTYPE html>
<html>
<head>
    <title>
        Nouvelle réservation
    </title>
</head>
<body>
    <h1>
        Nouvelle réservation
    </h1>

    <p>
        La place coûte 10€ pour les enfants de moins de 12 ans et 15€ pour les adultes.
    </p>
    <p>
        L'assurance annulation coûte 20€ quelque soit le nombre de voyageurs
    </p>
    <form method="post">
        <table>
            <tr>
                <th>Destination</th>
                <th>
                    <select>
                        <option value=""></option>
                        <option value="Berlin">Berlin</option>
                        <option value="Bruxelles">Bruxelles</option>
                        <option value="Paris">Paris</option>
                    </select>
                </th>
            </tr>

            <tr>
                <th>Nombre de places</th>
                <th><input type="text" name="nombre"></th>
            </tr>
            <tr>
                <th>Assurance annulation</th>
                <th><input type="checkbox" name="assurance"></th>   
            </tr>
        </table>
        <button type="submit">Etape suivante</button>
        <button type="reset">Annuler la réservation</button>

    </form>
</body>
</html>
