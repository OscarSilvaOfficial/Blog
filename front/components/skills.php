<?php 

require_once('../../back/entities/artigo.php');
$artigo = new Artigo();
$artigos = $artigo->getAll();

?>


<!DOCTYPE html>
<html lang="pt-br">

<head>
    <title>Meu Blog</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
</head>

<body id="body-blog">
    <div id="container-blog">
        <h1>Meu Blog</h1>
        <?php foreach ($artigos as $artigo) { ?>
            <h2>
                <a id="a-blog" href="<?php echo $artigo['link'] ?>"><?php echo $artigo['titulo'] ?></a>
            </h2>
            <p>
                <?php echo $artigo['conteudo'] ?>
            </p>
        <?php } ?>
    </div>
</body>

</html>