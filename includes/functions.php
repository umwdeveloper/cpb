<?php

session_start();

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require dirname(__DIR__) . '/vendor/autoload.php';

include_once __DIR__ . "/../includes/connection.php";

// if (str_contains($_SERVER['PHP_SELF'], "admin")) {
//     include_once "../includes/connection.php";
// } else {
//     include_once dirname(__DIR__) . "/includes/connection.php";
// }

global $pdo;
$conn = $pdo->open();


function redirect($location) {
    echo "<script>window.location.href='" . $location . "'</script>";
}

if (isset($_GET['a']) && $_GET['a'] === 'logout') {
    unset($_SESSION['user']);

    redirect("login.php");
}

function login() {
    global $conn;

    if (isset($_POST['login'])) {
        $email = $_POST['email'];
        $password = $_POST['password'];

        $query = 'SELECT * FROM users WHERE email = ? LIMIT 1';
        $stmt = $conn->prepare($query);
        $stmt->execute([$email]);
        $user = $stmt->fetch();

        //Check if username is correct
        if ($user) {
            // Check if password is correct
            if (password_verify($password, $user->password)) {
                //Storing user in session
                $_SESSION['user'] = $user;
                redirect('index.php');
                return '<p class="alert alert-success mt-2 mb-0 px-2 py-2 text-center">Logged in!</p>';
            } else {
                return "<p class='alert alert-danger mt-2 mb-2 px-2 py-2 text-center'>Username or password is wrong!</p>";
            }
        } else {
            return "<p class='alert alert-danger mt-2 mb-2 px-2 py-2 text-center'>Username or password is wrong!</p>";
        }
    }
}

function findById($table, $id) {
    global $conn;

    $query = "SELECT * FROM {$table} WHERE id = ? LIMIT 1";
    $stmt = $conn->prepare($query);
    $stmt->execute([$id]);
    return $stmt->fetch();
}

function findByQuery($query) {
    global $conn;

    $stmt = $conn->prepare($query);
    $stmt->execute();
    return $stmt->fetch();
}

function findAllByQuery($query) {
    global $conn;

    $stmt = $conn->prepare($query);
    $stmt->execute();
    return $stmt->fetchAll();
}

function findAll($table) {
    global $conn;

    $query = "SELECT * FROM {$table}";
    $stmt = $conn->prepare($query);
    $stmt->execute();
    return $stmt->fetchAll();
}

function valueParams($length) {
    $params = "";
    for ($i = 0; $i < $length; $i++) {
        $params .= "?";
        $params .= $i !== $length - 1 ? "," : "";
    }

    return $params;
}

function insert($table, $data) {
    global $conn;

    $query = "INSERT INTO {$table} (" . implode(',', array_keys($data)) . ") VALUES (" . valueParams(count($data)) . ")";
    $stmt = $conn->prepare($query);
    $stmt->execute(array_values($data));

    return $conn->lastInsertId();
}

function update($table, $data, $idCol, $idColVal) {
    global $conn;

    $properties_pairs = [];
    $properties_values = [];
    foreach ($data as $key => $value) {
        $properties_pairs[] = "{$key}=?";
        $properties_values[] = $value;
    }

    $sql = "UPDATE  " . $table . "  SET ";
    $sql .= implode(", ", $properties_pairs);
    $sql .= " WHERE " . $idCol . " = '" . $idColVal . "'";

    $stmt = $conn->prepare($sql);
    if ($stmt->execute($properties_values)) {
        return true;
    } else {
        return false;
    }
}

function destroy($table, $idCol, $idVal) {
    global $conn;

    $query = "DELETE FROM {$table} WHERE {$idCol} = '{$idVal}'";
    $stmt = $conn->prepare($query);
    if ($stmt->execute())
        return true;
    else
        return false;
}
