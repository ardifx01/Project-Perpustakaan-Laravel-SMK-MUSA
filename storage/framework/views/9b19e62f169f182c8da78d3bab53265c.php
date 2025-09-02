

<?php $__env->startSection('content'); ?>
  <div class="row">
    <div class="col-md-12">
      <form action="<?php echo e(URL::to("admin/buku")); ?>" method="post" enctype="multipart/form-data">

        <?php echo csrf_field(); ?>
          <div class="row">
            <div class="col-md-12">
              <label> id_buku</label>
              <input type="text" name="id_buku" class="form-control">
            </div>
            </div>
            <div class="row">
            <div class="col-md-12">
              <label> no_buku</label>
              <input type="text" name="no_buku" class="form-control">
            </div>
            </div>
            <div class="row">
            <div class="col-md-12">
            <label> Nama Buku</label>
            <input type="text" name="nama_buku" class="form-control">
            </div>
            </div>
            <div class="row">
            <div class="col-md-12">
            <label> Jenis Buku </label>
            <input type="text" name="jenis_buku" class="form-control">
            </div>
            </div>
              <hr>
            <div class="row">
            <div class="col-md-12">
            <label> Foto</label>
            <input type="file" name="foto" class="form-control">
            </div>
            </div>

            <div class="row">
            <div class="col-md-12">
            <label> Keterangan</label>
            <textarea name="keterangan" class="form-control"></textarea> 
            </div>
            </div>
            <input type="submit" value="Simpan" class="btn btn-success">
      </form>
      </div>
      </div>
       
      
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\laragon\www\perpustakaan\resources\views/admin/buku/create.blade.php ENDPATH**/ ?>