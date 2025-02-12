<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
          <a class="navbar-brand" href="index.php">Home</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="index.php">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="cadastrar.php">Cadastrar Aluno</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="consultar.php"> Consultar Aluno</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <div class="container col-6 mt-3">
     <form action="php/inserir.php" method="get">
      <input type="text"class="form-control-lg nt-1" name="nome" placeholder="Nome">
       <input type="text" class="form-control-lg nt-1" name="idade" placeholder="Idade">
        <input type="text" class="form-control-lg nt-1" name="telefone" placeholder="Telefone">
         <input type="text" class="form-control-lg nt-1" name="email" placeholder="Email">

         <input type="submit" class="btn bg-success form-control-lg nt-1" value="Cadastrar">



     </form>
    </div>
    
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</html>