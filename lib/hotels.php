<?php
/*
 * Hoteles : Venue
 * 
 * Para agregar los hoteles de Acapulco, deben llevar:
 * 
 * Descripción
 * 
 * Rank o Rating de hotel
 *  - Especial
 *  - 5 estrellas
 *  - 4 estrellas, etc.
 * 
 * Fotos
 *  - Destacada
 *  - Galeria
 * 
 * Videos
 * 
 * Tours virtuales (URL)
 * 
 * Checkin
 * 
 * Checkout
 * 
 * Habitaciones (cantidad)
 * 
 * Instalaciones
 *   - Restaurantes (lista de venues hijas)
 *   - Bar (es) (lista de venues hijas) 
 *   - Salones de fiestas (lista de venues hijas)
 *   - Salones de belleza (lista de venues hijas)
 *   - Tiendas (lista de venues hijas)
 *   - Gym (lista de venues hijas)
 * 
 * Facilidades
 *   - Elevadores
 *   - Albercas
 *   - Estacionamiento
 *     - Si, No
 *     - Costo
 * 
 * Servicios (Taxonomia)
 *   - Doctor
 *   - Niñera
 *   - Enfermería
 *   - Caja de seguridad, etc.
 * 
 * Plan de alimentos (Taxonomía)
 *   - Todo incluido
 *   - Semi todo incluido
 *   - Desayuno buffet, etc.
 * 
 * Cadena hotelera (Taxonomía)
 *   - Crowne Plaza
 *   - Holiday Inn
 *   - Park Royal
 *   - Fairmont
 * 
 * Tema (Taxonomia)
 *   - Playa
 *   - Negocios
 *   - Romance
 *   - Familiar, etc.
 * 
 * Habitaciones (Taxonomia)
 *   - Standard
 *   - Doble
 *   - Suite, etc.
 * 
 * Hereda de venues
 *   - Zona
 *   - Direccion
 *   - Telefonos con extension y fax
 *   - E-mail
 *   - Página Web
 *   - Social: 
 *   - Sucursales
 *   - Lugares relacionados (por tags o manual)
 *   - GeoReferencia
 *   - Acepta Reservas
 *   - Metodos de pago: 
 *   - Calificación (5 estrellas, 0-10)
 *   - Likes de personas a las que le gusta
 *   - Likes en redes sociales: FB, Twitter
 *   - Lista de Tips
 *   - Comentarios
 *   - URL especial
 *   - Visitas totales
 *   - Lista de administradores
 *   - Integración con FourSquare
 * 
 */

$eaca_hotels = Eaca_Hotels::getInstance();

class Eaca_Hotels 
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
        $this->register_taxonomy_category();
    }
    
    function register_custom_post_type()
    {
        $labels = array(
            'name'                => _x( 'Hoteles', 'Post Type General Name', 'eacapulco' ),
            'singular_name'       => _x( 'Hotel', 'Post Type Singular Name', 'eacapulco' ),
            'menu_name'           => __( 'Hoteles', 'eacapulco' ),
            'parent_item_colon'   => __( 'Superior:', 'eacapulco' ),
            'all_items'           => __( 'Todos', 'eacapulco' ),
            'view_item'           => __( 'Ver hotel', 'eacapulco' ),
            'add_new_item'        => __( 'Agregar hotel', 'eacapulco' ),
            'add_new'             => __( 'Agregar nuevo', 'eacapulco' ),
            'edit_item'           => __( 'Editar hotel', 'eacapulco' ),
            'update_item'         => __( 'Actualizar hotel', 'eacapulco' ),
            'search_items'        => __( 'Buscar', 'eacapulco' ),
            'not_found'           => __( 'No se encontró el elemento', 'eacapulco' ),
            'not_found_in_trash'  => __( 'No hay elementos en la papelera', 'eacapulco' ),
        );
        
        $rewrite = array(
            'slug'                => 'directorio',
            'with_front'          => true
        );
        
        $args = array(
            'label'               => __( 'Hoteles', 'eacapulco' ),
            'description'         => __( 'Directorio de hoteles', 'eacapulco' ),
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
        
        register_post_type(EACA_HOTELES_SLUG, $args );
    }
    
    function register_taxonomy_category()
    {
        $labels = array(
            'name'                       => _x( 'Categoría Hotel', 'Taxonomy General Name', 'eacapulco' ),
            'singular_name'              => _x( 'Categoría Hotel', 'Taxonomy Singular Name', 'eacapulco' ),
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
