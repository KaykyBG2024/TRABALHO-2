<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <title>Dashboard</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <div class="dashboard-container">
    <nav>
      <ul>
        <li><a href="#">🏠 Início</a></li>
        <li><a href="#">🗃️ Projetos</a></li>
        <li><a href="usuarios.php">👥 Usuários</a></li>
        <li><a href="cad-users.php">➕ cadastrar</a></li>
      </ul>
      <div class="perfil-usuario">
        <img src="https://ui-avatars.com/api/?name=Kaka&background=6a0dad&color=fff" alt="Avatar">
        <span>Kaká</span>
      </div>
    </nav>

    <main>
      <section class="container-cards">
        <article>
          <h2>Módulo de Usuários</h2>
          <p>Gerencie acessos e permissões do sistema.</p>
          <a href="#" class="btn">Acessar</a>
        </article>

        <article>
          <h2>Projetos</h2>
          <p>Acompanhe os gráficos de desempenho.</p>
          <a href="#" class="btn">Acessar</a>
        </article>

        <article>
          <h2>Configurações</h2>
          <p>Ajuste servidores e banco de dados.</p>
          <a href="#" class="btn">Acessar</a>
        </article>
      </section>
    </main>
  </div>

  <footer>
    <p>&copy; <?php echo date('Y'); ?> - Desenvolvido na aula de Web I - Kayky</p>
  </footer>
</body>
</html>
