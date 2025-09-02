

<?php $__env->startSection('content'); ?>
  <div class="row">
    <div class="col-md-12">
      <form action="<?php echo e(url("admin/buku/". $Buku->id)); ?>" method="post" enctype="multipart/form-data">

        <?php echo csrf_field(); ?>
        <input type="hidden" name="_method" value="PUT">
        <input type="hidden" name="id" value="<?php echo e($Buku->id); ?>">
        
        <div class="row">
          <div class="col-md-12">
          <label> id_Buku</label>
          <input type="text" name="id_buku" class="form-control" value="<?php echo e($Buku->id_buku); ?> ">
          </div>
          </div>
              
          <div class="row">
            <div class="col-md-12">
            <label> no_buku</label>
            <input type="text" name="no_buku" class="form-control" value="<?php echo e($Buku->no_buku); ?>" >
            </div>
            </div>

              <div class="row">
              <div class="col-md-12">
              <label> Nama Buku</label>
              <input type="text" name="nama_buku" class="form-control" value="<?php echo e($Buku->nama_buku); ?> ">
              </div>
              </div>

              <div class="row">
              <div class="col-md-12">
              <label> Jenis Buku </label>
              <input type="text" name="jenis_buku" class="form-control" value = "<?php echo e($Buku->jenis_buku); ?>" >
              </div>
              </div>
              <div class="row">
                <div class="col-md-12">
                  <label> Foto</label>
                  <input type="file" name="foto" class="form-control"  >
                </div>
                </div>  
              <hr>
              <div class="row">
                <div class="col-md-12">
                  <label> Keterangan</label>
                    <textarea name="keterangan" class="form-control"><?php echo e($Buku->keterangan); ?></textarea> 
                      </div>
                        </div>                  
                            <input type="submit" value="Simpan" class="btn btn-success">   
      </form>
      </div>
      </div>
       
      
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\laragon\www\perpustakaan\resources\views/admin/buku/edit.blade.php ENDPATH**/ ?>