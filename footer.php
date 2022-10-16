<body class="d-flex h-100 text-center text-white bg-dark">
    
<div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">
  <header class="mb-auto">
    <div>
      <h3 class="float-md-start mb-0">Torrents</h3>
      <nav class="nav nav-masthead justify-content-center float-md-end">
      </nav>
    </div>
  </header>

  <main class="px-3">
    <h1>Lista de torrents underc0de</h1>
    <p class="lead">Con un simple click tendras acceso a los cursos</p>
    <table class="table table-striped table">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Titulo</th>
              <th scope="col">Torrent</th>
            </tr>
          </thead>
          <tbody>
          <?php 
            require 'conexion.php';
            $Query = "SELECT * FROM torrent";
            $Result = $conexion->query($Query);
            while($row = $Result->fetch_assoc()){
            ?>
            <tr>
              <td><?php echo $row['id']; ?></td>
              <td><?php echo $row['titulo']; ?></td>
              <td><a href='<?php echo $row['torrent']; ?>'>Descargar</a></td>
            </tr>
            <?php
            }
            ?>
          </tbody>
        </table>
  </main>
</div>
</body>
</html>
