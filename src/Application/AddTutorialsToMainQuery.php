<?php declare(strict_types=1);

namespace JacoBaldrich\Tutorials\Application;

final class AddTutorialsToMainQuery implements Service
{
    private const HOOK = 'pre_get_posts';

    public function register(): void
    {
        \add_filter(self::HOOK, $this);
    }

    public function __invoke(\WP_Query $query): void
    {
        if (\is_admin() || !$query->is_main_query()) {
            return;
        }

        if (empty($query->query_vars['suppress_filters']) && \is_category()) {
            $query->set('post_type', ['post', 'tutorials']);
        }
    }
}
