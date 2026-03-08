<?php $__env->startSection('content'); ?>
<!-- Hero Section -->
<section class="max-w-7xl mx-auto px-6 py-[15px] md:py-[35px] animate-fade-in-up">
    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($featuredPost): ?>
    <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 md:gap-16 lg:gap-24 items-center">
        <div class="lg:col-span-6 space-y-8 md:space-y-12">
            <div class="flex items-center space-x-4">
                <span class="text-[10px] uppercase tracking-[0.5em] font-bold text-mn-slate">Featured inquiry</span>
                <div class="w-12 h-[1px] bg-mn-silver"></div>
            </div>
            
            <h1 class="text-5xl md:text-7xl lg:text-8xl font-display font-medium leading-[1.1] md:leading-[1.05] tracking-tightest">
                <?php echo e($featuredPost->title); ?>

            </h1>
            
            <p class="text-lg md:text-xl text-mn-graphite font-serif leading-relaxed max-w-xl opacity-80">
                <?php echo e($featuredPost->excerpt); ?>

            </p>
            
            <div class="pt-4 md:pt-6 flex flex-col sm:flex-row items-start sm:items-center space-y-6 sm:space-y-0 sm:space-x-8">
                <a href="/post/<?php echo e($featuredPost->slug); ?>" class="btn-premium w-full sm:w-auto text-center">Begin Reading</a>
                <span class="text-[10px] uppercase tracking-[0.3em] font-bold text-mn-slate"><?php echo e($featuredPost->reading_time); ?> Min Read</span>
            </div>
        </div>
        
        <div class="lg:col-span-6">
            <div class="aspect-[4/5] md:aspect-square bg-mn-pearl/30 border border-mn-pearl/50 flex items-center justify-center relative overflow-hidden group shadow-premium rounded-sm">
                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($featuredPost->featured_image): ?>
                    <img src="<?php echo e(\Illuminate\Support\Facades\Storage::url($featuredPost->featured_image)); ?>" alt="<?php echo e($featuredPost->title); ?>" class="w-full h-full object-cover group-hover:scale-110 transition-all duration-[4s] ease-out">
                <?php else: ?>
                    <div class="p-16 md:p-24 w-full h-full flex items-center justify-center">
                        <img src="/assets/illustrations/<?php echo e($featuredPost->featured_svg); ?>" alt="<?php echo e($featuredPost->title); ?>" class="w-full h-full object-contain filter grayscale group-hover:scale-110 group-hover:grayscale-0 transition-all duration-[4s] ease-out">
                    </div>
                <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
            </div>
        </div>
    </div>
    <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
</section>

<!-- Latest Grid Section -->
<section class="border-t border-mn-pearl py-[15px] md:py-[35px] px-6 bg-mn-paper">
    <div class="max-w-7xl mx-auto">
        <div class="flex flex-col md:flex-row md:items-end justify-between mb-20 md:mb-24 space-y-8 md:space-y-0 text-center md:text-left">
            <div class="space-y-3">
                <h4 class="text-[10px] uppercase tracking-[0.4em] font-bold text-mn-slate">Editorial selection</h4>
                <h2 class="text-4xl md:text-5xl font-display">Recent Thought.</h2>
            </div>
            <a href="#" class="inline-block text-[10px] uppercase tracking-[0.3em] font-bold text-mn-black border-b border-mn-black pb-1 hover:text-mn-slate hover:border-mn-slate transition-all duration-300 mx-auto md:mx-0">Browse Full Archive</a>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-x-12 gap-y-20">
            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php $__currentLoopData = $latestPosts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
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
    </div>
</section>

<!-- Curated Categories -->
<?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($category->posts->count() > 0): ?>
    <section class="border-t border-mn-pearl py-[15px] md:py-[35px] px-6 overflow-hidden">
        <div class="max-w-7xl mx-auto">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 lg:gap-16 items-start">
                <div class="lg:col-span-4 lg:sticky lg:top-32 space-y-6 md:space-y-8">
                    <span class="text-[10px] uppercase tracking-[0.5em] font-bold text-mn-slate">Category focus</span>
                    <h2 class="text-4xl md:text-5xl font-display tracking-tight"><?php echo e($category->name); ?></h2>
                    <p class="text-mn-graphite font-serif text-base md:text-lg leading-relaxed opacity-70"><?php echo e($category->description); ?></p>
                    <a href="/category/<?php echo e($category->slug); ?>" class="inline-flex items-center space-x-3 text-[10px] uppercase tracking-[0.2em] font-bold hover:translate-x-1 transition-transform">
                        <span>Explore Area</span>
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path></svg>
                    </a>
                </div>
                
                <div class="lg:col-span-8 flex flex-col space-y-24">
                    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php $__currentLoopData = $category->posts->take(2); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="grid grid-cols-1 md:grid-cols-12 gap-10 items-center group">
                            <div class="md:col-span-5">
                                <div class="aspect-[1/1] bg-mn-pearl/20 border border-mn-pearl flex items-center justify-center relative overflow-hidden group-hover:scale-[0.98] transition-transform duration-700">
                                    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($post->featured_image): ?>
                                        <img src="<?php echo e(\Illuminate\Support\Facades\Storage::url($post->featured_image)); ?>" class="w-full h-full object-cover opacity-80 group-hover:opacity-100 transition-opacity duration-700">
                                    <?php else: ?>
                                        <div class="p-12 w-full h-full flex items-center justify-center">
                                            <img src="/assets/illustrations/<?php echo e($post->featured_svg); ?>" class="w-full h-full object-contain opacity-60 group-hover:opacity-100 transition-opacity duration-700">
                                        </div>
                                    <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                                </div>
                            </div>
                            <div class="md:col-span-7 space-y-6">
                                <span class="text-[9px] uppercase tracking-[0.3em] font-bold text-mn-slate"><?php echo e($post->reading_time); ?> MIN READ</span>
                                <h3 class="text-3xl font-display tracking-tight leading-snug group-hover:underline underline-offset-8 decoration-mn-silver decoration-1"><a href="/post/<?php echo e($post->slug); ?>"><?php echo e($post->title); ?></a></h3>
                                <p class="text-mn-graphite font-serif line-clamp-2"><?php echo e($post->excerpt); ?></p>
                            </div>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                </div>
            </div>
        </div>
    </section>
    <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>

<?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(($settings['newsletter_enabled'] ?? 'true') === 'true'): ?>
<!-- Premium Newsletter (Reversed Style) -->
<section class="bg-white py-[15px] md:py-[35px] px-6 relative overflow-hidden border-t border-mn-pearl/50">
    <!-- Abstract Background Element - Reversed -->
    <div class="absolute inset-0 opacity-[0.03]">
        <div class="absolute -right-20 -bottom-20 w-[600px] h-[600px] border border-mn-black rounded-full pointer-events-none"></div>
        <div class="absolute -left-20 -top-20 w-[400px] h-[400px] border border-mn-black rounded-full pointer-events-none"></div>
    </div>

    <div class="max-w-4xl mx-auto text-center space-y-10 md:space-y-12 relative z-10 text-pretty">
        <?php if (isset($component)) { $__componentOriginal987d96ec78ed1cf75b349e2e5981978f = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal987d96ec78ed1cf75b349e2e5981978f = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.logo','data' => ['class' => 'w-12 h-12 md:w-16 md:h-16 mx-auto text-mn-black opacity-10']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('logo'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'w-12 h-12 md:w-16 md:h-16 mx-auto text-mn-black opacity-10']); ?>
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
        
        <div class="space-y-4">
            <h2 class="text-4xl md:text-7xl font-display tracking-tightest text-mn-black"><?php echo e($settings['newsletter_title'] ?? 'Stay within the narrative.'); ?></h2>
            <p class="text-mn-slate font-serif text-lg md:text-xl max-w-2xl mx-auto leading-relaxed"><?php echo e($settings['newsletter_description'] ?? 'Join 50,000 readers who value the luxury of focus.'); ?></p>
        </div>
        
        <form x-data="{ email: '', loading: false, success: false, error: '' }" 
              @submit.prevent="loading = true; error = ''; 
                fetch('/api/subscribe', {
                    method: 'POST',
                    headers: { 
                        'Content-Type': 'application/json', 
                        'Accept': 'application/json',
                        'X-CSRF-TOKEN': '<?php echo e(csrf_token()); ?>' 
                    },
                    body: JSON.stringify({ email: email })
                })
                .then(res => res.json())
                .then(data => {
                    if (data.success) { success = true; email = ''; }
                    else { error = data.message; }
                })
                .catch(() => error = 'An inquiry synchronization error occurred.')
                .finally(() => loading = false)"
              class="pt-8 flex flex-col md:flex-row items-center justify-center space-y-6 md:space-y-0 md:space-x-4 max-w-lg mx-auto pb-12">
            
            <div class="w-full relative group">
                <input type="email" x-model="email" required placeholder="Your email address" 
                       class="bg-transparent border-b border-mn-black/20 py-4 w-full text-lg text-mn-black placeholder:text-mn-silver focus:outline-none focus:border-mn-black transition-all font-serif">
                <div x-show="error" x-cloak class="absolute top-full left-0 w-full text-center md:text-left text-[10px] text-mn-black font-bold uppercase tracking-widest mt-2" x-text="error"></div>
            </div>
            
            <button :disabled="loading" 
                    class="w-full md:w-auto border-2 border-mn-black text-mn-black px-12 py-5 text-[11px] font-bold uppercase tracking-[0.2em] hover:bg-mn-black hover:text-mn-white transition-all duration-300 whitespace-nowrap disabled:opacity-50">
                <span x-show="!loading">Join Inquiries</span>
                <span x-show="loading" x-cloak>Synchronizing...</span>
            </button>

            <!-- Success Overlay -->
            <div x-show="success" x-cloak class="fixed inset-0 z-[100] flex items-center justify-center bg-mn-white/95 backdrop-blur-md">
                <div class="text-center p-12 bg-white shadow-[0_30px_100px_rgba(0,0,0,0.1)] rounded-2xl border border-mn-pearl max-w-sm mx-auto animate-fade-in-up">
                    <div class="w-20 h-20 bg-mn-black rounded-full flex items-center justify-center mx-auto mb-8">
                        <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                    </div>
                    <h4 class="text-3xl font-display mb-4 text-mn-black">Synchronized.</h4>
                    <p class="text-sm font-serif text-mn-slate mb-10 leading-relaxed">Your inquiry has been stored. Expect the first transmission shortly.</p>
                    <button @click="success = false" class="inline-block text-[10px] uppercase tracking-[0.3em] font-bold text-mn-black border-b border-mn-black pb-1 hover:text-mn-slate hover:border-mn-slate transition-all duration-300">Continue Archive Search</button>
                </div>
            </div>
        </form>
    </div>
</section>
<?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /Users/mcorucu/.gemini/antigravity/playground/solitary-viking/resources/views/home.blade.php ENDPATH**/ ?>