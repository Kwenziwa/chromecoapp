<?php
namespace App\Filament\Resources\PickUpLocationResource\Api;

use Rupadana\ApiService\ApiService;
use App\Filament\Resources\PickUpLocationResource;
use Illuminate\Routing\Router;


class PickUpLocationApiService extends ApiService
{
    protected static string | null $resource = PickUpLocationResource::class;

    public static function allRoutes(Router $router)
    {
        Handlers\CreateHandler::route($router);
        Handlers\UpdateHandler::route($router);
        Handlers\DeleteHandler::route($router);
        Handlers\PaginationHandler::route($router);
        Handlers\DetailHandler::route($router);
    }
}
