# PBPaperWallet

A Carteira de Papel da Praia Bitcoin foi criada para bancarizar 400 alunos da Escola Municipal Nossa Senhora da Consolação, localizada na Vila de Jericoacoara, Ceará. 

Em um computador offline, utilizando o HTML do Bip39 criado por Ian Coleman, release 0.5.4, são geradas as palavras semente (Bip39 Mnemonic) e a partir delas, são mostradas a chave publica estendida (zpub) e o endereço da derivação m84/0/0/0/0. Nenhuma informação privada é salva. 

Estas informações são enviadas para o código PHP (paperwallet.php) que cria os QR Codes, coloca as imagens no lugar e prepara uma folha tamanho A4, frente e verso para impressão. 

Após impressas, as carteiras são cortadas, dobradas, carimbadas, lacradas com selos holográficos, embaladas e por fim carregadas. 


#Como fazer

##Materiais necessários
- Laptop ou Desktop
- SSD ou HD de 64gb
- Pendrive 8GB
- Impressora Frente e Verso - Epson L4260 (ou superior)
- Folha de Papel A4 90gr
- 2 Adesivos holográficos por carteira
- Embalagem Transparente adesiva Adesiva
- Guilhotina de papel de mesa
- Tesoura média com ponta

##Preparação do sistema operacional do computador offline
Como a impressora Epson L4260, não é compatível com o Linux, iremos usar o windows 8.1 como o sistema operacional
   [] - Baixe o arquivo diretamente da Microsoft versão 64bits https://www.microsoft.com/pt-br/software-download/windows8ISO
   [] - Grave em um Pendrive usando o Rufos ou Elena Batcher
   [] - Faça a instalação em um SSD para ser usado apenas para essa finalidade
   [] - Salve os seguintes arquivos no pendrive:
      - Codigo da paperwallet
      - Google Chrome Standalone
      - PHP (php-7.4.30-nts-Win32-vc15-x64)
      - Nginx
      - Driver da Impressora
      - Visual Studio Redistribuitable
      
##Instalação dos componentes
   [] - Descompacte o zip e copie o PHP para `C:\PHP`
   [] - Descompacte o código da paper wallet, e coloque-o em `C:\www`
   [] - Instale o Nginx em `C:\nginx`
   [] - Instale as bibliotecas do Visual Studio
   [] - Altere as configurações do php.ini
   [] - Altere as configurações do nginx.cong
   [] - Rode o comando para iniciar o PHP `php-cgi.exe -b 127.0.0.1:9000`
   [] - Rode o comando para iniciar o Nginx 
   [] - Abra o Chrome em `127.0.0.1`
  


