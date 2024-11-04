<?php
include('connect.php');

if (isset($_GET['op']) && $_GET['op'] == 'delete' && isset($_GET['id'])) {
    $id = $_GET['id'];
    $query = "DELETE FROM users WHERE id = '$id'";
    $stmt = mysqli_query($connect, $query);
    if ($stmt) {
        echo "<script>alert('Data deleted successfully');</script>";
        echo "<script>window.location.href='index.php';</script>";
    } else {
        echo "<script>alert('Failed to delete data');</script>";
    }
}

$name = '';
$class = '';
$department = '';
if (isset($_GET['op']) && $_GET['op'] == 'update' && isset($_GET['id'])) {
    $id = $_GET['id'];
    $query = "SELECT * FROM users WHERE id = '$id'";
    $stmt = mysqli_query($connect, $query);
    $sql = mysqli_fetch_assoc($stmt);
    $name = $sql['name'];
    $class = $sql['class'];
    $department = $sql['department'];
}

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['update'])) {
    $name = $_POST["name"];
    $class = $_POST["class"];
    $department = $_POST["department"];
    $id = $_POST["id"];

    if ($class > 12) {
        echo "<script>alert('Class must not exceed 12')</script>";
    } else {
        $query = "UPDATE users SET name = '$name', class = '$class', department = '$department' WHERE id = '$id'";
        $stmt = mysqli_query($connect, $query);
        if ($stmt) {
            echo "<script>alert('Data updated successfully');</script>";
            echo "<script>window.location.href='index.php';</script>";
        } else {
            echo "<script>alert('Failed to update data');</script>";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Siswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .mx-auto { max-width: 800px; }
        .card { margin: 10px 0; }
    </style>
</head>
<body>
    <div class="mx-auto">
        <div class="card">
            <div class="card-header text-white bg-secondary">Data Siswa</div>
            <div class="card-body">
                <!-- FORM UPDATE -->
                <?php if (isset($_GET['op']) && $_GET['op'] == 'update'): ?>
                    <form method="POST" action="">
                        <input type="hidden" name="id" value="<?php echo $id; ?>">
                        <div class="mb-3">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" class="form-control" id="name" name="name" value="<?php echo $name; ?>" required>
                        </div>
                        <div class="mb-3">
                            <label for="class" class="form-label">Class</label>
                            <input type="number" class="form-control" id="class" name="class" value="<?php echo $class; ?>" max="12" required>
                        </div>
                        <div class="mb-3">
                            <label for="department" class="form-label">Department</label>
                            <input type="text" class="form-control" id="department" name="department" value="<?php echo $department; ?>" required>
                        </div>
                        <button type="submit" name="update" class="btn btn-primary">Update</button>
                        <a href="index.php" class="btn btn-secondary">Cancel</a>
                    </form>
                <?php endif; ?>

                <table class="table mt-3">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Name</th>
                            <th scope="col">Class</th>
                            <th scope="col">Department</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $query = "SELECT * FROM users ORDER BY id DESC";
                        $stmt = mysqli_query($connect, $query);
                        $series = 1;
                        while ($sql = mysqli_fetch_array($stmt)) {
                            $id = $sql["id"];
                            $name = $sql["name"];
                            $class = $sql["class"];
                            $department = $sql["department"];
                        ?>
                            <tr>
                                <th scope="row"><?php echo $series++; ?></th>
                                <td><?php echo $name; ?></td>
                                <td><?php echo $class; ?></td>
                                <td><?php echo $department; ?></td>
                                <td>
                                    <a href="index.php?op=update&id=<?php echo $id; ?>" class="btn btn-warning btn-sm">Update</a>
                                    <a href="index.php?op=delete&id=<?php echo $id; ?>" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure to delete this data?');">Delete</a>
                                </td>
                            </tr>
                        <?php
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>
