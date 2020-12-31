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
                'title' => 'product_management_access',
            ],
            [
                'id'    => 18,
                'title' => 'product_category_create',
            ],
            [
                'id'    => 19,
                'title' => 'product_category_edit',
            ],
            [
                'id'    => 20,
                'title' => 'product_category_show',
            ],
            [
                'id'    => 21,
                'title' => 'product_category_delete',
            ],
            [
                'id'    => 22,
                'title' => 'product_category_access',
            ],
            [
                'id'    => 23,
                'title' => 'product_tag_create',
            ],
            [
                'id'    => 24,
                'title' => 'product_tag_edit',
            ],
            [
                'id'    => 25,
                'title' => 'product_tag_show',
            ],
            [
                'id'    => 26,
                'title' => 'product_tag_delete',
            ],
            [
                'id'    => 27,
                'title' => 'product_tag_access',
            ],
            [
                'id'    => 28,
                'title' => 'product_create',
            ],
            [
                'id'    => 29,
                'title' => 'product_edit',
            ],
            [
                'id'    => 30,
                'title' => 'product_show',
            ],
            [
                'id'    => 31,
                'title' => 'product_delete',
            ],
            [
                'id'    => 32,
                'title' => 'product_access',
            ],
            [
                'id'    => 33,
                'title' => 'service_category_create',
            ],
            [
                'id'    => 34,
                'title' => 'service_category_edit',
            ],
            [
                'id'    => 35,
                'title' => 'service_category_show',
            ],
            [
                'id'    => 36,
                'title' => 'service_category_delete',
            ],
            [
                'id'    => 37,
                'title' => 'service_category_access',
            ],
            [
                'id'    => 38,
                'title' => 'institution_create',
            ],
            [
                'id'    => 39,
                'title' => 'institution_edit',
            ],
            [
                'id'    => 40,
                'title' => 'institution_show',
            ],
            [
                'id'    => 41,
                'title' => 'institution_delete',
            ],
            [
                'id'    => 42,
                'title' => 'institution_access',
            ],
            [
                'id'    => 43,
                'title' => 'aroc_center_create',
            ],
            [
                'id'    => 44,
                'title' => 'aroc_center_edit',
            ],
            [
                'id'    => 45,
                'title' => 'aroc_center_show',
            ],
            [
                'id'    => 46,
                'title' => 'aroc_center_delete',
            ],
            [
                'id'    => 47,
                'title' => 'aroc_center_access',
            ],
            [
                'id'    => 48,
                'title' => 'gender_create',
            ],
            [
                'id'    => 49,
                'title' => 'gender_edit',
            ],
            [
                'id'    => 50,
                'title' => 'gender_show',
            ],
            [
                'id'    => 51,
                'title' => 'gender_delete',
            ],
            [
                'id'    => 52,
                'title' => 'gender_access',
            ],
            [
                'id'    => 53,
                'title' => 'query_create',
            ],
            [
                'id'    => 54,
                'title' => 'query_edit',
            ],
            [
                'id'    => 55,
                'title' => 'query_show',
            ],
            [
                'id'    => 56,
                'title' => 'query_delete',
            ],
            [
                'id'    => 57,
                'title' => 'query_access',
            ],
            [
                'id'    => 58,
                'title' => 'basic_c_r_m_access',
            ],
            [
                'id'    => 59,
                'title' => 'crm_status_create',
            ],
            [
                'id'    => 60,
                'title' => 'crm_status_edit',
            ],
            [
                'id'    => 61,
                'title' => 'crm_status_show',
            ],
            [
                'id'    => 62,
                'title' => 'crm_status_delete',
            ],
            [
                'id'    => 63,
                'title' => 'crm_status_access',
            ],
            [
                'id'    => 64,
                'title' => 'crm_customer_create',
            ],
            [
                'id'    => 65,
                'title' => 'crm_customer_edit',
            ],
            [
                'id'    => 66,
                'title' => 'crm_customer_show',
            ],
            [
                'id'    => 67,
                'title' => 'crm_customer_delete',
            ],
            [
                'id'    => 68,
                'title' => 'crm_customer_access',
            ],
            [
                'id'    => 69,
                'title' => 'crm_note_create',
            ],
            [
                'id'    => 70,
                'title' => 'crm_note_edit',
            ],
            [
                'id'    => 71,
                'title' => 'crm_note_show',
            ],
            [
                'id'    => 72,
                'title' => 'crm_note_delete',
            ],
            [
                'id'    => 73,
                'title' => 'crm_note_access',
            ],
            [
                'id'    => 74,
                'title' => 'crm_document_create',
            ],
            [
                'id'    => 75,
                'title' => 'crm_document_edit',
            ],
            [
                'id'    => 76,
                'title' => 'crm_document_show',
            ],
            [
                'id'    => 77,
                'title' => 'crm_document_delete',
            ],
            [
                'id'    => 78,
                'title' => 'crm_document_access',
            ],
            [
                'id'    => 79,
                'title' => 'audit_log_show',
            ],
            [
                'id'    => 80,
                'title' => 'audit_log_access',
            ],
            [
                'id'    => 81,
                'title' => 'asset_management_access',
            ],
            [
                'id'    => 82,
                'title' => 'asset_category_create',
            ],
            [
                'id'    => 83,
                'title' => 'asset_category_edit',
            ],
            [
                'id'    => 84,
                'title' => 'asset_category_show',
            ],
            [
                'id'    => 85,
                'title' => 'asset_category_delete',
            ],
            [
                'id'    => 86,
                'title' => 'asset_category_access',
            ],
            [
                'id'    => 87,
                'title' => 'asset_location_create',
            ],
            [
                'id'    => 88,
                'title' => 'asset_location_edit',
            ],
            [
                'id'    => 89,
                'title' => 'asset_location_show',
            ],
            [
                'id'    => 90,
                'title' => 'asset_location_delete',
            ],
            [
                'id'    => 91,
                'title' => 'asset_location_access',
            ],
            [
                'id'    => 92,
                'title' => 'asset_status_create',
            ],
            [
                'id'    => 93,
                'title' => 'asset_status_edit',
            ],
            [
                'id'    => 94,
                'title' => 'asset_status_show',
            ],
            [
                'id'    => 95,
                'title' => 'asset_status_delete',
            ],
            [
                'id'    => 96,
                'title' => 'asset_status_access',
            ],
            [
                'id'    => 97,
                'title' => 'asset_create',
            ],
            [
                'id'    => 98,
                'title' => 'asset_edit',
            ],
            [
                'id'    => 99,
                'title' => 'asset_show',
            ],
            [
                'id'    => 100,
                'title' => 'asset_delete',
            ],
            [
                'id'    => 101,
                'title' => 'asset_access',
            ],
            [
                'id'    => 102,
                'title' => 'assets_history_access',
            ],
            [
                'id'    => 103,
                'title' => 'user_alert_create',
            ],
            [
                'id'    => 104,
                'title' => 'user_alert_show',
            ],
            [
                'id'    => 105,
                'title' => 'user_alert_delete',
            ],
            [
                'id'    => 106,
                'title' => 'user_alert_access',
            ],
            [
                'id'    => 107,
                'title' => 'task_management_access',
            ],
            [
                'id'    => 108,
                'title' => 'task_status_create',
            ],
            [
                'id'    => 109,
                'title' => 'task_status_edit',
            ],
            [
                'id'    => 110,
                'title' => 'task_status_show',
            ],
            [
                'id'    => 111,
                'title' => 'task_status_delete',
            ],
            [
                'id'    => 112,
                'title' => 'task_status_access',
            ],
            [
                'id'    => 113,
                'title' => 'task_tag_create',
            ],
            [
                'id'    => 114,
                'title' => 'task_tag_edit',
            ],
            [
                'id'    => 115,
                'title' => 'task_tag_show',
            ],
            [
                'id'    => 116,
                'title' => 'task_tag_delete',
            ],
            [
                'id'    => 117,
                'title' => 'task_tag_access',
            ],
            [
                'id'    => 118,
                'title' => 'task_create',
            ],
            [
                'id'    => 119,
                'title' => 'task_edit',
            ],
            [
                'id'    => 120,
                'title' => 'task_show',
            ],
            [
                'id'    => 121,
                'title' => 'task_delete',
            ],
            [
                'id'    => 122,
                'title' => 'task_access',
            ],
            [
                'id'    => 123,
                'title' => 'tasks_calendar_access',
            ],
            [
                'id'    => 124,
                'title' => 'content_management_access',
            ],
            [
                'id'    => 125,
                'title' => 'content_category_create',
            ],
            [
                'id'    => 126,
                'title' => 'content_category_edit',
            ],
            [
                'id'    => 127,
                'title' => 'content_category_show',
            ],
            [
                'id'    => 128,
                'title' => 'content_category_delete',
            ],
            [
                'id'    => 129,
                'title' => 'content_category_access',
            ],
            [
                'id'    => 130,
                'title' => 'content_tag_create',
            ],
            [
                'id'    => 131,
                'title' => 'content_tag_edit',
            ],
            [
                'id'    => 132,
                'title' => 'content_tag_show',
            ],
            [
                'id'    => 133,
                'title' => 'content_tag_delete',
            ],
            [
                'id'    => 134,
                'title' => 'content_tag_access',
            ],
            [
                'id'    => 135,
                'title' => 'content_page_create',
            ],
            [
                'id'    => 136,
                'title' => 'content_page_edit',
            ],
            [
                'id'    => 137,
                'title' => 'content_page_show',
            ],
            [
                'id'    => 138,
                'title' => 'content_page_delete',
            ],
            [
                'id'    => 139,
                'title' => 'content_page_access',
            ],
            [
                'id'    => 140,
                'title' => 'faq_management_access',
            ],
            [
                'id'    => 141,
                'title' => 'faq_category_create',
            ],
            [
                'id'    => 142,
                'title' => 'faq_category_edit',
            ],
            [
                'id'    => 143,
                'title' => 'faq_category_show',
            ],
            [
                'id'    => 144,
                'title' => 'faq_category_delete',
            ],
            [
                'id'    => 145,
                'title' => 'faq_category_access',
            ],
            [
                'id'    => 146,
                'title' => 'faq_question_create',
            ],
            [
                'id'    => 147,
                'title' => 'faq_question_edit',
            ],
            [
                'id'    => 148,
                'title' => 'faq_question_show',
            ],
            [
                'id'    => 149,
                'title' => 'faq_question_delete',
            ],
            [
                'id'    => 150,
                'title' => 'faq_question_access',
            ],
            [
                'id'    => 151,
                'title' => 'contact_management_access',
            ],
            [
                'id'    => 152,
                'title' => 'contact_company_create',
            ],
            [
                'id'    => 153,
                'title' => 'contact_company_edit',
            ],
            [
                'id'    => 154,
                'title' => 'contact_company_show',
            ],
            [
                'id'    => 155,
                'title' => 'contact_company_delete',
            ],
            [
                'id'    => 156,
                'title' => 'contact_company_access',
            ],
            [
                'id'    => 157,
                'title' => 'contact_contact_create',
            ],
            [
                'id'    => 158,
                'title' => 'contact_contact_edit',
            ],
            [
                'id'    => 159,
                'title' => 'contact_contact_show',
            ],
            [
                'id'    => 160,
                'title' => 'contact_contact_delete',
            ],
            [
                'id'    => 161,
                'title' => 'contact_contact_access',
            ],
            [
                'id'    => 162,
                'title' => 'time_management_access',
            ],
            [
                'id'    => 163,
                'title' => 'time_work_type_create',
            ],
            [
                'id'    => 164,
                'title' => 'time_work_type_edit',
            ],
            [
                'id'    => 165,
                'title' => 'time_work_type_show',
            ],
            [
                'id'    => 166,
                'title' => 'time_work_type_delete',
            ],
            [
                'id'    => 167,
                'title' => 'time_work_type_access',
            ],
            [
                'id'    => 168,
                'title' => 'time_project_create',
            ],
            [
                'id'    => 169,
                'title' => 'time_project_edit',
            ],
            [
                'id'    => 170,
                'title' => 'time_project_show',
            ],
            [
                'id'    => 171,
                'title' => 'time_project_delete',
            ],
            [
                'id'    => 172,
                'title' => 'time_project_access',
            ],
            [
                'id'    => 173,
                'title' => 'time_entry_create',
            ],
            [
                'id'    => 174,
                'title' => 'time_entry_edit',
            ],
            [
                'id'    => 175,
                'title' => 'time_entry_show',
            ],
            [
                'id'    => 176,
                'title' => 'time_entry_delete',
            ],
            [
                'id'    => 177,
                'title' => 'time_entry_access',
            ],
            [
                'id'    => 178,
                'title' => 'time_report_create',
            ],
            [
                'id'    => 179,
                'title' => 'time_report_edit',
            ],
            [
                'id'    => 180,
                'title' => 'time_report_show',
            ],
            [
                'id'    => 181,
                'title' => 'time_report_delete',
            ],
            [
                'id'    => 182,
                'title' => 'time_report_access',
            ],
            [
                'id'    => 183,
                'title' => 'client_management_setting_access',
            ],
            [
                'id'    => 184,
                'title' => 'currency_create',
            ],
            [
                'id'    => 185,
                'title' => 'currency_edit',
            ],
            [
                'id'    => 186,
                'title' => 'currency_show',
            ],
            [
                'id'    => 187,
                'title' => 'currency_delete',
            ],
            [
                'id'    => 188,
                'title' => 'currency_access',
            ],
            [
                'id'    => 189,
                'title' => 'transaction_type_create',
            ],
            [
                'id'    => 190,
                'title' => 'transaction_type_edit',
            ],
            [
                'id'    => 191,
                'title' => 'transaction_type_show',
            ],
            [
                'id'    => 192,
                'title' => 'transaction_type_delete',
            ],
            [
                'id'    => 193,
                'title' => 'transaction_type_access',
            ],
            [
                'id'    => 194,
                'title' => 'income_source_create',
            ],
            [
                'id'    => 195,
                'title' => 'income_source_edit',
            ],
            [
                'id'    => 196,
                'title' => 'income_source_show',
            ],
            [
                'id'    => 197,
                'title' => 'income_source_delete',
            ],
            [
                'id'    => 198,
                'title' => 'income_source_access',
            ],
            [
                'id'    => 199,
                'title' => 'client_status_create',
            ],
            [
                'id'    => 200,
                'title' => 'client_status_edit',
            ],
            [
                'id'    => 201,
                'title' => 'client_status_show',
            ],
            [
                'id'    => 202,
                'title' => 'client_status_delete',
            ],
            [
                'id'    => 203,
                'title' => 'client_status_access',
            ],
            [
                'id'    => 204,
                'title' => 'project_status_create',
            ],
            [
                'id'    => 205,
                'title' => 'project_status_edit',
            ],
            [
                'id'    => 206,
                'title' => 'project_status_show',
            ],
            [
                'id'    => 207,
                'title' => 'project_status_delete',
            ],
            [
                'id'    => 208,
                'title' => 'project_status_access',
            ],
            [
                'id'    => 209,
                'title' => 'client_management_access',
            ],
            [
                'id'    => 210,
                'title' => 'client_create',
            ],
            [
                'id'    => 211,
                'title' => 'client_edit',
            ],
            [
                'id'    => 212,
                'title' => 'client_show',
            ],
            [
                'id'    => 213,
                'title' => 'client_delete',
            ],
            [
                'id'    => 214,
                'title' => 'client_access',
            ],
            [
                'id'    => 215,
                'title' => 'project_create',
            ],
            [
                'id'    => 216,
                'title' => 'project_edit',
            ],
            [
                'id'    => 217,
                'title' => 'project_show',
            ],
            [
                'id'    => 218,
                'title' => 'project_delete',
            ],
            [
                'id'    => 219,
                'title' => 'project_access',
            ],
            [
                'id'    => 220,
                'title' => 'note_create',
            ],
            [
                'id'    => 221,
                'title' => 'note_edit',
            ],
            [
                'id'    => 222,
                'title' => 'note_show',
            ],
            [
                'id'    => 223,
                'title' => 'note_delete',
            ],
            [
                'id'    => 224,
                'title' => 'note_access',
            ],
            [
                'id'    => 225,
                'title' => 'document_create',
            ],
            [
                'id'    => 226,
                'title' => 'document_edit',
            ],
            [
                'id'    => 227,
                'title' => 'document_show',
            ],
            [
                'id'    => 228,
                'title' => 'document_delete',
            ],
            [
                'id'    => 229,
                'title' => 'document_access',
            ],
            [
                'id'    => 230,
                'title' => 'transaction_create',
            ],
            [
                'id'    => 231,
                'title' => 'transaction_edit',
            ],
            [
                'id'    => 232,
                'title' => 'transaction_show',
            ],
            [
                'id'    => 233,
                'title' => 'transaction_delete',
            ],
            [
                'id'    => 234,
                'title' => 'transaction_access',
            ],
            [
                'id'    => 235,
                'title' => 'client_report_create',
            ],
            [
                'id'    => 236,
                'title' => 'client_report_edit',
            ],
            [
                'id'    => 237,
                'title' => 'client_report_show',
            ],
            [
                'id'    => 238,
                'title' => 'client_report_delete',
            ],
            [
                'id'    => 239,
                'title' => 'client_report_access',
            ],
            [
                'id'    => 240,
                'title' => 'expense_management_access',
            ],
            [
                'id'    => 241,
                'title' => 'expense_category_create',
            ],
            [
                'id'    => 242,
                'title' => 'expense_category_edit',
            ],
            [
                'id'    => 243,
                'title' => 'expense_category_show',
            ],
            [
                'id'    => 244,
                'title' => 'expense_category_delete',
            ],
            [
                'id'    => 245,
                'title' => 'expense_category_access',
            ],
            [
                'id'    => 246,
                'title' => 'income_category_create',
            ],
            [
                'id'    => 247,
                'title' => 'income_category_edit',
            ],
            [
                'id'    => 248,
                'title' => 'income_category_show',
            ],
            [
                'id'    => 249,
                'title' => 'income_category_delete',
            ],
            [
                'id'    => 250,
                'title' => 'income_category_access',
            ],
            [
                'id'    => 251,
                'title' => 'expense_create',
            ],
            [
                'id'    => 252,
                'title' => 'expense_edit',
            ],
            [
                'id'    => 253,
                'title' => 'expense_show',
            ],
            [
                'id'    => 254,
                'title' => 'expense_delete',
            ],
            [
                'id'    => 255,
                'title' => 'expense_access',
            ],
            [
                'id'    => 256,
                'title' => 'income_create',
            ],
            [
                'id'    => 257,
                'title' => 'income_edit',
            ],
            [
                'id'    => 258,
                'title' => 'income_show',
            ],
            [
                'id'    => 259,
                'title' => 'income_delete',
            ],
            [
                'id'    => 260,
                'title' => 'income_access',
            ],
            [
                'id'    => 261,
                'title' => 'expense_report_create',
            ],
            [
                'id'    => 262,
                'title' => 'expense_report_edit',
            ],
            [
                'id'    => 263,
                'title' => 'expense_report_show',
            ],
            [
                'id'    => 264,
                'title' => 'expense_report_delete',
            ],
            [
                'id'    => 265,
                'title' => 'expense_report_access',
            ],
            [
                'id'    => 266,
                'title' => 'profile_password_edit',
            ],
        ];

        Permission::insert($permissions);
    }
}
