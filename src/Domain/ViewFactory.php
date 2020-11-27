<?php declare (strict_types = 1);

namespace JacoBaldrich\Tutorials\Domain;

interface ViewFactory
{
    public function create(Path $path): View;
}
