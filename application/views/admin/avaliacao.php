<div class='container text-center  mt-5'>
  <div class="col-2 col-lg-2 mx-auto">
    <img class= "mb-5 img-fluid" src="<?= base_url()?>/assets/logo.png" alt="">
  </div>
</div>

<div class="container col-12 col-lg-9">
    <div class="row mb-3">
        <div class="col">
            <p class="text-danger h4 "><b>Avaliações dos Usuários</b></p>
        </div>   
    </div>

    <div class="container border rounded-3 mb-5">
        <table class="table table-hover mt-2 table-responsive table-borderless">
            <thead class='border-bottom'>
                <tr>
                <th scope="col">Nome do Usuário</th>
                <th scope="col">Tipo de refeição</th>
                <th scope="col">Data da refeição</th>
                <th scope="col">Nota para Alimento</th>
                <th scope="col">Nota para Bebida</th>
                <th scope="col">Nota para Atendimento</th>
                <th scope="col">Comentários</th>
                </tr>
            </thead>

            <tbody>
                <?php foreach ($avaliacao as $avaliacao): ?>
                <tr>
                    <td>
                        <?php 
                            foreach ($usuarios as $usuario) { 
                                if ( $avaliacao->matricula == $usuario->matricula) {
                                    echo $usuario->usuario;
                                }    
                            }
                        ?>
                    </td>
                    <td>
                        <?php 
                            foreach ($tiporefeicoes as $tiporefeicao) { 
                                if ( $avaliacao->codtiporefeicao == $tiporefeicao->codtiporefeicao) {
                                    echo $tiporefeicao->tiporefeicao;
                                }    
                            }
                        ?>
                    </td>
                    
                    <td><?= $avaliacao->datarefeicao;?></td>
                    <td><?= $avaliacao->alimento;?></td>
                    <td><?= $avaliacao->bebida;?></td>
                    <td><?= $avaliacao->atendimento;?></td>
                    <td class='col-2'><?= $avaliacao->comentario;?></td>

                </tr>
                <?php endforeach; ?>
            </tbody>

        </table>
    </div>
</div>