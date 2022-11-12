<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>home</title>
</head>
<body>
    <div class="container">
        <h1>PHP + MySQL CRUD Demo</h1>
        <p>create read update and delete</p>
        <table class="table">
            <tbody>
                <?php include 'read.php';?>
            </tbody>
        </table>
        <form action="create.php" method="POST" class="form-inline">
            <label for="name">club name:</label>
            <input type="text" id="name" name="name" >
            <label for="score">members:</label>
            <input type="number" id="members" name="members" >
            <button type="submit">Add</button>
        </form>
    </div>
</body>
</html>