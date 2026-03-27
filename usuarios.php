<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <title>Dashboard</title>
  <link rel="stylesheet" href="style2.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">  


<style>
.topo-tabela{
    display:flex;
    justify-content:space-between;
    align-items:center;
    margin-bottom:15px;
}

.btn-cadastrar{
    background:#28a745;
    color:white;
    padding:10px 18px;
    text-decoration:none;
    border-radius:6px;
    font-weight:bold;
    transition:0.3s;
}

.btn-cadastrar:hover{
    background:#218838;
    transform:scale(1.05);
}

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

<div class="topo-tabela">
  <h1>Lista de usuários</h1>
  <a href="cad-users.php" class="btn-cadastrar">➕ Cadastrar Usuário</a>
</div>
  
    <table class="tabela-usuarios">

      <thead>
        <tr>
          <th>ID</th>
          <th>Nome</th>
          <th>Email</th>
          <th>Tipo</th>
          <th>Status</th>
          <th>Ações</th>
        </tr>
      </thead>

      <tbody>

        <tr>
          <td>1</td>
          <td>Amaral Souza</td>
          <td>Amaralzikabolado2k@email.com</td>
          <td>Administrador</td>
          <td class="ativo">Ativo</td>
          <td><a href="#" class="btn-editar">Editar</a></td>
        </tr>

        <tr>
          <td>2</td>
          <td>Gustavo Puga</td>
          <td>puga@email.com</td>
          <td>Usuário</td>
          <td class="inativo">Inativo</td>
          <td><a href="#" class="btn-editar">Editar</a></td>
        </tr>

        <tr>
          <td>3</td>
          <td>Kayky Barbozane</td>
          <td>kayky@email.com</td>
          <td>Editor</td>
          <td class="ativo">Ativo</td>
          <td><a href="#" class="btn-editar">Editar</a></td>
        </tr>

      </tbody>

    </table>

  </section>

</main>
</div>

  <footer>
    <p>&copy; <?php echo date('Y'); ?> - Desenvolvido na aula de Web I - Kayky</p>
  </footer>
</body>
</html>
