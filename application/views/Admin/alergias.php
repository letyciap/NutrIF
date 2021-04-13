<div class='container text-center  mt-5'>
  <div class="col-2 col-lg-2 mx-auto">
    <img class= "mb-5 img-fluid" src="<?= base_url()?>/assets/logo.png" alt="">
  </div>
</div>

<div class="container col-12 col-lg-8">
    <div class="row mb-3">
        <div class="col">
            <p class="text-danger h5 mt-2"><b>Doenças e Alergias</b></p>
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
            <form method="post" action="<?=base_url();?>alergias/salvar/">
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
                <th scope="col">cód.</th>
                <th scope="col">doença ou alergia</th>
                <th scope="col">Ações</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($alergias as $alergia): ?>
                <tr>
                    <th scope="row"><?= $alergia->codalergia;?></th>
                    <td><?= $alergia->alergia;?></td>
                    <td class='col-4'>
                        
                        <!-- Button trigger modal ver -->
                        <a type="button" class="btn btn-outline-success" data-bs-toggle="modal" data-bs-target="#ModalVer<?php echo $alergia->codalergia; ?>">
                        Ver
                        </a>

                        <!-- Modal ver-->
                        <div class="modal fade" id="ModalVer<?php echo $alergia->codalergia; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title text-danger" id="exampleModalLabel"><b>Doenças e Alergias</b></h5>
                                <!-- <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> -->
                            </div>
                            <form>
                                <div class="modal-body">
                                    <!-- <p>Edite os valores da doença ou alergia cadastrada.</p> -->
                                    <div class="row">
                                        <div class="col-lg-6 col-12 ">
                                        <label class="form-label"><b>cód.</b></label>
                                        <input type="number" readonly value="<?php echo $alergia->codalergia; ?>" class="form-control-plaintext" id="codalergia" name="codalergia">
                                        </div>
                                        <div class="col-lg-6 col-12 ">
                                        <label class="form-label"><b>doença ou alergia</b></label>
                                        <input type="text" readonly value="<?php echo $alergia->alergia; ?>" class="form-control-plaintext" id="alergia" name="alergia">
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
                        <a type="button" class="btn btn-outline-warning" data-bs-toggle="modal" data-bs-target="#ModalEditar<?php echo $alergia->codalergia; ?>">
                        Editar
                        </a>

                        <!-- Modal editar-->
                        <div class="modal fade" id="ModalEditar<?php echo $alergia->codalergia; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title text-danger" id="exampleModalLabel"><b>Doenças e Alergias</b></h5>
                                <!-- <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> -->
                            </div>
                            <form method="post" action="<?=base_url();?>alergias/editar/">
                                <div class="modal-body">
                                    <p>Edite os valores da doença ou alergia cadastrada.</p>
                                    <div class="row">
                                        <div class="col-lg-6 col-12 ">
                                        <label class="form-label"><b>cód.</b></label>
                                        <input type="number" value="<?php echo $alergia->codalergia; ?>" class="form-control" id="codalergia" name="codalergia">
                                        </div>
                                        <div class="col-lg-6 col-12 ">
                                        <label class="form-label"><b>doença ou alergia</b></label>
                                        <input type="text" value="<?php echo $alergia->alergia; ?>" class="form-control" id="alergia" name="alergia">
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
                        <a type="button" class="btn btn-outline-danger" data-bs-toggle="modal" data-bs-target="#exampleModal<?php echo $alergia->codalergia; ?>">
                        Excluir
                        </a> 

                        <!-- Modal Excluir-->
                        <div class="modal fade" id="exampleModal<?php echo $alergia->codalergia; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title text-danger" id="exampleModalLabel"><b>Deseja excluir permanentemente?</b></h5>
                                <!-- <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> -->
                            </div>
                            <form action="<?=base_url();?>alergias/excluir/" method="POST">
                                <div class="modal-body">
                                    <input type="number" value="<?php echo $alergia->codalergia; ?>" class="form-control-plaintext d-none" name="codalergia">
                                    <p>"<?php echo $alergia->alergia; ?>" será excluído.</p>
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