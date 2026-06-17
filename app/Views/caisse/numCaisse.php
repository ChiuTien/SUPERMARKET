
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Choisir caisse</h2>
    <form action="/caisse/add" method="post">
        <select name="idCaisse">
            <?php foreach ($caisses as $c) { ?>
                <option value="<?= $c['id'] ?>"><?= $c['nom'] ?></option>
            <?php } ?>
        </select>
    <button type="submit"> Valider </button>
    </form>
</body>
</html>