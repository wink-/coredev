<?php

Route::redirect('/', '/login');
Route::get('/home', function () {
    if (session('status')) {
        return redirect()->route('admin.home')->with('status', session('status'));
    }

    return redirect()->route('admin.home');
});

Auth::routes(['register' => false]);
// Admin

Route::group(['prefix' => 'admin', 'as' => 'admin.', 'namespace' => 'Admin', 'middleware' => ['auth']], function () {
    Route::get('/', 'HomeController@index')->name('home');
    // Permissions
    Route::delete('permissions/destroy', 'PermissionsController@massDestroy')->name('permissions.massDestroy');
    Route::resource('permissions', 'PermissionsController');

    // Roles
    Route::delete('roles/destroy', 'RolesController@massDestroy')->name('roles.massDestroy');
    Route::resource('roles', 'RolesController');

    // Users
    Route::delete('users/destroy', 'UsersController@massDestroy')->name('users.massDestroy');
    Route::resource('users', 'UsersController');

    // Audit Logs
    Route::resource('audit-logs', 'AuditLogsController', ['except' => ['create', 'store', 'edit', 'update', 'destroy']]);

    // Content Categories
    Route::delete('content-categories/destroy', 'ContentCategoryController@massDestroy')->name('content-categories.massDestroy');
    Route::resource('content-categories', 'ContentCategoryController');

    // Content Tags
    Route::delete('content-tags/destroy', 'ContentTagController@massDestroy')->name('content-tags.massDestroy');
    Route::resource('content-tags', 'ContentTagController');

    // Content Pages
    Route::delete('content-pages/destroy', 'ContentPageController@massDestroy')->name('content-pages.massDestroy');
    Route::post('content-pages/media', 'ContentPageController@storeMedia')->name('content-pages.storeMedia');
    Route::post('content-pages/ckmedia', 'ContentPageController@storeCKEditorImages')->name('content-pages.storeCKEditorImages');
    Route::resource('content-pages', 'ContentPageController');

    // Task Statuses
    Route::delete('task-statuses/destroy', 'TaskStatusController@massDestroy')->name('task-statuses.massDestroy');
    Route::resource('task-statuses', 'TaskStatusController');

    // Task Tags
    Route::delete('task-tags/destroy', 'TaskTagController@massDestroy')->name('task-tags.massDestroy');
    Route::resource('task-tags', 'TaskTagController');

    // Tasks
    Route::delete('tasks/destroy', 'TaskController@massDestroy')->name('tasks.massDestroy');
    Route::post('tasks/media', 'TaskController@storeMedia')->name('tasks.storeMedia');
    Route::post('tasks/ckmedia', 'TaskController@storeCKEditorImages')->name('tasks.storeCKEditorImages');
    Route::resource('tasks', 'TaskController');

    // Tasks Calendars
    Route::resource('tasks-calendars', 'TasksCalendarController', ['except' => ['create', 'store', 'edit', 'update', 'show', 'destroy']]);

    // Faq Categories
    Route::delete('faq-categories/destroy', 'FaqCategoryController@massDestroy')->name('faq-categories.massDestroy');
    Route::resource('faq-categories', 'FaqCategoryController');

    // Faq Questions
    Route::delete('faq-questions/destroy', 'FaqQuestionController@massDestroy')->name('faq-questions.massDestroy');
    Route::resource('faq-questions', 'FaqQuestionController');

    // Customers
    Route::resource('customers', 'CustomersController', ['except' => ['destroy']]);

    // Carriers
    Route::delete('carriers/destroy', 'CarriersController@massDestroy')->name('carriers.massDestroy');
    Route::resource('carriers', 'CarriersController');

    // Destinations
    Route::delete('destinations/destroy', 'DestinationsController@massDestroy')->name('destinations.massDestroy');
    Route::resource('destinations', 'DestinationsController');

    // Contacts
    Route::delete('contacts/destroy', 'ContactsController@massDestroy')->name('contacts.massDestroy');
    Route::resource('contacts', 'ContactsController');

    // Processes
    Route::delete('processes/destroy', 'ProcessesController@massDestroy')->name('processes.massDestroy');
    Route::resource('processes', 'ProcessesController');

    // Parts
    Route::resource('parts', 'PartsController', ['except' => ['destroy']]);

    // Sessions
    Route::delete('sessions/destroy', 'SessionsController@massDestroy')->name('sessions.massDestroy');
    Route::resource('sessions', 'SessionsController');

    // Procedures
    Route::delete('procedures/destroy', 'ProceduresController@massDestroy')->name('procedures.massDestroy');
    Route::resource('procedures', 'ProceduresController');

    // Materials
    Route::delete('materials/destroy', 'MaterialsController@massDestroy')->name('materials.massDestroy');
    Route::resource('materials', 'MaterialsController');

    // Methods
    Route::delete('methods/destroy', 'MethodsController@massDestroy')->name('methods.massDestroy');
    Route::resource('methods', 'MethodsController');

    // Quotes
    Route::delete('quotes/destroy', 'QuotesController@massDestroy')->name('quotes.massDestroy');
    Route::resource('quotes', 'QuotesController');

    // Workorders
    Route::delete('workorders/destroy', 'WorkordersController@massDestroy')->name('workorders.massDestroy');
    Route::resource('workorders', 'WorkordersController');

    // Workorderhistories
    Route::resource('workorderhistories', 'WorkorderhistoryController', ['except' => ['destroy']]);

    // Employees
    Route::resource('employees', 'EmployeesController', ['except' => ['destroy']]);

    // Equipment
    Route::resource('equipment', 'EquipmentController', ['except' => ['destroy']]);

    // Calibrated Bies
    Route::delete('calibrated-bies/destroy', 'CalibratedByController@massDestroy')->name('calibrated-bies.massDestroy');
    Route::resource('calibrated-bies', 'CalibratedByController');

    // Calemployees
    Route::delete('calemployees/destroy', 'CalemployeeController@massDestroy')->name('calemployees.massDestroy');
    Route::resource('calemployees', 'CalemployeeController');

    // Cal Types
    Route::delete('cal-types/destroy', 'CalTypeController@massDestroy')->name('cal-types.massDestroy');
    Route::resource('cal-types', 'CalTypeController');

    // Cal Locations
    Route::delete('cal-locations/destroy', 'CalLocationController@massDestroy')->name('cal-locations.massDestroy');
    Route::resource('cal-locations', 'CalLocationController');

    // Cal Owners
    Route::delete('cal-owners/destroy', 'CalOwnerController@massDestroy')->name('cal-owners.massDestroy');
    Route::resource('cal-owners', 'CalOwnerController');

    // Cal Periods
    Route::delete('cal-periods/destroy', 'CalPeriodController@massDestroy')->name('cal-periods.massDestroy');
    Route::resource('cal-periods', 'CalPeriodController');

    // Cal Sources
    Route::delete('cal-sources/destroy', 'CalSourceController@massDestroy')->name('cal-sources.massDestroy');
    Route::resource('cal-sources', 'CalSourceController');

    // Cal Statuses
    Route::delete('cal-statuses/destroy', 'CalStatusController@massDestroy')->name('cal-statuses.massDestroy');
    Route::resource('cal-statuses', 'CalStatusController');

    // Cal Devices
    Route::delete('cal-devices/destroy', 'CalDeviceController@massDestroy')->name('cal-devices.massDestroy');
    Route::resource('cal-devices', 'CalDeviceController');

    Route::get('global-search', 'GlobalSearchController@search')->name('globalSearch');
});
Route::group(['prefix' => 'profile', 'as' => 'profile.', 'namespace' => 'Auth', 'middleware' => ['auth']], function () {
// Change password
    if (file_exists(app_path('Http/Controllers/Auth/ChangePasswordController.php'))) {
        Route::get('password', 'ChangePasswordController@edit')->name('password.edit');
        Route::post('password', 'ChangePasswordController@update')->name('password.update');
    }
});
