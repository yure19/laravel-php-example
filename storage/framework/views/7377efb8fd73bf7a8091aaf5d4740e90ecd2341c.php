<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-3 p-5">
            <img src="https://www.eship.ox.ac.uk/sites/default/files/styles/large/public/images/event/codecamp.jpg?itok=QNknZ7St" class="rounded-circle" height="80px">
        </div>
        <div class="col-9;">
            <div class="d-flex justify-content-between align-items-baseline">
                <h1><?php echo e($user->username); ?></h1>
                <a href="#">Add New Post</a>
            </div>
            <div class="d-flex">
                <div class="pr-5"><strong>153</strong> posts</div>
                <div class="pr-5"><strong>23k</strong> followers</div>
                <div class="pr-5"><strong>212</strong> following</div>
            </div>
            <div class="pt-4 font-weight-bold"><?php echo e($user->profile->title); ?></div>
            <div><?php echo e($user->profile->description); ?></div>
            <div><a href="#"><?php echo e($user->profile->url); ?></a></div>
        </div>
    </div>
    <div class="row pt-5">
        <div class="col-4">
            <img src="https://scontent-mia3-2.cdninstagram.com/vp/364059ea61380a1b75f97f0175379660/5E017CCB/t51.2885-15/e35/70303910_720240971773212_6266103486872587826_n.jpg?_nc_ht=scontent-mia3-2.cdninstagram.com&_nc_cat=100" class="w-100">
        </div>
        <div class="col-4">
            <img src="https://scontent-mia3-2.cdninstagram.com/vp/64e399b819e7c667bc1d992a6397d338/5E02DC6F/t51.2885-15/e35/57244862_513269102746206_599322833260649013_n.jpg?_nc_ht=scontent-mia3-2.cdninstagram.com&_nc_cat=106" class="w-100">
        </div>
        <div class="col-4">
            <img src="https://scontent-mia3-2.cdninstagram.com/vp/3e630f4fe483efde16eaf099386da3f2/5E34828D/t51.2885-15/e35/56485998_1283240165149874_2425499138108531736_n.jpg?_nc_ht=scontent-mia3-2.cdninstagram.com&_nc_cat=102" class="w-100">
        </div>
    </div>

</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /mnt/window/Users/Name/Documents/yure_2019/gitHub_projects/laravel-php-example/resources/views/index.blade.php ENDPATH**/ ?>
