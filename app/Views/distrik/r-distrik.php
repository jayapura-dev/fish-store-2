<?= $this->extend('_partials/base_site'); ?>

<?php $this->section('content') ?>
<div class="page-header row no-gutters py-4">
    <div class="col-12 col-sm-4 text-center text-sm-left mb-0">
        <a href="#"><span class="text-uppercase page-subtitle">Data Master</span></a> ->
        <span class="text-uppercase page-subtitle">Distrik</span>
        <hr />
    </div>
</div>

<div class="row">
    <div class="col">
        <div class="card card-small mb-4">
            <div class="card-header border-bottom">
                <h6 class="m-0">Data Distrik</h6>
            </div>
            <div class="card-body p-0 pb-3">
                <div class="container">
                    <br />
                    <a class="btn btn-sm btn-success" title="Create One"><i class="fa fa-plus-circle"></i></a>
                    <hr />
                    <table class="table mb-0 table-bordered">
                        <thead class="bg-light">
                            <tr class="small">
                                <th scope="col">No</th>
                                <th scope="col">KODE</th>
                                <th scope="col">Nama Distrik</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($distrik as $item): 
                                $no = 1;    
                            ?>
                            <tr class="small">
                                <td><?php echo $no++ ?></td>
                                <td><strong> <?php echo $item->kode_prov ?> . <?php echo $item->kode_kab ?> . <?php echo $item->kode_dis ?></strong></td>
                                <td class="text-uppercase"><?php echo $item->nama_dis ?></td>
                                <td>
                                    <a class="btn btn-sm btn-primary" title="edit"><i class="fa fa-edit"></i></a>
                                    <a class="btn btn-sm btn-danger" title="Delete"><i class="fa fa-trash"></i></a>
                                </td>
                            </tr>
                            <?php endforeach ?>
                        </tbody>
                    </table>
                </div>
                
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>