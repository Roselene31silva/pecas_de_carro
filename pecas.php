<?php
include "cabecalho.php";
// 1 - recuperar informação do id 
$id = $_GET['id'];
// 2 - conexão com bd 
include "conexao.php";
// 3 - montagem do sql
$sql = "select * from produtos where id = $id ";

// 4 - execução do sql
$resultado = mysqli_query($conexao, $sql);
// 5 - definição das variaveis
$titulo = "";
$codigo = "";
$nome = "";
$categoria = "";
$marca = "";
$preco = 0;
$quantidade = 0;
$descricao = "";
$foto = "";
// 6 - laço com as informações da peça
while ($linha = mysqli_fetch_assoc($resultado)) {
    $titulo = $linha["titulo"];
    $codigo = $linha["codigo"];
    $nome = $linha["nome"];
    $categoria = $linha["categoria"];
    $marca = $linha["marca"];
    $preco = $linha ["preco"];
    $quantidade = $linha["quantidade"];
    $descricao = $linha["descricao"];   
    $foto = $linha["foto"];
}
// 7 - fechar a conexão com bd
mysqli_close($conexao);
// 8 - monstrar as informações na tela
?>
<div class="container">
    <div class="row mx-5 mt-5">
        <div class="col">
            <img src="<?= $foto ?>" class="img-fluid">
        </div>
        <div class="col">
            <h2 class="text-start"><?= $titulo ?></h2>
            <p>👨‍🔧<?= $codigo ?></p>
            <p><strong>Categoria:</strong> <?= $categoria ?></p>
            <p><strong>Marca:</strong> <?= $marca ?></p>
            <p><strong>Preço:</strong> R$ <?= number_format($preco, 2, ',', '.') ?></p>
            <p><strong>Descrição:</strong> <?= $descricao ?></p>   
        </div>
    </div>
</div>
<?php include "rodape.php"; ?>