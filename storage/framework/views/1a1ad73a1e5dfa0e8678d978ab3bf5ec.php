<?php $__env->startSection('content'); ?>
<section class="py-[15px] md:py-[35px] px-6 bg-mn-paper overflow-hidden">
    <header class="max-w-7xl mx-auto mb-20 md:mb-32 grid grid-cols-1 lg:grid-cols-12 gap-8 md:gap-12 items-end">
        <div class="lg:col-span-8 flex flex-col items-start space-y-6 md:space-y-8 animate-fade-in">
            <div class="flex items-center space-x-3">
                <span class="text-[10px] uppercase tracking-[0.5em] font-bold text-mn-slate">Editorial archive</span>
                <div class="w-10 h-[1px] bg-mn-silver"></div>
            </div>
            <h1 class="text-6xl md:text-9xl font-display font-medium tracking-tightest leading-[0.9]">
                <?php echo e($category->name); ?>

            </h1>
        </div>
        <div class="lg:col-span-4 animate-fade-in-up delay-300">
            <p class="text-lg md:text-xl font-serif text-mn-graphite leading-relaxed border-l-2 border-mn-black pl-6 md:pl-8 italic">
                <?php echo e($category->description); ?>

            </p>
        </div>
    </header>

    <div class="max-w-7xl mx-auto">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-x-12 gap-y-24">
            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php if (isset($component)) { $__componentOriginal14b498b52c33a1421ff8895e4557790f = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal14b498b52c33a1421ff8895e4557790f = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.post-card','data' => ['post' => $post]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('post-card'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['post' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($post)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal14b498b52c33a1421ff8895e4557790f)): ?>
<?php $attributes = $__attributesOriginal14b498b52c33a1421ff8895e4557790f; ?>
<?php unset($__attributesOriginal14b498b52c33a1421ff8895e4557790f); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal14b498b52c33a1421ff8895e4557790f)): ?>
<?php $component = $__componentOriginal14b498b52c33a1421ff8895e4557790f; ?>
<?php unset($__componentOriginal14b498b52c33a1421ff8895e4557790f); ?>
<?php endif; ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
        </div>

        <div class="mt-40 pt-16 border-t border-mn-silver/20 flex items-center justify-between">
            <span class="text-[10px] uppercase tracking-[0.2em] font-bold text-mn-slate">Page <?php echo e($posts->currentPage()); ?> of <?php echo e($posts->lastPage()); ?></span>
            <div class="flex space-x-8">
                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($posts->onFirstPage()): ?>
                    <span class="text-[10px] uppercase tracking-[0.2em] font-bold text-mn-silver cursor-not-allowed">Previous</span>
                <?php else: ?>
                    <a href="<?php echo e($posts->previousPageUrl()); ?>" class="text-[10px] uppercase tracking-[0.2em] font-bold text-mn-black hover:text-mn-slate transition-colors">Previous</a>
                <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>

                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($posts->hasMorePages()): ?>
                    <a href="<?php echo e($posts->nextPageUrl()); ?>" class="text-[10px] uppercase tracking-[0.2em] font-bold text-mn-black hover:text-mn-slate transition-colors">Next Inquiry</a>
                <?php else: ?>
                    <span class="text-[10px] uppercase tracking-[0.2em] font-bold text-mn-silver cursor-not-allowed">Next</span>
                <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
            </div>
        </div>
    </div>
</section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /Users/mcorucu/.gemini/antigravity/playground/solitary-viking/resources/views/category.blade.php ENDPATH**/ ?>