<?php $__env->startSection('title', 'Show Product'); ?>

<?php $__env->startSection('contents'); ?>
    <h1 class="mb-0">Detail Barang</h1>
    <hr />
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Nama</label>
            <input type="text" name="title" class="form-control" placeholder="Title" value="<?php echo e($product->title); ?>" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Harga</label>
            <input type="text" name="price" class="form-control" placeholder="Price" value="<?php echo e($product->price); ?>" readonly>
        </div>
    </div>
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Kode Barang</label>
            <input type="text" name="product_code" class="form-control" placeholder="Product Code" value="<?php echo e($product->product_code); ?>" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Deskripsi Barang</label>
            <textarea class="form-control" name="description" placeholder="Descriptoin" readonly><?php echo e($product->description); ?></textarea>
        </div>
        <div class="col mb-3">
            <label class="form-label">Satuan Barang</label>
            <input type="text" name="unit_price" class="form-control" placeholder="Satuan Barang" value="<?php echo e($product->unit_price); ?>" readonly>
        </div>
    </div>
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Created At</label>
            <input type="text" name="created_at" class="form-control" placeholder="Created At" value="<?php echo e($product->created_at); ?>" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Updated At</label>
            <input type="text" name="updated_at" class="form-control" placeholder="Updated At" value="<?php echo e($product->updated_at); ?>" readonly>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\Anugrah Putra Syifa Al Ghifari\Documents\ITTS\Mapel\Semester 4\FRAMEWORK\UTS\masterBarangUts\resources\views/products/show.blade.php ENDPATH**/ ?>