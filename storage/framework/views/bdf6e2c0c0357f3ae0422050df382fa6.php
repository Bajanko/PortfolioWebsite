<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>" class="antialiased">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title><?php echo e(config('app.name', 'Bajanko Jaiteh')); ?></title>
        <!-- Vite Assets -->
        <?php echo app('Illuminate\Foundation\Vite')(['resources/css/app.css', 'resources/js/app.js']); ?>
    </head>
    <body class="bg-gray-100 dark:bg-gray-900 text-gray-800 dark:text-gray-200 min-h-screen transition-colors duration-300 flex flex-col text-lg">
        <!-- Include the navbar component -->
        <?php echo $__env->make('components.navbar', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
        
        <!-- Page Content -->
        <main class="flex-grow page-transition transform transition-all duration-300 ease-in-out">
            <div class="max-w-7xl mx-auto pt-16 px-4 sm:px-6 lg:px-8 py-8">
                <?php echo $__env->yieldContent('content'); ?>
            </div>
        </main>
        
        <!-- Footer -->
        <?php echo $__env->make('components.footer', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
        
        <!-- JavaScript for functionality -->
        <?php echo $__env->make('components.scripts', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
    </body>
</html>
<?php /**PATH /Users/bajankojaiteh/Herd/PortfolioWebsite-production/resources/views/main.blade.php ENDPATH**/ ?>