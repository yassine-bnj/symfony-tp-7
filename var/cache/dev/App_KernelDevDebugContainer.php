<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\Container8OPgWM5\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/Container8OPgWM5/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/Container8OPgWM5.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\Container8OPgWM5\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \Container8OPgWM5\App_KernelDevDebugContainer([
    'container.build_hash' => '8OPgWM5',
    'container.build_id' => '4bec7fa7',
    'container.build_time' => 1678917650,
], __DIR__.\DIRECTORY_SEPARATOR.'Container8OPgWM5');
