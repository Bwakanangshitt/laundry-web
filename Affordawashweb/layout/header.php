<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="">
    <script>
        function clickRed(e) {
            e.style.backgroundColor = 'red';
            console.log('hello')
        }

        window.onload = (event) => {
            console.log("page is fully loaded");
        };
    </script>
    <title>Affordawash: Website</title>
    <style>
        #nav {
            background-color: #0099ff;
            display: flex;
            justify-content: flex-end;
            align-items: center;
            top: 0px;
            left: 0;
            width: 100%;
        }

        .nav input {
            font-size: 9px;
            padding: 9px 15px;
            margin: 8px 5px;
            border-radius: 10px;
            border: 3px solid white;
            background-color: #0099ff;
            color: white;
            font-family: 'Arial Black', sans-serif;
        }

        body {
            background-repeat: no-repeat;
            background-size: cover;
            background-position: top center;
            margin: 0;
        }

        div.panel {
            position: absolute;
            top: 60px;
            bottom: 10px;
            right: 10px;
            max-width: 40%;
            background-color: rgba(0, 153, 255, .1);
            height: auto;
            width: 40%;
            min-width: 400px;
            border: 3px solid #ffffff;
            overflow: scroll;
            backdrop-filter: blur(6px);
        }

        ::placeholder {
            color: white;
        }

        .pointer {
            cursor: pointer;
        }
    </style>
</head>

<body>
    <div id="nav">
        <form class="nav pointer" action="forms/edit_transaction.php" method="post"><input type="submit" value="VIEW CUSTOMER TRANSACTION LIST"></form>
        <form class="nav pointer" action="forms/profile.php" method="post"><input type="submit" value="PROFILE"></form>
        <form class="nav pointer" action="forms/change_pass.php" method="post"><input type="submit" value="CHANGE PASSWORD"></form>
        <form class="nav pointer" action="about.php" method="post"><input type="submit" value="ABOUT US"></form>
        <form class="nav pointer" action="login.php" method="post"><input type="submit" value="LOGOUT"></form>
    </div>