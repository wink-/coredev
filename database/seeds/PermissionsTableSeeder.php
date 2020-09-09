<?php

use App\Permission;
use Illuminate\Database\Seeder;

class PermissionsTableSeeder extends Seeder
{
    public function run()
    {
        $permissions = [
            [
                'id'    => 1,
                'title' => 'user_management_access',
            ],
            [
                'id'    => 2,
                'title' => 'permission_create',
            ],
            [
                'id'    => 3,
                'title' => 'permission_edit',
            ],
            [
                'id'    => 4,
                'title' => 'permission_show',
            ],
            [
                'id'    => 5,
                'title' => 'permission_delete',
            ],
            [
                'id'    => 6,
                'title' => 'permission_access',
            ],
            [
                'id'    => 7,
                'title' => 'role_create',
            ],
            [
                'id'    => 8,
                'title' => 'role_edit',
            ],
            [
                'id'    => 9,
                'title' => 'role_show',
            ],
            [
                'id'    => 10,
                'title' => 'role_delete',
            ],
            [
                'id'    => 11,
                'title' => 'role_access',
            ],
            [
                'id'    => 12,
                'title' => 'user_create',
            ],
            [
                'id'    => 13,
                'title' => 'user_edit',
            ],
            [
                'id'    => 14,
                'title' => 'user_show',
            ],
            [
                'id'    => 15,
                'title' => 'user_delete',
            ],
            [
                'id'    => 16,
                'title' => 'user_access',
            ],
            [
                'id'    => 17,
                'title' => 'audit_log_show',
            ],
            [
                'id'    => 18,
                'title' => 'audit_log_access',
            ],
            [
                'id'    => 19,
                'title' => 'content_management_access',
            ],
            [
                'id'    => 20,
                'title' => 'content_category_create',
            ],
            [
                'id'    => 21,
                'title' => 'content_category_edit',
            ],
            [
                'id'    => 22,
                'title' => 'content_category_show',
            ],
            [
                'id'    => 23,
                'title' => 'content_category_delete',
            ],
            [
                'id'    => 24,
                'title' => 'content_category_access',
            ],
            [
                'id'    => 25,
                'title' => 'content_tag_create',
            ],
            [
                'id'    => 26,
                'title' => 'content_tag_edit',
            ],
            [
                'id'    => 27,
                'title' => 'content_tag_show',
            ],
            [
                'id'    => 28,
                'title' => 'content_tag_delete',
            ],
            [
                'id'    => 29,
                'title' => 'content_tag_access',
            ],
            [
                'id'    => 30,
                'title' => 'content_page_create',
            ],
            [
                'id'    => 31,
                'title' => 'content_page_edit',
            ],
            [
                'id'    => 32,
                'title' => 'content_page_show',
            ],
            [
                'id'    => 33,
                'title' => 'content_page_delete',
            ],
            [
                'id'    => 34,
                'title' => 'content_page_access',
            ],
            [
                'id'    => 35,
                'title' => 'task_management_access',
            ],
            [
                'id'    => 36,
                'title' => 'task_status_create',
            ],
            [
                'id'    => 37,
                'title' => 'task_status_edit',
            ],
            [
                'id'    => 38,
                'title' => 'task_status_show',
            ],
            [
                'id'    => 39,
                'title' => 'task_status_delete',
            ],
            [
                'id'    => 40,
                'title' => 'task_status_access',
            ],
            [
                'id'    => 41,
                'title' => 'task_tag_create',
            ],
            [
                'id'    => 42,
                'title' => 'task_tag_edit',
            ],
            [
                'id'    => 43,
                'title' => 'task_tag_show',
            ],
            [
                'id'    => 44,
                'title' => 'task_tag_delete',
            ],
            [
                'id'    => 45,
                'title' => 'task_tag_access',
            ],
            [
                'id'    => 46,
                'title' => 'task_create',
            ],
            [
                'id'    => 47,
                'title' => 'task_edit',
            ],
            [
                'id'    => 48,
                'title' => 'task_show',
            ],
            [
                'id'    => 49,
                'title' => 'task_delete',
            ],
            [
                'id'    => 50,
                'title' => 'task_access',
            ],
            [
                'id'    => 51,
                'title' => 'tasks_calendar_access',
            ],
            [
                'id'    => 52,
                'title' => 'faq_management_access',
            ],
            [
                'id'    => 53,
                'title' => 'faq_category_create',
            ],
            [
                'id'    => 54,
                'title' => 'faq_category_edit',
            ],
            [
                'id'    => 55,
                'title' => 'faq_category_show',
            ],
            [
                'id'    => 56,
                'title' => 'faq_category_delete',
            ],
            [
                'id'    => 57,
                'title' => 'faq_category_access',
            ],
            [
                'id'    => 58,
                'title' => 'faq_question_create',
            ],
            [
                'id'    => 59,
                'title' => 'faq_question_edit',
            ],
            [
                'id'    => 60,
                'title' => 'faq_question_show',
            ],
            [
                'id'    => 61,
                'title' => 'faq_question_delete',
            ],
            [
                'id'    => 62,
                'title' => 'faq_question_access',
            ],
            [
                'id'    => 63,
                'title' => 'customer_resource_management_access',
            ],
            [
                'id'    => 64,
                'title' => 'customer_create',
            ],
            [
                'id'    => 65,
                'title' => 'customer_edit',
            ],
            [
                'id'    => 66,
                'title' => 'customer_show',
            ],
            [
                'id'    => 67,
                'title' => 'customer_access',
            ],
            [
                'id'    => 68,
                'title' => 'carrier_create',
            ],
            [
                'id'    => 69,
                'title' => 'carrier_edit',
            ],
            [
                'id'    => 70,
                'title' => 'carrier_show',
            ],
            [
                'id'    => 71,
                'title' => 'carrier_delete',
            ],
            [
                'id'    => 72,
                'title' => 'carrier_access',
            ],
            [
                'id'    => 73,
                'title' => 'destination_create',
            ],
            [
                'id'    => 74,
                'title' => 'destination_edit',
            ],
            [
                'id'    => 75,
                'title' => 'destination_show',
            ],
            [
                'id'    => 76,
                'title' => 'destination_delete',
            ],
            [
                'id'    => 77,
                'title' => 'destination_access',
            ],
            [
                'id'    => 78,
                'title' => 'contact_create',
            ],
            [
                'id'    => 79,
                'title' => 'contact_edit',
            ],
            [
                'id'    => 80,
                'title' => 'contact_show',
            ],
            [
                'id'    => 81,
                'title' => 'contact_delete',
            ],
            [
                'id'    => 82,
                'title' => 'contact_access',
            ],
            [
                'id'    => 83,
                'title' => 'process_create',
            ],
            [
                'id'    => 84,
                'title' => 'process_edit',
            ],
            [
                'id'    => 85,
                'title' => 'process_show',
            ],
            [
                'id'    => 86,
                'title' => 'process_delete',
            ],
            [
                'id'    => 87,
                'title' => 'process_access',
            ],
            [
                'id'    => 88,
                'title' => 'part_create',
            ],
            [
                'id'    => 89,
                'title' => 'part_edit',
            ],
            [
                'id'    => 90,
                'title' => 'part_show',
            ],
            [
                'id'    => 91,
                'title' => 'part_access',
            ],
            [
                'id'    => 92,
                'title' => 'administration_access',
            ],
            [
                'id'    => 93,
                'title' => 'session_create',
            ],
            [
                'id'    => 94,
                'title' => 'session_edit',
            ],
            [
                'id'    => 95,
                'title' => 'session_show',
            ],
            [
                'id'    => 96,
                'title' => 'session_delete',
            ],
            [
                'id'    => 97,
                'title' => 'session_access',
            ],
            [
                'id'    => 98,
                'title' => 'procedure_create',
            ],
            [
                'id'    => 99,
                'title' => 'procedure_edit',
            ],
            [
                'id'    => 100,
                'title' => 'procedure_show',
            ],
            [
                'id'    => 101,
                'title' => 'procedure_delete',
            ],
            [
                'id'    => 102,
                'title' => 'procedure_access',
            ],
            [
                'id'    => 103,
                'title' => 'material_create',
            ],
            [
                'id'    => 104,
                'title' => 'material_edit',
            ],
            [
                'id'    => 105,
                'title' => 'material_show',
            ],
            [
                'id'    => 106,
                'title' => 'material_delete',
            ],
            [
                'id'    => 107,
                'title' => 'material_access',
            ],
            [
                'id'    => 108,
                'title' => 'method_create',
            ],
            [
                'id'    => 109,
                'title' => 'method_edit',
            ],
            [
                'id'    => 110,
                'title' => 'method_show',
            ],
            [
                'id'    => 111,
                'title' => 'method_delete',
            ],
            [
                'id'    => 112,
                'title' => 'method_access',
            ],
            [
                'id'    => 113,
                'title' => 'quote_create',
            ],
            [
                'id'    => 114,
                'title' => 'quote_edit',
            ],
            [
                'id'    => 115,
                'title' => 'quote_show',
            ],
            [
                'id'    => 116,
                'title' => 'quote_delete',
            ],
            [
                'id'    => 117,
                'title' => 'quote_access',
            ],
            [
                'id'    => 118,
                'title' => 'wip_sys_administration_access',
            ],
            [
                'id'    => 119,
                'title' => 'workorder_create',
            ],
            [
                'id'    => 120,
                'title' => 'workorder_edit',
            ],
            [
                'id'    => 121,
                'title' => 'workorder_show',
            ],
            [
                'id'    => 122,
                'title' => 'workorder_delete',
            ],
            [
                'id'    => 123,
                'title' => 'workorder_access',
            ],
            [
                'id'    => 124,
                'title' => 'workorderhistory_create',
            ],
            [
                'id'    => 125,
                'title' => 'workorderhistory_edit',
            ],
            [
                'id'    => 126,
                'title' => 'workorderhistory_show',
            ],
            [
                'id'    => 127,
                'title' => 'workorderhistory_access',
            ],
            [
                'id'    => 128,
                'title' => 'employee_create',
            ],
            [
                'id'    => 129,
                'title' => 'employee_edit',
            ],
            [
                'id'    => 130,
                'title' => 'employee_show',
            ],
            [
                'id'    => 131,
                'title' => 'employee_access',
            ],
            [
                'id'    => 132,
                'title' => 'equipment_create',
            ],
            [
                'id'    => 133,
                'title' => 'equipment_edit',
            ],
            [
                'id'    => 134,
                'title' => 'equipment_show',
            ],
            [
                'id'    => 135,
                'title' => 'equipment_access',
            ],
            [
                'id'    => 136,
                'title' => 'calibrated_by_create',
            ],
            [
                'id'    => 137,
                'title' => 'calibrated_by_edit',
            ],
            [
                'id'    => 138,
                'title' => 'calibrated_by_show',
            ],
            [
                'id'    => 139,
                'title' => 'calibrated_by_delete',
            ],
            [
                'id'    => 140,
                'title' => 'calibrated_by_access',
            ],
            [
                'id'    => 141,
                'title' => 'cal_sy_access',
            ],
            [
                'id'    => 142,
                'title' => 'calemployee_create',
            ],
            [
                'id'    => 143,
                'title' => 'calemployee_edit',
            ],
            [
                'id'    => 144,
                'title' => 'calemployee_show',
            ],
            [
                'id'    => 145,
                'title' => 'calemployee_delete',
            ],
            [
                'id'    => 146,
                'title' => 'calemployee_access',
            ],
            [
                'id'    => 147,
                'title' => 'cal_type_create',
            ],
            [
                'id'    => 148,
                'title' => 'cal_type_edit',
            ],
            [
                'id'    => 149,
                'title' => 'cal_type_show',
            ],
            [
                'id'    => 150,
                'title' => 'cal_type_delete',
            ],
            [
                'id'    => 151,
                'title' => 'cal_type_access',
            ],
            [
                'id'    => 152,
                'title' => 'cal_location_create',
            ],
            [
                'id'    => 153,
                'title' => 'cal_location_edit',
            ],
            [
                'id'    => 154,
                'title' => 'cal_location_show',
            ],
            [
                'id'    => 155,
                'title' => 'cal_location_delete',
            ],
            [
                'id'    => 156,
                'title' => 'cal_location_access',
            ],
            [
                'id'    => 157,
                'title' => 'cal_owner_create',
            ],
            [
                'id'    => 158,
                'title' => 'cal_owner_edit',
            ],
            [
                'id'    => 159,
                'title' => 'cal_owner_show',
            ],
            [
                'id'    => 160,
                'title' => 'cal_owner_delete',
            ],
            [
                'id'    => 161,
                'title' => 'cal_owner_access',
            ],
            [
                'id'    => 162,
                'title' => 'cal_period_create',
            ],
            [
                'id'    => 163,
                'title' => 'cal_period_edit',
            ],
            [
                'id'    => 164,
                'title' => 'cal_period_show',
            ],
            [
                'id'    => 165,
                'title' => 'cal_period_delete',
            ],
            [
                'id'    => 166,
                'title' => 'cal_period_access',
            ],
            [
                'id'    => 167,
                'title' => 'cal_source_create',
            ],
            [
                'id'    => 168,
                'title' => 'cal_source_edit',
            ],
            [
                'id'    => 169,
                'title' => 'cal_source_show',
            ],
            [
                'id'    => 170,
                'title' => 'cal_source_delete',
            ],
            [
                'id'    => 171,
                'title' => 'cal_source_access',
            ],
            [
                'id'    => 172,
                'title' => 'cal_status_create',
            ],
            [
                'id'    => 173,
                'title' => 'cal_status_edit',
            ],
            [
                'id'    => 174,
                'title' => 'cal_status_show',
            ],
            [
                'id'    => 175,
                'title' => 'cal_status_delete',
            ],
            [
                'id'    => 176,
                'title' => 'cal_status_access',
            ],
            [
                'id'    => 177,
                'title' => 'cal_device_create',
            ],
            [
                'id'    => 178,
                'title' => 'cal_device_edit',
            ],
            [
                'id'    => 179,
                'title' => 'cal_device_show',
            ],
            [
                'id'    => 180,
                'title' => 'cal_device_delete',
            ],
            [
                'id'    => 181,
                'title' => 'cal_device_access',
            ],
            [
                'id'    => 182,
                'title' => 'profile_password_edit',
            ],
        ];

        Permission::insert($permissions);
    }
}
