<?php

session_start();

$username = $_POST[ 'username' ];
$psw = $_POST[ 'psw' ];

if ( isset( $_COOKIE[ 'sessionId' ] ) ) {
    validateLogin();
} else {
    validateUser( $username, $user, $pas, $psw );
}

function validateLogin() {
    header('location:../panel.php');
}

function validateUser( $username, $user, $pas, $psw ) {
    include('./users.php');

    $num = array_search($username, array_column($users, 'user'));

    $count = 0;

    if ($username === $users[$num]['user']) {
        $count++;
    } else {
        header( "location: ../index.php?err=1&msg=User doesn't exist." );
    }

    if ($psw === $users[$num]['pass']) {
        $count++;
    } else {
        header( "location: ../index.php?err=1&msg=Password don't match." );
    }

    if ( $count === 2 ) {
        $_SESSION[ 'logged' ] = $username;

        setcookie('sessionId', $_COOKIE[ 'PHPSESSID' ], time()+60*60*24*30, "/");

        header('location:../panel.php');
    }
}