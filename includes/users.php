<?php

function login()
{
    require_once 'connect.php';
    $username = mysqli_real_escape_string($con, $_POST['username']);
    $password = mysqli_real_escape_string($con, $_POST['password']);
    $pass = sha1($password);
    $sql = "SELECT * FROM `users` WHERE `username`='$username' AND `password`='$pass'";
    
    $query = mysqli_query($con, $sql);
    $row = mysqli_num_rows($query);
    if ($row == 0) {
        echo "<b style='font-size:12px;'>Wrong Username/Password Combination</b>";
    } elseif ($row == 1) {
        $fetch = mysqli_fetch_array($query);
        $type = $fetch['type'];
        $name = $fetch['username'];
        if ($type == "Admin") {
            @session_start();
            $_SESSION['type'] = $type;
            $_SESSION['admin'] = $name;
            header("Location: admin/");
        } elseif ($type == "Production") {
            @session_start();
            $_SESSION['type'] = $type;
            $_SESSION['production'] = $name;
            header("Location: user/");
        } else {
            echo "<b>Error</b>";
        }
    } else {
        echo "<b>Error</b>";
    }
}

function logout()
{
    @session_start();
    session_destroy();
    header("Location: ./index.php");
}

function admindetails()
{
    include 'connect.php';
    @session_start();
    $type = $_SESSION['type'];
    $username = $_SESSION['admin'];
    $sql = "SELECT * FROM `users` WHERE `username`='$username' AND `type`='$type'";
     $query = mysqli_query($con, $sql);
    
    while ($row = mysqli_fetch_array($query)) {
        echo "Welcome, <i>" . $row['fname'] . " " . $row['sname'] . "</i> (<a href='../logout.php'>Logout</a>)";
    }
}

function userdetails()
{
	include 'connect.php';
    @session_start();
    $type = $_SESSION['type'];
    $username = $_SESSION['production'];
    $sql = "SELECT * FROM `users` WHERE `username`='$username' AND `type`='$type'";
    $query = mysqli_query($con, $sql);
    while ($row = mysqli_fetch_array($query)) {
        echo "Welcome, <i>" . $row['fname'] . " " . $row['sname'] . "</i> (<a href='../logout.php'>Logout</a>)";
    }
}