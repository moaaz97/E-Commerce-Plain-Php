<?php
    function lang($phrase)
    {
        static $words = array(
          'login' => 'تسجيل الدخول',
          'username' => 'الاسم',
          'password' => 'الرقم السرى',
          'mm' => 'تسجيل الدخول',
        );
        return $words[$phrase];
    }