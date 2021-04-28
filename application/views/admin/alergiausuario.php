<div class='container text-center  mt-5'>
  <div class="col-2 col-lg-2 mx-auto">
    <img class= "mb-5 img-fluid" src="<?= base_url()?>/assets/logo.png" alt="">
  </div>
</div>

<div class="container col-12 col-lg-8">
    <div class="row mb-3">
        <div class="col">
            <p class="text-danger h5 mt-2"><b>Relação Alergia-Usuário</b></p>
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
                <h5 class="modal-title text-danger" id="exampleModalLabel"><b>Relação Alergia-Usuário</b></h5>
                <!-- <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> -->
            </div>
            <form method="post" action="<?=base_url();?>admin/alergiausuario/salvar/">
                <div class="modal-body">
                    <p>Informe os valores para cadastrar uma nova relação.</p>
                    <div class="row">
                        <div class="col-lg-6 col-12 ">
                        <label class="form-label">Alergia</label>
                        <!-- <input type="number" class="form-control" id="codalergia" name="codalergia"> -->
                        <select class="form-select form-control"  id="campus" name="codalergia" required>
                            <option selected></option>
                            <?php foreach ($alergias as $alergia):?>
                            <option value="<?= $alergia->codalergia; ?>"><?= $alergia->codalergia; ?> - <?= $alergia->alergia; ?></option>
                            <?php endforeach; ?>
                        </select>
                        </div>
                        <div class="col-lg-6 col-12 ">
                        <label class="form-label">Usuario</label>
                        <!-- <input type="text" class="form-control" id="matricula" name="matricula"> -->
                        <select class="form-select form-control"  id="campus" name="matricula" required>
                            <option selected></option>
                            <?php foreach ($usuarios as $usuario):?>
                            <option value="<?= $usuario->matricula; ?>"><?= $usuario->matricula; ?> - <?= $usuario->usuario; ?></option>
                            <?php endforeach; ?>
                        </select>
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
                <th scope="col">Usuário</th>
                <th scope="col">Alergia</th>
                <th scope="col">Ações</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($alergiausuario as $alergiausuario): ?>
                <tr>
                    <td>
                    <?php 
                        foreach ($usuarios as $usuario) { 
                            if ( $alergiausuario->matricula == $usuario->matricula) {
                                $nomeUsuario = $usuario->usuario;
                                echo $nomeUsuario;
                            }    
                        }
                    ?>
                    </td>

                    <td scope="row">
                    <?php 
                        foreach ($alergias as $alergia) { 
                            if ( $alergiausuario->codalergia == $alergia->codalergia) {
                                $nomeAlergia = $alergia->alergia;
                                echo $nomeAlergia;
                            }    
                        }
                    ?>
                    </td>

                    <td class='col-4'>
                        
                        <!-- Button trigger modal ver -->
                        <a type="button" class="btn btn-outline-success" data-bs-toggle="modal" data-bs-target="#ModalVer<?php echo $alergiausuario->codalergia . $alergiausuario->matricula; ?>">
                        Ver
                        </a>

                        <!-- Modal ver-->
                        <div class="modal fade" id="ModalVer<?php echo $alergiausuario->codalergia . $alergiausuario->matricula; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title text-danger" id="exampleModalLabel"><b>Relação Alergia-Usuário</b></h5>
                                <!-- <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> -->
                            </div>
                            <form>
                                <div class="modal-body">
                                    <!-- <p>Edite os valores da doença ou alergia cadastrada.</p> -->
                                    <div class="row">
                                        <div class="col-lg-6 col-12 ">
                                            <label class="form-label fw-bold">Usuário</label>
                                            <input type="text" readonly value="<?= $nomeUsuario;?>" class="form-control-plaintext" id="matricula" name="matricula">
                                        </div>
                                        <div class="col-lg-6 col-12 ">
                                            <label class="form-label fw-bold">Alergia</label>
                                            <input type="text" readonly value="<?= $nomeAlergia;?>" class="form-control-plaintext" id="matricula" name="matricula">
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
                        <a type="button" class="btn btn-outline-warning" data-bs-toggle="modal" data-bs-target="#ModalEditar<?php echo $alergiausuario->codalergia . $alergiausuario->matricula; ?>">
                        Editar
                        </a>

                        <!-- Modal editar-->
                        <div class="modal fade" id="ModalEditar<?php echo $alergiausuario->codalergia . $alergiausuario->matricula; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title text-danger" id="exampleModalLabel"><b>Relação Alergia-Usuário</b></h5>
                                <!-- <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> -->
                            </div>
                            <form method="post" action="<?=base_url();?>admin/alergiausuario/editar/">
                                <div class="modal-body">
                                    <p>Edite a relação cadastrada.</p>
                                    <div class="row">
                                        <div class="col-lg-6 col-12 ">
                                        <label class="form-label"><b>Usuario</b></label>
                                        <!-- <input type="text" value="<?php echo $alergiausuario->matricula; ?>" class="form-control" id="matricula" name="matricula"> -->
                                        <select class="form-select form-control"  id="campus" name="matricula" required>
                                            <option selected><?= $nomeUsuario; ?></option>
                                            <?php foreach ($usuarios as $usuario):?>
                                            <option value="<?= $usuario->matricula; ?>"><?= $usuario->usuario; ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                        </div>
                                        <div class="col-lg-6 col-12 ">
                                        <label class="form-label"><b>Alergia</b></label>
                                        <!-- <input type="number" value="<?php echo $alergiausuario->codalergia; ?>" class="form-control" id="codalergia" name="codalergia"> -->
                                        <select class="form-select form-control"  id="campus" name="codalergia" required>
                                            <option selected><?= $nomeAlergia; ?></option>
                                            <?php foreach ($alergias as $alergia):?>
                                            <option value="<?= $alergia->codalergia; ?>"><?= $alergia->alergia; ?></option>
                                            <?php endforeach; ?>
                                        </select>
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
                        <a type="button" class="btn btn-outline-danger" data-bs-toggle="modal" data-bs-target="#ModalExcluir<?php echo $alergiausuario->codalergia . $alergiausuario->matricula; ?>">
                        Excluir
                        </a> 

                        <!-- Modal Excluir-->
                        <div class="modal fade" id="ModalExcluir<?php echo $alergiausuario->codalergia . $alergiausuario->matricula; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title text-danger" id="exampleModalLabel"><b>Deseja excluir permanentemente?</b></h5>
                                <!-- <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> -->
                            </div>
                            <form action="<?=base_url();?>admin/alergiausuario/excluir" method="POST">
                                <div class="modal-body">
                                    <input type="number" value="<?php echo $alergiausuario->codalergia; ?>" class="form-control-plaintext d-none" name="codalergia">
                                    <p>"<?php echo $nomeUsuario . " - " . $nomeAlergia;?>" será excluído.</p>
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