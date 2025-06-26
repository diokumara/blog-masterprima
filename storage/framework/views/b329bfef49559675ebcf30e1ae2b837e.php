

<?php $__env->startSection('title', $category->title); ?>

<?php $__env->startSection('content'); ?>
    <div class="w-full mb-16 bg-[#F6F6F6]">
        <h1 class="text-center font-bold text-2xl p-24"><?php echo e($category->title); ?></h1>
    </div>

    <div class=" flex flex-col gap-5 px-4 lg:px-14">
    <div class="grid sm:grid-cols-1 gap-5 lg:grid-cols-4">
        <?php $__currentLoopData = $category->news; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $news): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <a href="<?php echo e(route('news.show', $news->slug)); ?>">
            <div
                class="border border-slate-200 p-3 rounded-xl hover:border-warning hover:cursor-pointer transition duration-300 ease-in-out" style="height: 100%;">
                <div class="bg-warning text-white rounded-full w-fit px-5 py-1 font-normal ml-2 mt-2 text-sm absolute">
                    <?php echo e($news->newsCategory->title); ?>    
                </div>
                <img src="<?php echo e(asset('storage/' . $news->thumbnail)); ?>" alt="" class="w-full rounded-xl mb-3" style="height: 200px; object-fit: cover;">
                <p class="font-bold text-base text-dark mb-1"><?php echo e($news->title); ?></p>
                <p class="text-slate-400"><?php echo e(\Carbon\Carbon::parse($news->created_at)->format('d F Y')); ?></p>
            </div>
        </a>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\blog-masterprima\resources\views/pages/news/category.blade.php ENDPATH**/ ?>