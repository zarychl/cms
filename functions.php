<?php
include_once("db.php");

function isUserLoggedIn()//sprawdzamy, czy użytkownik jest zalogowany
{
    return isset($_SESSION['userId']);
}
function getUserInfo($userId)//pobieranie informacji o użytkowniku o danym ID
{
    global $mysqli;
    $stmt = $mysqli->prepare("SELECT * FROM users WHERE id = ? LIMIT 1");
    $stmt->bind_param("i", $userId);
    
    $stmt->execute();
    $result = $stmt->get_result();
    $row = $result->fetch_assoc();
    
    return $row;
}
function getUserIdByMail($mail)//pobieranie id użytkownika o podanym adresie mail
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
function checkPassword($login, $password)// sprawdzanie czy hasła zgadzają się
{
    if(getUserIdByMail($login) == -1)
        $ok = false;
    else
    {
        $user = getUserInfo(getUserIdByMail($login));

        if(password_verify($password, $user['password']));
            $ok = true;
    }

    return $ok;

}
function loginUser($userIdToLogIn)//logowanie użytkownika
{
    $_SESSION['userId'] = $userIdToLogIn;
}
function logoutUser()//wylogowanie użytkownika
{
    $_SESSION = array();
    session_destroy();
}

?>