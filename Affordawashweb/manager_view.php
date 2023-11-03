<?php
include 'layout/header.php';
?>

<div id="manager">
    <div id="managersname">
        <h1></h1>
        <p>AFFORDAWASH </p>
    </div>
    <div id="managerinfo">
        <p>Employees </p>
        <p>Items </p>
        <p>Services </p>
    </div>
    <div id="manager_buttons">
        <form method="POST" action="forms/add_employee.php">
            <input class="pointer" type="submit" value="ADD EMPLOYEE">
        </form>
        <form method="POST" action="forms/add_item.php">
            <input class="pointer" type="submit" value="ADD ITEM">
        </form>
        <form method="POST" action="forms/add_service.php">
            <input class="pointer" type="submit" value="ADD SERVICE">
        </form>
        <form method="POST" action="list/list_employees.php">
            <input class="pointer" type="submit" value="VIEW EMPLOYEES">
        </form>
        <form method="POST" action="list/list_items.php">
            <input class="pointer" type="submit" value="VIEW ITEMS">
        </form>
        <form method="POST" action="list/list_services.php">
            <input class="pointer" type="submit" value="VIEW SERVICES">
        </form>
    </div>
</div>

<style>
    body {
        background-image: url("Login.jpg");
    }

    #manager {
        width: 60%;
        min-width: 500;
        padding: 10px;
    }

    #manager h1 {
        margin-top: 10px;
        font-size: 40px;
        color: white;
        text-shadow: 3px 3px 10px #0099ff;
    }

    #manager p {
        color: white;
        text-shadow: 3px 3px 10px #0099ff;
    }

    #manager_buttons {
        max-width: 600px;
        display: flex;
        flex-wrap: wrap;
        margin-right: auto;
        margin-left: auto;
    }

    #manager_buttons form input {
        height: 80px;
        width: 160px;
        color: white;
        background-color: #0099ff;
        border: 3px solid white;
        border-radius: 10px;
        margin: 10px;
        font-family: 'Arial Black', sans-serif;
    }

    #managerinfo {
        max-width: 600px;
        display: flex;
        flex-wrap: wrap;
        margin-bottom: 20px;
        margin-top: 50px;
        margin-right: auto;
        margin-left: auto;
        font-family: Verdana, Geneva, Tahoma, sans-serif;
    }

    #managerinfo p {
        width: 160px;
        padding: 10px 0px;
        background-color: #0099ff;
        margin: 10px;
        text-align: center;
        border-radius: 50px;
    }

    #managersname {
        font-family: Verdana, Geneva, Tahoma, sans-serif;
        margin-left: 30px;
    }
</style>

<script>

</script>

<?php
include 'layout/footer.php';
?>