<?php

declare(strict_types=1);

use Rector\Config\RectorConfig;

return RectorConfig::configure()
    ->withPaths(
        [
            __DIR__ . '/src',
        ]
    )
    ->withSkip(
        ['config/bundles.php', 'config/bootstrap.php', 'public/index.php', 'tests/bootstrap.php']
    )
    ->withAttributesSets(symfony: true, doctrine: true)
    ->withCodingStyleLevel(4)
    ->withCodeQualityLevel(4)
    ->withComposerBased(twig: true, doctrine: true, symfony: true)
    ->withDeadCodeLevel(4)
    ->withImportNames()
    ->withPhpSets()
    ->withTypeCoverageLevel(4);

