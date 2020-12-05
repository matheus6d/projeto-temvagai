<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="../css/estiloindex.css">
    <meta name="autores" content="Amanda, Matheus e Thalita">
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@300;400;500;700&display=swap" rel="stylesheet">
   
    <title>Tem vaga aí?</title>
</head>

<body>
    <!-- CONTEÚDO DE AVISO -->
    <div class="aviso">
        <span>Confira informações sobre à COVID-19</span> <a href="https://coronavirus.saude.gov.br/" class="avisobotao">SABER MAIS</a>
      </div>

    <!-- MENU --> 
    <div class="navbar">
        <img class="navlogo" src="../img/logo.png">
        <a href="#inicio">Início</a>
        <a href="#sobre">Sobre</a>
        <a href="#locacoes">Locações</a>
        <a href="#contato">Contato</a>
        <input type="button" class="botaomenu" onclick="mudarCSS('../css/estiloindexCORES.css', 0);" value="Mudar Cor">
      </div >
    
    <!-- IMAGEM INICIAL -->
    <div id="inicio">
      <img src="../img/fundo02.png">
      
    </div>

    <?php
    
    include 'slider.php';

    headerHome();

    slider([
        "../img/1.jpg",
        "../img/2.jpg",
        "../img/3.jpg"
    ]);
    ?>
    
    <br  id="sobre" >
    <!-- SOBRE -->
    <h1 class="titulo" >Sobre nós</h1>

    <div class="paragrafo">
      <p>No mundo atual, a contínua expansão de nossa atividade apresenta tendências no 
        sentido de aprovar a manutenção de todos os recursos funcionais envolvidos.
        É importante questionar o quanto o desafiador cenário globalizado aponta para 
        a melhoria do sistema de formação de quadros que corresponde às necessidades.
        No mundo atual, o julgamento imparcial das eventualidades pode nos levar a considerar 
        a reestruturação dos índices pretendidos.</p>
        <p>Explica pro Product Onwer que a otimização de performance da renderização do DOM 
          causou o bug na interpolação dinâmica de strings.No mundo atual, a contínua expansão 
          de nossa atividade apresenta tendências no 
          sentido de aprovar a manutenção de todos os recursos funcionais envolvidos.
          É importante questionar o quanto o desafiador cenário globalizado aponta para 
          a melhoria do sistema de formação de quadros que corresponde às necessidades.
          No mundo atual, o julgamento imparcial das eventualidades pode nos levar a considerar 
          a reestruturação dos índices pretendidos.</p>
        <p id="locacoes"><b>Informações do sistema: </b>Esse sistema foi desenvolvido com o objetivo de demonstrar os conhecimentos 
          práticos aprendidos na disciplina SIN 143, ministrada pelo Professor Doutor Clausius Reis. O sistema desenvolvido consiste
          em um sistema de aluguel de locais por dias ou temporadas, com campos de pesquisa, informações das pesquisas e layouts
          integrados. Informações dos desenvolvedores: Amanda Oliveira Nascimento - 5149 - Integral & Matheus Medeiros Santana - 
          5188 - Integral & Thalita Mendonça Antico - 5141 - Noturno </p>
          <br><br>
         
    </div>
    
    <!-- LOCAÇÕES
    <div class="fundoPesquisa" >
      
      <br>

      <h1 class="titulo">Locações</h1>
      <h3 class="subtitulo">Faça uma pesquisa e encontre o lugar certo para você se hospedar!</h3>

    <div class="pesquisa">

      <div>
        <label class="localizacao">Localização:</label>
        <input type="text" id="local" name="local"><br>
      </div>

      <div>
        <label class="localizacao">Hóspedes:</label>
        <input type="radio" id="2adultos" name="adultos" value="2adultos">
        <label for="2adultos">2 hóspedes</label> 
        <input type="radio" id="4adultos" name="adultos" value="4adultos">
        <label for="4adultos">4 hóspedes</label>
        <input type="radio" id="6adultos" name="adultos" value="6adultos">
        <label for="6adultos">6 hóspedes</label><br>
      </div>

      <div>
          <label class="localizacao">Acomodação:</label>
          <input type="checkbox" id="locacao1" name="locacao1" value="casa"> 
          <label for="locacao1"> Casa </label>
        
          <input type="checkbox" id="locacao2" name="locacao2" value="apartamento"> 
          <label for="locacao2"> Apartamento </label><br> 
      </div>

        <a href="resultado.html" ><button class="botaoPesquisa">Pesquisar melhor locação</button></a>
       
    </div>
     
    <br><br><br><br>

  </div>
-->


    <div  class="fundoPesquisa">
      <br>

        <h1 class="titulo">Locações</h1>
        <h3 class="subtitulo">Faça uma pesquisa e encontre o lugar certo para você se hospedar!</h3>

     <div class="pesquisa">

      <form name="pesquisa" method="post" action="#" onsubmit="return validaForm(this);">
        <p>Localização: <input type="text" name="local" id="local" /></p>
        <p>Quantidade de pesssoas:
          <select name="quantidade" id="quant">
            <option>1</option>
            <option>2</option>
            <option>3</option>
            <option>4</option>
            <option>5</option>
          </select>
        <p>Data: <input type="date" name="data"  id="data"></p>
        </p><label><input class="botaoPesquisa" type="submit" name="sbt" value="Enviar" /></label></p>
      </form>

    </div>
  
    <br><br><br><br>

  </div>
 

    <!-- Contato -->
    <h1 class="tituloContato"  id="contato">Contato</h1>
      <h3 class="subtitulo">Ficou com alguma dúvida? Entre em contato conosco!</h3>
    <div class="contato" >
      <div class="paragrafoContato">
        <p><b>ENDEREÇO:</b> Rua dos Alfeneiros, nº4, Bairro Mágico, Rio Paranaíba - MG</p>
        <p><b>TELEFONE:</b> (34) 4002-8922</p>
        <p><b>E-MAIL:</b> suzane@temvagaai.com.br</p>
      </div>
    </div>
    <br><br>

    <!-- RODAPÉ -->
      <footer>
          <p>Todos os direitos reservados</p>
      </footer>
    
<script>

//Função de mudar CSS do site
function mudarCSS(cssFile, cssLinkIndex) {

  var oldlink = document.getElementsByTagName("link").item(cssLinkIndex);

  var newlink = document.createElement("link");

  newlink.setAttribute("rel", "stylesheet");
  newlink.setAttribute("type", "text/css");
  newlink.setAttribute("href", cssFile);

  document.getElementsByTagName("head").item(0).replaceChild(newlink, oldlink);
}

//Função de validar o formulario de pesquisa
function validaForm(frm) {

    //Não receber localização vazia
    if(frm.local.value == "") {
        alert("Por favor, preencha a localização!");
        frm.local.focus();
        return false;
    }

    //Não receber numero
    if(!isNaN(frm.local.value)) {
        alert("Por favor, não preencher com número!");
        frm.local.focus();
        return false;
    } 

    //Não receber data vazia
    if(frm.data.value == "") {
        alert("Por favor, preencha a data!");
        frm.data.focus();
        return false;
    }
}

/*Função de preencher com CSV
d3.csv("dropdown.csv", function(data) {
  for(var i = 0; i < data.length; i++) {
    console.log(data[i].quant);
  }
}*/


</script>

</body>


</html>