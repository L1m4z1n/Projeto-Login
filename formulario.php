<?php

if(isset($_POST['submit'])){
    print_r($_POST['gmail']);
    print_r($_POST['senha']);
}

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="estilos/style.css">

    <link rel="stylesheet" href="estilos/mediaquery.css">

    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" rel="stylesheet" />
    <title>Login</title>
</head>
<style>
    @charset "UTF-8";

/* Typical Device Breakpoints
-------------------------------
   Pequenas Telas: Até 600px
   Celular: de 600px até 768px
   Tablet: 768px até 992px
   Desktop: 992px até 1200px
   Grandes Telas: acima de 1200px
    
*/

/*
Palheta de Cores:
------------------
Azul Escuro: #012840;
Mais escuro: #011826;
Preto: #03090D;
Azul claro: #BAD0D9;
Ciano: #D8EDF2;
*/

* {
    font-family: Arial, Helvetica, sans-serif;
    margin: 0px;
    padding: 0px;
    box-sizing: border-box;
}

body, html {
    background-color: #012840;
    height: 100vh;
   width: 100vw;
}

h1 {
    text-align: center;
}

main {
    width: 100vw;
    position: relative;
    height: 100vh;
    background-color:#012840 ;
    color: white;
}

section#login {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  background-color: #011826;
  width: 250px;
  height: 505px;
  border-radius: 20px;
  overflow: hidden;
  box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.436);
  transition: width 0.3s, height 0.3s;
  transition-timing-function: ease;
}

section#login > div#imagem {
    background: #D8EDF2 url(../imagens/pexels-mel-gomes-290426165-13183160.jpg);
    display: block;
    background-size: cover;
    background-repeat: no-repeat;
    height: 200px;
}

section#login > div#formulario {
    padding: 10px;
    display: block;
}

div#formulario > h1 {
    text-align: center;
    margin-bottom: 10px;
}

div#formulario > p {
    font-size: 0.8em;
}

form > div.campo {
    background-color: #011826;
    width: 100%;
    display: block;
    height: 40px;
    border-radius: 8px;
   margin: 5px 0px;
}

div.campo > label {
    display: none;
}

div.campo > span {
    color: #D8EDF2;
    background-color: black;
    font-size: 2em;
    width: 40px;
    padding: 5px;
}

div.campo > input {
    background-color: #13a1c5;
    font-size: 1em;
    height: 100%;
    border: 0px;
    border-radius: 8px;
    padding: 4px;
    width: calc(100%-44px);
    transform: translate(-10px);
}

div > form > p > input[type=submit] {
    display: block;
    font-size: 1em;
    width: 100%;
    height: 40px;
    background-color:#012840 ;
    color: white;
    cursor: pointer;
    border-radius: 5px;
}

div > form > p > input[type=submit]:hover {
    background-color: #D8EDF2;
    color: black;
}

 a.botao {
    display: block;
    text-align: center;
    font-size: 1em;
    width: 100%;
    height: 40px;
    background-color: white;
    color: black;
    border: 1px solid #D8EDF2;
    border-radius: 5px;
    text-decoration: none;
}

a.botao:hover {
    background-color: #D8EDF2;
    color: black;
}

a.botao > span {
    font-size: 0.8em;
}


</style>
<body>
    <main>
        <section id="login">
            <div id="imagem">
               <!--Aqui é a imagem-->
            </div>
            <div id="formulario">
                <h1>Login</h1>
                <p>Seja bem-vindo(a) novamente. Faça login para acessar sua conta e poder fazer as configurações no seu ambiente</p>
        
                <form action="formulario.php" method="post" autocomplete="off">
                    <p><span class="material-symbols-outlined">email</span><label for="igmail"> 
                        <input type="email" name="gmail"
                         id="gmail" required autocomplete="email" placeholder="Seu gmail">
                        </label>
                    </p>
                    <p><span class="material-symbols-outlined">password</span><label for="isenha">
                        <input type="password"
                        name="senha"
                        id="isenha" required minlength="8" maxlength="16"  placeholder="Sua senha" autocomplete="current-password">
                    </label>
                   </p>
                   <p>
                    <input type="submit" value="Entrar">
                    <a href="esqueci.html" class="botao">Esqueci a senha <span class="material-symbols-outlined">mail</span></a>
                   </p>
                </form>
            </div>
        </section>
       
    </main>
</body>
</html>