<?php

require_once (__DIR__ . '/data.php');
require (__DIR__ . '/header.php');

?>

    <body>

        <section>
            <article class="container">
                <?php
                    foreach ($teams as $team) {
                        if ($team['continue']==true) {?>
                        <a href="<?php echo $team['page']; ?>" target="_blank" class="card">
                        
                        <?php }
                        if ($team['continue']==false) {
                        ?>
                        <a class="cardgone">
                        <?php }

                        ?>
                        <h2><?php echo $team['name']?></h2>
                        <h4><?php echo $team['city']?></h4>
                        <img src="<?php echo $team['logo']; ?>"alt="logo">
                        <h3 class="position"><?php echo $team['league-position']?></h3>

                        <?php ; }
                    

                    
                ?>
            </article>
        </section>

    </body>

</html>