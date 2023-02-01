<?php
    function lang($phrase)
    {
        static $lang = array(
          'Button' => 'إرسال'
        );
        return $lang[$phrase];
    }