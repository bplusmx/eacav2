<?php
/*
 * Directorio de negocio y profesionistas
 * 
 */

$eaca_business_directory = Eaca_Business_Directory::getInstance();

class Eaca_Business_Directory 
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
        $this->register_taxonomy_directory_type();
    }
    
    function register_custom_post_type()
    {
        $labels = array(
            'name'                => _x( 'Directorio de Negocios', 'Post Type General Name', 'eacapulco' ),
            'singular_name'       => _x( 'Negocio', 'Post Type Singular Name', 'eacapulco' ),
            'menu_name'           => __( 'Directorio', 'eacapulco' ),
            'parent_item_colon'   => __( 'Superior:', 'eacapulco' ),
            'all_items'           => __( 'Todos', 'eacapulco' ),
            'view_item'           => __( 'Ver negocio', 'eacapulco' ),
            'add_new_item'        => __( 'Agregar negocio', 'eacapulco' ),
            'add_new'             => __( 'Agregar nuevo', 'eacapulco' ),
            'edit_item'           => __( 'Editar negocio', 'eacapulco' ),
            'update_item'         => __( 'Actualizar negocio', 'eacapulco' ),
            'search_items'        => __( 'Buscar', 'eacapulco' ),
            'not_found'           => __( 'No se encontró el negocio', 'eacapulco' ),
            'not_found_in_trash'  => __( 'No hay elementos en la papelera', 'eacapulco' ),
        );
        
        $rewrite = array(
            'slug'                => 'directorio',
            'with_front'          => true
        );
        
        $args = array(
            'label'               => __( 'Directorio', 'eacapulco' ),
            'description'         => __( 'Directorio de negocios', 'eacapulco' ),
            'labels'              => $labels,
            'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'custom-fields', 'page-attributes', 'post-formats', ),
            'taxonomies'          => array( 'category', 'post_tag', EACA_TAXONOMY_CITY_ZONES_SLUG),
            'hierarchical'        => false,
            'public'              => true,
            'show_ui'             => true,
            'show_in_menu'        => true,
            'show_in_nav_menus'   => true,
            'show_in_admin_bar'   => true,
            //'menu_icon'           => 'htt://e-acapulco.com/icono.png',
            'can_export'          => true,
            'has_archive'         => true,
            'exclude_from_search' => false,
            'publicly_queryable'  => true,
            'query_var'           => '',
            'rewrite'             => $rewrite,
            'capability_type'     => 'page',
        );
        
        register_post_type( EACA_BUSINESS_DIRECTORY_SLUG, $args );
    }
    
    function register_taxonomy_directory_type()
    {
        $labels = array(
            'name'                       => _x( 'Giro', 'Taxonomy General Name', 'eacapulco' ),
            'singular_name'              => _x( 'Giro', 'Taxonomy Singular Name', 'eacapulco' ),
            'menu_name'                  => __( 'Giros', 'eacapulco' ),
            'all_items'                  => __( 'Todos', 'eacapulco' ),
            'parent_item'                => __( 'Giro superior', 'eacapulco' ),
            'parent_item_colon'          => __( 'Superior:', 'eacapulco' ),
            'new_item_name'              => __( 'Nuevo giro', 'eacapulco' ),
            'add_new_item'               => __( 'Agregar giro', 'eacapulco' ),
            'edit_item'                  => __( 'Editar giro', 'eacapulco' ),
            'update_item'                => __( 'Actualiza giro', 'eacapulco' ),
            'separate_items_with_commas' => __( 'Separar con comas', 'eacapulco' ),
            'search_items'               => __( 'Buscar giros', 'eacapulco' ),
            'add_or_remove_items'        => __( 'Agregar o eliminar giros', 'eacapulco' ),
            'choose_from_most_used'      => __( 'Seleccione de las más utilizadas', 'eacapulco' ),
            'not_found'                  => __( 'No se encontraron giros', 'eacapulco' ),
        );
        $rewrite = array(
            'slug'                       => 'giros',
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
            'query_var'                  => 'business_type',
            'rewrite'                    => $rewrite,
        );
        
        register_taxonomy( EACA_TAXONOMY_BUSINESS_TYPE_SLUG, EACA_BUSINESS_DIRECTORY_SLUG, $args );
    }
    
}
