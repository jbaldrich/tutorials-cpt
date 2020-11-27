<?php declare (strict_types = 1);

namespace JacoBaldrich\Tutorials;

use JacoBaldrich\Tutorials\Application\AddTutorialsToMainQuery;
use JacoBaldrich\Tutorials\Application\RegisterTutorials;

final class Tutorials implements Plugin
{
    private const HOOK = 'plugins_loaded';

    public function register(): void
    {
        \add_action(
            self::HOOK,
            $this
        );
    }

    public function __invoke(): void
    {
        if (! $this->dependenciesAreInstalled()) {
            return;
        }

        (new RegisterTutorials)->register();
        (new AddTutorialsToMainQuery)->register();
    }

    private function dependenciesAreInstalled(): bool
    {
        return true;
    }
}
