<?= $this->extend('_partials/base_site'); ?>

<?php $this->section('content') ?>
<div class="page-header row no-gutters py-4">
    <div class="col-12 col-sm-4 text-center text-sm-left mb-0">
        <a href="#"><span class="text-uppercase page-subtitle">Data Master</span></a> ->
        <span class="text-uppercase page-subtitle">Nelayan</span>
        <hr />
    </div>
</div>

<div class="row">
    <div class="col">
        <div class="card card-small mb-4">
            <div class="card-header border-bottom">
                <h6 class="m-0">Data Nelayan</h6>
            </div>
            <div class="card-body p-0 pb-3">
                <div class="container">
                    <br />
                    <a href="#createDistrik" data-toggle="modal" class="btn btn-sm btn-success" title="Create One"><i class="fa fa-plus-circle"></i></a>
                    <hr />
                    <table class="table mb-0 table-bordered">
                        <thead class="bg-light">
                            <tr class="small">
                                <th scope="col">KODE NELAYAN</th>
                                <th scope="col">Nama Nelayan</th>
                                <th scope="col">Umur</th>
                                <th scope="col">Punya Kapal</th>
                                <th scope="col">Status Melaut</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($nelayan as $item): 
                                $no = 1;    
                            ?>
                            <tr class="small">
                                <td><strong> <?php echo $item->kode_kab ?><?php echo $item->kode_dis ?><?php echo $item->kode_kampung ?><?php echo $item->kode_nelayan ?></strong></td>
                                <td class="text-uppercase"><?php echo $item->nama_nelayan ?></td>
                                <td class="text-center"><?php echo $item->umur ?></td>
                                <td class="text-center"><?php echo $item->kepemilikan_kapal ?></td>
                                <td class="text-center"><?php echo $item->status_melaut ?></td>
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

<div class="modal fade" id="createDistrik" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <div class="modal-title">
                    <h6 class="modal-title" id="exampleModalLabel"><i class="fa fa-plus-circle"></i> Form Create Distrik</h6>
                </div>
            </div>
            <div class="modal-body">
                <?php echo view('distrik/c-distrik')?>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default waves-effect btn-sm " data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>


<?= $this->endSection(); ?>