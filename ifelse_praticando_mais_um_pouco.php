<html>
    <head>
        <meta charset="utf-8"/>
        <title>E-Commerce</title>
        <link rel="stylesheet" href="css/style.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Nerko+One&display=swap" rel="stylesheet">
    </head>
    <body>

        <?php 
        
        $usuario_possui_cartao_loja = true;
        $valor_compra = 225;

        $valor_frete = 50;
        $recebeu_desconto_frete = false;

        if($usuario_possui_cartao_loja == true || $valor_compra >= 100) {
            $valor_frete = 0;
            $recebeu_desconto_frete = true;
        } 
        ?>

        <div>
            <div>
                <h1>Detalhes do Pedido</h1>
            </div>
             
        <p>Possui cartão da loja?
            <?php 
            if($usuario_possui_cartao_loja) {
                echo 'SIM';
            } else {
                echo 'NÃO';
            }
            ?>
        </p>

        <p>Valor da compra: <?= $valor_compra ?></p>
        </div>
       
            
        
            <div>
                 <p>Recebeu desconto no frete?
            <?php
            if($recebeu_desconto_frete) {
                echo 'SIM';
            } else {
                echo 'NÃO';
            }
            ?>
        </p>

        <p>Valor da Frete: <?= $valor_frete ?></p>
    </body>
            </div>
       
</html>