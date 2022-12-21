<?php $__env->startSection('title', 'Book Detail'); ?>

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
    
    <h1>Book Detail > <?php echo e($book_details->title); ?></h1>
        <h6><a href="/"> Go Back</a></h6>

    <div class="card bg-light mb-3 mx-auto" style="max-width: 25rem;">
        <img class="card-img-top" src="<?php echo e($book_details->image); ?>" alt="<?php echo e($book_details->title); ?>">
        <div class="card-body">
            <h5 class="card-title"><?php echo e($book_details->title); ?></h5>
            <h6 class="card-title">Author: <?php echo e($book_details->author); ?></h5>
            <h6 class="card-title">Year: <?php echo e($book_details->year); ?></h5>
            <h6 class="card-title">Synopsis</h6>
            <p class="card-text"><?php echo e($book_details->synopsis); ?></p>
        </div>
      </div>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\liusc\Desktop\test laravel\AuthSocialite\resources\views/book_detail.blade.php ENDPATH**/ ?>