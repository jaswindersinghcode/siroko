<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerGKAOxgN\CodeChallenge_Infrastructure_Symfony_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerGKAOxgN/CodeChallenge_Infrastructure_Symfony_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerGKAOxgN.legacy');

    return;
}

if (!\class_exists(CodeChallenge_Infrastructure_Symfony_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerGKAOxgN\CodeChallenge_Infrastructure_Symfony_KernelDevDebugContainer::class, CodeChallenge_Infrastructure_Symfony_KernelDevDebugContainer::class, false);
}

return new \ContainerGKAOxgN\CodeChallenge_Infrastructure_Symfony_KernelDevDebugContainer([
    'container.build_hash' => 'GKAOxgN',
    'container.build_id' => '8a6ecb2c',
    'container.build_time' => 1690746893,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerGKAOxgN');
