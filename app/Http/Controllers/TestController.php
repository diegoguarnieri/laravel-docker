<?php

namespace App\Http\Controllers;

use DateTime;
use Illuminate\Http\Request;

class TestController extends Controller {

    public function test(Request $request) {

        $response = [
            'status' => 'success',
            'uuid' => uniqid(),
            'timestamp' => (new DateTime())->format('Y-m-d H:i:s.u'),
        ];
        return response()->json($response, 200);
    }
}
