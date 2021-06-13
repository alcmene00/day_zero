<?php

function emptyInput($email, $pwd){
    $res;
    if (empty($email) || empty($pwd)){
        $res = true;
    }
    else {
        $res = false;
    }
    return $res;
}

function invalidEmail($email){
    $res;
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
        $res = true;
    }
    else {
        $res = false;
    }
    return $res;
}

function emailExists($conn, $email){
    $sql = "SELECT * FROM users WHERE email = ?;";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)){
        header("location: ../account.php?error=stmtfailed");
        exit();
    }

    mysqli_stmt_bind_param($stmt, "s", $email);
    mysqli_stmt_execute($stmt);

    $result = mysqli_stmt_get_result($stmt);
    if ($row = mysqli_fetch_assoc($result)){
        return $row;
    }
    else {
        $res = false;
        return $res;
    }

    mysqli_stmt_close($stmt);
}

function createUser($conn, $email, $pwd){
    $sql = "INSERT INTO users(email, pwd) VALUES (?,?);";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)){
        header("location: ../account.php?error=stmtfailed");
        exit();
    }

    $safePwd = password_hash($pwd, PASSWORD_DEFAULT);

    mysqli_stmt_bind_param($stmt, "ss", $email, $safePwd);
    mysqli_stmt_execute($stmt);

    mysqli_stmt_close($stmt);
    header("location: ../profileUsers.php?error=none");
    exit();
}

function loginUser($conn, $email, $pwd){
   $emailExists = emailExists($conn, $email);

   if ($emailExists === false){
       header("location: ../account.php?error=wronglogin");
       exit();
   }

   $pwdSafe = $emailExists["pwd"];
   $checkPwd = password_verify($pwd, $pwdSafe);
   if ($checkPwd === false){
        header("location: ../account.php?error=wronglogin");
        exit();
   }
   else if ($checkPwd === true){
       session_start();
       $_SESSION["useremail"] = $emailExists["email"];
       if ($_POST["email"] === "admin@dayzero.com"){
            header("location: ../profileAdmins.php?error=none");
       }
       else {
            header("location: ../profileUsers.php?error=none");
       }
       exit();
   }

}

