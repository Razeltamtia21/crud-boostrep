<?php 

include('connect.php');

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Siswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        .mx-auto {
            max-width: 600px;
        }

        .card {
            margin: 10px 0;
        }
    </style>
</head>

<body>
    <div class="mx-auto">
        <div class="card">
            <div class="card-header">
                Create
            </div>
            <div class="card-body">
                <form action="index.php" method="post">
                    <div class="mb-3">
                        <label for="name" class="col-sm-2 col-form-label">Your name:</label>
                        <input type="text" class="form-control" id="name" name="name" value="<?php $name ?>">
                    </div>
                    <div class="mb-3">
                        <label for="class" class="col-sm-2 col-form-label">Your class:</label>
                        <input type="text" class="form-control" id="class" name="class" maxlength="2" oninput="this.value = this.value.replace(/[^0-9]/g, '').slice(0, 2)" placeholder="Max: 12" value="<?php $class ?>">
                    </div>
                    <div class="mb-3">
                        <label for="department" class="col-sm-3 col-form-label">Your department:</label>
                        <select class="form-control" id="department" name="department">
                            <option value="Desain Komunikasi Visual" value="<?php if ($department == "Desain Komunikasi Visual") {
                                                                                echo "selected";
                                                                            } ?>">Desain Komunikasi Visual</option>
                            <option value="Teknik Jaringan Komputer" value="<?php if ($department == "Teknik Jaringan Komputer") {
                                                                                echo "selected";
                                                                            } ?>">Teknik Jaringan Komputer</option>
                            <option value="Rekayasan Perangkat Lunak" value="<?php if ($department == "Rekayasan Perangkat Lunak") {
                                                                                    echo "selected";
                                                                                } ?>">Rekayasan Perangkat Lunak</option>
                        </select>
                    </div>
                    <div class="col-12">
                        <button class="btn btn-primary">Create</button>
                    </div>
                </form>
            </div>
        </div>
</body>

</html>
