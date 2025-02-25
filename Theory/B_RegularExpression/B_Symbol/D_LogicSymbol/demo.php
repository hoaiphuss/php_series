<?php
    $subject = 'axcvb223456';

    $pattern = '/[^\d]+/'; // $pattern = '/[^0-9]+/';
    
    preg_match($pattern, $subject, $matches);
    
    echo '<pre>';
    print_r($matches);
    echo '</pre>';

    $subject1 = 'Lap trinh php tai unicode. PHP la ngon ngu backend';

    $pattern1 = '/php|backend/';

    preg_match($pattern1, $subject1, $matches1);

    echo '<pre>';
    print_r($matches1);
    echo '</pre>';

    $subject2 = 'backend01234';

    $pattern2 = '/(php|backend)\d+/';

    preg_match($pattern2, $subject2, $matches2);

    echo '<pre>';
    print_r($matches2);
    echo '</pre>';