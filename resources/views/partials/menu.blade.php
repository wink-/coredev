<div id="sidebar" class="c-sidebar c-sidebar-fixed c-sidebar-lg-show">

    <div class="c-sidebar-brand d-md-down-none">
        <a class="c-sidebar-brand-full h4" href="#">
            {{ trans('panel.site_title') }}
        </a>
    </div>

    <ul class="c-sidebar-nav">
        <li>
            <select class="searchable-field form-control">

            </select>
        </li>
        <li class="c-sidebar-nav-item">
            <a href="{{ route("admin.home") }}" class="c-sidebar-nav-link">
                <i class="c-sidebar-nav-icon fas fa-fw fa-tachometer-alt">

                </i>
                {{ trans('global.dashboard') }}
            </a>
        </li>
        @can('quote_access')
            <li class="c-sidebar-nav-item">
                <a href="{{ route("admin.quotes.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/quotes") || request()->is("admin/quotes/*") ? "active" : "" }}">
                    <i class="fa-fw fas fa-cogs c-sidebar-nav-icon">

                    </i>
                    {{ trans('cruds.quote.title') }}
                </a>
            </li>
        @endcan
        @can('workorder_access')
            <li class="c-sidebar-nav-item">
                <a href="{{ route("admin.workorders.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/workorders") || request()->is("admin/workorders/*") ? "active" : "" }}">
                    <i class="fa-fw fas fa-cogs c-sidebar-nav-icon">

                    </i>
                    {{ trans('cruds.workorder.title') }}
                </a>
            </li>
        @endcan
        @can('part_access')
            <li class="c-sidebar-nav-item">
                <a href="{{ route("admin.parts.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/parts") || request()->is("admin/parts/*") ? "active" : "" }}">
                    <i class="fa-fw fas fa-cogs c-sidebar-nav-icon">

                    </i>
                    {{ trans('cruds.part.title') }}
                </a>
            </li>
        @endcan
        @can('customer_resource_management_access')
            <li class="c-sidebar-nav-dropdown">
                <a class="c-sidebar-nav-dropdown-toggle" href="#">
                    <i class="fa-fw fas fa-address-book c-sidebar-nav-icon">

                    </i>
                    {{ trans('cruds.customerResourceManagement.title') }}
                </a>
                <ul class="c-sidebar-nav-dropdown-items">
                    @can('customer_access')
                        <li class="c-sidebar-nav-item">
                            <a href="{{ route("admin.customers.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/customers") || request()->is("admin/customers/*") ? "active" : "" }}">
                                <i class="fa-fw fas fa-cogs c-sidebar-nav-icon">

                                </i>
                                {{ trans('cruds.customer.title') }}
                            </a>
                        </li>
                    @endcan
                    @can('contact_access')
                        <li class="c-sidebar-nav-item">
                            <a href="{{ route("admin.contacts.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/contacts") || request()->is("admin/contacts/*") ? "active" : "" }}">
                                <i class="fa-fw far fa-address-book c-sidebar-nav-icon">

                                </i>
                                {{ trans('cruds.contact.title') }}
                            </a>
                        </li>
                    @endcan
                    @can('carrier_access')
                        <li class="c-sidebar-nav-item">
                            <a href="{{ route("admin.carriers.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/carriers") || request()->is("admin/carriers/*") ? "active" : "" }}">
                                <i class="fa-fw fas fa-cogs c-sidebar-nav-icon">

                                </i>
                                {{ trans('cruds.carrier.title') }}
                            </a>
                        </li>
                    @endcan
                    @can('destination_access')
                        <li class="c-sidebar-nav-item">
                            <a href="{{ route("admin.destinations.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/destinations") || request()->is("admin/destinations/*") ? "active" : "" }}">
                                <i class="fa-fw fas fa-cogs c-sidebar-nav-icon">

                                </i>
                                {{ trans('cruds.destination.title') }}
                            </a>
                        </li>
                    @endcan
                </ul>
            </li>
        @endcan
        @can('wip_sys_administration_access')
            <li class="c-sidebar-nav-dropdown">
                <a class="c-sidebar-nav-dropdown-toggle" href="#">
                    <i class="fa-fw fas fa-cogs c-sidebar-nav-icon">

                    </i>
                    {{ trans('cruds.wipSysAdministration.title') }}
                </a>
                <ul class="c-sidebar-nav-dropdown-items">
                    @can('employee_access')
                        <li class="c-sidebar-nav-item">
                            <a href="{{ route("admin.employees.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/employees") || request()->is("admin/employees/*") ? "active" : "" }}">
                                <i class="fa-fw fas fa-cogs c-sidebar-nav-icon">

                                </i>
                                {{ trans('cruds.employee.title') }}
                            </a>
                        </li>
                    @endcan
                    @can('material_access')
                        <li class="c-sidebar-nav-item">
                            <a href="{{ route("admin.materials.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/materials") || request()->is("admin/materials/*") ? "active" : "" }}">
                                <i class="fa-fw fas fa-cogs c-sidebar-nav-icon">

                                </i>
                                {{ trans('cruds.material.title') }}
                            </a>
                        </li>
                    @endcan
                    @can('method_access')
                        <li class="c-sidebar-nav-item">
                            <a href="{{ route("admin.methods.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/methods") || request()->is("admin/methods/*") ? "active" : "" }}">
                                <i class="fa-fw fas fa-cogs c-sidebar-nav-icon">

                                </i>
                                {{ trans('cruds.method.title') }}
                            </a>
                        </li>
                    @endcan
                    @can('procedure_access')
                        <li class="c-sidebar-nav-item">
                            <a href="{{ route("admin.procedures.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/procedures") || request()->is("admin/procedures/*") ? "active" : "" }}">
                                <i class="fa-fw fas fa-cogs c-sidebar-nav-icon">

                                </i>
                                {{ trans('cruds.procedure.title') }}
                            </a>
                        </li>
                    @endcan
                    @can('process_access')
                        <li class="c-sidebar-nav-item">
                            <a href="{{ route("admin.processes.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/processes") || request()->is("admin/processes/*") ? "active" : "" }}">
                                <i class="fa-fw fas fa-cogs c-sidebar-nav-icon">

                                </i>
                                {{ trans('cruds.process.title') }}
                            </a>
                        </li>
                    @endcan
                    @can('session_access')
                        <li class="c-sidebar-nav-item">
                            <a href="{{ route("admin.sessions.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/sessions") || request()->is("admin/sessions/*") ? "active" : "" }}">
                                <i class="fa-fw fas fa-cogs c-sidebar-nav-icon">

                                </i>
                                {{ trans('cruds.session.title') }}
                            </a>
                        </li>
                    @endcan
                    @can('workorderhistory_access')
                        <li class="c-sidebar-nav-item">
                            <a href="{{ route("admin.workorderhistories.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/workorderhistories") || request()->is("admin/workorderhistories/*") ? "active" : "" }}">
                                <i class="fa-fw fas fa-cogs c-sidebar-nav-icon">

                                </i>
                                {{ trans('cruds.workorderhistory.title') }}
                            </a>
                        </li>
                    @endcan
                    @can('equipment_access')
                        <li class="c-sidebar-nav-item">
                            <a href="{{ route("admin.equipment.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/equipment") || request()->is("admin/equipment/*") ? "active" : "" }}">
                                <i class="fa-fw fas fa-cogs c-sidebar-nav-icon">

                                </i>
                                {{ trans('cruds.equipment.title') }}
                            </a>
                        </li>
                    @endcan
                </ul>
            </li>
        @endcan
        @can('cal_sy_access')
            <li class="c-sidebar-nav-dropdown">
                <a class="c-sidebar-nav-dropdown-toggle" href="#">
                    <i class="fa-fw fas fa-cogs c-sidebar-nav-icon">

                    </i>
                    {{ trans('cruds.calSy.title') }}
                </a>
                <ul class="c-sidebar-nav-dropdown-items">
                    @can('calibrated_by_access')
                        <li class="c-sidebar-nav-item">
                            <a href="{{ route("admin.calibrated-bies.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/calibrated-bies") || request()->is("admin/calibrated-bies/*") ? "active" : "" }}">
                                <i class="fa-fw fas fa-cogs c-sidebar-nav-icon">

                                </i>
                                {{ trans('cruds.calibratedBy.title') }}
                            </a>
                        </li>
                    @endcan
                    @can('calemployee_access')
                        <li class="c-sidebar-nav-item">
                            <a href="{{ route("admin.calemployees.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/calemployees") || request()->is("admin/calemployees/*") ? "active" : "" }}">
                                <i class="fa-fw fas fa-cogs c-sidebar-nav-icon">

                                </i>
                                {{ trans('cruds.calemployee.title') }}
                            </a>
                        </li>
                    @endcan
                    @can('cal_type_access')
                        <li class="c-sidebar-nav-item">
                            <a href="{{ route("admin.cal-types.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/cal-types") || request()->is("admin/cal-types/*") ? "active" : "" }}">
                                <i class="fa-fw fas fa-cogs c-sidebar-nav-icon">

                                </i>
                                {{ trans('cruds.calType.title') }}
                            </a>
                        </li>
                    @endcan
                    @can('cal_location_access')
                        <li class="c-sidebar-nav-item">
                            <a href="{{ route("admin.cal-locations.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/cal-locations") || request()->is("admin/cal-locations/*") ? "active" : "" }}">
                                <i class="fa-fw fas fa-cogs c-sidebar-nav-icon">

                                </i>
                                {{ trans('cruds.calLocation.title') }}
                            </a>
                        </li>
                    @endcan
                    @can('cal_owner_access')
                        <li class="c-sidebar-nav-item">
                            <a href="{{ route("admin.cal-owners.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/cal-owners") || request()->is("admin/cal-owners/*") ? "active" : "" }}">
                                <i class="fa-fw fas fa-cogs c-sidebar-nav-icon">

                                </i>
                                {{ trans('cruds.calOwner.title') }}
                            </a>
                        </li>
                    @endcan
                    @can('cal_period_access')
                        <li class="c-sidebar-nav-item">
                            <a href="{{ route("admin.cal-periods.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/cal-periods") || request()->is("admin/cal-periods/*") ? "active" : "" }}">
                                <i class="fa-fw fas fa-cogs c-sidebar-nav-icon">

                                </i>
                                {{ trans('cruds.calPeriod.title') }}
                            </a>
                        </li>
                    @endcan
                    @can('cal_source_access')
                        <li class="c-sidebar-nav-item">
                            <a href="{{ route("admin.cal-sources.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/cal-sources") || request()->is("admin/cal-sources/*") ? "active" : "" }}">
                                <i class="fa-fw fas fa-cogs c-sidebar-nav-icon">

                                </i>
                                {{ trans('cruds.calSource.title') }}
                            </a>
                        </li>
                    @endcan
                    @can('cal_status_access')
                        <li class="c-sidebar-nav-item">
                            <a href="{{ route("admin.cal-statuses.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/cal-statuses") || request()->is("admin/cal-statuses/*") ? "active" : "" }}">
                                <i class="fa-fw fas fa-cogs c-sidebar-nav-icon">

                                </i>
                                {{ trans('cruds.calStatus.title') }}
                            </a>
                        </li>
                    @endcan
                    @can('cal_device_access')
                        <li class="c-sidebar-nav-item">
                            <a href="{{ route("admin.cal-devices.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/cal-devices") || request()->is("admin/cal-devices/*") ? "active" : "" }}">
                                <i class="fa-fw fas fa-cogs c-sidebar-nav-icon">

                                </i>
                                {{ trans('cruds.calDevice.title') }}
                            </a>
                        </li>
                    @endcan
                </ul>
            </li>
        @endcan
        @can('task_management_access')
            <li class="c-sidebar-nav-dropdown">
                <a class="c-sidebar-nav-dropdown-toggle" href="#">
                    <i class="fa-fw fas fa-list c-sidebar-nav-icon">

                    </i>
                    {{ trans('cruds.taskManagement.title') }}
                </a>
                <ul class="c-sidebar-nav-dropdown-items">
                    @can('task_status_access')
                        <li class="c-sidebar-nav-item">
                            <a href="{{ route("admin.task-statuses.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/task-statuses") || request()->is("admin/task-statuses/*") ? "active" : "" }}">
                                <i class="fa-fw fas fa-server c-sidebar-nav-icon">

                                </i>
                                {{ trans('cruds.taskStatus.title') }}
                            </a>
                        </li>
                    @endcan
                    @can('task_tag_access')
                        <li class="c-sidebar-nav-item">
                            <a href="{{ route("admin.task-tags.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/task-tags") || request()->is("admin/task-tags/*") ? "active" : "" }}">
                                <i class="fa-fw fas fa-server c-sidebar-nav-icon">

                                </i>
                                {{ trans('cruds.taskTag.title') }}
                            </a>
                        </li>
                    @endcan
                    @can('task_access')
                        <li class="c-sidebar-nav-item">
                            <a href="{{ route("admin.tasks.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/tasks") || request()->is("admin/tasks/*") ? "active" : "" }}">
                                <i class="fa-fw fas fa-briefcase c-sidebar-nav-icon">

                                </i>
                                {{ trans('cruds.task.title') }}
                            </a>
                        </li>
                    @endcan
                    @can('tasks_calendar_access')
                        <li class="c-sidebar-nav-item">
                            <a href="{{ route("admin.tasks-calendars.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/tasks-calendars") || request()->is("admin/tasks-calendars/*") ? "active" : "" }}">
                                <i class="fa-fw fas fa-calendar c-sidebar-nav-icon">

                                </i>
                                {{ trans('cruds.tasksCalendar.title') }}
                            </a>
                        </li>
                    @endcan
                </ul>
            </li>
        @endcan
        @can('content_management_access')
            <li class="c-sidebar-nav-dropdown">
                <a class="c-sidebar-nav-dropdown-toggle" href="#">
                    <i class="fa-fw fas fa-book c-sidebar-nav-icon">

                    </i>
                    {{ trans('cruds.contentManagement.title') }}
                </a>
                <ul class="c-sidebar-nav-dropdown-items">
                    @can('content_category_access')
                        <li class="c-sidebar-nav-item">
                            <a href="{{ route("admin.content-categories.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/content-categories") || request()->is("admin/content-categories/*") ? "active" : "" }}">
                                <i class="fa-fw fas fa-folder c-sidebar-nav-icon">

                                </i>
                                {{ trans('cruds.contentCategory.title') }}
                            </a>
                        </li>
                    @endcan
                    @can('content_tag_access')
                        <li class="c-sidebar-nav-item">
                            <a href="{{ route("admin.content-tags.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/content-tags") || request()->is("admin/content-tags/*") ? "active" : "" }}">
                                <i class="fa-fw fas fa-tags c-sidebar-nav-icon">

                                </i>
                                {{ trans('cruds.contentTag.title') }}
                            </a>
                        </li>
                    @endcan
                    @can('content_page_access')
                        <li class="c-sidebar-nav-item">
                            <a href="{{ route("admin.content-pages.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/content-pages") || request()->is("admin/content-pages/*") ? "active" : "" }}">
                                <i class="fa-fw fas fa-file c-sidebar-nav-icon">

                                </i>
                                {{ trans('cruds.contentPage.title') }}
                            </a>
                        </li>
                    @endcan
                </ul>
            </li>
        @endcan
        @can('faq_management_access')
            <li class="c-sidebar-nav-dropdown">
                <a class="c-sidebar-nav-dropdown-toggle" href="#">
                    <i class="fa-fw fas fa-question c-sidebar-nav-icon">

                    </i>
                    {{ trans('cruds.faqManagement.title') }}
                </a>
                <ul class="c-sidebar-nav-dropdown-items">
                    @can('faq_category_access')
                        <li class="c-sidebar-nav-item">
                            <a href="{{ route("admin.faq-categories.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/faq-categories") || request()->is("admin/faq-categories/*") ? "active" : "" }}">
                                <i class="fa-fw fas fa-briefcase c-sidebar-nav-icon">

                                </i>
                                {{ trans('cruds.faqCategory.title') }}
                            </a>
                        </li>
                    @endcan
                    @can('faq_question_access')
                        <li class="c-sidebar-nav-item">
                            <a href="{{ route("admin.faq-questions.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/faq-questions") || request()->is("admin/faq-questions/*") ? "active" : "" }}">
                                <i class="fa-fw fas fa-question c-sidebar-nav-icon">

                                </i>
                                {{ trans('cruds.faqQuestion.title') }}
                            </a>
                        </li>
                    @endcan
                </ul>
            </li>
        @endcan
        @can('user_management_access')
            <li class="c-sidebar-nav-dropdown">
                <a class="c-sidebar-nav-dropdown-toggle" href="#">
                    <i class="fa-fw fas fa-users c-sidebar-nav-icon">

                    </i>
                    {{ trans('cruds.userManagement.title') }}
                </a>
                <ul class="c-sidebar-nav-dropdown-items">
                    @can('permission_access')
                        <li class="c-sidebar-nav-item">
                            <a href="{{ route("admin.permissions.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/permissions") || request()->is("admin/permissions/*") ? "active" : "" }}">
                                <i class="fa-fw fas fa-unlock-alt c-sidebar-nav-icon">

                                </i>
                                {{ trans('cruds.permission.title') }}
                            </a>
                        </li>
                    @endcan
                    @can('role_access')
                        <li class="c-sidebar-nav-item">
                            <a href="{{ route("admin.roles.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/roles") || request()->is("admin/roles/*") ? "active" : "" }}">
                                <i class="fa-fw fas fa-briefcase c-sidebar-nav-icon">

                                </i>
                                {{ trans('cruds.role.title') }}
                            </a>
                        </li>
                    @endcan
                    @can('user_access')
                        <li class="c-sidebar-nav-item">
                            <a href="{{ route("admin.users.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/users") || request()->is("admin/users/*") ? "active" : "" }}">
                                <i class="fa-fw fas fa-user c-sidebar-nav-icon">

                                </i>
                                {{ trans('cruds.user.title') }}
                            </a>
                        </li>
                    @endcan
                    @can('audit_log_access')
                        <li class="c-sidebar-nav-item">
                            <a href="{{ route("admin.audit-logs.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/audit-logs") || request()->is("admin/audit-logs/*") ? "active" : "" }}">
                                <i class="fa-fw fas fa-file-alt c-sidebar-nav-icon">

                                </i>
                                {{ trans('cruds.auditLog.title') }}
                            </a>
                        </li>
                    @endcan
                </ul>
            </li>
        @endcan
        @if(file_exists(app_path('Http/Controllers/Auth/ChangePasswordController.php')))
            @can('profile_password_edit')
                <li class="c-sidebar-nav-item">
                    <a class="c-sidebar-nav-link {{ request()->is('profile/password') || request()->is('profile/password/*') ? 'active' : '' }}" href="{{ route('profile.password.edit') }}">
                        <i class="fa-fw fas fa-key c-sidebar-nav-icon">
                        </i>
                        {{ trans('global.change_password') }}
                    </a>
                </li>
            @endcan
        @endif
        <li class="c-sidebar-nav-item">
            <a href="#" class="c-sidebar-nav-link" onclick="event.preventDefault(); document.getElementById('logoutform').submit();">
                <i class="c-sidebar-nav-icon fas fa-fw fa-sign-out-alt">

                </i>
                {{ trans('global.logout') }}
            </a>
        </li>
    </ul>

</div>