<?php
require_once("autoload.php");
$account1 = new \PSN\Auth\Auth("tragicytt@gmail.com", "Oplader54");
$account2 = new \PSN\Auth\Auth("tragicytt@gmail.com", "Oplader54");
$account3 = new \PSN\Auth\Auth("tragicytt@gmail.com", "Oplader54");
$user = new \PSN\Users\User(${"account" .rand(1,3)}->GetAccessToken());
$message = new \PSN\Message\Messaging(${"account" .rand(1,3)}->GetAccessToken());
/*
$message->Message("Quedent", "Fuck u");
$message->Message("Quedent", "lol");
$message->Message("Quedent", "u suck");
$message->Message("Quedent", "scum");
*/
echo "<h1>Welcome, " . $user->Me()->profile->onlineId . "!</h1>";
?>