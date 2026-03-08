<?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($settings['logo'] ?? false): ?>
    <img src="<?php echo e(Str::startsWith($settings['logo'], 'assets/') ? asset($settings['logo']) : Storage::url($settings['logo'])); ?>" <?php echo e($attributes->merge(['class' => 'h-10 w-auto object-contain'])); ?> alt="MN Logo">
<?php else: ?>
    <svg <?php echo e($attributes->merge(['viewBox' => '0 0 100 100', 'fill' => 'none', 'xmlns' => 'http://www.w3.org/2000/svg'])); ?>>
        <!-- Geometric MN Logo - Sophisticated & Balanced -->
        <rect width="100" height="100" rx="20" fill="currentColor" fill-opacity="0.03" />
        <path d="M25 70V30L50 65L75 30V70" stroke="currentColor" stroke-width="6" stroke-linecap="round" stroke-linejoin="round"/>
        <!-- Subtle accent line -->
        <path d="M25 75H35M75 75H65" stroke="currentColor" stroke-width="3" stroke-linecap="round" opacity="0.4"/>
    </svg>
<?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
<?php /**PATH /Users/mcorucu/.gemini/antigravity/playground/solitary-viking/resources/views/components/logo.blade.php ENDPATH**/ ?>