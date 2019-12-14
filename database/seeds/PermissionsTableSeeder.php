<?php

use App\Permission;
use Illuminate\Database\Seeder;

class PermissionsTableSeeder extends Seeder
{
    public function run()
    {
        $permissions = [
            [
                'id'    => '1',
                'title' => 'user_management_access',
            ],
            [
                'id'    => '2',
                'title' => 'permission_create',
            ],
            [
                'id'    => '3',
                'title' => 'permission_edit',
            ],
            [
                'id'    => '4',
                'title' => 'permission_show',
            ],
            [
                'id'    => '5',
                'title' => 'permission_delete',
            ],
            [
                'id'    => '6',
                'title' => 'permission_access',
            ],
            [
                'id'    => '7',
                'title' => 'role_create',
            ],
            [
                'id'    => '8',
                'title' => 'role_edit',
            ],
            [
                'id'    => '9',
                'title' => 'role_show',
            ],
            [
                'id'    => '10',
                'title' => 'role_delete',
            ],
            [
                'id'    => '11',
                'title' => 'role_access',
            ],
            [
                'id'    => '12',
                'title' => 'user_create',
            ],
            [
                'id'    => '13',
                'title' => 'user_edit',
            ],
            [
                'id'    => '14',
                'title' => 'user_show',
            ],
            [
                'id'    => '15',
                'title' => 'user_delete',
            ],
            [
                'id'    => '16',
                'title' => 'user_access',
            ],
            [
                'id'    => '17',
                'title' => 'stock_create',
            ],
            [
                'id'    => '18',
                'title' => 'stock_edit',
            ],
            [
                'id'    => '19',
                'title' => 'stock_show',
            ],
            [
                'id'    => '20',
                'title' => 'stock_delete',
            ],
            [
                'id'    => '21',
                'title' => 'stock_access',
            ],
            [
                'id'    => '22',
                'title' => 'type_of_trainer_create',
            ],
            [
                'id'    => '23',
                'title' => 'type_of_trainer_edit',
            ],
            [
                'id'    => '24',
                'title' => 'type_of_trainer_show',
            ],
            [
                'id'    => '25',
                'title' => 'type_of_trainer_delete',
            ],
            [
                'id'    => '26',
                'title' => 'type_of_trainer_access',
            ],
            [
                'id'    => '27',
                'title' => 'treainer_create',
            ],
            [
                'id'    => '28',
                'title' => 'treainer_edit',
            ],
            [
                'id'    => '29',
                'title' => 'treainer_show',
            ],
            [
                'id'    => '30',
                'title' => 'treainer_delete',
            ],
            [
                'id'    => '31',
                'title' => 'treainer_access',
            ],
            [
                'id'    => '32',
                'title' => 'club_cart_create',
            ],
            [
                'id'    => '33',
                'title' => 'club_cart_edit',
            ],
            [
                'id'    => '34',
                'title' => 'club_cart_show',
            ],
            [
                'id'    => '35',
                'title' => 'club_cart_delete',
            ],
            [
                'id'    => '36',
                'title' => 'club_cart_access',
            ],
            [
                'id'    => '37',
                'title' => 'service_create',
            ],
            [
                'id'    => '38',
                'title' => 'service_edit',
            ],
            [
                'id'    => '39',
                'title' => 'service_show',
            ],
            [
                'id'    => '40',
                'title' => 'service_delete',
            ],
            [
                'id'    => '41',
                'title' => 'service_access',
            ],
            [
                'id'    => '42',
                'title' => 'contact_management_access',
            ],
            [
                'id'    => '43',
                'title' => 'contact_company_create',
            ],
            [
                'id'    => '44',
                'title' => 'contact_company_edit',
            ],
            [
                'id'    => '45',
                'title' => 'contact_company_show',
            ],
            [
                'id'    => '46',
                'title' => 'contact_company_delete',
            ],
            [
                'id'    => '47',
                'title' => 'contact_company_access',
            ],
            [
                'id'    => '48',
                'title' => 'contact_contact_create',
            ],
            [
                'id'    => '49',
                'title' => 'contact_contact_edit',
            ],
            [
                'id'    => '50',
                'title' => 'contact_contact_show',
            ],
            [
                'id'    => '51',
                'title' => 'contact_contact_delete',
            ],
            [
                'id'    => '52',
                'title' => 'contact_contact_access',
            ],
            [
                'id'    => '53',
                'title' => 'team_create',
            ],
            [
                'id'    => '54',
                'title' => 'team_edit',
            ],
            [
                'id'    => '55',
                'title' => 'team_show',
            ],
            [
                'id'    => '56',
                'title' => 'team_delete',
            ],
            [
                'id'    => '57',
                'title' => 'team_access',
            ],
        ];

        Permission::insert($permissions);
    }
}
