<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <title>Dashboard</title>
  <link rel="stylesheet" href="style2.css">
</head>
<body>
  <div class="dashboard-container">
    <nav>
      <ul>
        <li><a href="index.php">🏠 Início</a></li>
        <li><a href="#">🗃️ Projetos</a></li>
        <li><a href="usuarios.php">👥 Usuários</a></li>
        <li><a href="cad-users.php">⚙️ Cadastrar</a></li>
      </ul>
      <div class="perfil-usuario">
        <img src="https://ui-avatars.com/api/?name=Kaka&background=6a0dad&color=fff" alt="Avatar">
        <span>Kaká</span>
      </div>
    </nav>

   <main>

  <!-- TABELA DE USUÁRIOS -->
  <section class="tabela-section">

    <h2>Lista de Usuários</h2>

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
