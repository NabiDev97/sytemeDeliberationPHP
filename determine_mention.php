<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>DeliberationApp</title>
</head>
<body>
<div class="container mt-5">
        <h2>Examen Final</h2>
        <form action="decisionJury.php" method="post">
            <div class="form-group">
                <label for="average">Entrez la moyenne :</label>
                <input type="number" class="form-control" id="average" name="average" max="20"  min="0" required>
                <!-- L'attribut "max" définit la valeur maximale à 20 -->
            </div>
            <button type="submit" class="btn btn-primary" name="valider">Soumettre</button>
        </form>
    </div>
 
    <!-- inclusion du js de bootstrap -->
    <script 
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>
</html>