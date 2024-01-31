<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
        //a la construction tu as un middleware hote qui va vérifier si la personne qui consulte*/
        //toutes c'est vue est connecté si elle n'est pas connecter elle vas pas voir les vue Authenticate.php
    }







    
    public function foo()
    {
        return view('test.foo');
    }

    public function bar()
    {
        return view('test.bar');
    }
}
