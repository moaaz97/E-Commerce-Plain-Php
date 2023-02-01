<?php
    function lang($phrase)
    {
        static $lang = array(
          'Button' => 'Submit'
        );
        return $lang[$phrase];
    }