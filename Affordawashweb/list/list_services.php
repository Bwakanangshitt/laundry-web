<?php
include '../layout/header.php';
?>


<div class="panel">
    <h3 class="add">SERVICES LIST</h3>
    <form action="">
    <input onclick="clickRed(this)" formaction="../manager_view.php" class="send input" type="submit" value="BACK">
    </form>

 

</div>


<style>
     body {
        background-image: url("../Login.jpg");
    }

    .update_form {
        flex-direction: column;
        align-items: flex-end;
        height: 100%;
        width: 100%;
    }

    .delete_form {
        width: fit-content;
    }

    .add {
        margin-top: 50px;
        text-align: center;
        font-family: Verdana, Geneva, Tahoma, sans-serif;
        color: white;
    }

    .sname {
        color: white;
        font-family: 'Arial', sans-serif;
        margin-left: 10px;
        margin-top: 5px;
        margin-bottom: 0px;
    }

    .servicerecord {
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

    .check {
        width: 300px;
        display: flex;
    }

    .check span {
        width: 50px;
        font-family: 'Arial Black', sans-serif;
        color: white;
        font-size: 12px;
        margin-left: 70px;
    }

    .input {
        border-radius: 10px;
        border: 3px solid white;
        background: transparent;
        padding: 15px 10px;
        width: 50%;
        margin: 10px auto;
        left: 0px;
        right: 0px;
        color: white;
    }

    .cbox {
        width: 17px;
        height: 17px;
        margin-top: 20px;
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
</style>