<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<title>Site com Flexbox</title>

<style>

/* PASSO 5 - Configuração do body (Sticky Footer) */
body{
    background-color:#fdfdfd;
    font-family: "Courier New", Courier, monospace;
    color:#333;

    display:flex;
    flex-direction:column;
    min-height:100vh;
}

/* HEADER */

header{
    background:#222;
    color:white;
    padding:20px;
    text-align:center;
}

/* PASSO 3 - Menu perfeito */

nav ul{
    list-style:none;
    padding:10px;

    display:flex;
    justify-content:center;
    gap:30px;
}

nav a{
    text-decoration:none;
    color:white;
    font-weight:bold;
}

nav a:hover{
    color:#00c3ff;
}

/* PASSO 4 - Área dos cards */

main{
    display:flex;
    justify-content:space-between;
    flex-wrap:wrap;
    gap:20px;
    padding:20px;

    flex:1;

    align-content:flex-start;
}

/* Cards */

article{
    flex:1 1 300px;
    min-width:300px;

    background:white;
    padding:15px;

    border-radius:8px;

    box-shadow:0 4px 8px rgba(0,0,0,0.1);
}

/* Rodapé */

footer{
    background:#222;
    color:white;
    text-align:center;
    padding:15px;
}

</style>

</head>

<body>

<header>
<h1>TECNOLOGIA</h1>
<h2>utiizando o Flexbox</h2>

<nav>
<ul>
<li><a href="#">Início</a></li>
<li><a href="#">Notícias</a></li>
<li><a href="#">Tutoriais</a></li>
<li><a href="#">Contato</a></li>
</ul>
</nav>

</header>


<main>

<article>
<h2>Notícia 1</h2>
<p>Este é um exemplo de card usando Flexbox. Os cards ficam lado a lado automaticamente.</p>
</article>

<article>
<h2>Notícia 2</h2>
<p>Se a tela diminuir, os cards quebram linha automaticamente usando flex-wrap.</p>
</article>

<article>
<h2>Notícia 3</h2>
<p>O box-shadow cria uma sombra leve para dar profundidade.</p>
</article>

<article>
<h2>Notícia 4</h2>
<p>O layout também mantém o rodapé sempre no final da página.</p>
</article>

</main>


<footer>
<p>© 2026 - Site Flexbox desenvolvido por Kayky</p>
</footer>

</body>
</html>