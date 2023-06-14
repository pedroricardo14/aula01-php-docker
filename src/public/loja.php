<html>
    <head>
        <title>PHP Test</title>
    </head>
    <body>
        <?php 

            $cupom = '';
            if (isset($_GET['cupom'])) $cupom = trim($_GET['cupom']);
            $cupons_validos = array('NIVER10', 'PROMO15');
            $cupomAceito = in_array($cupom,$cupons_validos);
        ?>
    <h1><a href="index.php">
    </a>Shopping Virtual</h1>
    <ul>
        <li><a href="p1.php<?php echo ($cupomAceito)?'?cupom='.$cupom:''; ?>">Produto 1</a></li>
        <li><a href="p2.php<?php echo ($cupomAceito)?'?cupom='.$cupom:''; ?>">Produto 2</a></li>
    </ul>
    <form action="loja.php" method="GET">
        Cupom de desconto:
        <?php 
            if($cupomAceito){
        ?>
        <strong> <?php echo $cupom; ?> </strong>
        <img src="https://cdn-icons-png.flaticon.com/512/190/190411.png?w=996&t=st=1686747527~exp=1686748127~hmac=06057c9d130d2868549d0c7ce9dc4400ad0e5b15010686b474558f8327df442e" />
        <?php } else{ ?>
            <input type="text" name="cupom" /><input type="submit" value="Enviar" />
        <?php } ?>
    </form>
    </body>
    <!--https://icons.iconarchive.com/icons/custom-icon-design/flatastic-9/16/Accept-icon.png-->
</html>
