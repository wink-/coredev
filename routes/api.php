<?php

Route::group(['prefix' => 'v1', 'as' => 'api.', 'namespace' => 'Api\V1\Admin', 'middleware' => ['auth:api']], function () {
    // Permissions
    Route::apiResource('permissions', 'PermissionsApiController');

    // Roles
    Route::apiResource('roles', 'RolesApiController');

    // Users
    Route::apiResource('users', 'UsersApiController');

    // Content Categories
    Route::apiResource('content-categories', 'ContentCategoryApiController');

    // Content Tags
    Route::apiResource('content-tags', 'ContentTagApiController');

    // Content Pages
    Route::post('content-pages/media', 'ContentPageApiController@storeMedia')->name('content-pages.storeMedia');
    Route::apiResource('content-pages', 'ContentPageApiController');

    // Task Statuses
    Route::apiResource('task-statuses', 'TaskStatusApiController');

    // Task Tags
    Route::apiResource('task-tags', 'TaskTagApiController');

    // Tasks
    Route::post('tasks/media', 'TaskApiController@storeMedia')->name('tasks.storeMedia');
    Route::apiResource('tasks', 'TaskApiController');

    // Faq Categories
    Route::apiResource('faq-categories', 'FaqCategoryApiController');

    // Faq Questions
    Route::apiResource('faq-questions', 'FaqQuestionApiController');

    // Customers
    Route::apiResource('customers', 'CustomersApiController', ['except' => ['destroy']]);

    // Carriers
    Route::apiResource('carriers', 'CarriersApiController');

    // Destinations
    Route::apiResource('destinations', 'DestinationsApiController');

    // Contacts
    Route::apiResource('contacts', 'ContactsApiController');

    // Processes
    Route::apiResource('processes', 'ProcessesApiController');

    // Parts
    Route::apiResource('parts', 'PartsApiController', ['except' => ['destroy']]);

    // Sessions
    Route::apiResource('sessions', 'SessionsApiController');

    // Procedures
    Route::apiResource('procedures', 'ProceduresApiController');

    // Materials
    Route::apiResource('materials', 'MaterialsApiController');

    // Methods
    Route::apiResource('methods', 'MethodsApiController');

    // Quotes
    Route::apiResource('quotes', 'QuotesApiController');

    // Workorders
    Route::apiResource('workorders', 'WorkordersApiController');

    // Workorderhistories
    Route::apiResource('workorderhistories', 'WorkorderhistoryApiController', ['except' => ['destroy']]);

    // Employees
    Route::apiResource('employees', 'EmployeesApiController', ['except' => ['destroy']]);

    // Equipment
    Route::apiResource('equipment', 'EquipmentApiController', ['except' => ['destroy']]);

    // Calibrated Bies
    Route::apiResource('calibrated-bies', 'CalibratedByApiController');

    // Calemployees
    Route::apiResource('calemployees', 'CalemployeeApiController');

    // Cal Types
    Route::apiResource('cal-types', 'CalTypeApiController');

    // Cal Locations
    Route::apiResource('cal-locations', 'CalLocationApiController');

    // Cal Owners
    Route::apiResource('cal-owners', 'CalOwnerApiController');

    // Cal Periods
    Route::apiResource('cal-periods', 'CalPeriodApiController');

    // Cal Sources
    Route::apiResource('cal-sources', 'CalSourceApiController');

    // Cal Statuses
    Route::apiResource('cal-statuses', 'CalStatusApiController');

    // Cal Devices
    Route::apiResource('cal-devices', 'CalDeviceApiController');
});
