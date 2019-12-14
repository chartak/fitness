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
                'title' => 'content_management_access',
            ],
            [
                'id'    => '18',
                'title' => 'content_category_create',
            ],
            [
                'id'    => '19',
                'title' => 'content_category_edit',
            ],
            [
                'id'    => '20',
                'title' => 'content_category_show',
            ],
            [
                'id'    => '21',
                'title' => 'content_category_delete',
            ],
            [
                'id'    => '22',
                'title' => 'content_category_access',
            ],
            [
                'id'    => '23',
                'title' => 'content_tag_create',
            ],
            [
                'id'    => '24',
                'title' => 'content_tag_edit',
            ],
            [
                'id'    => '25',
                'title' => 'content_tag_show',
            ],
            [
                'id'    => '26',
                'title' => 'content_tag_delete',
            ],
            [
                'id'    => '27',
                'title' => 'content_tag_access',
            ],
            [
                'id'    => '28',
                'title' => 'content_page_create',
            ],
            [
                'id'    => '29',
                'title' => 'content_page_edit',
            ],
            [
                'id'    => '30',
                'title' => 'content_page_show',
            ],
            [
                'id'    => '31',
                'title' => 'content_page_delete',
            ],
            [
                'id'    => '32',
                'title' => 'content_page_access',
            ],
            [
                'id'    => '33',
                'title' => 'stock_create',
            ],
            [
                'id'    => '34',
                'title' => 'stock_edit',
            ],
            [
                'id'    => '35',
                'title' => 'stock_show',
            ],
            [
                'id'    => '36',
                'title' => 'stock_delete',
            ],
            [
                'id'    => '37',
                'title' => 'stock_access',
            ],
            [
                'id'    => '38',
                'title' => 'type_of_trainer_create',
            ],
            [
                'id'    => '39',
                'title' => 'type_of_trainer_edit',
            ],
            [
                'id'    => '40',
                'title' => 'type_of_trainer_show',
            ],
            [
                'id'    => '41',
                'title' => 'type_of_trainer_delete',
            ],
            [
                'id'    => '42',
                'title' => 'type_of_trainer_access',
            ],
            [
                'id'    => '43',
                'title' => 'treainer_create',
            ],
            [
                'id'    => '44',
                'title' => 'treainer_edit',
            ],
            [
                'id'    => '45',
                'title' => 'treainer_show',
            ],
            [
                'id'    => '46',
                'title' => 'treainer_delete',
            ],
            [
                'id'    => '47',
                'title' => 'treainer_access',
            ],
            [
                'id'    => '48',
                'title' => 'club_cart_create',
            ],
            [
                'id'    => '49',
                'title' => 'club_cart_edit',
            ],
            [
                'id'    => '50',
                'title' => 'club_cart_show',
            ],
            [
                'id'    => '51',
                'title' => 'club_cart_delete',
            ],
            [
                'id'    => '52',
                'title' => 'club_cart_access',
            ],
            [
                'id'    => '53',
                'title' => 'service_create',
            ],
            [
                'id'    => '54',
                'title' => 'service_edit',
            ],
            [
                'id'    => '55',
                'title' => 'service_show',
            ],
            [
                'id'    => '56',
                'title' => 'service_delete',
            ],
            [
                'id'    => '57',
                'title' => 'service_access',
            ],
            [
                'id'    => '58',
                'title' => 'contact_management_access',
            ],
            [
                'id'    => '59',
                'title' => 'contact_company_create',
            ],
            [
                'id'    => '60',
                'title' => 'contact_company_edit',
            ],
            [
                'id'    => '61',
                'title' => 'contact_company_show',
            ],
            [
                'id'    => '62',
                'title' => 'contact_company_delete',
            ],
            [
                'id'    => '63',
                'title' => 'contact_company_access',
            ],
            [
                'id'    => '64',
                'title' => 'contact_contact_create',
            ],
            [
                'id'    => '65',
                'title' => 'contact_contact_edit',
            ],
            [
                'id'    => '66',
                'title' => 'contact_contact_show',
            ],
            [
                'id'    => '67',
                'title' => 'contact_contact_delete',
            ],
            [
                'id'    => '68',
                'title' => 'contact_contact_access',
            ],
        ];

        Permission::insert($permissions);
    }
}
