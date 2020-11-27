<?php declare (strict_types = 1);

namespace JacoBaldrich\Tutorials\Infrastructure;

use JacoBaldrich\Tutorials\Domain\Path;
use JacoBaldrich\Tutorials\Domain\View;
use JacoBaldrich\Tutorials\Domain\ViewFactory;

class TemplateViewFactory implements ViewFactory
{
    public function create(Path $path): View
    {
        return new TemplateView($path);
    }
}
