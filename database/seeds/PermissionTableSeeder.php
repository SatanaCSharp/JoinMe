<?php

use Illuminate\Database\Seeder;
use App\Permission;
class PermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $permission = [
            [
                'name' => 'role-list',
                'display_name' => 'Display Role Listing',
                'description' => 'See only Listing Of Role'
            ],
            [
                'name' => 'role-create',
                'display_name' => 'Create Role',
                'description' => 'Create New Role'
            ],
            [
                'name' => 'role-edit',
                'display_name' => 'Edit Role',
                'description' => 'Edit Role'
            ],
            [
                'name' => 'role-delete',
                'display_name' => 'Delete Role',
                'description' => 'Delete Role'
            ],

            [
                'name' => 'event-list',
                'display_name' => 'Display Event Listing',
                'description' => 'See only Listing Of event'
            ],
            [
                'name' => 'event-create',
                'display_name' => 'Create event',
                'description' => 'Create New event'
            ],
            [
                'name' => 'event-edit',
                'display_name' => 'Edit event',
                'description' => 'Edit event'
            ],
            [
                'name' => 'event-delete',
                'display_name' => 'Delete event',
                'description' => 'Delete event'
            ]
        ];


        foreach ($permission as $key => $value) {
            Permission::create($value);
        }
    }
}
