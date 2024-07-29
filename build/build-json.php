<?php

declare(strict_types=1);

require_once __DIR__.'/../vendor/autoload.php';

use Symfony\Component\VarExporter\VarExporter;

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

        $output = VarExporter::export($decoded);

        file_put_contents($phpPath, sprintf('<?php return %s;', $output), LOCK_EX);
    }
}

print "== Build completed.\n";
