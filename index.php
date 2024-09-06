<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/png" href="img/Teste-vocacional.ico">
    <link rel="stylesheet" href="style.css">
    <title>Vocação Polar - Descongele seu futuro!</title> 
</head>
<body>
    <header>
    <div class="img">
        <img src="img/logo.svg" width="100" alt="Logo Urso com a lapela" class="imgLogo">
    </div>

    <nav id="nav-bar">
        <ul>
            <li><a href="index.html">INÍCIO</a></li>
            <li><a href="descricao.html" data-target="descricao.html" class="nav-link">DESCRIÇÃO</a></li>
            <li><a href="cursos.html" data-target="cursos.html" class="nav-link">CURSOS</a></li>
        </ul>
    </nav>

    <div class="btn">
    <img src="img/acess.png" alt="Botão de Acessibilidade" class="imgAcess">  
  </div> 

</header>

    <main class="carrossel"> 
        <div class="image-container">
            <img id="leftImage" class="left-image" src="img/gelo.svg" alt="Iceberg">

            <div class="center-container" id="centerContainer">
                <h1>Vocação Polar</h1>
            <h2>Descongele seu futuro!</h2> 
                <p>Faça esse teste vocacional para conhecer suas habilidades e descobrir seu curso ideal.</p>
                <button class="btnIniciar"> INICIAR TESTE </button>
            </div>
            <img id="rightImage" class="right-image" src="img/urso.svg" alt="Iceberg com o urso mascote">
        </div>
        <div class="cursor-ball" id="cursorBall"></div>
    </main>

    <!-- Modais de Alerta -->
    <!-- Primeira Modal -->
    <div id="modal1" class="modal">
        <div class="modal-content"> 
            <form id="studentForm" action="cadastrar.php" method="post">
                <div class="textbox">
                  <input type="text" id="name" name="nome" placeholder="Nome Completo" required>
                </div>
                <div class="textbox">
                  <input type="number" id="age" name="idade" placeholder="Idade" required>
                </div>
                <div class="textbox">
                  <select name="escola" id="school">
                    <option value="nulo">Selecione sua escola</option>
                    <option value="ABILIO FONTES PROF">ABILIO FONTES PROF</option>
                    <option value="ADHERBAL DE PAULA FERREIRA">ADHERBAL DE PAULA FERREIRA</option>
                    <option value="ALCEU">ALCEU GOMES DA SILVA PROF</option>
                    <option value="ASTOR VASQUES LOPES PROF">ASTOR VASQUES LOPES PROF</option>
                    <option value="ATALIBA JULIO DE OLIVEIRA PROF">ATALIBA JULIO DE OLIVEIRA PROF</option>
                    <option value="CARLOS EDUARDO MATTARAZZO CARREIRA PROF">CARLOS EDUARDO MATTARAZZO CARREIRA PROF</option>
                    <option value="CORINA CACAPAVA BARTH PROFA">CORINA CACAPAVA BARTH PROFA</option>
                    <option value="DARCY VIEIRA">DARCY VIEIRA</option>
                    <option value="DARCY PEREIRA DE MORAES">DARCY PEREIRA DE MORAES</option>
                    <option value="BERNARDES JUNIOR DESEMBARGADOR">BERNARDES JUNIOR DESEMBARGADOR</option>
                    <option value="ELISIARIO MARTINS DE MELLO PROF">ELISIARIO MARTINS DE MELLO PROF</option>
                    <option value="ERNESTA XAVIER RABELO ORSI PROF">ERNESTA XAVIER RABELO ORSI PROF</option>
                    <option value="ERNESTINA LOUREIRO MIRANDA PROFA">ERNESTINA LOUREIRO MIRANDA PROFA</option>
                    <option value="EURINY DE SOUZA VIEIRA PROFA">EURINY DE SOUZA VIEIRA PROFA</option>
                    <option value="FERNANDO PRESTES CEL">FERNANDO PRESTES CEL</option>
                    <option value="FONSECA MAJOR">FONSECA MAJOR</option>
                    <option value="JAIR BARTH PROF">JAIR BARTH PROF</option>
                    <option value="JOSE DA CONCEICAO HOLTZ PROF">JOSE DA CONCEICAO HOLTZ PROF</option>
                    <option value="JUVENAL PAIVA PEREIRA PROF">JUVENAL PAIVA PEREIRA PROF</option>
                    <option value="MARIA DE LOURDES BARREIROS CARVALHO PROFA">MARIA DE LOURDES BARREIROS CARVALHO PROFA</option>
                    <option value="MODESTO TAVARES DE LIMA PROF">MODESTO TAVARES DE LIMA PROF</option>
                    <option value="PEIXOTO GOMIDE">PEIXOTO GOMIDE</option>
                    <option value="PERICLES GALVAO PROF">PERICLES GALVAO PROF</option>
                    <option value="SEBASTIAO PINTO PROF">SEBASTIAO PINTO PROF</option>
                    <option value="SEBASTIAO VILLACA PROF">SEBASTIAO VILLACA PROF</option>
                    <option value="VIRGILIO SILVEIRA PROF">VIRGILIO SILVEIRA PROF</option>
                    </select>
                </div>
                <div class="textbox">
                  <select name="serie" id="grade">

                    <option value="0">Selecione sua Série</option>
                    <option value="6">6° ano</option>
                    <option value="7">7° ano</option>
                    <option value="8">8° ano</option>
                    <option value="9">9° ano</option>
                    <option value="10">1° Ensino Médio</option>
                    <option value="11">2° Ensino Médio</option>
                    <option value="12">3° Ensino Médio</option>
                    <option value="13">Já formado</option>
                  </select>
                </div>
                <input type="submit" class="btn" value="Cadastrar">
              </form>
        
        </div>
    </div>

    <!-- Segunda Modal -->
    <div id="modal2" class="modal">
        <div class="modal-content">
            <p>(segundo conteúdo do tutorial)</p>
            <button onclick="showNextModal('modal3')">Próximo</button>
        </div>
    </div>

    <!-- Terceira Modal -->
    <div id="modal3" class="modal">
        <div class="modal-content">
            <p>Você está pronto para começar o teste. Boa sorte!</p>
            <button onclick="closeModal('modal3')">Iniciar</button>
        </div>
    </div>
    
    <script src="script.js"></script>
</body>
</html>
