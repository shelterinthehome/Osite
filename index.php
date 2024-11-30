<?php session_start(); ?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Aquarismo Shop</title>
    <link rel="stylesheet" href="styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1>Produtos</h1>
        <div class="row">
            <!-- Produto 1 -->
            <div class="col-md-4">
                <div class="card">
                    <img src="peixe.jpg" class="card-img-top" alt="Produto 1">
                    <div class="card-body">
                        <h5 class="card-title">Aquário Explosivamente bom</h5>
                        <p class="card-text">Preço: R$ 200,00</p>
                        <form action="carrinho.php" method="POST">
                            <input type="hidden" name="produto" value="Aquário Explosivamente bom">
                            <input type="hidden" name="preco" value="200.00">
                            <button type="submit" class="btn btn-primary">Comprar</button>
                        </form>
                    </div>
                </div>
            </div>

            <!-- Produto 2 -->
            <div class="col-md-4">
                <div class="card">
                    <img src="peix.avif" class="card-img-top" alt="Produto 2">
                    <div class="card-body">
                        <h5 class="card-title">Aquário Calibre .50</h5>
                        <p class="card-text">Preço: R$ 300,00</p>
                        <form action="carrinho.php" method="POST">
                            <input type="hidden" name="produto" value="Aquário Calibre .50">
                            <input type="hidden" name="preco" value="300.00">
                            <button type="submit" class="btn btn-primary">Comprar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <a href="carrinho.php" class="btn btn-secondary mt-4">Ver Carrinho</a>
    </div>
</body>
</html>
