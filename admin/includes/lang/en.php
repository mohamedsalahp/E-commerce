<?php



function lang($phrase) {
    static $lang = array(

        // Navbar Links 

        'Home_ADMIN'   => 'Home',
        'CATEGORIES'   => 'Categories',
        'ITEMS'        => 'Items',
        'MEMBERS'      => 'Members',
        'STATISTICS'   => 'Statistics',
        'LOGS'         => 'Logs',

    );

    return $lang[$phrase];
}
