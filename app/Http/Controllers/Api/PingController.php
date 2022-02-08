<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Dingo\Api\Routing\Helpers;
use Spatie\Permission\Models\Permission;
use Illuminate\Support\Str;


/**
 * Class PingController.
 *
 * @author Jose Fonseca <jose@ditecnologia.com>
 */
class PingController extends Controller
{
    use Helpers;

    /**
     * Responds with a status for heath check.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function index()
    {
        // $uuid = Str::orderedUuid();
        Permission::create(['name' => 'List Users','uuid' => Str::orderedUuid()]);
        Permission::create(['name' => 'Delete Users','uuid' => Str::orderedUuid()]);
        Permission::create(['name' => 'Create Users','uuid' => Str::orderedUuid()]);
        Permission::create(['name' => 'Update Users','uuid' => Str::orderedUuid()]);
       
        return $this->response->array([
            'status' => 'ok',
            'timestamp' => \Carbon\Carbon::now(),
            'host' => request()->ip(),
        ]);
    }
}
