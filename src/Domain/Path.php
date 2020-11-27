<?php declare (strict_types = 1);

namespace JacoBaldrich\Tutorials\Domain;

interface Path
{
    public static function create(string $file, string $relativePath): Path;
    public function filePath(): string;
}
