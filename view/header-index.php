<header>
    <nav>
        <?php
        if(isset($_SESSION['user'])){?>
            <ul>
        
    
                <a href="view/puissance4.php"><li>Puissance 4</li></a>
    
                <a href="view/classement.php"><li>Classement</li></a>
        
                <a href="view/disconnect-index.php"><li>Deconnexion</li></a>
        
            </ul>
        <?php } ?>
    </nav>
</header>
<link rel="stylesheet" type="text/css" href="public/css/header.css">