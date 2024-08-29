<?php

$cakeDescription = 'L@rBlog.com';
?>

<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->css('custom') ?>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>
        <?= $cakeDescription ?>:
        <?= $this->fetch('title') ?>
    </title>
    <?= $this->Html->meta('icon') ?>

    <?= $this->Html->css(['normalize.min', 'milligram.min', 'fonts', 'cake']) ?>

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
</head>
<body>
    
    <nav class="top-nav">
        <div class="top-nav-title">
            <a href="<?= $this->Url->build('/') ?>"><span>L@r</span>Blog.com</a>
        </div>
        <div class="top-nav-links">
            <a target="_blank" rel="noopener" href="https://book.cakephp.org/4/">Documentation</a>
            <a target="_blank" rel="noopener" href="https://api.cakephp.org/">API</a>
        </div>
    </nav>
    <main class="main">
        <div class="container">
            <?= $this->Flash->render() ?>
            <?= $this->fetch('content') ?>
        </div>
    </main>
    
    <footer>
    <div class="container_2">
        <p>&copy; <?= date('Y'); ?> Meu Blog. Todos os direitos reservados.</p>
        <ul>
            <li><a href="#">Sobre</a></li>
            <li><a href="https://www.linkedin.com/in/larissa-martins-82b7a8206/">Contato</a></li>
            <li><a href="#">Política de Privacidade</a></li>
        </ul>
    </div>

    </footer>
</body>
</html>
