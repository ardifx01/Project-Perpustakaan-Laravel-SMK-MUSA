

<?php $__env->startSection('content'); ?>
  <div class="row">
    <div class="col-md-12">
      <form action="<?php echo e(URL::to("admin\anggota")); ?>" method="post" enctype="multipart/form-data">

        <?php echo csrf_field(); ?>
        <div class="row">
          <div class="col-md-12">
            <label> Nama Lengkap</label>
            <input type="text" name="name" class="form-control">
          </div>
          </div>

          <div class="row">
            <div class="col-md-12">
              <label> Email </label>
              <input type="email" name="email" class="form-control">
      
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
                  <input type="text" name="no_anggota" class="form-control">
                </div>
                </div>

                <div class="row">
                  <div class="col-md-12">
                    <label> Alamat</label>
                  <textarea name="alamat" class="form-control"></textarea> 
                  </div>
                  </div>

                  <div class="row">
                    <div class="col-md-12">
                      <label> Nomor telephone</label>
                      <input type="text" name="telephone" class="form-control">
                    </div>
                    </div>

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
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\laragon\www\perpustakaan\resources\views/admin/anggota/create.blade.php ENDPATH**/ ?>