<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<title>Cadastro de Usuários</title>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

<style>

body{
    font-family: Arial, Helvetica, sans-serif;
    background: linear-gradient(135deg,#0f2027,#203a43,#2c5364);
    margin:0;
    padding:0;
}

.container{
    width:100%;
    display:flex;
    justify-content:center;
    margin-top:60px;
}

.card-form{
    background:white;
    width:420px;
    padding:35px;
    border-radius:15px;
    box-shadow:0 15px 40px rgba(0,0,0,0.3);
}

.card-form h2{
    margin-bottom:10px;
    color:#333;
}

.card-form p{
    color:#666;
    font-size:14px;
    margin-bottom:20px;
}

/* botão voltar */
.voltar{
    display:inline-block;
    margin-bottom:15px;
    text-decoration:none;
    background:#6c757d;
    color:white;
    padding:8px 14px;
    border-radius:6px;
    font-size:13px;
    transition:0.3s;
}

.voltar:hover{
    background:#5a6268;
}

.form-group{
    display:flex;
    flex-direction:column;
    margin-bottom:18px;
}

.form-group label{
    margin-bottom:5px;
    font-weight:bold;
    font-size:14px;
}

.form-group input,
.form-group select{
    padding:10px;
    border-radius:6px;
    border:1px solid #ccc;
    font-size:14px;
    transition:0.3s;
}

.form-group input:focus,
.form-group select:focus{
    outline:none;
    border-color:#4a90e2;
    box-shadow:0 0 5px rgba(74,144,226,0.5);
}

.buttons{
    display:flex;
    justify-content:space-between;
    align-items:center;
}

.btn-salvar{
    background:#28a745;
    color:white;
    border:none;
    padding:10px 18px;
    border-radius:6px;
    cursor:pointer;
    font-size:14px;
    transition:0.3s;
}

.btn-salvar:hover{
    background:#218838;
}

.cancelar{
    background:none;
    border:none;
    text-decoration:none;
    color:#555;
    font-size:14px;
    cursor:pointer;
    transition:0.3s;
}

.cancelar:hover{
    color:red;
}

</style>
</head>

<body>

<div class="container">

<div class="card-form">
<center>
<a href="index.php" class="voltar">
<i class="fa-solid fa-arrow-left"></i> Voltar para o início
</a>
</center>

<h2><i class="fa-solid fa-user-plus"></i> Novo Usuário</h2>
<p>Preencha os dados abaixo para registrar um novo acesso.</p>

<form action="salvar_usuario.php" method="POST">

<div class="form-group">
<label for="nome">Nome Completo</label>
<input type="text" id="nome" name="nome" placeholder="Digite o nome completo" required>
</div>

<div class="form-group">
<label for="email">E-mail</label>
<input type="email" id="email" name="email" placeholder="Digite o e-mail" required>
</div>

<div class="form-group">
<label for="senha">Senha</label>
<input type="password" id="senha" name="senha" placeholder="Digite a senha" required>
</div>

<div class="form-group">
<label for="perfil">Perfil de Usuário</label>
<select id="perfil" name="perfil">
<option value="admin">Administrador</option>
<option value="usuario">Usuário</option>
</select>
</div>

<div class="buttons">

<button class="btn-salvar" type="submit">
<i class="fa-solid fa-floppy-disk"></i> Salvar
</button>

<button type="reset" class="cancelar">Cancelar</button>
</div>

</form>

</div>
</div>

</body>
</html>