<?php

require_once "./functions.php"

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - Dischi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>

<body>
    <h1>Music Records</h1>

    <?php
    foreach ($musicRecords as $disco) { ?>
        <ul>

            <?php foreach ($disco as $value) { ?>

                <li><?php echo $value ?> </li>

            <?php } ?>

        </ul>
    <?php } ?>

    <form action="server.php" method="POST">
        <div class="form-control">
            <input type="text" name="record-name" id="record-name">
            <button class="btn btn-secondary">Add</button>
        </div>

    </form>


</body>

</html>