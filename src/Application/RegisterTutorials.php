<?php declare(strict_types=1);

namespace JacoBaldrich\Tutorials\Application;

final class RegisterTutorials implements Service
{
    private const HOOK = 'init';
    private const POST_TYPE = 'tutorials';

    public function register(): void
    {
        \add_action(self::HOOK, $this);
    }

    public function __invoke(): void
    {
        \register_post_type(self::POST_TYPE, $this->arguments());
    }

    private function arguments(): array
    {
        return [
            'labels'            => $this->labels(),
            'description'       => 'Módulo de tutoriales',
            'public'            => true,
            'show_in_menu'      => true,
            'show_in_rest'      => true,
            'menu_position'     => 2,
            'menu_icon'         => 'dashicons-video-alt',
            'query_var'         => true,
            'has_archive'       => true,
            'hierarchical'      => true,
            'taxonomies'        => ['category'],
            'show_admin_column' => true,
            'supports'          => [
                'title',
                'editor',
                'thumbnail',
                'excerpt',
                'custom-fields',
                'revisions',
                'page-attributes',
            ],
        ];
    }

    private function labels(): array
    {
        return [
            'name'                  => 'Tutoriales',
            'singular_name'         => 'Tutorial',
            'add_new'               => 'Añadir nuevo',
            'add_new_item'          => 'Añadir nuevo Tutorial',
            'edit_item'             => 'Editar Tutorial',
            'view_item'             => 'Ver Tutoriales',
            'all_items'             => 'Todos los Tutoriales',
            'search_items'          => 'Buscar Tutoriales',
            'not_found'             => 'No se han encontrado tutoriales.',
            'not_found_in_trash'    => 'No hay tutoriales en la papelera.',
            'attributes'            => 'Atributos de tutorial',
            'insert_into_item'      => 'Insertar en el tutorial',
            'uploaded_to_this_item' => 'Subido a este tutorial',
            'featured_image'        => 'Imagen destacada',
            'set_featured_image'    => 'Establecer imagen destacada',
            'remove_featured_image' => 'Borrar imagen destacada',
            'use_featured_image'    => 'Usar como imagen destacada',
            'filter_items_list'     => 'Lista de tutoriales filtrados',
            'items_list_navigation' => 'Navegación por el listado de tutoriales',
            'items_list'            => 'Lista de tutoriales',
        ];
    }
}
