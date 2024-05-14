<!DOCTYPE html>
<html lang="pt_BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tata Site HTML  </title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div id="main">
        <img id="logo" src="logo.png" alt="">
        <nav>
            <ul>
                <li><a href="#home">Página Inicial</a></li>
                <li><a href="#sobre">Sobre</a></li>
                <li><a href="#servicos">Serviços</a></li>
                <li><a href="#cuidados">Cuidados</a></li>
                <li><a href="#agendamento">Orçamento/Agendamento</a></li>
                <li><a href="#contato">Contato</a></li>
                <li><a href="#dicas">Dicas</a></li>
            </ul>
        </nav>
        
        <h1 id="home">Empresa Especializada em Instalação e Manutenção de Ar-Condicionado.</h1>
        <h2 id="sobre">Sobre nós</h2>
        <p>
            A clima Bom atua no mercado de ar-condicionado desde 2017, trazendo conforto e comodidade aos seus clientes. Fica localizada na Av. Brasil s/n, centro de Mirante do Paranapanema SP, atendendo as demandas do Município e Região, sempre trazendo novidades sobre a climatização para os seus clientes.  
        </p>
        <p>
            Nos empenhamos sempre para entregar um serviço de qualidade e manter o ótimo relacionamento entre Empresa e Cliente.
        </p>

        <h2 id="servicos">Serviços Prestados</h2>
        <p>
            Oferecemos serviços de Manutenção Preventiva, Manutenção corretiva de ar-condicionado, tanto quanto em acessória se necessário para compras.
        </p>

        <h2 id="cuidados">Cuidados</h2>
        <p>
            Importância da manutenção do ar-condicionado sempre em dia, a falta de limpeza e manutenção do aparelho e um dos principais responsáveis pela proliferação de doenças respiratórias e disseminação de odores desagraveis ao ambiente.
        </p>
        <p>
            Com a manutenção em dia, o cliente terá o ambiente mais saudável, tanto quanto reduzindo gasto de energia além de evitar a queima de compressores e motores, que por sua vez que possuem um alto custo para consertos.
        </p>
        <p>
            Sem mencionar que; um ar-condicionado sujo trabalha sempre no limite, podendo aquecer os cabos elétricos e ocasionando incêndios no ambiente.
        </p>
        <h2 id="agendamento">Orçamentos e Agendamentos</h2>
        <form action="dados.php" method="post">
            <div class="form-div">
                <label for="nome">Nome:</label>
                <input type="text" name="nome" id="nome">
            </div>
            <div class="form-div">
                <label for="end">Endereço:</label>
                <input type="text" name="end" id="end">
            </div>
            <div class="form-div">
                <label for="agenda">Agendamento</label>
                <input type="datetime" name="agenda" id="agenda">
            </div>
            <div class="form-check">
                <input type="checkbox" name="instalacao" id="instalacao">
                <label for="instalacao">Instalação</label>
            </div>
            <div class="form-check">
                <input type="checkbox" name="manut" id="manut">
                <label for="manut">Higienização / Manutenção corretiva</label>
            </div>
            <button type="submit">Enviar</button>
        </form>
        <h2 id="contato">Contato</h2>
        <p>
            Fale com nossos profissionais e solicite informações sobre manutenção e demais sobre ar-condicionado.
            <a href="https://wa.me/+5513997257888"><img src="WhatsApp.png"baseboard="6%" width="6%"></a>
            <p style="color:cyan;"> E-mail :<a style="color white;"  href="mailto:tataepreta@gmail.com"> tataepreta@gmail.com </a> </p>
        </p>
        <p>
            Carlos (18) 99605-0656 ou Antonio (13)997257888
        </p>
        <h2 id="dicas">Dicas para manter o aparelho em perfeitas condições</h2>
        <ul>
            <li>Limpe a tela filtro periodicamente, o acumulo de sujeira na tela impede a passagem de ar para o ambiente.</li>
            <li>Mantenha a temperatura do aparelho entre 23º e 26 º, temperatura ideal para o perfeito funcionamento.</li>
            <li>Feche portas e janelas e bloqueie alguns espaços afim de evitar o escape do ar gelado do ambiente.</li>
            <li>Não obstrua a saída de água, senão ocorrera goteiras indesejadas dentro de seu ambiente.</li>
            <li>Faça higienização completa de seu aparelho no mínimo uma vez ao ano, isso evita a queima de componentes e oxidação da serpentina.</li>
        </ul>
    </div>
</body>
</html>