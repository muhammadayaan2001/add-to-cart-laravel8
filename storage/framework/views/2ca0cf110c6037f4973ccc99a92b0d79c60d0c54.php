<?php $__env->startSection('content'); ?>
    <div class="container d-flex justify-content-center align-items-center">
        <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="card mr-3">
            <span class="percent">-10%</span>
            <div class="card-image">
                <img src="<?php echo e($product->image); ?>" width="250">
            </div>
            <div class="card-inner">
                <span>Groceries</span>
                <h5 class="mb-0"><?php echo e($product->name); ?></h5>
                <div class="price">
                    <span>$22.99</span>
                    <sup>$<?php echo e($product->price); ?></sup>
                </div>
                <div class="mt-3 d-flex justify-content-between align-items-center">
                    <button class="btn btn-success text-uppercase btn-sm details"><?php echo e($product->description); ?></button>
                    <div class="d-flex flex-row">
                        <span class="wishlist"><i class="fa fa-heart"></i></span>
                        <span class="cart"><a href="<?php echo e(route('add.to.cart', $product->id)); ?>"><i class="fa fa-shopping-cart"></i></a></span>
                    </div>
                </div>
            </div>
        </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
<?php $__env->stopSection(); ?>


<script>

</script>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\test-laravel\resources\views/products/products.blade.php ENDPATH**/ ?>