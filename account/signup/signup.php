<?php

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

if (isset($_POST["signup"])) {
    $usernameup = trim($_POST["usernameup"]);
    $emailup = trim($_POST["emailup"]);
    $passwordup = trim($_POST["passwordup"]);

    if (empty($usernameup) || empty($emailup) || empty($passwordup)) {
        set_error_message("Semua field harus diisi.");
    }

    if (!filter_var($emailup, FILTER_VALIDATE_EMAIL)) {
        set_error_message("Format email tidak valid.");
    }

    $hashed_password = md5($passwordup);

    // Check if username or email already exists
    $stmt = $db->prepare("SELECT * FROM users WHERE username = ? OR email = ?");
    if (!$stmt) {
        die("Query error: " . $db->error);
    }
    $stmt->bind_param("ss", $usernameup, $emailup);
    $stmt->execute();
    $check_result = $stmt->get_result();

    if ($check_result->num_rows > 0) {
        set_error_message("Username atau email sudah terdaftar.");
    } else {
        // Insert new user
        $stmt = $db->prepare("INSERT INTO users (username, email, password) VALUES (?, ?, ?)");
        if (!$stmt) {
            die("Query error: " . $db->error);
        }
        $stmt->bind_param("sss", $usernameup, $emailup, $hashed_password);

        if ($stmt->execute()) {
            session_regenerate_id(true);

            $_SESSION["username"] = $usernameup;
            $_SESSION["is_login"] = true;

            header("Location: ../dashboard/index.php");
            exit();
        } else {
            set_error_message("Gagal mendaftar. Silakan coba lagi.");
        }
    }
    $stmt->close();
}
?>