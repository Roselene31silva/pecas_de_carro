<?php
include "cabecalho.php";
?>

<div class="container">
    <h2>Peças De Carros</h2>
    <div class="row">
        <?php
        include "conexao.php";
        $sql = "select * from produtos";
        $resultado = mysqli_query($conexao, $sql);
        while ($linha = mysqli_fetch_assoc($resultado)) {
            ?>
            // Exibe cada produto em um card Bootstrap estou apendendo a fazer
            <div class="col-md-4">
                <div class="card">
                    <img src="img/<?php echo $linha['imagem']; ?>" class="card-img-top" alt="<?php echo $linha['nome']; ?>">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $linha['nome']; ?></h5>
                        <p class="card-text">Preço: R$ <?php echo number_format($linha['preco'], 2, ',', '.'); ?></p>
                        <a href="detalhes.php?id=<?php echo $linha['id']; ?>" class="btn btn-primary">Ver Detalhes</a>
                    </div>
                </div>
            </div>
            <?php
        }
        mysqli_close($conexao);
        ?>
    </div>
</div>
<?php include "rodape.php"; ?>