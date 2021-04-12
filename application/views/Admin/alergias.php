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
            <a href="" class="btn btn-success">Criar nova</a> 
        </div>
        
        
    </div>

    <div class="container border rounded-3 mb-5">
        <table class="table table-hover mt-2 table-responsive table-borderless">
            <thead class='border-bottom'>
                <tr>
                <th scope="col">codalergia</th>
                <th scope="col">alergia</th>
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
                        <a href="" class='btn btn-outline-danger'>Excluir</a>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>