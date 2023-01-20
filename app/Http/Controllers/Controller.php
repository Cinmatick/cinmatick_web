<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function jsonResponse(string $message, int $code = 200, array $data = [])
    {
        $response = array('message' => $message);
        if(count($data)){
            $response['data'] = $data;
        }

        return response()->json($response, $code);
    }
}
