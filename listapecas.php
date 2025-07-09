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
        <div class="col-3 text-center mb5">
               <div class="col-3 text-center mb5">
            <div class="card" style="width: 18rem;">
                <img src=<?=$linha['foto'];?> class="img-fluid capa-filme">
                <h3><?php echo mb_strimwidth($linha['titulo'], 0, 20, "...");?></h3>
                <div class="card-body">
                    <h5><?=$linha['titulo'];?></h5>
                    <p class="card-text">⭐<?=$linha['avaliacao'];?>/10</p>
                    <a href="pecas.php?id=<?=$linha['id'];?>" class="btn btn-primary">Veja detalhes</a>
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