

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
            <h5>Data Buku Perpustakaan</h5>
            <div class="card-body"></div>
            <a class="btn btn-succes" href="<?php echo e(URL::to("admin/buku/create")); ?>">+</a>
            <table class="table">
                <thead>
                    <tr>
                    <th> No</th>
                    <th> Nama Buku</th>
                    <th> Jenis Buku</th>
                    <th> Foto </th>
                    <th> Aksi</th>
                </tr>
                </thead>
                <tbody>
                    <?php
                        $nomor = 1; // 
                    ?>
                    <?php $__currentLoopData = $Buku; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $dt): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> 
                    <tr>
                        <td> <?php echo e($nomor); ?> </td>
                        <td> <?php echo e($dt->nama_buku); ?> </td>
                        <td> <?php echo e($dt->jenis_buku); ?> </td>
                        <td> 
                            <img style="width: 70px; height; 70px;" src=" <?php echo e(asset("images/". $dt->foto_buku)); ?>" alt="" srcset="">
                        </td>
                        <td>
                            <a class="btn btn-warning" href="<?php echo e(URL::to("admin/buku/" . $dt->id."/edit")); ?>">Ubah</a>
                            <a class="btn btn-primary" href="<?php echo e(URL::to("admin/buku/" . $dt->id."/pinjam")); ?>">Pinjam</a>
                            <a class="btn btn-danger" href="<?php echo e(URL::to("admin/buku/hapus/" . $dt->id)); ?>">Hapus</a>
                           
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
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\laragon\www\perpustakaan\resources\views/admin/buku/index.blade.php ENDPATH**/ ?>