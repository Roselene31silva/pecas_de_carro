<?php
include "cabecalho.php";
include "banner.php";
?>
<div class="container">
    <h2 class="display-5">Melhores avaliações</h2>

    <div class="row mt-5">
        <?php
        include "conexao.php";

        $sql = "select * from produtos limit 8";
        $resultado = mysqli_query($conexao, $sql);
        //echo "<pre>";
        //print_r($resultado);
        //exit();  

        while ($linha = mysqli_fetch_assoc($resultado)) {
        ?>
            <div class="col-3">
                <img src="<?= $linha['foto']; ?>" class="img-fluid capa-produtos">
                <h3><?= $linha['nome']; ?></h3>
                <span>👩‍🔧<?= $linha['marca']; ?></span>
            </div>
       <?php
        }
        mysqli_close($conexao);
        ?>
    </div>
    <div class="row">

        <div class="col-6">
            <img src="imagem/alternador.webp" class="img-fluid">
        </div>
        <div class="col-6 align-content-center">
            <p>Converte a energia mecânica em energia elétrica, alimentando os componentes elétricos do veículo e
                carregando a bateria.</p>
            <a href="https://http2.mlstatic.com/D_NQ_NP_806668-MLB79503" class="btn btn-success
             btn-lg">Veja mais</a>
        </div>
    </div>

    <div class="row">
        <div class="col-6 align-content-center">
            <p>Para reduzir a velocidade ou parar completamente um veículo, s</p>
            <a href="https://cdn.shopify.com/s/files/1/0767/8246/9395/f" class="btn btn-success
            btn-lg">Veja mais</a>
        </div>
        <div class="col-6">
            <img src="imagem/disco-de-freio.webp" class="img-fluid">
        </div>
    </div>
    <!--buton trigger modal -->
    <button type="button" class="btn btn-warning btn-lg mt-5 fs-5 fw-bold" data-bs-toggle="modal"
        data-bs-target="#exampleModal">
        Precisa de ajuda? Clique Aqui
    </button>
    <!-- Modal -->
    <div class="modal fade" id="exemploModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Ajuda💭</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>Entre em contato através dos nossos canais de comunicação:</p>
                    <p>E-mail: contato@exemplo.com.br <br>Whatsapp: (11)99999-9999<br><a href="contato.php">Formulário
                            de contato</a></p>
                </div>
            </div>
        </div>
    </div>
    <button type="button" class="btn btn-danger btn-lg mt-5 fs-5 fw-bold text-white" data-bs-toggle="modal"
        data-bs-target="#sugestao">
        Sugestões? Clique Aqui
    </button>
    <!-- Modal -->
    <div class="modal fade" id="sugestao" tabindex="-1" aria-labelledby="sugestaoLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="sugestaoLabel">Sugestão🤔</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>Mande uma sugestão de filme que você quer ver na nossa página!</p>
                    <p>Whatsapp: (11)99999-9999<br><a href="contato.php">Formulário de conato</a></p>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include "rodape.php"; ?>