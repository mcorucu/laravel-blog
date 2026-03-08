<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag;

$__newAttributes = [];
$__propNames = \Illuminate\View\ComponentAttributeBag::extractPropNames((['post']));

foreach ($attributes->all() as $__key => $__value) {
    if (in_array($__key, $__propNames)) {
        $$__key = $$__key ?? $__value;
    } else {
        $__newAttributes[$__key] = $__value;
    }
}

$attributes = new \Illuminate\View\ComponentAttributeBag($__newAttributes);

unset($__propNames);
unset($__newAttributes);

foreach (array_filter((['post']), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
}

$__defined_vars = get_defined_vars();

foreach ($attributes->all() as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
}

unset($__defined_vars); ?>

<div class="group card-hover-effect bg-mn-white border border-mn-pearl/30 overflow-hidden">
    <a href="/post/<?php echo e($post->slug); ?>" class="block">
        <div class="aspect-[16/10] overflow-hidden bg-mn-pearl/50 flex items-center justify-center relative">
            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($post->featured_image): ?>
                <img src="<?php echo e(\Illuminate\Support\Facades\Storage::url($post->featured_image)); ?>" alt="<?php echo e($post->title); ?>" class="w-full h-full object-cover opacity-80 group-hover:opacity-100 group-hover:scale-110 transition-all duration-1000 ease-[cubic-bezier(0.16,1,0.3,1)]">
            <?php elseif($post->featured_svg): ?>
                <div class="p-12 w-full h-full flex items-center justify-center">
                    <img src="/assets/illustrations/<?php echo e($post->featured_svg); ?>" alt="<?php echo e($post->title); ?>" class="w-full h-full object-contain opacity-70 group-hover:opacity-100 group-hover:scale-110 transition-all duration-1000 ease-[cubic-bezier(0.16,1,0.3,1)]">
                </div>
            <?php else: ?>
                <?php if (isset($component)) { $__componentOriginal987d96ec78ed1cf75b349e2e5981978f = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal987d96ec78ed1cf75b349e2e5981978f = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.logo','data' => ['class' => 'w-20 h-20 opacity-05']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('logo'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'w-20 h-20 opacity-05']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal987d96ec78ed1cf75b349e2e5981978f)): ?>
<?php $attributes = $__attributesOriginal987d96ec78ed1cf75b349e2e5981978f; ?>
<?php unset($__attributesOriginal987d96ec78ed1cf75b349e2e5981978f); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal987d96ec78ed1cf75b349e2e5981978f)): ?>
<?php $component = $__componentOriginal987d96ec78ed1cf75b349e2e5981978f; ?>
<?php unset($__componentOriginal987d96ec78ed1cf75b349e2e5981978f); ?>
<?php endif; ?>
            <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
            
            <div class="absolute inset-0 bg-gradient-to-t from-mn-pearl/20 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-700"></div>
        </div>
        
        <div class="p-8 space-y-5">
            <div class="flex items-center justify-between">
                <span class="text-[10px] uppercase tracking-[0.2em] font-bold text-mn-slate"><?php echo e($post->category->name); ?></span>
                <span class="text-[10px] text-mn-slate font-sans"><?php echo e($post->reading_time); ?> min read</span>
            </div>
            
            <h3 class="text-2xl font-display leading-[1.2] group-hover:text-mn-charcoal transition-colors">
                <?php echo e($post->title); ?>

            </h3>
            
            <p class="text-mn-graphite font-serif text-[15px] line-clamp-2 leading-relaxed opacity-80 group-hover:opacity-100 transition-opacity">
                <?php echo e($post->excerpt); ?>

            </p>
            
            <div class="pt-2 flex items-center space-x-2 text-[10px] uppercase tracking-widest font-bold text-mn-black group-hover:translate-x-1 transition-transform duration-500">
                <span>Read Inquiry</span>
                <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M17 8l4 4m0 0l-4 4m4-4H3"></path></svg>
            </div>
        </div>
    </a>
</div>
<?php /**PATH /Users/mcorucu/.gemini/antigravity/playground/solitary-viking/resources/views/components/post-card.blade.php ENDPATH**/ ?>