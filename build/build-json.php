<?php

declare(strict_types=1);

$basePath = __DIR__.'/../data';

$files = new RecursiveIteratorIterator(
    new RecursiveDirectoryIterator($basePath, RecursiveDirectoryIterator::SKIP_DOTS)
);

foreach ($files as $file) {
    if ($file->isFile() && $file->getExtension() === 'json') {
        printf("=> %s\n", $file->getRealPath());

        $filename = pathinfo($file->getRealPath(), PATHINFO_FILENAME);
        $phpPath = $file->getPath().'/'.$filename.'.php';

        $contents = file_get_contents($file->getRealPath());
        $decoded = json_decode($contents, associative: true);

        file_put_contents($phpPath, sprintf('<?php return %s;', var_export($decoded, return: true)), LOCK_EX);
    }
}

print "== Build completed.\n";
