<?php
include "cabecalho.php";
include "banner.php";
?>
<div class="container">
    <h2 class="display-5">Melhores peças</h2>

    <div class="row mt-5">
        <?php
        include "conexao.php";

        $sql = "select * from produtos limit 4";
        $resultado = mysqli_query($conexao, $sql);

        //echo "<pre>";
        //print_r($resultado);
        //exit();  
        while ($linha = mysqli_fetch_assoc($resultado)) {
        ?>
            <div class="card" style="width: 18rem;">
                <img src=<?= $linha['foto']; ?> class="img-fluid capa-produtos">
                <h3><?php echo mb_strimwidth($linha['nome'], 0, 20, "..."); ?></h3>
                <div class="card-body">
                    <h5><?= $linha['categoria']; ?></h5>
                    <p class="card-text"><?= $linha['descricao']; ?></p>
                    <a href="produtos.php?id=<?= $linha['id']; ?>" class="btn btn-primary">Veja detalhes</a>
                </div>
            </div>
        <?php
        }
        mysqli_close($conexao)
        ?>
        <div class="row">

            <div class="col-6">
                <img src="imagem/alternador.webp" class="img-fluid">
            </div>
            <div class="col-6 align-content-center">
                <p>Converte a energia mecânica em energia elétrica, alimentando os componentes elétricos do veículo e carregando a bateria.</p>
                <a href="https://http2.mlstatic.com/D_NQ_NP_806668-MLB79503" class="btn btn-success
            btn-lg"></a>
            </div>
        </div>

        <div class="row">
            <div class="col-6 align-content-center">
                <p>Para reduzir a velocidade ou parar completamente um veículo, s</p>
                <a href="https://cdn.shopify.com/s/files/1/0767/8246/9395/f" class="btn btn-success
            btn-lg"></a>
            </div>
            <div class="col-6">
                <img src="imagem/disco-de-freio.webp" class="img-fluid">
            </div>
        </div>
        <button type="button" class="btn btn-warning btn-lg mt-5 fs-5 fw-bold" data-bs-toggle="modal" data-bs-target="#exampleModal">
        Precisa de ajuda? Clique Aqui
    </button>
    </div>
    <?php include "rodape.php"; ?>