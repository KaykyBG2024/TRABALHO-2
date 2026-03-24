<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <title>Dashboard</title>
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">  
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
          <a href="usuarios.php" class="btn">Acessar</a>
        </article>

        <article>
          <h2>Postagens </h2>
          <p>Acompanhe as postagens dos usuários.</p>
          <a href="postagens.php" class="btn">Acessar</a>
        </article>

        <article>
          <h2>Categoria</h2>
          <p>Gerencia as categorias dos posts.</p>
          <a href="categorias.php" class="btn">Acessar</a>
        </article>
      </section>
    </main>
  </div>

  <footer>
    <p>&copy; <?php echo date('Y'); ?> - Desenvolvido na aula de Web I - Kayky</p>
  </footer>
</body>
</html>
