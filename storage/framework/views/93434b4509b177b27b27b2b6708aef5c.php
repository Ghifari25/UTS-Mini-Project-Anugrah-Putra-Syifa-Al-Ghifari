<?php $__env->startSection('title', 'Edit Product'); ?>

<?php $__env->startSection('contents'); ?>
    <h1 class="mb-0">Edit Product</h1>
    <hr />
    <form action="<?php echo e(route('products.update', $product->id)); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <?php echo method_field('PUT'); ?>
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">Title</label>
                <input type="text" name="title" class="form-control" placeholder="Title" value="<?php echo e($product->title); ?>" >
            </div>
            <div class="col mb-3">
                <label class="form-label">Price</label>
                <input type="text" name="price" class="form-control" placeholder="Price" value="<?php echo e($product->price); ?>" >
            </div>
        </div>
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">Product Code</label>
                <input type="text" name="product_code" class="form-control" placeholder="Product Code" value="<?php echo e($product->product_code); ?>" >
            </div>
            <div class="col mb-3">
                <label class="form-label">Description</label>
                <textarea class="form-control" name="description" placeholder="Descriptoin" ><?php echo e($product->description); ?></textarea>
            </div>
            <div class="col mb-3">
                <label class="form-label">Satuan Barang</label>
                <input type="text" name="unit_price" class="form-control" placeholder="Harga Satuan"  value="<?php echo e($product->unit_price); ?>" >
            </div>
        </div>
        <div class="row">
            <div class="d-grid">
                <button class="btn btn-warning">Update</button>
            </div>
        </div>
    </form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\Anugrah Putra Syifa Al Ghifari\Documents\ITTS\Mapel\Semester 4\FRAMEWORK\UTS\masterBarangUts\resources\views/products/edit.blade.php ENDPATH**/ ?>