<!DOCTYPE html>
<html>
<head>
    <title>Configurar E-mail | Tritoq Agência Digital - Chapecó - SC</title>
    <meta charset="UTF-8">
    <meta name="description"
          content="TRITOQ é paixão a cada novo projeto, é experiência e resultado. Uma metodologia que busca oferecer soluções de forma integrada com o cliente. Pois nosso maior resultado está na satisfação daqueles que buscam nossos trabalhos."/>
    <meta property="og:url" content="http://tritoq.com/"/>
    <meta property="og:title" content="Tritoq Agência Digital - Chapecó - SC"/>
    <meta property="og:site_name" content="tritoq.ag"/>
    <meta property="og:email" content="contato@tritoq.com"/>
    <meta property="og:phone_number" content="+55(49)3312-2977"/>
    <meta property="og:street-address" content="Chapecó, SC"/>
    <meta property="og:country-name" content="Brasil"/>
    <meta property="og:image" content="http://tritoq.com/images/avatar.jpg"/>
    <meta property="fb:page_id" content="tritoq.ag"/>
    <meta property="fb:app_id" content="417640414959113"/>
    <meta property="application-name" content="tritoq.ag"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0">
    <link href="//tritoq.com/css/css.css" media="screen" rel="stylesheet" type="text/css"/>
    <style>
        .menu-esquerda {
            font-size: 14px;
        }

        .menu-esquerda a {
            margin-bottom: 15px;
            display: block;
        }

        .box {
            padding: 20px;
        }

        h1 {
            font-size: 24px;
            text-transform: none;
        }

        h2 {
            font-family: Arial, Helvetica, sans-serif;
            color: white;
        }

        .info {

            font-size: 14px;
            line-height: 24px;
            font-family: Arial, Helvetica, sans-serif;
            color: #b5b5b5;
            margin-top: 20px;
        }

        .box p {
            font-size: 14px !important;
        }
    </style>
</head>
<body>
<header>
    <div class='content'>
        <div class='mhead'>
            <div class='left'>
                <span class='logo' title='Tritoq Agência Digital'> Tritoq Agência Digital</span>
            </div>
            <div class='left slogan'>
                <p>Tutorial de configuração de e-mail</p>

                <p style='color:#bababa'></p>

                <p style='color:#8c8c8c'></p>
            </div>
            <div class='right info'>
                <ul class="menu-esquerda">
                    <li><a href="#express">Outlook Express</a></li>
                    <li><a href="#outlook2003">Outlook 2003</a></li>
                    <li><a href="#outlook2007">Outlook 2007</a></li>
                    <li><a href="#outlook2010">Outlook 2010</a></li>
                    <li><a href="#outlook2013">Outlook 2013</a></li>
                    <!--<li><a href="#thunderbird">Mozilla Thunderbird</a></li>-->
                </ul>
            </div>
        </div>
    </div>
</header>
<div class="content">
    <div class="box">
        <h1>Informações Gerais</h1> <br/>
        <h2>Servidor POP</h2>
        <p>Host: pop.nospam.com.br <br/>
        Porta: 995 <br/>
        Tipo de conexão: SSL
        </p> <br/> <br/>

        <h2>Servidor SMTP</h2>
        <p>Host: smtp.nospam.com.br <br/>
            Porta: 465 ou 1000 <br/>
            Tipo de conexão: SSL <br/>
            * Meu servidor requer autenticação
        </p>
    </div>
    <div class="box">
        <h1 id="express">Outlook Express</h1>

        <div class="info">
            <p>
                Abra o Outlook Express <br/>

                Se é a primeira vez que abre o Outlook Express, irá surgir de imediato uma janela a perguntar se
                pretende configurar uma conta de correio electrónico e por isso, já só necessita de ler este tutorial a
                partir daqui * <br/>

                Se não é a primeira vez que abre o Outlook Express, não irá surgir nenhuma janela para configurar. <br/>
                Para configurar uma nova conta de correio electrónico clique em Ferramentas e selecione Contas como na
                imagem seguinte: <br/>
            </p>

            <p class="image"><img src="imagens/outlook%20express%20x1%20.png"/></p>

            <p>
                Irá aparecer a janela de Contas na Internet <br/>
                Clique no botão que diz Adicionar e escolha Email
            </p>

            <p class="image"><img src="imagens/outlook%20express%20x2%20.png"/></p>

            <p>
                Agora imagine que os seus dados são os seguintes: <br/>
                Seu nome: Pedro Silva <br/>
                Seu Email: pedrosilva@gmail.com <br/>

                Configure conforme as imagens abaixo:
            </p>
            <?php
            for ($i = 0; $i < 5; $i++) {
                ?>
                <p class="image"><img src="imagens/outlook%20express%20x<?php echo $i + 3 ?>.png"/></p>
            <?php
            }
            ?>
            <p>
                Mas na realidade aínda não terminou! <br/>
                Clique em concluir para voltar ás propriedades das Contas de Internet. <br/>
                Selecione a conta de correio que acabou de criar e clique em Propriedades. <br/>
                Configure conforme as imagens abaixo: <br/>
            </p>

            <p class="image"><img src="imagens/outlook%20express%20x8.png"/></p>

            <p>Clique em Ok e terminou.</p>
        </div>
    </div>
    <div class="box">
        <h1 id="outlook2003">Outlook 2003</h1>

        <p>
            Se é a primeira vez que abre o Outlook desde a sua instalação, irá surgir de imediato uma janela a perguntar
            se pretende configurar uma conta de correio electrónico. Diga que sim e clique em Avançar. <br/>
            Agora, já só necessita de ler este tutorial a partir daqui * <br/> <br/>
            Se não é a primeira vez que abre o Outlook desde a sua instalação, não irá surgir nenhuma janela para
            configurar. <br/>
            Para configurar uma nova conta de correio electrónico clique em Ferramentas e selecione Contas de Email como
            na imagem seguinte: <br/>
        </p>

        <p class="image"><img src="imagens/outlook%202003%20x1%20.png"/></p>

        <p>
            Irá aparecer o assitente de Contas de Email <br/>
            Selecione a opção que diz Adicionar uma nova conta de email <br/>
            Clique em Avançar <br/>
        </p>

        <p class="image"><img src="imagens/outlook%202003%20x2%20.png"/></p>

        <p>
            Selecione a opção que diz POP3 <br/>
            Clique em Avançar
        </p>

        <p class="image"><img src="imagens/outlook%202003%20x3%20.png"/></p>

        <p>
            Irá aparecer uma nova janela para defenir as Configurações de Email na Internet (POP3) <br/> <br/>


            Agora imagine que os seus dados são os seguintes: <br/>
            Seu nome: Pedro Silva <br/>
            Seu Email: pedrosilva@gmail.com <br/>

            Configure conforme a imagem abaixo: <br/>
        </p>

        <p class="image"><img src="imagens/outlook%202003%20x4.png"/></p>

        <p>Clique em Ok e terminou.</p>
    </div>
    <div class="box">
        <h1 id="outlook2007">Outlook 2007</h1>

        <p>
            Se é a primeira vez que abre o Outlook desde a sua instalação, irá surgir de imediato uma janela a perguntar
            se pretende configurar uma conta de correio electrónico. Diga que sim e clique em seguinte. <br/>
            Agora, já só necessita de ler este tutorial a partir daqui * <br/> <br/>

            Se não é a primeira vez que abre o Outlook desde a sua instalação, não irá surgir nenhuma janela para
            configurar. <br/>
            Para configurar uma nova conta de correio electrónico clique em Ferramentas e selecione Definições de Conta
            como na imagem seguinte: <br/>
        </p>

        <p class="image"><img src="imagens/outlook%202007%20x1%20.png"/></p>

        <p>
            Irá aparecer a janela de Definições de Conta <br/>
            Clique no botão que diz Novo <br/>
        </p>

        <p class="image"><img src="imagens/outlook%202007%20x2%20.png"/></p>

        <p>
            Irá aparecer a janela para Adicionar Serviço de Correio Electrónico <br/>
            Selecione a opção que diz Microsoft Exchange, POP3, IMAP ou HTTP <br/>
            Clique em seguinte
        </p>

        <p class="image"><img src="imagens/outlook%202007%20x3%20.png"/></p>

        <p>
            * Irá aparecer a janela para Adicionar Nova Conta de Correio Electrónico <br/>
            Selecione a opção de Configurar Manualmente as definições do servidor... <br/>
            Clique em seguin
        </p>

        <p class="image"><img src="imagens/outlook%202007%20x4%20.png"/></p>

        <p>
            Irá aparecer novamente a janela para Escolher o Serviço de Correio Electrónico <br/>
            Selecione a opção de Correio Electrónico da Internet <br/>
            Clique em seguinte
        </p>

        <p class="image"><img src="imagens/outlook%202007%20x5%20.png"/></p>

        <p>
            Irá aparecer uma nova janela para Adicionar Nova Conta de Correio Electrónico <br/> <br/>

            Agora imagine que os seus dados são os seguintes: <br/>
            Seu nome: Pedro Silva <br/>
            Seu Email: pedrosilva@gmail.com <br/>

            Configure conforme a imagem abaixo: <br/>
        </p>

        <p class="image"><img src="imagens/outlook%202007%20x6%20gmail%20.png"/></p>

        <p>
            Clique em Ok e terminou.
        </p>
    </div>
    <div class="box">
        <h1 id="outlook2010">Outlook 2010</h1>

        <p>
            Se é a primeira vez que abre o Outlook desde a sua instalação, irá surgir de imediato uma janela a perguntar se
            pretende configurar uma conta de correio electrónico. Diga que sim e clique em avançar. <br/>
            Agora, já só necessita de ler este tutorial a partir daqui * <br/> <br/>

            Se não é a primeira vez que abre o Outlook desde a sua instalação, não irá surgir nenhuma janela para
            configurar. <br/>
            Para configurar uma nova conta de email clique em Arquivo e em Informações selecione Adicionar Conta como na
            imagem seguinte: <br/>
        </p>

        <p class="image"><img src="imagens/outlook%202010%20x1%20.png"/></p>

        <p>
            * Irá aparecer a janela para Adicionar Nova Conta <br/>
            Selecione a opção que diz Definir manualmente as configurações do servidor ou tipos de servidores adicionais.
            <br/>
            Clique em Avançar
        </p>

        <p class="image"><img src="imagens/outlook%202010%20x2%20.png"/></p>

        <p>
            Irá aparecer a uma nova janela para Escolher o Serviço <br/>
            Selecione a opção que diz Email da Internet <br/>
            Clique em Avançar
        </p>

        <p class="image"><img src="imagens/outlook%202010%20x3%20.png"/></p>

        <p>
            Irá aparecer a uma nova janela para as Configurações de Email na Internet <br/>

            Agora imagine que os seus dados são os seguintes: <br/>
            Seu nome: Pedro Silva <br/>
            Seu Email: pedrosilva@gmail.com <br/>

            Configure conforme a imagem abaixo: <br/>
        </p>

        <p class="image"><img src="imagens/outlook%202010%20x4%20gmail%20.png"/></p>

        <p>Clique em Ok e terminou.</p>

    </div>
    <div class="box">
        <h1 id="outlook2013">Outlook 2013</h1>

        <p>
            Se é a primeira vez que abre o Outlook desde a sua instalação, irá surgir de imediato uma janela a perguntar se pretende configurar uma conta de correio electrónico. Diga que sim e clique em avançar. <br/>
            Agora, já só necessita de ler este tutorial a partir daqui * <br/> <br/>

            Se não é a primeira vez que abre o Outlook desde a sua instalação, não irá surgir nenhuma janela para configurar. <br/>
            Para configurar uma nova conta de email clique em Arquivo e em Informações selecione Adicionar Conta como na imagem seguinte: <br/>
        </p>

        <p class="image"><img src="imagens/outlook%202013%20x1%20.png"/></p>

        <p>
            * Irá aparecer a janela para Adicionar Nova Conta <br/>
            Selecione a opção que diz Definir manualmente as configurações do servidor ou tipos de servidores adicionais. <br/>
            Clique em Avançar
        </p>

        <p class="image"><img src="imagens/outlook%202013%20x2%20.png"/></p>

        <p>
            Irá aparecer a uma nova janela para Escolher o Serviço <br/>
            Selecione a opção que diz Email da Internet <br/>
            Clique em Avançar
        </p>

        <p class="image"><img src="imagens/outlook%202013%20x3%20.png"/></p>

        <p>
            Irá aparecer a uma nova janela para as Configurações de Email na Internet <br/>

            Agora imagine que os seus dados são os seguintes: <br/>
            Seu nome: Pedro Silva <br/>
            Seu Email: pedrosilva@gmail.com <br/>

            Configure conforme a imagem abaixo: <br/>
        </p>

        <p class="image"><img src="imagens/outlook-2013-x4-gmail.png"/></p>

         <p>Clique em Ok e terminou.</p>
    </div>
    <!--<div class="box">
        <h1 id="thunderbird">Mozilla Thunderbird</h1>
        <p>
            Se é a primeira vez que abre o Thunderbird desde a sua instalação, irá surgir de imediato a janela para configurar uma conta de correio electrónico. Se não é a primeira vez que abre o Thunderbird desde a sua instalação, clique em Arquivo, Novo e de seguida, Conta de Email como na imagem seguinte:
        </p>
        <p class="image"><img src="imagens/thunderbird%20x1%20.png"/></p>
        <p>
            Irá aparecer o assistente para Configurar conta de email <br/>

            Agora imagine que os seus dados são os seguintes: <br/>
            Seu nome: Pedro Silva <br/>
            Seu Email: pedrosilva@gmail.com <br/>

            Configure conforme as imagens abaixo:
        </p>
        <p class="image"><img src="imagens/thunderbird%20x2%20gmail%20.png"/></p>
        <p>
            Clique em continuar e o Thunderbird tentará descobrir as definições automáticamente. <br/>
            As configurações deverão de ser as seguintes:
        </p>
        <p class="image"><img src="imagens/thunderbird%20x2%20gmail%20.png"/></p>
    </div>-->
</div>
</body>
</html>