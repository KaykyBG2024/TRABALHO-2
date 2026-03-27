<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <title>Dashboard</title>
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">  


<style>

    .logout {
  margin-top: 430px;
}

.logout a {
  display: block;
  color: #fff;
  text-decoration: none;
  padding: 10px;
  border-radius: 4px;
  transition: background 0.3s;
}

.logout a:hover {
  background-color: #092946;
  color: #ffd700;
}

    .tabela-section{
    display:flex;
    flex-direction:column;
    align-items:center;
    justify-content:center;
    min-height:70vh;
}

.form-usuarios{
    width:100%;
    max-width:650px;
    background:white;
    padding:35px;
    border-radius:12px;
    box-shadow:0 10px 25px rgba(0,0,0,0.15);
}

.form-group{
    display:flex;
    flex-direction:column;
    margin-bottom:18px;
}

.form-group label{
    font-weight:bold;
    margin-bottom:6px;
    color:#333;
    font-size:15px;
}

.form-group input,
.form-group select{
    padding:12px;
    border:1px solid #ccc;
    border-radius:8px;
    font-size:15px;
    transition:0.3s;
}

.form-group input:focus,
.form-group select:focus{
    border-color:#6a0dad;
    outline:none;
    box-shadow:0 0 6px rgba(106,13,173,0.3);
}

.btn-salvar{
    width:100%;
    background:linear-gradient(90deg,#6a0dad,#7b1fd1);
    color:white;
    border:none;
    padding:14px;
    border-radius:8px;
    font-size:16px;
    font-weight:bold;
    cursor:pointer;
    transition:0.3s;
}

.btn-salvar:hover{
    transform:scale(1.03);
    box-shadow:0 5px 15px rgba(0,0,0,0.2);
}


.botoes-form{
    display:flex;
    gap:10px;
}

.btn-cancelar{
    width:100%;
    background:#dc3545;
    color:white;
    border:none;
    padding:14px;
    border-radius:8px;
    font-size:16px;
    font-weight:bold;
    cursor:pointer;
    transition:0.3s;
}

.btn-cancelar:hover{
    background:#b02a37;
    transform:scale(1.03);
}


</style>


</head>
<body>
  <div class="dashboard-container">
    <nav>
      <ul>
        <li><a href="inicio.php"><i class="fa-solid fa-house"></i> Início</a></li>
        <li><a href="postagens.php"><i class="fa-solid fa-pen-to-square"></i> Postagens</a></li>
        <li><a href="usuarios.php"><i class="fa-solid fa-users"></i></i> Usuários</a></li>
        <li><a href="categorias.php"><i class="fa-solid fa-list"></i></i> Categorias</a></li>
      </ul>

      
      <div class="logout">
        <a href="index.php"><i class="fa-solid fa-right-from-bracket"></i> Sair</a>
      </div>


      <div class="perfil-usuario">
        <img src="https://ui-avatars.com/api/?name=Kaka&background=6a0dad&color=fff" alt="Avatar">
        <span>Kaká</span>
      </div>
    </nav>

    <main>
      <section class="tabela-section">

<h1>Cadastro de categoria</h1>
<br><br>

<form action="salvar_postagem.php" method="POST" class="form-usuarios">

<div class="form-group">
<label for="nome">Nome da Categoria</label>
<input type="text" id="nome" name="nome" placeholder="Digite o nome da categoria" required>
</div>

<div class="form-group botoes-form">
<button type="submit" class="btn-salvar">Salvar categorias</button>
<button type="reset" class="btn-cancelar">Cancelar</button>
</div>

</form>     

</section>
    </main>
  </div>

  <footer>
    <p>&copy; <?php echo date('Y'); ?> - Desenvolvido na aula de Web I - Kayky</p>
  </footer>
</body>
</html>
