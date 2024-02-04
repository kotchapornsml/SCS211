<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <?php
        $people_obj = json_decode(file_get_contents("https://raw.githubusercontent.com/arc6828/SCS211/main/week13/staff.json"), true);
        $people = $people_obj["people"];
        ?>
        <div class="row">
            <?php foreach ($people as $row) { ?>
                <div class="card mb-4 me-4" style="width: 18rem;">
                    <img class="card-img-top" src="<?= $row["image"] ?>">
                    <div class="card-body">
                        <h5 class="card-title"><?= $row["name"] ?></h5>
                        <p class="card-text"><?= $row["education"] ?></p>
                        <p class="card-text"><?= $row["role"] ?></p>
                        <p class="card-text"><?= $row["email"] ?></p>
                        <p class="card-text"><?= $row["phone"] ?></p>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>