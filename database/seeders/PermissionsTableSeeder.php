<?php

namespace Database\Seeders;

use App\Models\Permission;
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
                'title' => 'subject_create',
            ],
            [
                'id'    => 18,
                'title' => 'subject_edit',
            ],
            [
                'id'    => 19,
                'title' => 'subject_show',
            ],
            [
                'id'    => 20,
                'title' => 'subject_delete',
            ],
            [
                'id'    => 21,
                'title' => 'subject_access',
            ],
            [
                'id'    => 22,
                'title' => 'exam_result_create',
            ],
            [
                'id'    => 23,
                'title' => 'exam_result_edit',
            ],
            [
                'id'    => 24,
                'title' => 'exam_result_show',
            ],
            [
                'id'    => 25,
                'title' => 'exam_result_delete',
            ],
            [
                'id'    => 26,
                'title' => 'exam_result_access',
            ],
            [
                'id'    => 27,
                'title' => 'audit_log_show',
            ],
            [
                'id'    => 28,
                'title' => 'audit_log_access',
            ],
            [
                'id'    => 29,
                'title' => 'register_create',
            ],
            [
                'id'    => 30,
                'title' => 'register_edit',
            ],
            [
                'id'    => 31,
                'title' => 'register_show',
            ],
            [
                'id'    => 32,
                'title' => 'register_delete',
            ],
            [
                'id'    => 33,
                'title' => 'register_access',
            ],
            [
                'id'    => 34,
                'title' => 'profile_password_edit',
            ],
        ];

        Permission::insert($permissions);
    }
}
