<?php
    // Greedy
    $subject1 = '<img height="100px" width="200px" src="https://unicode.vn/images/anh.jpg" alt="alo" title="cute"/>';
    $pattern1 = '~<img.*src="(.+?)".*/*>~';
    
    preg_match($pattern1, $subject1, $matches1);
    
    echo '<pre>';
    print_r($matches1);
    echo '</pre>';

    // None Capturing Group
    $subject2 = '<img height="100px" width="200px" src="https://unicode.vn/images/anh.jpg" alt="alo" title="cute"/>';
    $pattern2 = '<img(?:\s+[a-z-]+\s*=\s*"[^"]*")*\ssrc="([^"]+)"(?:\s+[a-z-]+\s*=\s*"[^"]*")*\s*/*>';
    
    preg_match($pattern2, $subject2, $matches2);
    
    echo '<pre>';
    print_r($matches2);
    echo '</pre>';