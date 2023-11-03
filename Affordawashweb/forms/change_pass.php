<?php
include '../layout/header.php';
?>

<div class="panel">
    <h3 class="add">CHANGE PASSWORD</h3>
    <form class="add_form" method="POST">
        <input class="input" type="password" name="oldpass" placeholder="Enter Old Password" required="required">
        <input class="input" type="password" name="newpass" placeholder="Enter New Password" required="required">
        <input class="input" type="password" name="confirmpass" placeholder="Confirm New Password" required="required">
        <input class="send input" type="submit" value="SAVE" formaction="">
        <input class="send input" type="submit" value="BACK" formaction="../manager_view.php">
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

    .add_form {
        display: flex;
        flex-direction: column;
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
        margin-top: 20px;
    }

    .send {
        font-weight: bold;
        font-family: 'Arial Black', sans-serif;
        background-color: #0099ff;
        border-color: #0099ff;
        cursor: pointer;
        width: 200px;
    }
</style>