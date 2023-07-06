<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

/**
 * @SWG\Swagger(
 *   schemes={"https"},
 *   host="localhost",
 *   basePath="/",
 *
 *   @OA\Info(
 *     title="ABRA Test API",
 *     version="1.0.0"
 *   )
 *
 *   @OA\Server(
 *      url="",
 *      description="API for developing"
 *   )
 * )
 */

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;
}
