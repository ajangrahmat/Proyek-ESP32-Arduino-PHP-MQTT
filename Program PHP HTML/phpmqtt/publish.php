<?php
require "library/phpMQTT.php";
if (isset($_GET['topic'])) {

    $mqtt = new Bluerhinos\phpMQTT("broker.emqx.io", 1883, "PHP MQTT Publisher");

    if ($mqtt->connect()) {
        $mqtt->publish($_GET['topic'], $_GET['pesan'], 2);
        $mqtt->close();
        header('Location: index.php');
    }
}