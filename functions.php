<?php
/**
 * Include the BoldGrid Theme Framework
 *
 * @package Prime
 */

// Ensure system requirements are met on activation.
require_once get_template_directory() . '/inc/boldgrid-theme-framework/includes/class-boldgrid-framework-system-requirements.php';
$bgtfw_requirements = new Boldgrid_Framework_System_Requirements();
$bgtfw_requirements->add_hooks();

locate_template( '/inc/boldgrid-theme-framework-config/config.php', true, true );
require_once get_template_directory() . '/inc/boldgrid-theme-framework/boldgrid-theme-framework.php';
