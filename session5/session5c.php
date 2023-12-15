<?php
/*
    Cookies are often used to identify the user. 
    A cookie is a small file that the server embeds on the user's computer. 
    Each time the same computer requests a page through a browser, it will send the cookie, too. 
    With PHP, you can both create and retrieve cookie values.
    setcookie(name, value, expire, path)

    name: Specifies the cookie's name
    
    value: Specifies the cookie's value
    
    expire: Specifies (in seconds) when the cookie is to expire. The value: time()+86400*30, will set the cookie to expire in 30 days. If this parameter is omitted or set to 0, the cookie will expire at the end of the session (when the browser closes). Default is 0.
    
    path: Specifies the server path of the cookie. If set to "/", the cookie will be available within the entire domain. If set to "/php/", the cookie will only be available within the php directory and all sub-directories of php. The default value is the current directory in which the cookie is being set.
*/


    setcookie('cookieName', 'any text value', time() + 1800);

    print_r($_COOKIE);
    echo $_COOKIE['cookieName'];


?>