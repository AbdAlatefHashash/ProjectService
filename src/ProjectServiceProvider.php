<?php
namespace Hashash\ProjectService;

use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;
use Hashash\ProjectService\Command\InitialDataBase;
use Hashash\ProjectService\Command\InitialPackages;
use Hashash\ProjectService\Command\MakeModel;
use Hashash\ProjectService\Command\MakeRequest;
use Illuminate\Support\Str;

class ProjectServiceProvider extends ServiceProvider
{


    public function register()
    {

    }

    public function boot()
    {


        if ($this->app->runningInConsole()) {
            $this->commands([
                InitialPackages::class,
                InitialDataBase::class,
                MakeModel::class,
                MakeRequest::class,
            ]);
        }


        $this->publishes([
            __DIR__.'/Bases/BaseModel.php' => app_path('Bases/BaseModel.php')
        ], 'BaseModel');

        $this->publishes([
            __DIR__.'/Bases/BaseFormRequest.php' => app_path('Bases/BaseFormRequest.php')
        ], 'BaseFormRequest');

        $this->publishes([
            __DIR__.'/Bases/BaseController.php' => app_path('Bases/BaseController.php')
        ], 'BaseController');

        $this->publishes([
            __DIR__.'/Helpers/FileClass.php' => app_path('Helpers/FileClass.php')
        ], 'FileClass');

        $this->publishes([
            __DIR__.'/Helpers/OperationResult.php' => app_path('Helpers/OperationResult.php')
        ], 'OperationResult');

        $this->publishes([
            __DIR__.'/Helpers/ResponseHelper.php' => app_path('Helpers/ResponseHelper.php')
        ], 'ResponseHelper');

        $this->publishes([
            __DIR__.'/Helpers/ValidateHelper.php' => app_path('Helpers/ValidateHelper.php')
        ], 'ValidateHelper');

        $this->publishes([
            __DIR__.'/Traits/FormRequestTrait.php' => app_path('Traits/FormRequestTrait.php')
        ], 'FormRequestTrait');

        $this->publishes([
            __DIR__.'/Traits/ModelTrait.php' => app_path('Traits/ModelTrait.php')
        ], 'ModelTrait');

        $this->publishes([
            __DIR__.'/Command/InitialDataBase.php' => app_path('Command/InitialDataBase.php')
        ], 'InitialDataBase');

        $this->publishes([
            __DIR__.'/Command/InitialPackages.php' => app_path('Command/InitialPackages.php')
        ], 'InitialPackages');

        $this->publishes([
            __DIR__.'/Command/InitialDataBase.php' => app_path('Command/MakeModel.php')
        ], 'MakeModel');

        $this->publishes([
            __DIR__.'/Command/InitialPackages.php' => app_path('Command/MakeRequest.php')
        ], 'MakeRequest');

        $this->publishes([
            __DIR__.'/Stubs/FormRequest.stub' => app_path('Stubs/Request.php')
        ], 'RequestStub');

        $this->publishes([
            __DIR__.'/Stubs/Model.stub' => app_path('Stubs/Model.stub')
        ], 'ModelStub');

        $this->publishes([
            __DIR__.'/Rules/Phone.php' => app_path('Rules/Phone.php')
        ], 'PhoneRule');

        $this->publishes([
            __DIR__.'/Exceptions/CreatingModelFailException.php' => app_path('Exceptions/CreatingModelFailException.php')
        ], 'CreateModelException');

        $this->publishes([
            __DIR__.'/Exceptions/InsertingDataException.php' => app_path('Exceptions/InsertingDataException.php')
        ], 'InsertingException');

        $this->publishes([
            __DIR__.'/Exceptions/UpdatingModelFailException.php' => app_path('Exceptions/UpdatingModelFailException.php')
        ], 'UpdateModelException');


        $this->publishes([
            __DIR__.'/Exceptions/DeletingModelFailException.php' => app_path('Exceptions/DeletingModelFailException.php')
        ], 'DeleteModelException');


        $this->publishes([
            __DIR__.'/Exceptions/OperationFailException.php' => app_path('Exceptions/OperationFailException.php')
        ], 'OperationException');

    }


}
