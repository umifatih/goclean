<?php
session_start();
include "database.php";

function set_error_message($message) {
    $_SESSION['error'] = $message;
    header("Location: index.php");
    exit();
}

if (isset($_POST['login'])) {
    $usernamein = trim($_POST['usernamein']);
    $passwordin = trim($_POST['passwordin']);

    if (empty($usernamein) || empty($passwordin)) {
        set_error_message("Username dan password harus diisi.");
    }

    $stmt = $db->prepare("SELECT username, password FROM users WHERE username = ?");
    if (!$stmt) {
        die("Query error: " . $db->error);
    }
    $stmt->bind_param("s", $usernamein);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $user = $result->fetch_assoc();
        if (md5($passwordin) === $user['password']) {
            session_regenerate_id(true);
            $_SESSION["username"] = $user["username"];
            $_SESSION["is_login"] = true;
            header("Location: ../dashboard/index.php");
            exit();
         } else {
             set_error_message("Password salah.");
            }
        
    } else {
        set_error_message("Akun tidak ditemukan.");
    }
    $stmt->close();
}
?>
