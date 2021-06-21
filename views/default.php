<html>
    <head>
        
    </head>
    <body>
        <h1> FRAMEWORK MVC PHP beWeb </h1>
        <form action="/commande/etape2">
            <input type="text" value="<?= $defaultUser->getNom() ?>">
            <input class="hidden" type="text" value="<?= $commande->getNumero() ?>">
            <label><?= $commande->getNumero() ?></label>
            <?php
                $commande->getListePizza();
                foreach ($commande->getListePizza() as $pizzaCommande) {
                    
                }
                        
            ?>
        </form>
    </body>
</html>
