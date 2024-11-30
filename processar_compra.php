processar_compra.php<?php
// Configura o cabeçalho para responder em JSON
header('Content-Type: application/json');

// Gera um valor aleatório entre 1000 e 15000
$valorCompra = rand(1000, 15000);

// Simula o salvamento de dados no servidor
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $produto = $_POST['produto'] ?? 'Produto desconhecido';
    
    // Aqui você pode implementar a lógica para salvar os dados no banco de dados
    // Exemplo: salvar em um arquivo local
    $data = date('Y-m-d H:i:s');
    file_put_contents('compras.txt', "[$data] Produto: $produto | Valor: $valorCompra\n", FILE_APPEND);

    // Retorna o valor gerado
    echo json_encode(['sucesso' => true, 'valor' => $valorCompra]);
} else {
    echo json_encode(['sucesso' => false, 'mensagem' => 'Método não permitido.']);
}
?>
