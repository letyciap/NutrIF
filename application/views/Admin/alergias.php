<div class='container text-center  mt-5'>
  <div class="col-10 col-lg-2 mx-auto">
    <img class= "mb-5 img-fluid" src="<?= base_url()?>/assets/logo.png" alt="">
  </div>
</div>

<div class="container col-8">
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
            <form action="<?=base_url();?>/alergias/salvar/" method="POST">
                <div class="modal-body">
                    <p>Informe os valores para cadastrar uma nova doença ou alergia.</p>
                    <div class="row">
                        <div class="col-lg-6 col-12 ">
                        <label class="form-label">cód.</label>
                        <input type="number" class="form-control" id="codalergia">
                        </div>
                        <div class="col-lg-6 col-12 ">
                        <label class="form-label">doença ou alergia</label>
                        <input type="text" class="form-control" id="alergia">
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
                        <a href="" class='btn btn-outline-primary'>Ver</a>
                        <a href="" class='btn btn-outline-warning'>Editar</a>
                        <!-- Button trigger modal -->
                        <a type="button" class="btn btn-outline-danger" data-bs-toggle="modal" data-bs-target="#exampleModal<?php echo $alergia->codalergia; ?>">
                        Excluir
                        </a> 

                        <!-- Modal -->
                        <div class="modal fade" id="exampleModal<?php echo $alergia->codalergia; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title text-danger" id="exampleModalLabel"><b>Deseja excluir permanentemente?</b></h5>
                                <!-- <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> -->
                            </div>
                            <form action="" method="POST">
                                <div class="modal-body">
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