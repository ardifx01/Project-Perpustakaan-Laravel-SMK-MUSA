

<?php $__env->startSection('content'); ?>
  <div class="row">
    <div class="col-md-12">
            <?php if(session('success')): ?>
            <div class="alert alert-success">
            <?php echo e(session('success')); ?>

            </div>
            <?php endif; ?>

        <div class="card">
            <div class="card-header"></div>
            <h5>Data Anggota</h5>
            <div class="card-body"></div>
            <a class="btn btn-success" href="<?php echo e(URL::to("admin/anggota/create")); ?>">+</a>
            <table class="table">
                <thead>
                    <tr>
                    <th> No.</th>
                    <th> Nama Anggota</th>
                    <th> Nomor Anggota</th>
                    <th> Alamat </th>
                    <th> Foto </th>
                    <th> Aksi</th>
                </tr>
                </thead>
                <tbody>
                    <?php
                        $nomor = 1; // 
                    ?>
                    <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $dt): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> 
                    <tr>
                        <td> <?php echo e($nomor); ?> </td>
                        <td> <?php echo e($dt->name); ?> </td>
                        <td> <?php echo e($dt->no_anggota); ?> </td>
                        <td> <?php echo e($dt->alamat); ?> </td>
                        
                        
                        <td> 
                            <img style="width: 90px; height; 90px;" src=" <?php echo e(asset("images/". $dt->foto)); ?>" alt="" srcset="">
                        </td>
                        <td>
                            <a class="btn btn-warning" href="<?php echo e(URL::to("admin/anggota/" . $dt->id."/edit")); ?>">Ubah</a>
                            <a class="btn btn-danger" href="<?php echo e(URL::to("admin/anggota/hapus/" . $dt->id)); ?>">Hapus</a> 
                        </td>
                    </tr>

                    <?php
                    $nomor++; 
                    ?>

                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>    
                    
                </tbody>
            </table>
        </div>
    </div>
  </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\laragon\www\perpustakaan\resources\views/admin/anggota/index.blade.php ENDPATH**/ ?>