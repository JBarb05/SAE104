<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerDH0zE0G\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerDH0zE0G/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerDH0zE0G.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerDH0zE0G\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerDH0zE0G\App_KernelDevDebugContainer([
    'container.build_hash' => 'DH0zE0G',
    'container.build_id' => 'cc4a60d8',
    'container.build_time' => 1706178434,
    'container.runtime_mode' => \in_array(\PHP_SAPI, ['cli', 'phpdbg', 'embed'], true) ? 'web=0' : 'web=1',
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerDH0zE0G');
