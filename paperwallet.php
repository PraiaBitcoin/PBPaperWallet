<?php
//Praia Bitcoin Paper Wallet Web Version v0.1
//Author: Fernando Motolese
//ini_set('display_errors', 1);

$address_1 = $_REQUEST['address_1']; 
$zpub_1 = $_REQUEST['zpub_1'];
$bip39_1 = $_REQUEST['bip39_1'];
?>

<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate" />
<meta http-equiv="Pragma" content="no-cache" />
<meta http-equiv="Expires" content="0" />
    
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

#correct { top:131px; }
#correct2 { top:170px; }

.output{
        padding: 10px;
        min-height: 50px;
        border: 1px solid #e4e4e4;
    }
    
    @media print {
               input {
                  visibility: hidden;
               }
               #correct
               {
                top:121px;
                overflow: hidden;
               }
               #correct2    
               {
                top:161px;
                overflow: hidden;
               }

            }
    </style>

</head>
<body>


<div style="border: 0px solid #999; height:50px; width: 1540px;">
    <!-- form action="paperwallet.php" method="post">
    <div style="width: 580px; float:left; display:none">mnemonic</div>
    <div style="width: 490px; float:left; display:none">zpub</div>
    <div style="width: 320px; float:left; display:none">address</div>
    <input name="bip39_1" value="<?php echo $bip39_1; ?>" style="width: 570px; float:left" autocomplete="off"/>    
    <input name="zpub_1" value="<?php echo $zpub_1; ?>" style="width: 500px; float:left" autocomplete="off"/>
    <input name="address_1" value="<?php echo $address_1; ?>" style="width: 320px; float:left" autocomplete="off"/>
        <input type="submit" value="GENERATE" style="width: 80px; float:left" >
    </form-->
</div>
<div style="border: 0px solid #999;">
<div style="margin:0px; width: 1480px; height: 437px; margin-left:30px; border:1px; background-image: url('img/carteira_teste.jpg'); background-repeat: no-repeat; background-size: contain;">
    <!--QR codes -->
    <iframe src="qrcode.php?data=<?php echo $address_1; ?>&level=H&imageWidth=200&size=10" style="position: absolute; width: 200px; height: 200px;    left: 47px; border:0px; margin:0px " scrolling="no" id="correct2"></iframe>
    <iframe src="qrcode.php?data=<?php echo $zpub_1; ?>&level=M&imageWidth=200" style="width: 250px; height: 250px; position: absolute;  left: 908px; border:0px; margin:0px" scrolling="no" id="correct"></iframe>
    <iframe src="qrcode.php?data=<?php echo $bip39_1; ?>&level=Q&imageWidth=200" style="width: 250px; height: 250px; position: absolute;  left: 1222px; border:0px; margin:0px " scrolling="no" id="correct"></iframe>
    <!--Wallet Info -->
    <div style="position: absolute;  top: 420px;  left: 85px; font-size: 15px; font-weight: 700;"><?php echo $address_1; ?></div>
    <div style="position: absolute; top: 120px; left: 920px; font-size: 9px;"><?php echo $zpub_1; ?></div>
    <div style="position: absolute; top: 380px;  left: 893px; font-size: 11px; width: 559px; font-weight: 700;"><?php echo $bip39_1; ?></div>
 </div>
<div style="clear:both; "></div>
<div style="border: 0px solid #999;  width: 1700px; position: relative; ">
    <div style="border: 0px solid #999; width: 690px; padding-left:55px; padding-right:30px; padding-top:0px; float:left; margin-right:5px; height: 615px;">
        <h3 style="margin:0px; padding-top:30px">Instale o aplicativo para controlar sua carteira</h3>
        <p style="margin-top:5px; margin-bottom:10px"> Recomendamos que use a BlueWallet. Baixe a Bluewallet na loja oficial de aplicativos do seu smartphone
        ou escaneie o QR code abaixo para ser direcionado para loja onde poderá baixar o aplicativo. Após instalá-lo, você deverá importar sua carteira.</p>

            <div style="border: 0px solid #999; width: 48%; float:left; text-align:center; margin-top:20px; margin-bottom:45px">
            <img src="img/android_bluewallet_qr.png" style="width: 115px; height: 115px"><br>
            BlueWallet para iOS</div>

            <div style="border: 0px solid #999; width: 48%; float:left; text-align:center; margin-top:20px; margin-bottom:45px">
            <img src="img/android_ios_qr.png" style="width: 115px; height: 115px; "><br>
            BlueWallet para Android</div>
    
        <h3 style="margin:0px; padding-top:35px">Mude o idioma da Bluewallet para Português</h3>
        <p style="margin-top:5px; margin-bottom:10px">Após instalar a BlueWallet no seu smartphone, abra o aplicativo e no canto superior direito da tela clique em “...” , depois em “Language”, role a lista e altere o idioma para Português (BR)</p>

            <div style="border: 1px solid #E1E1E1; width: 190px; float:left; text-align:center; margin-left:5px">
            <img src="img/blue_01.png" style="width: 100%; "></div>
            <div style="border: 1px solid #E1E1E1; width: 190px; float:left; text-align:center; margin-left:35px">
            <img src="img/blue_02.png" style="width: 100%; "></div>
            <div style="border: 1px solid #E1E1E1; width: 190px; float:left; text-align:center; margin-left:35px">
            <img src="img/blue_03.png" style="width: 100%; "></div>
    </div>

    <div style="border: 0px solid #999;  width: 690px; float:left; padding-left:20px; padding-right:30px;  height: 615px;" >
        <h3 style="margin:0px; padding-top:30px">Importe sua carteira na BlueWallet</h3>
        <p style="margin-top:5px; margin-bottom:10px">Clique em “<b>Adicionar Carteira</b>”, “<b>Importar Carteira</b>”, digite as palavras semente e clique<br> em importar, ou aperte em “<b>Ler código ou importar arquivo</b>”, escaneie o QR code das "Palavras Semente" aguarde a importação. Pronto! A carteira de <b>Bitcoin</b> está pronta para o uso.<br></p>
            <div style="clear:both"></div>
            <div style="border: 1px solid #E1E1E1; width: 100px; float:left; text-align:center; margin-left:10px;">
            <img src="img/blue_04.png" style="width: 100%; ">
            </div>
            <div style="border: 1px solid #E1E1E1; width: 100px; float:left; text-align:center; margin-left:10px">
            <img src="img/blue_05.png" style="width: 100%; ">
            </div>
            <div style="border: 1px solid #E1E1E1; width: 100px; float:left; text-align:center; margin-left:10px">
            <img src="img/blue_06.png" style="width: 100%; ">
            </div>
            <div style="border: 1px solid #E1E1E1; width: 100px; float:left; text-align:center; margin-left:10px">
            <img src="img/blue_07.png" style="width: 100%; ">
            </div>
            <div style="border: 1px solid #E1E1E1; width: 100px; float:left; text-align:center; margin-left:10px">
            <img src="img/blue_08.png" style="width: 100%; ">
            </div>
            <div style="border: 1px solid #E1E1E1; width: 100px; float:left; text-align:center; margin-left:10px">
            <img src="img/blue_09.png" style="width: 100%; ">
            </div>
            <div style="clear:both"></div>
            <div style="margin-top:15px">  
                Se preferir, importe a carteira Modo Leitura que pode apenas ver o saldo das carteiras, mas não pode mover o bitcoin. Na Bluewallet, escaneie o QR code da Chave Pública Estendida zpub. 
                <br><br>
                Saiba que suas Palavras Semente e Chave Pública controlam diversos endereços, sendo o endereço impresso a primeira derivação possível (m84/0/0/0/0). 
                Ao importar a carteira você terá controle de todos os endereços possíveis associados as palavras semente.
                <br>
                <br><b>DICA</b>: Sempre que abrir o lacre de sua carteira de papel, gere uma nova gratuitamente.
                Abra uma aba anônima do navegador o endereço <a href="https://praiabiticoin.com/paperwallet/">https://praiabiticoin.com/paperwallet/</a>,  clique em "Português" > "Bip84" > "Generate" > "Create Wallet".
                Imprima a carteira criada ou salve o arquivo em um local seguro.  <br><br>
            </div>
        </div>

    </div>


<div style="clear:both; "></div>


<div style="border: 0px solid #999; margin-top:-19px" >
    <div style="border:0px; margin-left:34px; height: 525px; background-image: url('img/fundo_teste.jpg'); background-repeat: no-repeat;  background-size: contain;  width: 1516px; position:relative"  >
        <!--Ballance-->
        <img src="img/saldo_1000.png" style="top:160px; left:80px; position:absolute; width:350x; height: 159px">
 
        <div style="border: 0px solid #999; position:absolute; top:110px; width:720px; left:710px; height: 280px; padding:5px">
            <h1 style="margin:0px; padding-left:20px">Não confie, verifique!</h1>

            <div style="float:left; width:220px; text-align: center;">
            <iframe src="qrcode.php?data=https://github.com/PraiaBitcoin/PBPaperWallet/&level=H&imageWidth=200&size=10" 
            style="width: 220px; height: 240px;  top: 60px;  left: 50px; border:0px; margin:0px; margin-bottom:-25px; margin-top:-20px" scrolling="no"></iframe> <br>
            Código da Carteira de Papel
            </div>
            
            
            <div style="float:left; width:260px; text-align: center; ">
            <iframe src="qrcode.php?data=https://apoie.praiabitcoin.org/&level=H&imageWidth=200&size=10" style="width: 220px; height: 240px;  top: 60px; left: 90px; border:0px; margin-bottom:-25px; margin-top:-20px " scrolling="no"></iframe> 
            Experimento Praia Bitcoin
            </div>

            <div style="float:left; width:220px; text-align: center;">
            <iframe src="qrcode.php?data=https://mempool.space/pt/address/<?php echo $address_1; ?>&level=H&imageWidth=200&size=10" style="width: 220px; height: 240px;  top: 60px;  left: 35px; border:0px; margin:0px; margin-bottom:-25px; margin-top:-20px" scrolling="no"></iframe> 
            Verificar o saldo na Blockchain
            </div>
        </div>
    </div>
</div>

<div style="clear:both; "></div>
<div style="border: 0px solid #999;  width: 1700px; position: relative; margin-top:-15px ">
    <div style="border: 0px solid #999; width: 700px; padding-left:75px; padding-right:25px; float:left; margin-right:10px; height: 500px;">
        <h3 style="margin:0px">O que é Bitcoin?</h3>
        <p style="margin:0px; padding-bottom:11px">O Bitcoin é uma forma de dinheiro digital, incensurável e com suprimento limitado. Permite que qualquer pessoa conectada à internet receba pagamentos de qualquer pessoa do mundo, sem precisar de um banco ou documentos.</p>
        
        <h3 style="margin:0px">O Bitcoin e suas frações, o Satoshi.</h3>
        <p style="margin:0px; padding-bottom:11px">Um Bitcoin tem 8 casas decimais. A menor fração do Bitcoin é o Satoshi.  Um Bitcoin é composto por 100 milhões de satoshis. 1 SAT = 0,00000001 BTC e 100.000.000 SATs = 1 BTC.</p>
        
        <h3 style="margin:0px">Quantos Bitcoin existem?</h3>
        <p style="margin:0px; padding-bottom:11px">Assim como um recurso natural como ouro, só existe uma quantia limitada de Bitcoin, 21 milhões. Nenhuma pessoa, empresa ou governo pode alterar esse limite. Isso torna o Bitcoin valioso para muitas pessoas que desejam economizar dinheiro.</p>

        <h3 style="margin:0px">Como o Bitcoin entra em circulação?</h3>
        <p style="margin:0px; padding-bottom:11px">Novos Bitcoin entram em circulação a cada bloco gerado de 10 minutos em 10 minutos. De 2020 a 2024, período do 4º halving, entram em circulação 6.25 BTC a cada novo bloco.</p>

        <h3 style="margin:0px">Como esta carteira de Bitcoin foi criada?</h3>
        <p style="margin:0px; padding-bottom:11px">Em um PC que nunca foi conectado a internet, são geradas as <b>Palavras Semente</b> com o <b>Ian Coleman Bip39</b>. Então, um código PHP local gera os QR codes em SVG e prepara a carteira. 
        Por fim, a carteira é impressa, cortada, embalada e lacrada. Nenhuma informação privada é gravada!</p>

        <h3 style="margin:0px">Onde armazenar minhas palavras semente?</h3>
        <p style="margin:0px; padding-bottom:11px">Prefira escrevê-las e guardá-las offline em um local seguro ou em um gerenciador de senhas criptografado.  Evite ao máximo salvar as palavras sementes no celular ou na nuvem. 
        Cuidado: se perder suas palavras semente, não há nenhuma forma de recuperá-las. Sua chaves, seu Bitcoin! </p>

    </div>

    <div style="border: 0px solid #999;  width: 680px; float:left; padding-left:30px; padding-right:60px;  height: 500px;" >
        <h3 style="margin:0px">Por que aprender comprar, receber e guardar Bitcoin?</h3>
        <p style="margin:0px; padding-bottom:10px">Com o tempo pode ser um excelente negócio acumular frações de bitcoin para fazer parte de um sistema monetário mais barato, mais rápido, mais inovador e mais inclusivo, servir como forma de protesto às políticas monetárias atuais, e é um avanço para humanidade na busca pela paz. Considere o Bitcoin como uma alternativa segura ao sistema financeiro tradicional em caso de confisco. Acumule SATs, experimente a rede relâmpago e economize para o futuro!</p>
        
        <h3 style="margin:0px">Como aceitar Bitcoin?</h3>
        <p style="margin:0px; padding-bottom:10px">É simples. Você precisa apenas instalar um aplicativo de uma carteira. Em Jericoacoara, usamos a BlueWallet. Após instalar a carteira disponível para iOS e Android, mude o idioma para português e crie duas carteiras: uma de Bitcoin e uma da Lightning Network. É fácil!</p>
        
        <h3 style="margin:0px">Quando devo comprar Bitcoin?</h3>
        <p style="margin:0px; padding-bottom:10px">Pensar no Bitcoin como uma poupança, comprando pequenas quantias mensalmente, independentemente do valor é uma excelente estratégia para iniciantes. </p>

        <h3 style="margin:0px">Por que o Bitcoin não é uma pirâmide?</h3>
        <p style="margin:0px; padding-bottom:10px">O Bitcoin é uma moeda com uma função comum, mantida por uma rede computacional descentralizada de voluntários. Qualquer um pode vender suas moedas quando desejar ou executar o software do Bitcoin voluntariamente para participar na rede. Absolutamente nada sobre Bitcoin é um segredo. </p>
        
        <h3 style="margin:0px">O que é <b>Lightning Network</b>?</h3>
        <p style="margin:0px; padding-bottom:10px">Nas transações através da Lightning Network, em Português, Rede Relâmpago, conhecida como segunda camada do protocolo, as pessoas enviam Bitcoin de um lado para outro sem a necessidade de esperar que cada transação seja incluída em um bloco de Bitcoin. A lightning pode ser comparada com uma conta corrente e o futuro das transações diárias em Bitcoin  .</p>
    </div>
</div>
</body>
</html>
