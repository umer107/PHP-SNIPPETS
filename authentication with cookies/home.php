<?php
    if(isset($_POST["logout"])){
        setcookie("Email", "", false, "/");
        setcookie("Password", "", false, "/");
        header("LOcation: http://localhost/authentication%20with%20cookies/login.php");
    }
?>
<!DOCYPTE>
<html>
    <head><title>Home</title></head>
    <body>
        <h1>Welcome</h1><br><br>
        <form action="home.php" method="POST">
            <input type="submit" name="logout" value="Log Out"></input> 
        </form>
    </body>
</html>
