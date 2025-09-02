

<?php $__env->startSection('content'); ?>
  <div class="row">
    <div class="col-md-12">
      <form action="<?php echo e(URL::to("admin\peminjaman")); ?>" method="post" >

        <?php echo csrf_field(); ?>
        <div class="row">
          <div class="col-md-12">
            <label> Nama Peminjam</label>
            <select name="anggota_id" class="form-control">
              <?php $__currentLoopData = $anggota; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $agt): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <option value="<?php echo e($agt->id); ?>"> <?php echo e($agt->name); ?></option>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select>
          </div>
          </div>

          <div class="row">
            <div class="col-md-12">
              <label> Id buku </label>
              <select name="id_buku" class="form-control">
              <?php $__currentLoopData = $buku; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $bku): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <option value="<?php echo e($bku->id); ?>"> <?php echo e($bku->id_buku); ?></option>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
              </select>
            </div>
            </div>
            <div class="row">
              <div class="col-md-12">
               <label> No Buku</label>
               <select name="no_buku" class="form-control">
                <?php $__currentLoopData = $buku; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $bku): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <option value="<?php echo e($bku->id); ?>"> <?php echo e($bku->no_buku); ?></option>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
              </div>
              </div>      
              <hr>
              <div class="row">
                <div class="col-md-12">
                  <label> Nama Buku</label>
                  <select name="nama_buku" class="form-control">
                    <?php $__currentLoopData = $buku; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $bku): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e($bku->id); ?>"> <?php echo e($bku->nama_buku); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                </div>
                </div>

                <div class="row">
                  <div class="col-md-12">
                    <label> Tanggal Pinjam</label>
                    <select name="tgl_pinjam" class="form-control">
                      <?php $__currentLoopData = $buku; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $bku): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                      <option value="<?php echo e($bku->id); ?>"> <?php echo e($bku->tgl_pinjam); ?></option>
                      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                      </select>
                  </div>
                  </div>

                  <div class="row">
                    <div class="col-md-12">
                      <label> Tanggal Kembali</label>
                      <select name="tgl_kembali" class="form-control">
                        <?php $__currentLoopData = $buku; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $bku): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($bku->id); ?>"> <?php echo e($bku->tgl_kembali); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                    </div>
                    </div>

                    
                  <div class="row">
                    <div class="col-md-12">
                      <label> Keterangan</label>
                      <select name="keterangan" class="form-control">
                        <?php $__currentLoopData = $buku; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $bku): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($bku->id); ?>"> <?php echo e($bku->keterangan); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                    </div>
                    </div>
                        <input type="submit" value="Simpan" class="btn btn-success">
             
      </form>
      </div>
      </div>
       
      
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\laragon\www\perpustakaan\resources\views/admin/peminjaman/create.blade.php ENDPATH**/ ?>