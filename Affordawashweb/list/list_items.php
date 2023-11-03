<?php
include '../layout/header.php';
?>

<div class="panel">
    <h3 class="add">ITEM LIST</h3>
    <form action="">
    <input onclick="clickRed(this)" formaction="../manager_view.php" class="send input" type="submit" value="BACK">
    </form>
 
</div>

<style>
     body {
        background-image: url("../Login.jpg");
    }

    .text {
        font-family: Arial, Helvetica, sans-serif;
        color: white;
    }

    .add {
        margin-top: 50px;
        text-align: center;
        font-family: Verdana, Geneva, Tahoma, sans-serif;
        color: white;
    }

    .text_white {
        color: white;
        display: flex;
        flex-direction: column;
        align-items: flex-end;
    }

    .item_record {
        padding: 10px;
        width: 90%;
        background: #0099ff;
        margin: 20px;
        border-radius: 10px;
        border: 3px solid white;
        box-sizing: border-box;
        display: flex;
        flex-direction: row;
        align-items: flex-end;
    }

    .update_form {
        flex-direction: column;
        align-items: flex-end;
        height: 100%;
        width: 100%;
    }

    .delete_form {
        width: fit-content;
        display: flex;
        align-items: flex-end;
    }

    .iname {
        color: white;
        font-family: 'Arial', sans-serif;
        margin-left: 10px;
        margin-top: 5px;
        margin-bottom: 0px;
    }

    .delete_data {
        background-color: transparent;
        border-radius: 10px;
        color: red;
        border-color: red;
        padding: 10px;
        margin-bottom: 5px;
        margin-right: 20px;
    }

    .update_data {
        background-color: transparent;
        border-radius: 10px;
        color: white;
        border-color: white;
        padding: 10px;
        margin-left: 20px;
        margin-bottom: 5px;
    }

    .input {
        border-radius: 10px;
        border: 3px solid white;
        background: transparent;
        padding: 15px 10px;
        width: 150px;
        margin: auto;
        left: 0px;
        right: 0px;
        color: white;
        margin: 5px;
    }
</style>