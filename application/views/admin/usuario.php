<div class='container text-center  mt-5'>
  <div class="col-2 col-lg-2 mx-auto">
    <img class= "mb-5 img-fluid" src="<?= base_url()?>/assets/logo.png" alt="">
  </div>
</div>

<div class="container col-12 col-lg-8">
    <div class="row mb-3">
        <div class="col">
            <p class="text-danger h5 mt-2"><b>Usuarios Cadastrados</b></p>
        </div>

        
    </div>

    <div class="container border rounded-3 mb-5">
        <table class="table table-hover mt-2 table-responsive table-borderless">
            <thead class='border-bottom'>
                <tr>
                <th scope="col">Matrícula</th>
                <th scope="col">Usuário</th>
                <th scope="col">Ações</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($usuarios as $usuario): ?>
                <tr>
                    <th scope="row"><?= $usuario->matricula;?></th>
                    <td><?= $usuario->usuario;?></td>
                    <td class='col-2'>
                        
                        <!-- Button trigger modal ver -->
                        <a type="button" class="btn btn-outline-success" data-bs-toggle="modal" data-bs-target="#ModalVer<?php echo $usuario->matricula; ?>">
                        Ver
                        </a>

                        <!-- Modal ver-->
                        <div class="modal fade" id="ModalVer<?php echo $usuario->matricula; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title text-danger" id="exampleModalLabel"><b>Dados do Usuário</b></h5>
                                <!-- <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> -->
                            </div>
                            <form>
                                <div class="modal-body">
                                    <!-- <p>Edite os valores da doença ou alergia cadastrada.</p> -->
                                    <div class="row">
                                        <div class="col-lg-3 col-12 ">
                                        <label class="form-label"><b>Matrícula</b></label>
                                        <input type="text" readonly value="<?php echo $usuario->matricula; ?>" class="form-control-plaintext" id="matricula" name="matricula">
                                        </div>

                                        <div class="col-lg-3 mb-3 col-12 ">
                                        <label class="form-label"><b>Nome</b></label>
                                        <input type="text" readonly value="<?php echo $usuario->usuario; ?>" class="form-control-plaintext" id="matricula" name="matricula">
                                        </div>

                                        <div class="col-lg-3 mb-3 col-12 ">
                                        <label class="form-label"><b>Campus</b></label>
                                        <input type="text" readonly value="<?= $campus[$usuario->codcampus]->campus;?>" class="form-control-plaintext" id="codalergia" name="codalergia">
                                        </div>

                                        <div class="col-lg-3 mb-3 col-12 ">
                                        <label class="form-label"><b>Data de nascimento</b></label>
                                        <input type="date" readonly value="<?php echo $usuario->datanascimento; ?>" class="form-control-plaintext" id="codalergia" name="codalergia">
                                        </div>

                                        <div class="col-lg-3 mb-3 col-12 ">
                                        <label class="form-label"><b>Data de cadastro</b></label>
                                        <input type="date" readonly value="<?php echo $usuario->datacadastro; ?>" class="form-control-plaintext" id="codalergia" name="codalergia">
                                        </div>

                                        <div class="col-lg-3 mb-3 col-12 ">
                                        <label class="form-label"><b>Gênero</b></label>
                                        <input type="text" readonly value="<?= $generos[$usuario->codgenero]->genero;?>" class="form-control-plaintext">
                                        </div>

                                        <div class="col-lg-3 mb-3 col-12 ">
                                        <label class="form-label"><b>Etnia</b></label>
                                        <input type="text" readonly value="<?= $etnias[$usuario->codeetnia]->etnia;?>" class="form-control-plaintext" id="alergia" name="alergia">
                                        </div>

                                        <div class="col-lg-3 mb-3 col-12 ">
                                        <label class="form-label"><b>Altura</b></label>
                                        <input type="text" readonly value="<?php echo $usuario->altura; ?>m" class="form-control-plaintext" id="alergia" name="alergia">
                                        </div>

                                        <div class="col-lg-3 mb-3 col-12 ">
                                        <label class="form-label"><b>Peso</b></label>
                                        <input type="text" readonly value="<?php echo $usuario->peso;?>kg" class="form-control-plaintext" id="alergia" name="alergia">
                                        </div>

                                        <div class="col-lg-3 mb-3 col-12 ">
                                        <label class="form-label"><b>Frequência de consumo no campus</b></label>
                                        <input type="text" readonly value="<?= $freqconsumocampus[$usuario->codfreqconsumocampus]->freqconsumocampus;?>" class="form-control-plaintext" id="codalergia" name="codalergia">
                                        </div>

                                        <div class="col-lg-3 mb-3 col-12 ">
                                        <label class="form-label"><b>Dieta</b></label>
                                        <input type="text" readonly value="<?= $dietas[$usuario->coddieta]->dieta;?>" class="form-control-plaintext" id="codalergia" name="codalergia">
                                        </div>

                                        <div class="col-lg-3 mb-3 col-12 ">
                                        <label class="form-label"><b>Nível de satisfação do corpo</b></label>
                                        <input type="text" readonly value="<?= $satisfacaocorpo[$usuario->codsatisfacaocorpo]->satisfacaocorpo;?>" class="form-control-plaintext" id="alergia" name="alergia">
                                        </div>

                                        <div class="col-lg-3 mb-3 col-12 ">
                                        <label class="form-label"><b>Frequencia de fome</b></label>
                                        <input type="text" readonly value="<?= $frequenciafome[$usuario->codfrequenciafome]->frequenciafome;?>" class="form-control-plaintext" id="alergia" name="alergia">
                                        </div>

                                        <div class="col-lg-3 mb-3 col-12 ">
                                        <label class="form-label"><b>Outras alergias</b></label>
                                        <input type="text" readonly value="<?php echo $usuario->outraalergia; ?>" class="form-control-plaintext" id="alergia" name="alergia">
                                        </div>

                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-success" data-bs-dismiss="modal">Fechar</button>
                                    <!-- <button type="submit" class="btn btn-success">Salvar</button> -->
                                </div>
                            </form>
                            </div>
                        </div>
                        </div>
                        
                        <!-- Button trigger modal editar -->
                        <a type="button" class="btn btn-outline-warning d-none" data-bs-toggle="modal" data-bs-target="#ModalEditar<?php echo $usuario->matricula; ?>">
                        Editar
                        </a>

                        <!-- Modal editar-->
                        <div class="modal fade" id="ModalEditar<?php echo $usuario->matricula; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title text-danger" id="exampleModalLabel"><b>Dados dos Usuarios</b></h5>
                                <!-- <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> -->
                            </div>
                            <form method="post" action="<?=base_url();?>alergias/editar/">
                                <div class="modal-body">
                                    <p>Edite os dados dos usuarios.</p>
                                    <div class="row">
                                        <div class="col-lg-6 col-12 ">
                                        <label class="form-label"><b>Matrícula</b></label>
                                        <input type="number" value="<?php echo $usuario->matricula; ?>" class="form-control" id="matricula" name="matricula">
                                        </div>

                                        <div class="col-lg-6 col-12 ">
                                        <label class="form-label"><b>Usuário</b></label>
                                        <input type="text" value="<?php echo $usuario->usuario; ?>" class="form-control" id="usuario" name="usuario">
                                        </div>

                                        <div class="col-lg-6 col-12 ">
                                        <label class="form-label"><b>Código Campus</b></label>
                                        <input type="number" value="<?php echo $usuario->codcampus; ?>" class="form-control" id="codcampus" name="codcampus">
                                        </div>

                                        <div class="col-lg-6 col-12 ">
                                        <label class="form-label"><b>Data de nascimento</b></label>
                                        <input type="date" value="<?php echo $usuario->datanascimento; ?>" class="form-control" id="datanascimento" name="datanascimento">
                                        </div>
                                        <div class="col-lg-6 col-12 ">
                                        <label class="form-label"><b>Data de cadastro</b></label>
                                        <input type="date" value="<?php echo $usuario->datacadastro; ?>" class="form-control" id="datacadastro" name="datacadastro">
                                        </div>

                                        <div class="col-lg-6 col-12 ">
                                        <label class="form-label"><b>Código gênero</b></label>
                                        <input type="number" value="<?php echo $usuario->codgenero; ?>" class="form-control" id="codgenero" name="codgenero">
                                        </div>

                                        <div class="col-lg-6 col-12 ">
                                        <label class="form-label"><b>Código etnia</b></label>
                                        <input type="number" value="<?php echo $usuario->codeetnia; ?>" class="form-control" id="codeetnia" name="codeetnia">
                                        </div>

                                        <div class="col-lg-6 col-12 ">
                                        <label class="form-label"><b>Altura</b></label>
                                        <input type="number" value="<?php echo $usuario->altura; ?>" class="form-control" id="altura" name="altura">
                                        </div>

                                        <div class="col-lg-6 col-12 ">
                                        <label class="form-label"><b>Peso</b></label>
                                        <input type="number" value="<?php echo $usuario->peso; ?>" class="form-control" id="peso" name="peso">
                                        </div>

                                        <div class="col-lg-6 col-12 ">
                                        <label class="form-label"><b>Código frequência de consumo no campus</b></label>
                                        <input type="number" value="<?php echo $usuario->codfreqconsumocampus; ?>" class="form-control" id="codfreqconsumocampus" name="codfreqconsumocampus">
                                        </div>

                                        <div class="col-lg-6 col-12 ">
                                        <label class="form-label"><b>Código dieta</b></label>
                                        <input type="number" value="<?php echo $usuario->coddieta; ?>" class="form-control" id="coddieta" name="coddieta">
                                        </div>
                                        
                                        <div class="col-lg-6 col-12 ">
                                        <label class="form-label"><b>Código de satisfação do corpo</b></label>
                                        <input type="number" value="<?php echo $usuario->codsatisfacaocorpo; ?>" class="form-control" id="codsatisfacaocorpo" name="codsatisfacaocorpo">
                                        </div>

                                        <div class="col-lg-6 col-12 ">
                                        <label class="form-label"><b>Código frequência de fome</b></label>
                                        <input type="number" value="<?php echo $usuario->codfrequenciafome; ?>" class="form-control" id="codfrequenciafome" name="codfrequenciafome">
                                        </div>

                                        <div class="col-lg-6 col-12 ">
                                        <label class="form-label"><b>Outra alergia</b></label>
                                        <input type="text" value="<?php echo $usuario->outraalergia; ?>" class="form-control" id="outraalergia" name="outraalergia">
                                        </div>

                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-outline-danger" data-bs-dismiss="modal">Cancelar</button>
                                    <button type="submit" class="btn btn-success">Salvar</button>
                                </div>
                            </form>
                            </div>
                        </div>
                        </div>

                        <!-- Button trigger modal excluir -->
                        <a type="button" class="btn btn-outline-danger d-none" data-bs-toggle="modal" data-bs-target="#exampleModal<?php echo $usuario->matricula; ?>">
                        Excluir
                        </a> 

                        <!-- Modal Excluir-->
                        <div class="modal fade" id="exampleModal<?php echo $usuario->matricula; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title text-danger" id="exampleModalLabel"><b>Deseja excluir permanentemente?</b></h5>
                                <!-- <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> -->
                            </div>
                            <form action="<?=base_url();?>alergias/excluir/" method="POST">
                                <div class="modal-body">
                                    <input type="number" value="<?php echo $usuario->matricula; ?>" class="form-control-plaintext d-none" name="codalergia">
                                    <p>"<?php echo $usuario->usuario; ?>" será excluído.</p>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-outline-danger" data-bs-dismiss="modal">Cancelar</button>
                                    <button type="submit" class="btn btn-success">Excluir</button>
                                </div>
                            </form>
                            </div>
                        </div>
                        </div>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>
