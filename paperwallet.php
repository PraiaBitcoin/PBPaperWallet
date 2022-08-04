<?php

//fork do moviecard3 que está na raiz

ini_set('display_errors', 1);

$address_1 = $_REQUEST['address_1']; 
$zpub_1 = $_REQUEST['zpub_1'];
$bip39_1 = $_REQUEST['bip39_1'];

//$address_2 = $_GET['address_2']; 
//$zpub_2 = $_GET['zpub_2'];
//$bip39_2 = $_GET['bip39_2'];

//include "phpqrcode/qrlib.php";   

?>

<!DOCTYPE html>
<html>
<head>
    <style>

@page {
  size: A4 landscape;
}
     
div.editable {
     border: 1px solid #ccc;
    padding: 5px;
}

div { 
    display: inline-block;
}
strong {
  font-weight: bold;
}
body { 
    font-family: Tahoma;
    font-weight: 500;
margin:0px;
}

.output{
        padding: 10px;
        min-height: 50px;
        border: 1px solid #e4e4e4;
    }
    
    @media print {
               input {
                  visibility: hidden;
               }
            }
    </style>

</head>
<body>
<script src="js/jquery.min.js"></script>
<script src="js/jquery.qrcode.min.js"></script>

<script>
    $(document).ready(function(){
        $("#myTextarea").keyup(function(){
            // Getting the current value of textarea
            var currentText = $(this).val();
            
            // Setting the Div content
            $(".output").text(currentText);
        });
    });
    </script>

<div style="border: 0px solid #999; height:40px; width: 1540px;">
<form action="paperwallet.php" method="post">
<div style="width: 570px; float:left">mnemonic</div>
<div style="width: 500px; float:left">zpub</div>
<div style="width: 320px; float:left">address</div>
<input name="bip39_1" value="<?php echo $bip39_1; ?>" style="width: 570px; float:left" autocomplete="off"/>    
<input name="zpub_1" value="<?php echo $zpub_1; ?>" style="width: 500px; float:left" autocomplete="off"/>
<input name="address_1" value="<?php echo $address_1; ?>" style="width: 320px; float:left" autocomplete="off"/>
    <input type="submit" value="GENERATE" style="width: 80px; float:left" >
</form>
</div>
<div style="border: 0px solid #999;">
<div style="margin:0px; 
  width: 1480px;
  height: 462px; 
  border:1px; background-image: url('img/carteira_teste.jpg'); 
  background-repeat: no-repeat;  
  background-size: contain;  
  " >


    <iframe src="https://produlz.com.br/apps/paperwallet/qrcode.php?data=<?php echo $address_1; ?>&level=H&imageWidth=160" 
        style="width: 225px; height: 225px; position: absolute;  top: 142px;  left: 5px; border:0px; margin:0px "></iframe>

        <iframe src="https://produlz.com.br/apps/paperwallet/qrcode.php?data=<?php echo $zpub_1; ?>&level=M&imageWidth=220" 
        style="width: 230px; height: 230px; position: absolute;  top: 133px;  left: 888px; border:0px; margin:0px"></iframe>

        <iframe src="https://produlz.com.br/apps/paperwallet/qrcode.php?data=<?php echo $bip39_1; ?>&level=Q&imageWidth=220" 
        style="width: 230px; height: 230px; position: absolute;  top: 133px;  left: 1202px; border:0px; margin:0px "></iframe>



    <div contenteditable="true" style="position: absolute;  top: 410px;  left: 55px; font-size: 15px; font-weight: 700;">
    <?php echo $address_1; ?>
    </div>

    <div contenteditable="true" style="position: absolute; 
    top: 110px;
    left: 890px;
    font-size: 9px;">
    <?php echo $zpub_1; ?>
    </div>

    <div contenteditable="true" style="position: absolute;  
    top: 378px;  
    left: 880px;   font-size: 11px; width: 550px; font-weight: 700;">
    <?php echo $bip39_1; ?></div>
 </div>
 
<div style="clear:both; margin-top:-70px"></div>
<div style="border: 0px solid #999;  width: 1700px; position: relative; ">
    <div style="border: 0px solid #999; width: 730px; padding-left:25px; padding-right:25px; padding-top:0px; float:left; margin-right:10px; height: 615px;">
        <h3>Como usar sua carteira?</h3>
        <p>Primeiro, instale um aplicativo para Android (PlayStore) ou iOS (AppStore) que possa importar suas palavras semente. 
            Recomendamos que use a BlueWallet. Baixe-o na loja oficial de aplicativos do seu smartphone ou escaneie o qr code abaixo para ser direcionado para loja.</p>

        <div style="border: 0px solid #999; width: 48%; float:left; text-align:center; margin-bottom:35px">
        <img src="img/android_bluewallet_qr.png" style="width: 90px; height: 90px"><br>
        BlueWallet para iOS
        </div>

        <div style="border: 0px solid #999; width: 48%; float:left; text-align:center; margin-bottom:35px">
        <img src="img/android_ios_qr.png" style="width: 90px; height: 90px; "><br>
        BlueWallet para Android
    </div>

    <h3>Mude o idioma da Bluewallet para Português</h3>
<p>Após instalar a BlueWallet no seu smartphone, abra o aplicativo e no canto superior direito da tela clique em “...” , depois em “Language”, role a lista e altere o idioma para Português (BR)</p>

<div style="border: 0px solid #333; width: 190px; float:left; text-align:center; margin-left:5px">
<img src="img/blue_01.png" style="width: 100%; ">
</div>
<div style="border: 1px solid #333; width: 190px; float:left; text-align:center; margin-left:5px">
<img src="img/blue_02.png" style="width: 100%; ">
</div>
<div style="border: 1px solid #333; width: 190px; float:left; text-align:center; margin-left:5px">
<img src="img/blue_03.png" style="width: 100%; ">
</div>


</div>

<div style="border: 0px solid #999;  width: 730px; float:left; padding-left:25px; padding-right:25px;  height: 615px;" >
<h3>Importe sua carteira na BlueWallet</h3>
<p>Clique em “<b>Adicionar Carteira</b>”, “<b>Importar Carteira</b>”, digite as palavras semente e clique em importar, ou aperte em “<b>Ler código ou importar arquivo</b>” aguarde a importação.<br></p>

<div style="clear:both"></div>
<div style="border: 0px solid #333; width: 110px; float:left; text-align:center; margin-left:10px;">
<img src="img/blue_04.png" style="width: 100%; ">
</div>
<div style="border: 1px solid #333; width: 105px; float:left; text-align:center; margin-left:10px">
<img src="img/blue_05.png" style="width: 100%; ">
</div>
<div style="border: 1px solid #333; width: 105px; float:left; text-align:center; margin-left:10px">
<img src="img/blue_06.png" style="width: 100%; ">
</div>
<div style="border: 1px solid #333; width: 105px; float:left; text-align:center; margin-left:10px">
<img src="img/blue_07.png" style="width: 100%; ">
</div>
<div style="border: 1px solid #333; width: 105px; float:left; text-align:center; margin-left:10px">
<img src="img/blue_08.png" style="width: 100%; ">
</div>
<div style="border: 1px solid #333; width: 105px; float:left; text-align:center; margin-left:10px">
<img src="img/blue_09.png" style="width: 100%; ">
</div>
<div style="clear:both"></div>
<div style="margin-top:25px"> Pronto! Sua carteira de <b>Bitcoin Segwit</b> está pronta para ser utilizada. <br><br>Acumule SATs e <em>Economize</em>!<br><br></div>


</div>

</div>


<div style="clear:both; margin-top:-50px"></div>


<div style="border: 0px solid #999; margin-top:-45px" >
 <div style="border:0px; margin-left:3px; height: 515px; background-image: url('img/fundo_teste.jpg'); background-repeat: no-repeat;  background-size: contain;  width: 1515px; position:relative"  >
 <div style="border: 0px solid #999; position:absolute; top:110px; width:720px; left:690px; height: 280px; padding:5px">
 <h1 style="margin:0px">Não confie, verifique!</h1>

<div style="float:left; width:200px; text-align: center; margin-top:10px;">
<iframe src="https://produlz.com.br/apps/wallet/phpqrcode/index.php?data=<?php echo $address_1; ?>&level=H" 
        style="width: 180px; height: 180px; top: 115px; left: 35px; border:0px; margin-bottom:8 px"></iframe> 
Autenticidade da carteira
</div>


 <div style="float:left; width:250px; text-align: center;">
<iframe src="https://produlz.com.br/apps/wallet/phpqrcode/index.php?data=https://github.com/PraiaBitcoin/PBPaperWallet/&level=H" 
        style="width: 198px; height: 198px;  top: 90px;  left: 28px; border:0px; margin:0px "></iframe> <br>
Código da carteira
</div>



<div style="float:left; width:250px; margin-top:-32px; text-align: center;">
<iframe src="https://produlz.com.br/apps/wallet/phpqrcode/index.php?data=https://mempool.space/pt/address/<?php echo $address_1; ?>&level=H" 
style="width: 230px; height: 230px; top: 40px;  left: 28px; border:0px; margin:0px "></iframe> 
Verificar o saldo na Blockchain
</div>
</div>
</div>
</div>

<div style="clear:both; "></div>
<div style="border: 0px solid #999;  width: 1700px; position: relative; margin-top:30px ">
    <div style="border: 0px solid #999; width: 730px; padding-left:25px; padding-right:25px; padding-top:0px; float:left; margin-right:10px; height: 500px;">
        <h3 style="margin:0px">O que é Bitcoin?</h3>
        <p style="margin:0px; padding-bottom:15px">O Bitcoin é uma forma de dinheiro digital (incensurável e com suprimento limitado) que permite qualquer pessoa conectada à internet receba pagamentos de qualquer pessoa do mundo, sem precisar de um banco ou documentos.</p>

        <h3 style="margin:0px">O Bitcoin e suas frações</h3>
        <p style="margin:0px; padding-bottom:15px">Um bitcoin tem 8 casas decimais. A menor fração do Bitcoin é o Satoshi.  Um bitcoin é composto por 100 milhões de satoshis. 100.000.000 SATs = 1 BTC.</p>

        <h3 style="margin:0px">Quantos Bitcoins existem?</h3>
        <p style="margin:0px; padding-bottom:15px">Assim como um recurso natural como ouro, só existe uma quantia limitada de bitcoin, 21 milhões. Nenhuma pessoa, empresa ou governo pode alterar esse limite. Isso torna o Bitcoin valioso para muitas pessoas que desejam economizar dinheiro.</p>

        <h3 style="margin:0px">Como o Bitcoin entra em circulação?</h3>
        <p style="margin:0px; padding-bottom:15px">Novos Bitcoins entram em circulação a cada bloco gerado de 10 minutos em 10 minutos. De 2020 a 2024, período do 4º halving, entram em circulação 6.25 BTC a cada novo bloco.</p>

        <h3 style="margin:0px">Por que aprender comprar, receber e guardar bitcoin?</h3>
        <p style="margin:0px; padding-bottom:15px">Com o tempo pode ser um excelente negócio acumular frações de bitcoin para fazer parte de um sistema monetário, mais barato, mais rápido, mais inovador e mais inclusivo, um avanço para humanidade na busca pela paz.</p>
        


    </div>


    <div style="border: 0px solid #999;  width: 720px; float:left; padding-left:25px; padding-right:25px;  height: 500px;" >
        <h3 style="margin:0px">Como aceitar bitcoins?</h3>
        <p style="margin:0px; padding-bottom:15px">É simples. Você precisa apenas instalar um aplicativo de uma carteira. Em Jericoacoara, usamos a BlueWallet. Após instalar a carteira disponível para iOS e Android, mude o idioma para português e crie duas carteiras: uma de Bitcoin e uma da Lightning Network. É fácil!</p>
        <h3 style="margin:0px">Por que aceitar Bitcoin?</h3>
        <p style="margin:0px; padding-bottom:15px">Bitcoin é poder e liberdade para as pessoas, atrai clientes e armazena valor de forma inteligente. Permite que você receba pagamentos de qualquer pessoa do mundo, sem precisar de uma conta no banco e serve como forma de protesto às políticas monetárias. É uma alternativa segura ao sistema financeiro tradicional em caso de confisco, como já aconteceu no Brasil e recentemente na em outros países como Rússia, Ucrânia e Canadá.</p>
        <h3 style="margin:0px">Por que o Bitcoin não é uma pirâmide?</h3>
        <p style="margin:0px; padding-bottom:15px">O Bitcoin é uma moeda com uma função comum mantida por uma rede computacional descentralizada. Qualquer um pode vender suas moedas quando desejar. Qualquer um pode executar o software do Bitcoin voluntariamente, participar na rede. É uma quebra de paradigma de qualquer sistema financeiro na história. Absolutamente nada sobre Bitcoin é um segredo. </p>
        <h3 style="margin:0px">Quando devo comprar bitcoin?</h3>
        <p style="margin:0px; padding-bottom:15px">Pensar no Bitcoin como uma poupança, comprando pequenas quantias mensalmente, independentemente do valor é uma excelente estratégia para iniciantes. Com o tempo, se sentirá mais seguro para fazer aportes maiores. </p>
    </div>
</div>




    <script type="text/javascript">
        $(".qrCode").each(function() {
  $(this).qrcode({

    // render method: 'canvas', 'image' or 'div'
    render: 'div',

    // version range somewhere in 1 .. 40
    minVersion: 20,
    maxVersion: 40,

    // error correction level: 'L', 'M', 'Q' or 'H'
    ecLevel: 'Q',

    // offset in pixel if drawn onto existing canvas
    left: 0,
    top: 0,

    width: 175,
    height: 175,

    // size in pixel
    size: 5,

    // code color or image element
    fill: '#fff',

    // background color or image element, null for transparent background
    background: null,

    // content
    text: $(this).data('qrcodeval'),

    // corner radius relative to module width: 0.0 .. 0.5
    radius: 0.5,

    // quiet zone in modules
    quiet: 0,

    // modes
    // 0: normal
    // 1: label strip
    // 2: label box
    // 3: image strip
    // 4: image box
    mode: 4,

    mSize: 0.1,
    mPosX: 0.5,
    mPosY: 0.5,

    label: 'no label',
    fontname: 'sans',
    fontcolor: '#fff',

    image: null
  });
});
    </script>
</body>
</html>