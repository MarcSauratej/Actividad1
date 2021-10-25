<?php
function getRoute():string
{
    if(isset($_REQUEST['url'])){
        $url=$_REQUEST['url'];
    }else{
        $url='home';
    }
    switch($url){
        //aceso a la vista
        case 'login':
            return 'login';
            
        case 'register':
            return 'register';
        
            case 'dashboard':
                return 'dashboard';
                

            //
            case 'login_action':
                return 'login_action';
                
            case 'register_action':
                return 'register_action';
        default: 
            return 'home';
    }
}