<?php

$eaca_city_zones = Eaca_Taxonomies::getInstance();

class Eaca_Taxonomies 
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
        $this->register_taxonomy_city_zones();
    }
    
    function register_taxonomy_city_zones()
    {
        $labels = array(
            'name'                       => _x( 'Zonas de Acapulco', 'Taxonomy General Name', 'eacapulco' ),
            'singular_name'              => _x( 'Zona de Acapulco', 'Taxonomy Singular Name', 'eacapulco' ),
            'menu_name'                  => __( 'Zonas de Acapulco', 'eacapulco' ),
            'all_items'                  => __( 'Todas las Zonas', 'eacapulco' ),
            'parent_item'                => __( 'Zona superior', 'eacapulco' ),
            'parent_item_colon'          => __( 'Zona superior:', 'eacapulco' ),
            'new_item_name'              => __( 'Nueva zona', 'eacapulco' ),
            'add_new_item'               => __( 'Agregar zona', 'eacapulco' ),
            'edit_item'                  => __( 'Editar zona', 'eacapulco' ),
            'update_item'                => __( 'Actualiza zona', 'eacapulco' ),
            'separate_items_with_commas' => __( 'Separar con comas', 'eacapulco' ),
            'search_items'               => __( 'Buscar zonas', 'eacapulco' ),
            'add_or_remove_items'        => __( 'Agregar o eliminar zonas', 'eacapulco' ),
            'choose_from_most_used'      => __( 'Seleccione de las más utilizadas', 'eacapulco' ),
            'not_found'                  => __( 'No se encontraron zonas', 'eacapulco' ),
        );
        $rewrite = array(
            'slug'                       => 'zonas',
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
            'query_var'                  => 'city_zones',
            'rewrite'                    => $rewrite,
        );
        
        register_taxonomy(EACA_TAXONOMY_CITY_ZONES_SLUG, 'post', $args);
    }
    
}
