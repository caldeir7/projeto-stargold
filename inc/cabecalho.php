<?php


?>
<!doctype html>
<html lang="pt-br">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title> Microblog </title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
  <link rel="stylesheet" href="css/style.css">
</head>

<body>


  <header id="" class="">

    <nav class="">
      <div class="">
        <h1>
          <a class="" href="index.php">StarGold</a>
        </h1>

        <button class="" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class=""></span>
        </button>

        <div class="" id="navbarSupportedContent">
          <ul class="">
            <li class="">
              <a class="" href="index.php">
                Home <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="">
              <a class="" href="index.php">
                Produtos <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="">
              <a class="" href="index.php">
                Categorias<span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="">
              <a class="" href="admin/index.php">Login</a>
            </li>
          </ul>

          <form class="form-inline my-2 my-lg-0" action="search.php" method="get">
            <input class="form-control mr-sm-2" type="search" placeholder="Pesquise aqui" aria-label="Search" name="q">
            <button class="btn btn-outline-secondary my-2 my-sm-0" type="submit">Pesquisar</button>
          </form>

        </div>
      </div>
    </nav>
  </header>
  
  <main class="container">