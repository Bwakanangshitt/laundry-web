<?php include '../layout/header.php' ?>

<div class="panel">
    <h3 class="add">ADD EMPLOYEE</h3>
    <form class="add_form" method="POST" action="">
        <input class="input" type="text" name="employee_name" placeholder="Enter Employee Name" required="required"><br>
        <input class="input" type="text" name="employee_username" placeholder="Enter Employee Username" required="required"><br>
        <input class="input" type="password" name="employee_password" placeholder="Enter Employee Password" required="required"><br>
        <input class="input" type="number" name="employee_salary" placeholder="Enter Employee Salary" required="required"><br>
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