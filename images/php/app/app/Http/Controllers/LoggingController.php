<?php
/**
 * Created by PhpStorm.
 * User: sugarfixx
 * Date: 22/03/2019
 * Time: 15:03
 */

namespace App\Http\Controllers;


use Illuminate\Support\Facades\Log;
use Monolog\Logger;

class LoggingController
{
    public function index()
    {
        Log::debug('message',[]);
    }

}
