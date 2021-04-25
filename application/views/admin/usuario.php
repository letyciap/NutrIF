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
        <div class="col d-flex justify-content-end">
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModal">
            Cadastrar
            </button> 
        </div>

        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title text-danger" id="exampleModalLabel"><b>Doenças e Alergias</b></h5>
                <!-- <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> -->
            </div>
            <form method="post" action="<?=base_url();?>usuario/salvar/">
                <div class="modal-body">
                    <p>Informe os valores para cadastrar uma nova doença ou alergia.</p>
                    <div class="row">
                        <div class="col-lg-6 col-12 ">
                        <label class="form-label">cód.</label>
                        <input type="number" class="form-control" id="codalergia" name="codalergia">
                        </div>
                        <div class="col-lg-6 col-12 ">
                        <label class="form-label">doença ou alergia</label>
                        <input type="text" class="form-control" id="alergia" name="alergia">
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
                <?php foreach ($usuario as $usuario): ?>
                <tr>
                    <th scope="row"><?= $usuario->matricula;?></th>
                    <td><?= $usuario->usuario;?></td>
                    <td class='col-4'>
                        
                        <!-- Button trigger modal ver -->
                        <a type="button" class="btn btn-outline-success" data-bs-toggle="modal" data-bs-target="#ModalVer<?php echo $usuario->matricula; ?>">
                        Ver
                        </a>

                        <!-- Modal ver-->
                        <div class="modal fade" id="ModalVer<?php echo $usuario->matricula; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title text-danger" id="exampleModalLabel"><b>Dados dos Usuarios</b></h5>
                                <!-- <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> -->
                            </div>
                            <form>
                                <div class="modal-body">
                                    <!-- <p>Edite os valores da doença ou alergia cadastrada.</p> -->
                                    <div class="row">
                                        <div class="col-lg-6 col-12 ">
                                        <label class="form-label"><b>matricula</b></label>
                                        <input type="number" readonly value="<?php echo $usuario->matricula; ?>" class="form-control-plaintext" id="matricula" name="matricula">
                                        </div>

                                        <div class="col-lg-6 col-12 ">
                                        <label class="form-label"><b>usuario</b></label>
                                        <input type="text" readonly value="<?php echo $usuario->usuario; ?>" class="form-control-plaintext" id="matricula" name="matricula">
                                        </div>

                                        <div class="col-lg-6 col-12 ">
                                        <label class="form-label"><b>cód. campus</b></label>
                                        <input type="number" readonly value="<?php echo $usuario->codcampus; ?>" class="form-control-plaintext" id="codalergia" name="codalergia">
                                        </div>

                                        <div class="col-lg-6 col-12 ">
                                        <label class="form-label"><b>data de nascimento</b></label>
                                        <input type="date" readonly value="<?php echo $usuario->datanascimento; ?>" class="form-control-plaintext" id="codalergia" name="codalergia">
                                        </div>

                                        <div class="col-lg-6 col-12 ">
                                        <label class="form-label"><b>data de cadastro</b></label>
                                        <input type="date" readonly value="<?php echo $usuario->datacadastro; ?>" class="form-control-plaintext" id="codalergia" name="codalergia">
                                        </div>

                                        <div class="col-lg-6 col-12 ">
                                        <label class="form-label"><b>cód. genero</b></label>
                                        <input type="number" readonly value="<?php echo $usuario->codgenero; ?>" class="form-control-plaintext" id="alergia" name="alergia">
                                        </div>

                                        <div class="col-lg-6 col-12 ">
                                        <label class="form-label"><b>cód. etnia</b></label>
                                        <input type="number" readonly value="<?php echo $usuario->codeetnia; ?>" class="form-control-plaintext" id="alergia" name="alergia">
                                        </div>

                                        <div class="col-lg-6 col-12 ">
                                        <label class="form-label"><b>altura</b></label>
                                        <input type="number" readonly value="<?php echo $usuario->altura; ?>" class="form-control-plaintext" id="alergia" name="alergia">
                                        </div>

                                        <div class="col-lg-6 col-12 ">
                                        <label class="form-label"><b>peso</b></label>
                                        <input type="number" readonly value="<?php echo $usuario->peso; ?>" class="form-control-plaintext" id="alergia" name="alergia">
                                        </div>

                                        <div class="col-lg-6 col-12 ">
                                        <label class="form-label"><b>cód. frequencia de consumo no campus</b></label>
                                        <input type="number" readonly value="<?php echo $usuario->codfrequenciafome; ?>" class="form-control-plaintext" id="codalergia" name="codalergia">
                                        </div>

                                        <div class="col-lg-6 col-12 ">
                                        <label class="form-label"><b>cód. dieta</b></label>
                                        <input type="number" readonly value="<?php echo $usuario->coddieta; ?>" class="form-control-plaintext" id="codalergia" name="codalergia">
                                        </div>

                                        <div class="col-lg-6 col-12 ">
                                        <label class="form-label"><b>cód. satisfação do corpo</b></label>
                                        <input type="number" readonly value="<?php echo $usuario->codsatisfacaocorpo; ?>" class="form-control-plaintext" id="alergia" name="alergia">
                                        </div>

                                        <div class="col-lg-6 col-12 ">
                                        <label class="form-label"><b>cód. frequencia de fome</b></label>
                                        <input type="number" readonly value="<?php echo $usuario->codfrequenciafome; ?>" class="form-control-plaintext" id="alergia" name="alergia">
                                        </div>

                                        <div class="col-lg-6 col-12 ">
                                        <label class="form-label"><b>outra alergia</b></label>
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
                        <a type="button" class="btn btn-outline-warning" data-bs-toggle="modal" data-bs-target="#ModalEditar<?php echo $usuario->matricula; ?>">
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
                        <a type="button" class="btn btn-outline-danger" data-bs-toggle="modal" data-bs-target="#exampleModal<?php echo $usuario->matricula; ?>">
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
