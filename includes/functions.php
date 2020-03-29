<?php

function getCards() {
    global $conn;

    $sql = "SELECT * FROM card";
    $result = mysqli_query($conn, $sql);

    $cards = mysqli_fetch_all($result, MYSQLI_ASSOC);

    return $cards;
}

function getCard($card_id) {
    global $conn;

    $sql = "SELECT * FROM card
            WHERE id = '$card_id'";
    $result = mysqli_query($conn, $sql);
    $card = mysqli_fetch_assoc($result);

    return $card;
}

?>