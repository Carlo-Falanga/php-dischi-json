<?php

require_once "./server.php";

?>

<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - Dischi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>

<body>
    <div class="container py-5">

        <div class="row row-cols-1 row-cols-md-3 g-4">
            <?php foreach ($musicRecords as $disco) { ?>
                <div class="col">
                    <div class="card h-100 text-center">

                        <img src="<?php echo $disco["cover"] ?>" class="card-img-top" alt="<?php echo $disco["titolo"] ?>">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $disco["titolo"] ?></h5>
                            <p class="card-text text-secondary"><?php echo $disco["artista"] ?></p>
                            <p class="card-text fw-bold"><?php echo $disco["anno"] ?></p>
                        </div>

                    </div>
                </div>
            <?php } ?>
        </div>

        <form method="POST" class="row g-2 mt-5">
            <div class="col">
                <input type="text" name="titolo" class="form-control" placeholder="Titolo">
            </div>
            <div class="col">
                <input type="text" name="artista" class="form-control" placeholder="Artista">
            </div>
            <div class="col">
                <input type="text" name="cover" class="form-control" placeholder="Cover (url)">
            </div>
            <div class="col">
                <input type="number" name="anno" class="form-control" placeholder="Anno">
            </div>
            <div class="col">
                <input type="text" name="genere" class="form-control" placeholder="Genere">
            </div>
            <div class="col-auto">
                <button class="btn btn-primary">Add</button>
            </div>
        </form>

    </div>
</body>

</html>