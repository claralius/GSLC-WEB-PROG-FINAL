<?php $__env->startSection('title', 'Category Page'); ?>

<?php $__env->startSection('content'); ?>

    <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
        <li><a href="/" class="nav-link px-2 link-primary">Books List</a></li>

        <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle " href="/category" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Book Category
        </a>
        <ul class="dropdown-menu aria-labelledby="navbarDropdownMenuLink d-grid gap-1 p-2 rounded-3 mx-0 shadow w-220px">
            <li><a class="dropdown-item rounded-2" href="<?php echo e(route('display_category_details', ['id'=> 1])); ?>">Action & Adventure</a></li>

            <li><a class="dropdown-item rounded-2" href="<?php echo e(route('display_category_details', ['id'=> 2])); ?>">Biography</a></li>

            <li><a class="dropdown-item rounded-2" href="<?php echo e(route('display_category_details', ['id'=> 3])); ?>">Fiction</a></li>
        </ul>
        </li>
    </ul>

    <?php $__currentLoopData = $category_details; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cgd): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <h1>Category : <?php echo e($cgd->category_name); ?></h1>
        <?php break; ?>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    <div class="row pt-3">
        <?php $__currentLoopData = $category_details; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cgd): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="col-4 themed-grid-col">

                <div class="card" style="width: 15rem;">
                    <img class="card-img-top" src="<?php echo e($cgd->image); ?>" alt="<?php echo e($cgd->title); ?>">
                    <div class="card-body">
                    <h5 class="card-title"><?php echo e($cgd->title); ?></h5>
                    <p class="card-text">by <br> <?php echo e($cgd->author); ?></p>

                    <form action="<?php echo e(route('display_book_details', ['id' => $cgd->id])); ?>">
                        <button type="submit" class="btn btn-primary">Detail</a>
                    </form>

                    </div>
                </div>

            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>



<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\liusc\Desktop\test laravel\AuthSocialite\resources\views/category.blade.php ENDPATH**/ ?>