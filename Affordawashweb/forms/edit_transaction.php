<?php
include '../layout/header.php';
?>


<div class="panel">
    <h3 class="add">CUSTOMER TRANSACTION</h3>

    <form autocomplete="off" action="" method="POST">

        <h3 class="service">Services</h3>
        
          
        <h3 class="service">Items</h3>
        <input formaction="" type="submit" value="SAVE" id="saveback">
        <input formaction="../manager_view.php" type="submit" value="BACK" id="saveback2">
</form>
</div>


<style>
    .ID {
        width: 30px;
        border-radius: 10px;
        margin-left: 10px;
        padding: 10px;
    }

    .customername {
        text-align: left;
        margin-left: 23px;
        font-size: 100%;
        font-family: Verdana, Geneva, Tahoma, sans-serif;
        font-weight: bold;
        color: white;

    }

    .service_title {
        margin-right: 10px;
        color: white;
        font-family: Arial, Helvetica, sans-serif;
        font-weight: bold;

    }

    .service {
        text-align: left;
        margin-left: 4%;
        font-family: Verdana, Geneva, Tahoma, sans-serif;
        color: white;
    }

    body {
        background-image: url("../login.jpg");
    }


    #boxform {
        flex-direction: column;
        align-items: flex-end;
        height: 100%;
        width: 100%;
    }


    #employee_record {
        width: 120%;
        background: #0099ff;
        margin: 20px;
        border-radius: 10px;
        border: 3px solid white;
        display: flex;
        flex-direction: row;
        align-items: flex-end;
        flex-direction: column;
        align-items: flex-end;
        height: 100%;
        width: 100%;
    }

    .add {
        margin-top: 50px;
        text-align: center;
        font-family: Verdana, Geneva, Tahoma, sans-serif;
        color: white;
    }

    #cbox {
        width: 20px;
        height: 20px;
        margin-right: 8px;
        padding: 5px;
        margin-top: 10px;
        margin-bottom: 39px;

    }

    #cbox1 {
        width: 17px;
        height: 17px;
        margin-right: 8px;
        padding: 5px;
        margin-top: 10px;



    }

    #cbox2 {
        width: 17px;
        font-size: 17px;
        color: white;
        height: 17px;
        margin-right: 35px;
        margin-top: 20px;
        font-family: Arial, Helvetica, sans-serif;
        margin-bottom: 0%;
        margin-top: 20px;
    }

    #cbox3 {
        border-radius: 10px;
        margin-right: 20px;
        height: 12px;
        width: 45%;
        padding: 10px;
        margin-top: 10px;
        margin-bottom: 35px;
    }

    #services {
        margin-top: 40px;
        width: 80%;
        color: blue;
        background: #0099ff;
        margin: 10px;
        border-radius: 10px;
        border: 3px solid white;
        display: flex;
        flex-direction: row;
        align-items: flex-end;
        padding: 20px;
        margin-bottom: 0px;
    }

    #saveback {
        background-color: transparent;
        border-radius: 10px;
        color: white;
        border-color: white;
        background-color: #0099ff;
        padding: 10px;
        margin-left: 130px;
        margin-bottom: 5px;
        margin-right: 0px;
        margin-top: 10px;
    }

    #saveback2 {
        background-color: transparent;
        border-radius: 10px;
        color: white;
        border-color: white;
        background-color: #0099ff;
        padding: 10px;
        margin-left: 100px;
        margin-bottom: 5px;
        margin-right: 0px;
        margin-top: 10px;
    }

    .span {
        cursor: pointer;
        padding: 10px;
        margin-left: 30px;
        border: 1px solid;
        background-color: solid;
        border-radius: 20px;
        color: white;
        border-color: white;
        background-color: #0099ff;
        font-family: Arial, Helvetica, sans-serif;
        font-weight: bold;

    }

    .span1 {
        margin-left: 20px;
        cursor: pointer;
        font-family: Arial, Helvetica, sans-serif;
        font-weight: bold;
        padding: 10px;
        border: 1px solid;
        background-color: solid;
        border-radius: 30px;
        color: white;
        border-color: white;
        background-color: #0099ff;

    }

    #services_items {
        margin-top: 40px;
        width: 80%;
        color: blue;
        background: #0099ff;
        margin: 10px;
        border-radius: 10px;
        border: 3px solid white;
        display: flex;
        flex-direction: row;
        align-items: flex-end;
        padding: 20px;
        margin-bottom: 20px;
    }
</style>
