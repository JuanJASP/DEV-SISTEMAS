<?

$titulo = "Aula de revisao tabela";

$lang = "pt-br";

$rodape = "
<footer>
    <small>&copy; Copyright 2024</small>
</footer>";

$vetor=["nome","email","telefone"];
$nomes=["nome","email","telefone"];

?>





<!DOCTYPE html>
<html lang="<?php echo $lang; ?>">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title><?= $titulo; ?></title>
</head>
<body>
<header>
    <nav>
        <ul>
            <a href="./index.html"><li>Home</li></a>
            <a href="./tabela.html">
                <li>Tabela</li>
            </a>
            <a href="./contato.html">
                <li>Contato</li>
            </a>
        </ul>
    </nav>
</header>
<main>
    <section id="principal">
        <h1><?=$titulo?></h1>
        <form action="#">
            <label for="nome">Nome</label>
            <input type="text" name="nome" id="nome"><br>
            <label for="email">Email</label>
            <input type="email" name="email" id="email"><br>
            <label for="telefone">telefone</label>
            <input type="text" name="telefone" id="telefone"><br>
            <button type="submit">Enviar</button>

        </form>

    </section>
</main>
<footer>
    <small>&copy; Copyright 2024</small>
</footer>
</body>
</html>