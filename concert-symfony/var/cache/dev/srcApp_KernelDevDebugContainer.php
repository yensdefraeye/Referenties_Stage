<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerKN53X99\srcApp_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerKN53X99/srcApp_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerKN53X99.legacy');

    return;
}

if (!\class_exists(srcApp_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerKN53X99\srcApp_KernelDevDebugContainer::class, srcApp_KernelDevDebugContainer::class, false);
}

return new \ContainerKN53X99\srcApp_KernelDevDebugContainer([
    'container.build_hash' => 'KN53X99',
    'container.build_id' => 'fb38b008',
    'container.build_time' => 1571053142,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerKN53X99');