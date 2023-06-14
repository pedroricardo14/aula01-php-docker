<html>
    <head>
        <title>PHP test</title>
    </head>
    <body>
        <?php 
        $cupons['NIVER10'] = 10;
        $cupons['PROMO15'] = 15;
        $desconto = 0;
        if(isset($_GET['cupom'])){
            $desconto = $cupons[$_GET['cupom']];
        }
        $preco = 200;
        ?>
        <h1><a href="loja.php">
        <img src="https://icons.iconarchive.com/icons/blackvariant/button-ui-system-folders-alt/32/home-icon.png"></a>Shopping Virtual</h1>
        <img src="https://s2.glbimg.com/ppNkzAMfS2rLyYwWa8ORyNm2ovU=/0x0:695x463/984x0/smart/filters:strip_icc()/i.s3.glbimg.com/v1/AUTH_08fbf48bc0524877943fe86e43087e7a/internal_photos/bs/2021/p/b/AunsLbRASXhHCFPTMeaQ/2015-08-04-led.jpg" />
        <h3>Preço: R$ <?php echo (($preco * (100 - $desconto)/ 100)); ?>
    </body>
</html>