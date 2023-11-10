<?php
namespace App\Filament\Resources\MedicationResource\Api;

use Rupadana\ApiService\ApiService;
use App\Filament\Resources\MedicationResource;
use Illuminate\Routing\Router;


class MedicationApiService extends ApiService
{
    protected static string | null $resource = MedicationResource::class;

    public static function allRoutes(Router $router)
    {
        Handlers\CreateHandler::route($router);
        Handlers\UpdateHandler::route($router);
        Handlers\DeleteHandler::route($router);
        Handlers\PaginationHandler::route($router);
        Handlers\DetailHandler::route($router);
    }
}
