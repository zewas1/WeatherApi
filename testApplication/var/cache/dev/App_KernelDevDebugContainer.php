<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerBZM5onx\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerBZM5onx/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerBZM5onx.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerBZM5onx\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerBZM5onx\App_KernelDevDebugContainer([
    'container.build_hash' => 'BZM5onx',
    'container.build_id' => 'fe918e03',
    'container.build_time' => 1620023591,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerBZM5onx');
