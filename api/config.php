<?php
/**
 * backend/config.php
 *
 * Author: pixelcave
 *
 * Backend pages configuration file
 *
 */

// **************************************************************************************************
// INCLUDED VIEWS
// **************************************************************************************************


//
$cb->inc_side_overlay           = 'inc/backend/views/inc_side_overlay.php';
$cb->inc_sidebar                = 'inc/backend/views/inc_sidebar.php';
$cb->inc_header                 = 'inc/backend/views/inc_header.php';
$cb->inc_footer                 = 'inc/backend/views/inc_footer.php';


// **************************************************************************************************
// MAIN MENU
// **************************************************************************************************

$cb->main_nav                   = array(
  
    
    // array(
    //     'name'  => '<span class="sidebar-mini-visible">UI</span><span class="sidebar-mini-hidden">Shop</span>',
    //     'type'  => 'heading'
    // ),
    // array(
    //     'name'  => '<span class="sidebar-mini-visible">PG</span><span class="sidebar-mini-hidden">Member</span>',
    //     'icon'  => 'si si-badge',
    //     'sub'  =>  array(   
    //             array(
    //                 'name'  => '<span class="sidebar-mini-hide">Generic</span>',
    //                 'sub'   => array(                    
                    
    //                     array(
    //                         'name'  => 'Profile',
    //                         'url'   => 'be_pages_generic_profile.php'
    //                     ),
    //                     array(
    //                         'name'  => 'Profile Edit',
    //                         'url'   => 'be_pages_generic_profile_edit.php'
    //                     ),
                    
    //                     array(
    //                         'name'  => 'Project List',
    //                         'url'   => 'be_pages_generic_project_list.php'
    //                     ),
    //                     array(
    //                         'name'  => 'Project',
    //                         'url'   => 'be_pages_generic_project.php'
    //                     ),
                        
    //                     array(
    //                         'name'  => 'Coming Soon',
    //                         'url'   => 'op_coming_soon.php'
    //                     ),
    //                     array(
    //                         'name'  => 'Maintenance',
    //                         'url'   => 'op_maintenance.php'
    //                     ),
    //                     array(
    //                         'name'  => 'Status',
    //                         'url'   => 'op_status.php'
    //                     ),
    //                     array(
    //                         'name'  => 'Installation',
    //                         'url'   => 'op_installation.php'
    //                     )
    //                 )
    //             ),
    //             array(
    //                 'name'  => '<span class="sidebar-mini-hide">Authentication</span>',
    //                 'sub'   => array(
    //                     array(
    //                         'name'  => 'All',
    //                         'url'   => 'be_pages_auth_all.php'
    //                     ),
    //                     array(
    //                         'name'  => 'Sign In',
    //                         'url'   => 'op_auth_signin.php'
    //                     ),
                    
    //                     array(
    //                         'name'  => 'Sign Up',
    //                         'url'   => 'op_auth_signup.php'
    //                     ),
                        
    //                     array(
    //                         'name'  => 'Lock Screen',
    //                         'url'   => 'op_auth_lock.php'
    //                     ),
                    
    //                     array(
    //                         'name'  => 'Pass Reminder',
    //                         'url'   => 'op_auth_reminder.php'
    //                     ),
                    
    //                 )
    //             ),
    //     )
    //         ),
    array(
        'name'  => '<span class="sidebar-mini-hide">Customers</span>',
        'icon'  => 'si si-badge',
        'url'   => 'be_pages_ecom_customers.php'       
    ),

    array(
        'name'  => '<span class="sidebar-mini-hide">Deposit</span>',
        'icon'  => 'si si-layers',
        'url'   => 'be_pages_ecom_deposit.php'       
    ),
	array(
        'name'  => '<span class="sidebar-mini-hide">Products</span>',
        'icon'  => 'si si-note',
        'sub'   => array(

                    array(
                        'name'  => 'Orders',
                        'url'   => 'be_pages_ecom_orders.php'
                    ),
                    
                    array(
                        'name'  => 'Products',
                        'url'   => 'be_pages_ecom_products.php'
                    )                   
            
        )
    ),
	
    // array(
    //     'name'  => '<span class="sidebar-mini-hide">Stock</span>',
    //     'icon'  => 'si si-layers',
    //     'sub'   => array(

	// 		 array(
    //             'name'  => 'Invoice',
    //             'url'   => 'be_pages_generic_invoice.php'
    //         ),
    //         array(
    //             'name'  => 'Pricing',
    //             'url'   => 'be_tables_pricing.php'
    //         ),
    //         array(
    //             'name'  => 'DataTables',
    //             'url'   => 'be_tables_datatables.php'
    //         )
    //     )
    // ),
    // array(
    //     'name'  => '<span class="sidebar-mini-hide">Forms</span>',
    //     'icon'  => 'si si-note',
    //     'sub'   => array(
           
    //         array(
    //             'name'  => 'Material Elements',
    //             'url'   => 'be_forms_elements_material.php'
    //         ),
            
    //         array(
    //             'name'  => 'Validation',
    //             'url'   => 'be_forms_validation.php'
    //         ),
            
    //         array(
    //             'name'  => 'Pre-made',
    //             'url'   => 'be_forms_premade.php'
    //         )
    //     )
    // ),
   
  
   
 
);
