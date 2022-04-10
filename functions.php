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
    
    return $row;//
}
function getCurrentUserInfo()//pobieranie informacji o aktualnie zalogowanym użytkowniku
{
    if(!isUserLoggedIn())
    {
        return -1;
    }
    global $mysqli;
    $stmt = $mysqli->prepare("SELECT * FROM users WHERE id = ? LIMIT 1");
    $stmt->bind_param("i", $_SESSION['userId']);
    
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
    $ok=false;
    if(getUserIdByMail($login) == -1)
        $ok = false;
    else
    {
        $user = getUserInfo(getUserIdByMail($login));

        if(password_verify($password, $user['password']))
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

/*
function getPageTitle($url) {
    $dom = new DOMDocument();

    if($dom->loadHTMLFile($url)) {
    
    $list = $dom->getElementsByTagName("title");
    if ($list->length > 0) {
    return $list->item(0)->textContent;
    }
    }
}
*/

function addViewCount($name, $href)
{
    if($name == "stats.php") return;

    global $mysqli;
    $stmt = $mysqli->prepare("SELECT * FROM viewStats WHERE href = ? LIMIT 1");
    $stmt->bind_param("s", $href);
    $stmt->execute();
    $result = $stmt->get_result();
    $row = $result->fetch_assoc();
    
    if($result->num_rows == 0)// brak takiego rekordu, musimy go stworzyć
    {
        $sql = "INSERT INTO `viewstats` (`href`, `name`, `views`) VALUES ('$href', '$name', '1');";
        $stmt = $mysqli->prepare($sql);
        $stmt->execute();
    }
    else
    {
        $sql = "UPDATE `viewstats` SET views = views + 1 WHERE `viewstats`.`href` = '$href';";
        $stmt = $mysqli->prepare($sql);
        $stmt->execute();
    }
}

function addSearchCount($q)
{
    if($q == "") return;

    global $mysqli;
    $stmt = $mysqli->prepare("SELECT * FROM searchstats WHERE q = ? LIMIT 1");
    $stmt->bind_param("s", $q);
    $stmt->execute();
    $result = $stmt->get_result();
    $row = $result->fetch_assoc();
    
    if($result->num_rows == 0)// brak takiego rekordu, musimy go stworzyć
    {
        $sql = "INSERT INTO `searchstats` (`q`, `count`) VALUES ('$q', '1');";
        $stmt = $mysqli->prepare($sql);
        $stmt->execute();
    }
    else
    {
        $sql = "UPDATE `searchstats` SET count = count + 1 WHERE `searchstats`.`q` = '$q';";
        $stmt = $mysqli->prepare($sql);
        $stmt->execute();
    }
}

function addArticle($title, $content, $date = false)
{
    global $mysqli;
    if($date == false)
    {
        $stmt = $mysqli->prepare("INSERT INTO `articles` (`title`, `content`) VALUES (?, ?);");
    }
    else
    {
        $stmt = $mysqli->prepare("INSERT INTO `articles` (`title`, `content`, `date`) VALUES (?, ?, '$date');");
    }
    $stmt->bind_param("ss", $title, $content);
    $stmt->execute();
}

function getAllArticles()
{
    global $mysqli;
    $val = array();
    $stmt = $mysqli->prepare("SELECT * FROM articles;");
    $stmt->execute();
    $result = $stmt->get_result();
    
    while($row = $result->fetch_assoc())
    {
        array_push($val, $row);
    }
    
    if($result->num_rows == 0)
    {
        return -1;
    }
    return $val;
}

function getCategories()
{
    global $mysqli;
    $val = array();
    $stmt = $mysqli->prepare("SELECT * FROM category ORDER BY name;");
    $stmt->execute();
    $result = $stmt->get_result();
    
    while($row = $result->fetch_assoc())
    {
        array_push($val, $row);
    }
    
    if($result->num_rows == 0)
    {
        return -1;
    }
    return $val;
}

function getSearchCount($limit)
{
    global $mysqli;
    $val = array();
    $stmt = $mysqli->prepare("SELECT * FROM searchstats ORDER BY count DESC LIMIT $limit");
    $stmt->execute();
    $result = $stmt->get_result();
    
    while($row = $result->fetch_assoc())
    {
        array_push($val, $row);
    }
    
    if($result->num_rows == 0)
    {
        return -1;
    }
    return $val;
}

function getViewCount()
{
    global $mysqli;
    $views = array();
    $stmt = $mysqli->prepare("SELECT * FROM `viewstats` ORDER BY views DESC;");
    
    $stmt->execute();
    $result = $stmt->get_result();
    while($row = $result->fetch_assoc())
    {
        array_push($views, $row);
    }
    
    if($result->num_rows == 0)
    {
        return -1;
    }
    return $views;
}
function getAllViewCount()
{
    global $mysqli;
    $views = array();
    $stmt = $mysqli->prepare("SELECT SUM(views) from viewstats;");
    
    $stmt->execute();
    $result = $stmt->get_result();
    $row = $result->fetch_row();
    
    if($result->num_rows == 0)
    {
        return -1;
    }

    return $row[0];
}
?>