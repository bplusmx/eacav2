<?php

/*
 * Eventos del portal
 * 
 * Nombre del evento
 * 
 * Descripcion
 * 
 * Categoría
 *   - Festivales
 *   - Congresos
 *   - Conciertos
 *   - Torneos
 * 
 * Etiquetas: Cultura, Deportes, Playas
 * 
 * Dirección / Ligar a un Venue si existe
 * 
 * Tickets (URL para la compra)
 * 
 * Fecha y hora de inicio
 * 
 * Fecha y hora de finalización
 * 
 * Organizador
 *   - Nombre
 * 
 * Lista de asistentes
 *   - Integrar con Facebook
 * 
 * Actualizaciones
 *   - Enviar a FB
 * 
 * URL especial
 * 
 */

$eaca_events = Eaca_Events::getInstance();

class Eaca_Events
{
    protected static $instance;
    
    function getInstance() 
    {
        if (!isset(self::$instance)) {
            $class_name = __CLASS__;
            
            self::$instance = new $class_name();
        }
        
        return self::$instance;
    }
    
    protected function __construct() 
    {
        add_action('init', array($this, 'init'));
    }
    
    function init()
    {
        $this->register_custom_post_type();
        //$this->register_taxonomy_category();
    }
    
    function register_custom_post_type()
    {
        $labels = array(
            'name'                => _x( 'Eventos', 'Post Type General Name', 'eacapulco' ),
            'singular_name'       => _x( 'Evento', 'Post Type Singular Name', 'eacapulco' ),
            'menu_name'           => __( 'Eventos', 'eacapulco' ),
            'parent_item_colon'   => __( 'Superior:', 'eacapulco' ),
            'all_items'           => __( 'Todos', 'eacapulco' ),
            'view_item'           => __( 'Ver evento', 'eacapulco' ),
            'add_new_item'        => __( 'Agregar evento', 'eacapulco' ),
            'add_new'             => __( 'Agregar evento', 'eacapulco' ),
            'edit_item'           => __( 'Editar evento', 'eacapulco' ),
            'update_item'         => __( 'Actualizar evento', 'eacapulco' ),
            'search_items'        => __( 'Buscar', 'eacapulco' ),
            'not_found'           => __( 'No se encontró el elemento', 'eacapulco' ),
            'not_found_in_trash'  => __( 'No hay elementos en la papelera', 'eacapulco' ),
        );
        
        $rewrite = array(
            'slug'                => 'eventos',
            'with_front'          => true
        );
        
        $args = array(
            'label'               => __( 'Eventos', 'eacapulco' ),
            'description'         => __( 'Eventos', 'eacapulco' ),
            'labels'              => $labels,
            'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'custom-fields', 'page-attributes', 'post-formats', ),
            'taxonomies'          => array( 'category', 'post_tag', EACA_TAXONOMY_CITY_ZONES_SLUG),
            'hierarchical'        => false,
            'public'              => true,
            'show_ui'             => true,
            'show_in_menu'        => true,
            'show_in_nav_menus'   => true,
            'show_in_admin_bar'   => true,
            //'menu_position'       => 5,
            //'menu_icon'           => 'htt://e-acapulco.com/icono.png',
            'can_export'          => true,
            'has_archive'         => true,
            'exclude_from_search' => false,
            'publicly_queryable'  => true,
            'query_var'           => '',
            'rewrite'             => $rewrite,
            'capability_type'     => 'page',
        );
        
        register_post_type(EACA_EVENTS_SLUG, $args);
    }
    
    function register_taxonomy_category()
    {
        $labels = array(
            'name'                       => _x( 'Categoría', 'Taxonomy General Name', 'eacapulco' ),
            'singular_name'              => _x( 'Categoría', 'Taxonomy Singular Name', 'eacapulco' ),
            'menu_name'                  => __( 'Categorías', 'eacapulco' ),
            'all_items'                  => __( 'Todas', 'eacapulco' ),
            'parent_item'                => __( 'Categoría superior', 'eacapulco' ),
            'parent_item_colon'          => __( 'Superior:', 'eacapulco' ),
            'new_item_name'              => __( 'Nueva Categoría', 'eacapulco' ),
            'add_new_item'               => __( 'Agregar Categoría', 'eacapulco' ),
            'edit_item'                  => __( 'Editar Categoría', 'eacapulco' ),
            'update_item'                => __( 'Actualizar Categoría', 'eacapulco' ),
            'separate_items_with_commas' => __( 'Separar con comas', 'eacapulco' ),
            'search_items'               => __( 'Buscar categorías', 'eacapulco' ),
            'add_or_remove_items'        => __( 'Agregar o eliminar Categorías', 'eacapulco' ),
            'choose_from_most_used'      => __( 'Seleccione de las más utilizadas', 'eacapulco' ),
            'not_found'                  => __( 'No se encontraron Categorías', 'eacapulco' ),
        );
        $rewrite = array(
            'slug'                       => 'hotel-categoria',
            'with_front'                 => true,
            'hierarchical'               => false,
        );
        $args = array(
            'labels'                     => $labels,
            'hierarchical'               => true,
            'public'                     => true,
            'show_ui'                    => true,
            'show_admin_column'          => true,
            'show_in_nav_menus'          => true,
            'show_tagcloud'              => false,
            'query_var'                  => 'hotel_category',
            'rewrite'                    => $rewrite,
        );
        
        register_taxonomy(EACA_TAXONOMY_HOTEL_CATEGORY_SLUG, EACA_HOTELES_SLUG, $args);
    }
    
}
