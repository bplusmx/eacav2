<?php

/*
 * Para agregar los lugares de Acapulco, deben llevar:
 * 
 * Los datos del metabox
 * 
 * Taxonomias para poder filtrar
 * 
 */

/*
 * Para agregar los lugares de Acapulco, deben llevar:
 * 
 * Los datos van en un metabox
 * 
 * Giro (Taxonomia)
 *  - Restaurante
 *  - Bar
 *  - Etc.
 * 
 * Fotos
 *  - Destacada
 *  - Galeria
 * 
 * Zona (Taxonomia global): 
 *  - Tradicional 
 *  - Condesa
 *  - Diamante
 * 
 * Direccion
 *  - Calle
 *  - Colonia (Taxonomia)
 *  - C.P (Taxonomia)
 *  - Ciudad (Taxonomia)
 *  - Estado (Taxonomia)
 * 
 * Telefonos con extension y fax
 * 
 * E-mails
 * 
 * Página Web
 * 
 * Social: 
 *   - Twitter 
 *   - Facebook
 *   - FourSquare 
 *   - Youtube
 *   - TripAdvisor
 * 
 * Lugares relacionados (por tags o manual)
 * 
 * GeoReferencia
 * 
 * Acepta Reservas ? Si, No
 * 
 * URL de reservar (Donde reservas, comprar tickets, etc.).
 * 
 * Metodos de pago: 
 *  - Efectivo
 *  - Tarjetas: 
 *     - Si, No
 *     - Cuales tarjetas
 * 
 * Calificación (5 estrellas, 0-10)
 * 
 * Likes de personas a las que le gusta
 * 
 * Likes en redes sociales: FB, Twitter
 * 
 * Lista de Tips
 * 
 * Comentarios
 * 
 * URL especial
 * 
 * Visitas totales
 * 
 * Venue padre (como las que se encuentran en una plaza comercial)
 * 
 * Lista de administradores
 * 
 * Operadora / cadena: Empresa que administra el lugar, para ligar sucusales (Taxonomía)
 *   - Domino´s
 *   - Pizza Hut
 *   - Cinepolis
 *   - Starbucks, etc.
 * 
 * Sucursales (lista de venues relacionadas)
 * 
 * Integración con FourSquare
 *  - Fotos (administrables, mostrar u ocultar algunas fotos)
 *  - Tips
 *  - Metadatos
 * 
 */

$eaca_venues = Eaca_Venues::getInstance();

class Eaca_Venues
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
            'name'                => _x( 'Lugares', 'Post Type General Name', 'eacapulco' ),
            'singular_name'       => _x( 'Lugar', 'Post Type Singular Name', 'eacapulco' ),
            'menu_name'           => __( 'Lugares', 'eacapulco' ),
            'parent_item_colon'   => __( 'Superior:', 'eacapulco' ),
            'all_items'           => __( 'Todos', 'eacapulco' ),
            'view_item'           => __( 'Ver lugar', 'eacapulco' ),
            'add_new_item'        => __( 'Agregar lugar', 'eacapulco' ),
            'add_new'             => __( 'Agregar nuevo', 'eacapulco' ),
            'edit_item'           => __( 'Editar lugar', 'eacapulco' ),
            'update_item'         => __( 'Actualizar lugar', 'eacapulco' ),
            'search_items'        => __( 'Buscar', 'eacapulco' ),
            'not_found'           => __( 'No se encontró el elemento', 'eacapulco' ),
            'not_found_in_trash'  => __( 'No hay elementos en la papelera', 'eacapulco' ),
        );
        
        $rewrite = array(
            'slug'                => 'lugares',
            'with_front'          => true
        );
        
        $args = array(
            'label'               => __( 'Lugares', 'eacapulco' ),
            'description'         => __( 'Lugares', 'eacapulco' ),
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
        
        register_post_type(EACA_VENUES_SLUG, $args);
    }
    
    function register_taxonomy_category()
    {
        $labels = array(
            'name'                       => _x( 'Cadena', 'Taxonomy General Name', 'eacapulco' ),
            'singular_name'              => _x( 'Cadena / Operador', 'Taxonomy Singular Name', 'eacapulco' ),
            'menu_name'                  => __( 'Cadenas / Operadores', 'eacapulco' ),
            'all_items'                  => __( 'Todas', 'eacapulco' ),
            'parent_item'                => __( 'Categoría superior', 'eacapulco' ),
            'parent_item_colon'          => __( 'Superior:', 'eacapulco' ),
            'new_item_name'              => __( 'Nueva cadena', 'eacapulco' ),
            'add_new_item'               => __( 'Agregar cadena', 'eacapulco' ),
            'edit_item'                  => __( 'Editar cadena', 'eacapulco' ),
            'update_item'                => __( 'Actualizar', 'eacapulco' ),
            'separate_items_with_commas' => __( 'Separar con comas', 'eacapulco' ),
            'search_items'               => __( 'Buscar', 'eacapulco' ),
            'add_or_remove_items'        => __( 'Agregar o eliminar', 'eacapulco' ),
            'choose_from_most_used'      => __( 'Seleccione de las más utilizadas', 'eacapulco' ),
            'not_found'                  => __( 'No se encontraron elemento', 'eacapulco' ),
        );
        $rewrite = array(
            'slug'                       => 'cadena',
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
            'query_var'                  => 'venue_operator',
            'rewrite'                    => $rewrite,
        );
        
        register_taxonomy(EACA_TAXONOMY_VENUE_OPERATOR_SLUG, EACA_VENUES_SLUG, $args);
    }
    
}
