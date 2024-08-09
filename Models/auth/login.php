<?php
require_once '../Config/Config.php';

if (isset($_POST['log_submit'])) {
    $username = $_POST['log_username'];
    $password = $_POST['log_password'];

    $query = "SELECT * FROM admin WHERE username = ? AND password = ?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("ss", $username, $password);
    $stmt->execute();
    $result = $stmt->get_result();
    if ($result->num_rows > 0) {

        $_SESSION['id'] = $row['id'];
        $_SESSION['username'] = $row['username'];

        header('location:../../Views/index.php');
    } else {
        $_SESSION["login"] = false;
        header('location:../../index.php?error_login=error_loginx');
    }
}
?>