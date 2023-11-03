<?php
include 'layout/header.php';
?>

<div id="employee">
    <h1 class="employee">Employee
    </h1>
    <p class="affordawash">AFFORDAWASH
    </p>

    <form action="" method="post">
        <input type="text" placeholder="Enter Customer name" name="customer_name" required="required" class="textbox">
        <input type="submit" value="Enter a new Customer's Name" id="newcustomer">
    </form>
</div>
<style>
    body {
        background-image: url("Login.jpg");
    }

    #employee {
        width: 60%;
        min-width: 500;
        padding: 10px;
    }

    .textbox {
        font-family: 'Courier New', Courier, monospace;
        font-size: 13px;
        padding: 13px;
        width: 300px;
        border: 3px solid white;
        border-radius: 10px;
        background-color: transparent;
        margin: 10px;
        color: white;
    }

    .employee {
        text-align: left;
        margin-left: 5px;
        font-weight: bold;
        font-family: Verdana, Geneva, Tahoma, sans-serif;
        font-weight: bold;
        color: white;
        text-shadow: 2px 2px 4px #0099ff;
    }

    .affordawash {
        text-align: left;
        margin-left: 5px;
        font-size: 100%;
        font-family: Verdana, Geneva, Tahoma, sans-serif;
        color: white;
        text-shadow: 2px 2px 4px #0099ff;
    }


    #newcustomer {
        margin-top: 8px;
        cursor: pointer;
        border-color: #ffffff;
        margin-bottom: 9px;
        border-radius: 10px;
        font-weight: bold;
        color: #ffffff;
        border-width: 3px;
        padding: 10px;
        margin-left: 8px;
        margin-bottom: 5px;
        background-color: #0099ff;
    }
</style>