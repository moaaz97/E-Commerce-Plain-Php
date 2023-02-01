<?php
    function lang($phrase)
    {
        static $words = array(
            //Login Page
            'login'         => 'login',
            'username'      => 'Username',
            'password'      => 'Passwprd',

            //NavBar
            'CATEGORIES'    => 'Categories',
            'ITEMS'         => 'Items',
            'MEMBERS'       => 'Members',
            'STATISTICS'    => 'Statistics',
            'LOGS'          => 'Logs',
        );
        return $words[$phrase];
    }