<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\Container43crSUC\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/Container43crSUC/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/Container43crSUC.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\Container43crSUC\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \Container43crSUC\App_KernelDevDebugContainer([
    'container.build_hash' => '43crSUC',
    'container.build_id' => 'e5b1c550',
    'container.build_time' => 1650089796,
], __DIR__.\DIRECTORY_SEPARATOR.'Container43crSUC');
