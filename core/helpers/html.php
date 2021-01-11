<?php

function css($stylesheets = [])
{    
    foreach($stylesheets as $css): 
        $url = BASEURL . "public/" . $css;
        echo '<link rel="stylesheet" href="'. $url .'">';
    endforeach;  
}

function js($javascripts = [])
{
    foreach($javascripts as $js): 
        $url = BASEURL . "public/" . $js;
        echo '<script type="text/javascript" src="'. $url .'"></script>';
    endforeach;  
}
