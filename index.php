<!DOCTYPE html>
<html lang="pt-BR">
<head>
<meta charset="UTF-8">
<title>Login - Blog Tech</title>

<style>

*{
margin:0;
padding:0;
box-sizing:border-box;
font-family:Arial, Helvetica, sans-serif;
}

body{
height:100vh;
display:flex;
justify-content:center;
align-items:center;
background:linear-gradient(135deg,#154360,#1e5f8a,#2c7fb3);
}

/* container principal */

.login-container{
width:900px;
height:500px;
background:white;
border-radius:12px;
overflow:hidden;
display:flex;
box-shadow:0 10px 30px rgba(0,0,0,0.25);
}

/* lado informativo */

.info{
width:50%;
background:linear-gradient(135deg,#1e5f8a,#2c7fb3);
color:white;
padding:50px;
display:flex;
flex-direction:column;
justify-content:center;
}

.info h1{
font-size:32px;
margin-bottom:20px;
}

.info p{
font-size:15px;
line-height:1.6;
margin-bottom:15px;
}

/* lado login */

.login{
width:50%;
display:flex;
flex-direction:column;
justify-content:center;
padding:50px;
}

.login h2{
margin-bottom:25px;
color:#1e5f8a;
}

.form-group{
display:flex;
flex-direction:column;
margin-bottom:15px;
}

.form-group label{
margin-bottom:5px;
font-weight:bold;
}

.form-group input{
padding:10px;
border:1px solid #ccc;
border-radius:6px;
font-size:14px;
transition:0.3s;
}

.form-group input:focus{
border-color:#2c7fb3;
outline:none;
box-shadow:0 0 5px rgba(44,127,179,0.4);
}

.btn-login{
margin-top:10px;
padding:12px;
border:none;
border-radius:6px;
background:linear-gradient(90deg,#1e5f8a,#2c7fb3);
color:white;
font-size:15px;
font-weight:bold;
cursor:pointer;
transition:0.3s;
}

.btn-login:hover{
background:linear-gradient(90deg,#154360,#1e5f8a);
transform:scale(1.03);
box-shadow:0 5px 15px rgba(0,0,0,0.2);
}

.footer{
position:absolute;
bottom:15px;
color:white;
font-size:13px;
}

</style>

</head>
<body>

<div class="login-container">

<div class="info">

<h1>Blog Tech</h1>

<p>
Bem-vindo ao painel administrativo do Blog Tech.
Aqui você pode gerenciar postagens, categorias e usuários
de forma simples e organizada.
</p>

<p>
Nosso blog é dedicado ao universo da tecnologia,
trazendo conteúdos sobre inovação, programação,
inteligência artificial e as maiores empresas
do mundo digital.
</p>

<p>
Acesse o sistema para administrar todo o conteúdo
do site.
</p>

</div>

<div class="login">

<h2>Login do Sistema</h2>

<form action="inicio.php" method="POST">

<div class="form-group">
<label>Email</label>
<input type="email" name="email" placeholder="Digite seu email" required>
</div>

<div class="form-group">
<label>Senha</label>
<input type="password" name="senha" placeholder="Digite sua senha" required>
</div>
<br><br>
<button type="submit" class="btn-login" href="inicio.php">Entrar no Sistema</button>

</form>

</div>

</div>

<div class="footer">
© <?php echo date('Y'); ?> - Desenvolvido na aula de Web I - Kayky
</div>

</body>
</html>