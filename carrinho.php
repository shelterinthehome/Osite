<?php
session_start();

// Inicializa o carrinho se não existir
if (!isset($_SESSION['carrinho'])) {
    $_SESSION['carrinho'] = [];
}

// Adiciona produtos ao carrinho
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $produto = $_POST['produto'];
    $preco = $_POST['preco'];

    // Adiciona o produto ao carrinho
    $_SESSION['carrinho'][] = [
        'produto' => $produto,
        'preco' => $preco
    ];
}

// Exibe os itens do carrinho
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Carrinho</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1>Carrinho de Compras</h1>
        <?php if (!empty($_SESSION['carrinho'])): ?>
            <ul class="list-group">
                <?php foreach ($_SESSION['carrinho'] as $item): ?>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        <?= htmlspecialchars($item['produto']); ?>
                        <span>R$ <?= number_format($item['preco'], 2, ',', '.'); ?></span>
                    </li>
                <?php endforeach; ?>
            </ul>
        <?php else: ?>
            <p class="mt-4">Seu carrinho está vazio.</p>
        <?php endif; ?>

        <a href="index.php" class="btn btn-secondary mt-4">Voltar</a>
    </div>
</body>
</html>
