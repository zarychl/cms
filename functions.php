<?php
include_once("db.php");


function isUserLoggedIn()
{
    return isset($_SESSION['userId']);
}
function getUserInfo($userId)
{
    global $mysqli;
    $stmt = $mysqli->prepare("SELECT * FROM users WHERE id = ? LIMIT 1");
    $stmt->bind_param("i", $userId);
    
    $stmt->execute();
    $result = $stmt->get_result();
    $row = $result->fetch_assoc();
    
    return $row;
}
function getUserIdByMail($mail)
{
    global $mysqli;
    $stmt = $mysqli->prepare("SELECT * FROM users WHERE email = ? LIMIT 1");
    $stmt->bind_param("s", $mail);
    
    $stmt->execute();
    $result = $stmt->get_result();
    $row = $result->fetch_assoc();
    
    if($result->num_rows == 0)
    {
        return -1;
    }
    return $row['id'];
}
function checkPassword($login, $password)
{
    if(getUserIdByMail($login) == -1)
        $ok = false;
    else
    {
        $user = getUserInfo(getUserIdByMail($login));

        if(password_hash($password, PASSWORD_BCRYPT) == $user['password']);
            $ok = true;
    }

    return $ok;

}
function loginUser($userIdToLogIn)
{
    $_SESSION['userId'] = $userIdToLogIn;
}

?>