

<?php $__env->startSection('content'); ?>
  <div class="row">
    <div class="col-md-12">
      <form action="<?php echo e(URL::to("admin\anggota". $data->id)); ?>" method="post" enctype="multipart/form-data">

        <?php echo csrf_field(); ?>
        <?php echo method_field("PUT"); ?>

        <input type="hidden" name="user_id" class="form-control" value="<?php echo e($data->user_id); ?>">

        <div class="row">
          <div class="col-md-12">
            <label> Nama Lengkap</label>
            <input type="text" name="name" class="form-control" value="<?php echo e($data->name); ?>">
          </div>
          </div>

          <div class="row">
            <div class="col-md-12">
              <label> Email </label>
              <input type="email" name="email" class="form-control" value="<?php echo e($data->email); ?>">
      
            </div>
            </div>
            <div class="row">
              <div class="col-md-12">
               <label> Password</label>
               <input type="password" name="password" class="form-control">
              </div>
              </div>      
              <hr>


              <div class="row">
                <div class="col-md-12">
                  <label> Nomor Anggota</label>
                  <input type="text" name="no_anggota" class="form-control" value ="<?php echo e($data->no_anggota); ?>">
                </div>
                </div>

                <div class="row">
                  <div class="col-md-12">
                    <label> Alamat</label>
                  <textarea name="alamat" class="form-control"><?php echo e($data->no_anggota); ?></textarea> 
                  </div>
                  </div>

                  <div class="row">
                    <div class="col-md-12">
                      <label> Nomor telephone</label>
                      <input type="text" name="telephone" class="form-control" value ="<?php echo e($data->telephone); ?>">
                    </div>
                    </div>

                    <div class="row">
                      <div class="col-md-12">
                        <label> Foto</label>
                        <input type="file" name="foto" class="form-control" value="<?php echo e($data->foto); ?>">
                      </div>
                      </div>

                      <div class="row">
                        <div class="col-md-12">
                          <label> Keterangan</label>
                          <textarea name="keterangan" class="form-control"><?php echo e($data->keterangan); ?></textarea> 
                        </div>
                        </div>
                        <input type="submit" value="Simpan" class="btn btn-success">
             
      </form>
      </div>
      </div>
       
      
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\laragon\www\perpustakaan\resources\views/admin/anggota/edit.blade.php ENDPATH**/ ?>