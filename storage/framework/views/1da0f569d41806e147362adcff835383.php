<?php $__env->startSection('title', 'Home Product'); ?>

<?php $__env->startSection('contents'); ?>
    <div class="d-flex align-items-center justify-content-between">
        <h1 class="mb-0">List Barang, Input Barang, Edit Barang</h1>
        <a href="<?php echo e(route('products.create')); ?>" class="btn btn-primary">Buat Barang</a>
    </div>
    <hr />
    <?php if(Session::has('success')): ?>
        <div class="alert alert-success" role="alert">
            <?php echo e(Session::get('success')); ?>

        </div>
    <?php endif; ?>
    <table class="table table-hover">
        <thead class="table-primary">
            <tr>
                <th>Nama Barang</th>
                <th>Harga</th>
                <th>Kode Barang</th>
                <th>Deskripsi Barang</th>
                <th>Satuan Barang</th>
                <th>Tindakan</th>
            </tr>
        </thead>
        <tbody>+
            <?php if($product->count() > 0): ?>
                <?php $__currentLoopData = $product; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $rs): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>

                        <td class="align-middle"><?php echo e($rs->title); ?></td>
                        <td class="align-middle"><?php echo e($rs->price); ?></td>
                        <td class="align-middle"><?php echo e($rs->product_code); ?></td>
                        <td class="align-middle"><?php echo e($rs->description); ?></td>
                        <td class="align-middle"><?php echo e($rs->unit_price); ?></td>
                        <td class="align-middle">
                            <div class="btn-group" role="group" aria-label="Basic example">
                                <a href="<?php echo e(route('products.show', $rs->id)); ?>" type="button" class="btn btn-secondary">Detail</a>
                                <a href="<?php echo e(route('products.edit', $rs->id)); ?>" type="button" class="btn btn-warning">Edit</a>
                                <form action="<?php echo e(route('products.destroy', $rs->id)); ?>" method="POST" type="button" class="btn btn-danger p-0" onsubmit="return confirm('Delete?')">
                                    <?php echo csrf_field(); ?>
                                    <?php echo method_field('DELETE'); ?>
                                    <button class="btn btn-danger m-0">Hapus</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <?php else: ?>
                <tr>
                    <td class="text-center" colspan="5">Product not found</td>
                </tr>
            <?php endif; ?>
        </tbody>
    </table>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\Anugrah Putra Syifa Al Ghifari\Documents\ITTS\Mapel\Semester 4\FRAMEWORK\UTS\masterBarangUts\resources\views/products/index.blade.php ENDPATH**/ ?>