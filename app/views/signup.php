<div id="container">
<div id="banner">
    <div id="logo"><img src="<?php echo WEBPATH.'img/logo.png'; ?>" alt="logo"></div>
    <div id="menu">
        <ul>
            <li><a href="index.php?p=login">login</a></li>
            <li><a href="index.php?p=signup">signup</a></li>
        </ul>
    </div>
</div>
<div id="content">
    <form action="index.php?p=user&p2=add" method="POST">
     <fieldset>
            <p><label>Username:</label><input type="text" name="username" id="username" class="text-medium" /></p>
            <p><label>Password:</label><input type="password" name="password" id="password" class="text-medium" /></p>
            <p><label>Email:</label><input type="email" name="email" id="email" class="text-medium" /></p>
            <input type="submit" value="Signup" />
        </fieldset>
</form>
</div>
</div>
</body>
</html>