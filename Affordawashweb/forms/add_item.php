<?php
include '../layout/header.php';
?>


<div class="panel">
    <h3 class="add">ADD ITEM</h3>

    <form class="add_form" action="" method="POST">
        <input class="input" type="text" name="item_name" placeholder="Item Name" required="required"><br>
        <input class="input" type="number" name="stock" placeholder="Stock Quantity" required="required"><br>
        <input class="input" type="number" name="cost" placeholder="Cost" required="required"><br>
        <input class="input" type="number" name="lowest" placeholder="Lowest Price" required="required"><br>
        <input class="input" type="number" name="selling" placeholder="Selling Price" required="required"><br>
        <input onclick="clickRed(this)" formaction="../manager_view.php" class="send input" type="submit" value="ADD ITEM">
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

    .add_form {
        display: flex;
        flex-direction: column;
    }
</style>