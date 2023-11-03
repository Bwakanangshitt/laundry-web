<?php
include '../layout/header.php';
?>

<div class="panel">
    <h3 class="add">EMPLOYEE LIST</h3>
    <form action="">
    <input onclick="clickRed(this)" formaction="../manager_view.php" class="send input" type="submit" value="ADD EMPLOYEE">
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

    .employee_record {
        width: 90%;
        background: #0099ff;
        margin: 20px;
        border-radius: 10px;
        border: 3px solid white;
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

    .ename {
        color: white;
        font-family: 'Arial', sans-serif;
        margin-left: 10px;
        margin-top: 5px;
        margin-bottom: 0px;
    }

    .uname {
        margin-top: 3px;
        margin-left: 10px;
        font-style: italic;
        font-family: Arial, Helvetica, sans-serif;
        color: white;
        margin-bottom: 5px;
    }

    .salary {
        margin-left: 10px;
        margin-top: 30px;
        color: white;
        font-family: Arial, Helvetica, sans-serif;
        margin-bottom: 10px;
    }

    .served {
        margin-left: 10px;
        color: white;
        font-family: Arial, Helvetica, sans-serif;
        margin-bottom: 10px;
    }

    .delete_data {
        background-color: transparent;
        border-radius: 10px;
        color: red;
        border-color: red;
        padding: 10px;
        margin-bottom: 10px;
        margin-right: 20px;
    }

    .update_data {
        background-color: transparent;
        border-radius: 10px;
        color: white;
        border-color: white;
        padding: 10px;
        margin-left: 20px;
        margin-bottom: 10px;
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
</style>