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
    header("location: ../account.php?error=none");
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
       $_SESSION["userid"] = $emailExists["id"];
       $_SESSION["userimage"]=$emailExists["image"];
       $id = $_SESSION["userid"];
       if (str_contains($_POST["email"], '@dayzero.com')){
            header("location: ../profileAdmins.php");
       }
       else {
            header("location: ../profileUsers.php");
       }
       
       exit();
   }

}

function insertUser($conn, $email, $pwd){
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
    header("location: ../profileAdmins.php?error=none");
    exit();
}

function deleteUser($conn, $email){
    $sql = "DELETE FROM users WHERE email = '$email'";

    if($conn->query($sql) == TRUE){
        header("location: ../profileAdmins.php?error=none");
        exit();
    } 
    else{
        header("location: ../profileAdmins.php?error=failed");
        exit();
    }
} 

function emptyInputDelete($email){
    $res;
    if (empty($email)){
        $res = true;
    }
    else {
        $res = false;
    }
    return $res;
}

function updateUser($conn, $email, $pwd){
    session_start();
    $id=$_SESSION["userid"];
    $safePwd = password_hash($pwd, PASSWORD_DEFAULT);
    $sql = "UPDATE users SET email='$email', pwd='$safePwd' WHERE id='$id'";


    if($conn->query($sql) == TRUE){
        $email_before=$_SESSION["useremail"];
        $_SESSION["useremail"]=$email;
        if (str_contains($_SESSION["useremail"], '@dayzero.com')){
            header("location: ../profileAdmins.php?error=none");
            exit();
        }
        else {
            header("location: ../profileUsers.php?error=none");
            exit();
        }
    }
    else {
        if (str_contains($_SESSION["useremail"], '@dayzero.com')){
            header("location: ../profileAdmins.php?error=failed");
            exit();
        }
        else {
            header("location: ../profileUsers.php?error=failed");
            exit();
        }
    }
    

}

function updateEmail($conn, $email){
    session_start();
    $id=$_SESSION["userid"];
    $sql = "UPDATE users SET email='$email' WHERE id='$id'";

    if($conn->query($sql) == TRUE){
        $_SESSION["useremail"]=$email;
        if (str_contains($_SESSION["useremail"], '@dayzero.com')){
            header("location: ../profileAdmins.php?error=none");
            exit();
        }
        else {
            header("location: ../profileUsers.php?error=none");
            exit();
        }
    }
    else {
        if (str_contains($_SESSION["useremail"], '@dayzero.com')){
            header("location: ../profileAdmins.php?error=failed");
            exit();
        }
        else {
            header("location: ../profileUsers.php?error=failed");
            exit();
        }
    }
}

function updatePwd($conn, $pwd){
    session_start();
    $id=$_SESSION["userid"];
    $safePwd = password_hash($pwd, PASSWORD_DEFAULT);
    $sql = "UPDATE users SET pwd='$safePwd' WHERE id='$id'";


    if($conn->query($sql) == TRUE){
        if (str_contains($_SESSION["useremail"], '@dayzero.com')){
            header("location: ../profileAdmins.php?error=none");
            exit();
        }
        else {
            header("location: ../profileUsers.php?error=none");
            exit();
        }
    }
    else {
        if (str_contains($_SESSION["useremail"], '@dayzero.com')){
            header("location: ../profileAdmins.php?error=failed");
            exit();
        }
        else {
            header("location: ../profileUsers.php?error=failed");
            exit();
        }
    }
    

}

function emptyInputEmail($email){
    $res;
    if (empty($email)){
        $res = true;
    }
    else {
        $res = false;
    }
    return $res;
}

function emptyInputPwd($pwd){
    $res;
    if (empty($pwd)){
        $res = true;
    }
    else {
        $res = false;
    }
    return $res;
}
