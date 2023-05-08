<?php
function generateRandomPassword($length = 12) {
    $characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789!@#$%^&*()';
    $password = '';
    for ($i = 0; $i < $length; $i++) {
        $password .= $characters[rand(0, strlen($characters) - 1)];
    }
    return $password;
}

$random_password = generateRandomPassword();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Add Credential - Password Manager</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
    <a href="index.php" class="btn btn-secondary mb-3">Home</a>
        <h1 class="mt-3">Add Credential</h1>
        <form action="add_credential.php" method="post">
            <div class="form-group">
                <label for="title">Title:</label>
                <input type="text" class="form-control" id="title" name="title" required>
            </div>
            <div class="form-group">
                <label for="username">Username:</label>
                <input type="text" class="form-control" id="username" name="username" required>
            </div>

            <div class="form-group">
            <label for="password">Password:</label>
                <input type="text" class="form-control" id="password" name="password" value="<?php echo $random_password; ?>" required>
            </div>


            <div class="form-group">
                <label for="website_url">Website URL:</label>
                <input type="text" class="form-control" id="website_url" name="website_url">
            </div>
            <input type="submit" class="btn btn-primary" value="Add Credential">
        </form>
    </div>
</body>
</html>