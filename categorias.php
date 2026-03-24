<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <title>Dashboard</title>
  <link rel="stylesheet" href="style.css">
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

.tabela-categorias{
    width:450px;
    background:white;
    border-radius:10px;
    overflow:hidden;
    box-shadow:0 8px 20px rgba(0,0,0,0.1);
    border-collapse:collapse;
    margin:auto;
}

.tabela-categorias th{
    background:#6a0dad;
    color:white;
    padding:12px;
    text-align:center;
}

.tabela-categorias td{
    padding:10px;
    text-align:center;
    border-bottom:1px solid #eee;
}

.tabela-categorias tr:hover{
    background:#f7f7f7;
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
      <div class="perfil-usuario">
        <img src="https://ui-avatars.com/api/?name=Kaka&background=6a0dad&color=fff" alt="Avatar">
        <span>Kaká</span>
      </div>
    </nav>

    <main>
      <section class="tabela-section">

<div class="topo-tabela">
  <h1>Lista de Categorias</h1>
  <a href="cad-categoria.php" class="btn-cadastrar">➕ Cadastrar Categoria</a>
</div>

<br><br>

<table class="tabela-categorias">

<thead>
<tr>
<th>ID</th>
<th>Nome</th>
<th>Status</th>
<th>Ações</th>
</tr>
</thead>

<tbody>

<tr>
<td>1</td>
<td>Tecnologia</td>
<td class="ativo">Ativo</td>
<td><a href="#" class="btn-editar">Editar</a></td>
</tr>

<tr>
<td>2</td>
<td>Programação</td>
<td class="ativo">Ativo</td>
<td><a href="#" class="btn-editar">Editar</a></td>
</tr>

<tr>
<td>3</td>
<td>Notícias</td>
<td class="inativo">Inativo</td>
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
