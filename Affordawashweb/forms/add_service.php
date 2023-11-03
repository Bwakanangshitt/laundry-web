<?php
include '../layout/header.php';
?>

<div class="panel">
    <h3 class="add">ADD SERVICE</h3>

    <form class="add_form" action="" method="POST"><br>
        <input class="input" type="text" name="service_title" placeholder="Service name" required="required"><br>
        <div class="check"><span>WASHING</span><input class="cbox" type="checkbox" name="wash" value="true">
            <input class="input" type="number" name="wash_price" placeholder="Washing Price">
        </div><br>
        <div class="check"><span>DRYING</span><input class="cbox" type="checkbox" name="dry" value="true">
            <input class="input" type="number" name="dry_price" placeholder="Drying Price">
        </div> <br>
        <input onclick="clickRed(this)" formaction="../manager_view.php"  class="send input" type="submit" value="ADD SERVICE">
    </form>
</div>

<style>
     body {
        background-image: url("../Login.jpg");
    }

    .add {
        margin-top: 50px;
        text-align: center;
        font-family: Verdana, Geneva, Tahoma, sans-serif;
        color: white;
    }

    .input {
        border-radius: 10px;
        border: 3px solid white;
        background: transparent;
        padding: 15px 10px;
        width: 50%;
        margin: auto;
        left: 0px;
        right: 0px;
        color: white;
    }

    .send {
        font-weight: bolds;
        font-family: 'Arial Black', sans-serif;
        background-color: #0099ff;
        border-color: #0099ff;
        cursor: pointer;
    }

    .check {
        width: 300px;
        display: flex;

    }

    .check span {
        width: 50px;
        font-family: 'Arial Black', sans-serif;
        color: white;
        font-size: 12px;
    }

    .add_form {
        display: flex;
        flex-direction: column;
        align-items: center;

    }

    .cbox {
        width: 17px;
        height: 17px;
        margin-top: 20px;
    }
</style>