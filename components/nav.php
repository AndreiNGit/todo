<nav>
    <p>Andrei Nicusor</p>
    <div>Hamburger menu</div>
    <ul>
        <?php
        if(!isset($_SESSION["username"]))
        {
            ?>
            <li><a href="">Login</a></li>
            <li><a href="">Register</a></li>
            <?php
        }
        else{
            ?>
            <li><a href="">Logout</a></li>
            <?php 
        } ?>
    </ul>
</nav>