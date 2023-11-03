<div class="about_panel">
    <div id="wrapper">

        <h1 class="title">ABOUT US</h1>
        <form action="" method="post">
            <h4 class="names">Elmar Waniwan</h4>
            <h4 class="names">Jehan Biolata</h4>
            <h4 class="names">Christian Carpacio</h4>
            <h4 class="names">Christoper Carpacio</h4>
           
            <input id="btnOK" formaction="manager_view.php" type="submit" value="OK">
        </form>
    </div>
</div>
<style>
    body {
        background-image: url("Login.jpg");
    }

    .about_panel {
        display: flex;
        justify-content: center;
        align-items: center;

    }

    #wrapper {
        margin-top: 50px;
        text-align: center;
        background-color: rgba(0, 153, 255, .2);
        backdrop-filter: blur(6px);
        border: 2px solid #0000ff;
        padding: 50px 90px;
        border-radius: 10px;
    }

    .title {
        font-family: Verdana, Geneva, Tahoma, sans-serif;
        font-size: 30px;
        margin-bottom: 50px;
        color: white;
        text-shadow: 3px 3px 10px #0033ff;

    }

    .names {
        color: white;
        font-family: Verdana, Geneva, Tahoma, sans-serif;
    }

    #btnOK {
        font-family: 'Arial black', sans-serif;
        border: 3px solid #0099ff;
        background-color: transparent;
        border-radius: 10px;
        width: 100px;
        color: white;

    }
</style>