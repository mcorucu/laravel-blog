<?php $__env->startSection('title', $post->meta_title ?? $post->title); ?>
<?php $__env->startSection('meta_description', $post->meta_description ?? $post->excerpt); ?>

<?php $__env->startSection('content'); ?>
<article class="py-[15px] md:py-[35px] px-6 bg-mn-paper">
    <header class="max-w-4xl mx-auto text-center space-y-10 md:space-y-12 mb-16 md:mb-24">
        <div class="flex items-center justify-center space-x-4 animate-fade-in">
            <span class="text-[10px] uppercase tracking-[0.4em] font-bold text-mn-slate"><?php echo e($post->category->name); ?></span>
            <span class="w-1 h-1 bg-mn-silver rounded-full"></span>
            <span class="text-[10px] uppercase tracking-[0.4em] font-bold text-mn-slate lowercase italic tracking-normal"><?php echo e($post->reading_time); ?> min read</span>
        </div>
        
        <h1 class="text-5xl md:text-8xl font-display font-medium leading-[1.1] md:leading-[1.05] tracking-tightest animate-fade-in-up">
            <?php echo e($post->title); ?>

        </h1>
        
        <div class="flex flex-col items-center space-y-4 pt-4 animate-fade-in delay-300">
            <div class="flex items-center space-x-3">
                <div class="w-10 h-[1px] bg-mn-silver"></div>
                <span class="text-[10px] md:text-xs uppercase tracking-[0.2em] font-bold"><?php echo e($post->author_name); ?></span>
                <div class="w-10 h-[1px] bg-mn-silver"></div>
            </div>
            <span class="text-[9px] md:text-[10px] uppercase tracking-[0.4em] text-mn-slate font-medium"><?php echo e($post->published_at->format('M d, Y')); ?></span>
        </div>
    </header>

    <div class="max-w-6xl mx-auto mb-32 animate-fade-in delay-500">
        <div class="aspect-[21/9] bg-mn-pearl/30 border border-mn-pearl/50 flex items-center justify-center overflow-hidden relative shadow-premium">
            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($post->featured_image): ?>
                <img src="<?php echo e(\Illuminate\Support\Facades\Storage::url($post->featured_image)); ?>" alt="<?php echo e($post->title); ?>" class="w-full h-full object-cover hover:scale-105 transition-transform duration-[3s] ease-out">
            <?php else: ?>
                <div class="p-20 w-full h-full flex items-center justify-center">
                    <img src="/assets/illustrations/<?php echo e($post->featured_svg); ?>" alt="<?php echo e($post->title); ?>" class="w-full h-full object-contain hover:scale-105 transition-transform duration-[3s] ease-out">
                </div>
            <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
            <div class="absolute bottom-6 right-6 text-[8px] uppercase tracking-[0.5em] text-mn-slate font-bold opacity-30">Editorial Illustration</div>
        </div>
    </div>

    <div class="max-w-reading mx-auto reading-content animate-fade-in delay-700">
        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(Str::startsWith($post->body, '<')): ?>
            <?php echo $post->body; ?>

        <?php else: ?>
            <?php echo Str::markdown($post->body); ?>

        <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
        
        <div class="mt-20 md:mt-24 pt-12 md:pt-16 border-t border-mn-pearl/50 flex flex-col md:flex-row md:items-center justify-between space-y-12 md:space-y-0" x-data="{ 
            copied: false,
            copyToClipboard() {
                navigator.clipboard.writeText(window.location.href);
                this.copied = true;
                setTimeout(() => this.copied = false, 2000);
            }
        }">
            <!-- Share Section (Left) -->
            <div class="flex flex-col md:flex-row items-center md:space-x-8 space-y-6 md:space-y-0">
                <span class="text-[10px] uppercase tracking-[0.4em] font-bold text-mn-slate/60 md:border-r md:border-mn-pearl/50 md:pr-8">Share</span>
                <div class="flex items-center space-x-5">
                    <!-- X -->
                    <a href="https://twitter.com/intent/tweet?url=<?php echo e(urlencode(url()->current())); ?>&text=<?php echo e(urlencode($post->title)); ?>" target="_blank" class="w-10 h-10 md:w-8 md:h-8 flex items-center justify-center rounded-full border border-mn-pearl text-mn-slate hover:text-mn-black hover:border-mn-black transition-all duration-300 hover:-translate-y-1" title="Share on X">
                        <svg class="w-4 h-4 md:w-3.5 md:h-3.5" fill="currentColor" viewBox="0 0 24 24"><path d="M18.901 1.153h3.68l-8.04 9.19L24 22.846h-7.406l-5.8-7.584-6.638 7.584H.474l8.6-9.83L0 1.154h7.594l5.243 6.932ZM17.61 20.644h2.039L6.486 3.24H4.298Z"/></svg>
                    </a>
                    <!-- Instagram -->
                    <a href="#" class="w-10 h-10 md:w-8 md:h-8 flex items-center justify-center rounded-full border border-mn-pearl text-mn-slate hover:text-mn-black hover:border-mn-black transition-all duration-300 hover:-translate-y-1" title="Share on Instagram">
                        <svg class="w-4.5 h-4.5 md:w-4 md:h-4" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"><rect x="2" y="2" width="20" height="20" rx="5" ry="5"/><path d="M16 11.37A4 4 0 1112.63 8 4 4 0 0116 11.37zM17.5 6.5h.01"/></svg>
                    </a>
                    <!-- LinkedIn -->
                    <a href="https://www.linkedin.com/sharing/share-offsite/?url=<?php echo e(urlencode(url()->current())); ?>" target="_blank" class="w-10 h-10 md:w-8 md:h-8 flex items-center justify-center rounded-full border border-mn-pearl text-mn-slate hover:text-mn-black hover:border-mn-black transition-all duration-300 hover:-translate-y-1" title="Share on LinkedIn">
                        <svg class="w-4 h-4 md:w-3.5 md:h-3.5" fill="currentColor" viewBox="0 0 24 24"><path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"/></svg>
                    </a>
                    <!-- Copy Link -->
                    <button @click="copyToClipboard()" class="w-10 h-10 md:w-8 md:h-8 flex items-center justify-center rounded-full border border-mn-pearl text-mn-slate hover:text-mn-black hover:border-mn-black transition-all duration-300 hover:-translate-y-1 relative group" title="Copy Link">
                        <svg class="w-4 h-4 md:w-3.5 md:h-3.5" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"><path d="M13.828 10.172a4 4 0 00-5.656 0l-4 4a4 4 0 105.656 5.656l1.102-1.101m-.758-4.899a4 4 0 005.656 0l4-4a4 4 0 00-5.656-5.656l-1.1 1.1"/></svg>
                        <span x-show="copied" x-transition x-cloak class="absolute -top-10 left-1/2 -translate-x-1/2 bg-mn-black text-white text-[8px] px-2 py-1.5 rounded-sm uppercase tracking-widest font-bold whitespace-nowrap shadow-xl">Link Copied</span>
                    </button>
                </div>
            </div>

            <!-- Navigation (Right) -->
            <div class="flex items-center justify-center md:justify-end border-t border-mn-pearl/30 md:border-none pt-8 md:pt-0 w-full md:w-auto">
                <a href="/category/<?php echo e($post->category->slug); ?>" class="group flex items-center space-x-3 text-[10px] uppercase tracking-[0.4em] font-bold text-mn-slate hover:text-mn-black transition-colors">
                    <span class="border-b border-transparent group-hover:border-mn-black pb-0.5 transition-all">Return to <?php echo e($post->category->name); ?></span>
                    <svg class="w-4 h-4 transform group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path></svg>
                </a>
            </div>
        </div>
    </div>

    <footer class="max-w-7xl mx-auto py-[15px] md:py-[35px] border-t border-mn-pearl">
        <div class="flex items-end justify-between mb-16">
            <div class="space-y-4">
                <h4 class="text-xs uppercase tracking-[0.4em] font-bold text-mn-slate">Related Inquiries</h4>
                <h3 class="text-3xl font-display">Continue the Narrative.</h3>
            </div>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-10">
            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php $__currentLoopData = $relatedPosts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $related): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php if (isset($component)) { $__componentOriginal14b498b52c33a1421ff8895e4557790f = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal14b498b52c33a1421ff8895e4557790f = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.post-card','data' => ['post' => $related]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('post-card'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['post' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($related)]); ?>
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
    </footer>
</article>
<div class="bg-mn-white h-40"></div> <!-- Buffer -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /Users/mcorucu/.gemini/antigravity/playground/solitary-viking/resources/views/post.blade.php ENDPATH**/ ?>