<?php

namespace Database\Seeders;

use App\Models\Permission;
use App\Models\Pivot\PermissionRole;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $permissions = [
            [
                'application_id' => 1,
                'page' => 'Brand',
                'action' => 'View',
                'node' => 'brand.view',
                'name' => 'View Brand',
                'description' => 'Ability to view brand data list.',
                'is_active' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'application_id' => 1,
                'page' => 'Brand',
                'action' => 'Create',
                'node' => 'brand.create',
                'name' => 'Create Brand',
                'description' => 'Ability to create new brand data.',
                'is_active' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'application_id' => 1,
                'page' => 'Brand',
                'action' => 'Update',
                'node' => 'brand.update',
                'name' => 'Update Brand',
                'description' => 'Ability to update brand data.',
                'is_active' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'application_id' => 1,
                'page' => 'Brand',
                'action' => 'Delete',
                'node' => 'brand.delete',
                'name' => 'Delete Brand',
                'description' => 'Ability to delete brand data.',
                'is_active' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'application_id' => 1,
                'page' => 'Series',
                'action' => 'View',
                'node' => 'series.view',
                'name' => 'View Brand',
                'description' => 'Ability to view series data list.',
                'is_active' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'application_id' => 1,
                'page' => 'Series',
                'action' => 'Create',
                'node' => 'series.create',
                'name' => 'Create Brand',
                'description' => 'Ability to create series data.',
                'is_active' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'application_id' => 1,
                'page' => 'Series',
                'action' => 'Update',
                'node' => 'series.update',
                'name' => 'Update Brand',
                'description' => 'Ability to update series data.',
                'is_active' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'application_id' => 1,
                'page' => 'Series',
                'action' => 'Delete',
                'node' => 'series.delete',
                'name' => 'Delete Brand',
                'description' => 'Ability to delete series data.',
                'is_active' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'application_id' => 1,
                'page' => 'Attribute Group',
                'action' => 'View',
                'node' => 'attribute-group.view',
                'name' => 'View Attribute Group',
                'description' => 'Ability to view attribute group data list.',
                'is_active' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'application_id' => 1,
                'page' => 'Attribute Group',
                'action' => 'Create',
                'node' => 'attribute-group.create',
                'name' => 'Create Attribute Group',
                'description' => 'Ability to create attribute group data.',
                'is_active' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'application_id' => 1,
                'page' => 'Attribute Group',
                'action' => 'Update',
                'node' => 'attribute-group.update',
                'name' => 'Update Attribute Group',
                'description' => 'Ability to update attribute group data.',
                'is_active' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'application_id' => 1,
                'page' => 'Attribute Group',
                'action' => 'Delete',
                'node' => 'attribute-group.delete',
                'name' => 'Delete Attribute Group',
                'description' => 'Ability to delete attribute group data.',
                'is_active' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'application_id' => 1,
                'page' => 'Attribute',
                'action' => 'View',
                'node' => 'attribute.view',
                'name' => 'View Attribute',
                'description' => 'Ability to view attribute data list.',
                'is_active' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'application_id' => 1,
                'page' => 'Attribute',
                'action' => 'Create',
                'node' => 'attribute.create',
                'name' => 'Create Attribute',
                'description' => 'Ability to create attribute data.',
                'is_active' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'application_id' => 1,
                'page' => 'Attribute',
                'action' => 'Update',
                'node' => 'attribute.update',
                'name' => 'Update Attribute',
                'description' => 'Ability to update attribute data.',
                'is_active' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'application_id' => 1,
                'page' => 'Attribute',
                'action' => 'Delete',
                'node' => 'attribute.delete',
                'name' => 'Delete Attribute',
                'description' => 'Ability to delete attribute data.',
                'is_active' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'application_id' => 1,
                'page' => 'Product Need',
                'action' => 'View',
                'node' => 'product-need.view',
                'name' => 'View Product Need',
                'description' => 'Ability to view product need data list.',
                'is_active' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'application_id' => 1,
                'page' => 'Product Need',
                'action' => 'Create',
                'node' => 'product-need.create',
                'name' => 'Create Product Need',
                'description' => 'Ability to create product need data.',
                'is_active' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'application_id' => 1,
                'page' => 'Product Need',
                'action' => 'Update',
                'node' => 'product-need.update',
                'name' => 'Update Product Need',
                'description' => 'Ability to update product need data.',
                'is_active' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'application_id' => 1,
                'page' => 'Product Need',
                'action' => 'Delete',
                'node' => 'product-need.delete',
                'name' => 'Delete Product Need',
                'description' => 'Ability to delete product need data.',
                'is_active' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'application_id' => 1,
                'page' => 'Product Family',
                'action' => 'View',
                'node' => 'product-family.view',
                'name' => 'View Product Family',
                'description' => 'Ability to view product family data list.',
                'is_active' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'application_id' => 1,
                'page' => 'Product Family',
                'action' => 'Create',
                'node' => 'product-family.create',
                'name' => 'Create Product Family',
                'description' => 'Ability to create product family data.',
                'is_active' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'application_id' => 1,
                'page' => 'Product Family',
                'action' => 'Update',
                'node' => 'product-family.update',
                'name' => 'Update Product Family',
                'description' => 'Ability to update product family data.',
                'is_active' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'application_id' => 1,
                'page' => 'Product Family',
                'action' => 'Delete',
                'node' => 'product-family.delete',
                'name' => 'Delete Product Family',
                'description' => 'Ability to delete product family data.',
                'is_active' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'application_id' => 1,
                'page' => 'Product Class',
                'action' => 'View',
                'node' => 'product-class.view',
                'name' => 'View Product Class',
                'description' => 'Ability to view product class data list.',
                'is_active' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'application_id' => 1,
                'page' => 'Product Class',
                'action' => 'Create',
                'node' => 'product-class.create',
                'name' => 'Create Product Class',
                'description' => 'Ability to create product class data.',
                'is_active' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'application_id' => 1,
                'page' => 'Product Class',
                'action' => 'Update',
                'node' => 'product-class.update',
                'name' => 'Update Product Class',
                'description' => 'Ability to update product class data.',
                'is_active' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'application_id' => 1,
                'page' => 'Product Class',
                'action' => 'Delete',
                'node' => 'product-class.delete',
                'name' => 'Delete Product Class',
                'description' => 'Ability to delete product class data.',
                'is_active' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'application_id' => 1,
                'page' => 'Product Line',
                'action' => 'View',
                'node' => 'product-line.view',
                'name' => 'View Product Line',
                'description' => 'Ability to view product line data list.',
                'is_active' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'application_id' => 1,
                'page' => 'Product Line',
                'action' => 'Create',
                'node' => 'product-line.create',
                'name' => 'Create Product Line',
                'description' => 'Ability to create product line data.',
                'is_active' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'application_id' => 1,
                'page' => 'Product Line',
                'action' => 'Update',
                'node' => 'product-line.update',
                'name' => 'Update Product Line',
                'description' => 'Ability to update product line data.',
                'is_active' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'application_id' => 1,
                'page' => 'Product Line',
                'action' => 'Delete',
                'node' => 'product-line.delete',
                'name' => 'Delete Product Line',
                'description' => 'Ability to delete product line data.',
                'is_active' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'application_id' => 1,
                'page' => 'Product Type',
                'action' => 'View',
                'node' => 'product-type.view',
                'name' => 'View Product Type',
                'description' => 'Ability to view product type data list.',
                'is_active' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'application_id' => 1,
                'page' => 'Product Type',
                'action' => 'Create',
                'node' => 'product-type.create',
                'name' => 'Create Product Type',
                'description' => 'Ability to create product type data.',
                'is_active' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'application_id' => 1,
                'page' => 'Product Type',
                'action' => 'Update',
                'node' => 'product-type.update',
                'name' => 'Update Product Type',
                'description' => 'Ability to update product type data.',
                'is_active' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'application_id' => 1,
                'page' => 'Product Type',
                'action' => 'Delete',
                'node' => 'product-type.delete',
                'name' => 'Delete Product Type',
                'description' => 'Ability to delete product type data.',
                'is_active' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'application_id' => 1,
                'page' => 'Product Brand',
                'action' => 'View',
                'node' => 'product-brand.view',
                'name' => 'View Product Brand',
                'description' => 'Ability to view product brand data list.',
                'is_active' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'application_id' => 1,
                'page' => 'Product Brand',
                'action' => 'Create',
                'node' => 'product-brand.create',
                'name' => 'Create Product Brand',
                'description' => 'Ability to create product brand data.',
                'is_active' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'application_id' => 1,
                'page' => 'Product Brand',
                'action' => 'Update',
                'node' => 'product-brand.update',
                'name' => 'Update Product Brand',
                'description' => 'Ability to update product brand data.',
                'is_active' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'application_id' => 1,
                'page' => 'Product Brand',
                'action' => 'Delete',
                'node' => 'product-brand.delete',
                'name' => 'Delete Product Brand',
                'description' => 'Ability to delete product brand data.',
                'is_active' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'application_id' => 1,
                'page' => 'Product Series',
                'action' => 'View',
                'node' => 'product-series.view',
                'name' => 'View Product Series',
                'description' => 'Ability to view product series data list.',
                'is_active' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'application_id' => 1,
                'page' => 'Product Series',
                'action' => 'Create',
                'node' => 'product-series.create',
                'name' => 'Create Product Series',
                'description' => 'Ability to create product series data.',
                'is_active' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'application_id' => 1,
                'page' => 'Product Series',
                'action' => 'Update',
                'node' => 'product-series.update',
                'name' => 'Update Product Series',
                'description' => 'Ability to update product series data.',
                'is_active' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'application_id' => 1,
                'page' => 'Product Series',
                'action' => 'Delete',
                'node' => 'product-series.delete',
                'name' => 'Delete Product Series',
                'description' => 'Ability to delete product series data.',
                'is_active' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'application_id' => 1,
                'page' => 'Product Model',
                'action' => 'View',
                'node' => 'product-model.view',
                'name' => 'View Product Model',
                'description' => 'Ability to view product model data list.',
                'is_active' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'application_id' => 1,
                'page' => 'Product Model',
                'action' => 'Create',
                'node' => 'product-model.create',
                'name' => 'Create Product Model',
                'description' => 'Ability to create product model data.',
                'is_active' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'application_id' => 1,
                'page' => 'Product Model',
                'action' => 'Update',
                'node' => 'product-model.update',
                'name' => 'Update Product Model',
                'description' => 'Ability to update product model data.',
                'is_active' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'application_id' => 1,
                'page' => 'Product Model',
                'action' => 'Delete',
                'node' => 'product-model.delete',
                'name' => 'Delete Product Model',
                'description' => 'Ability to delete product model data.',
                'is_active' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'application_id' => 1,
                'page' => 'Product Unit',
                'action' => 'View',
                'node' => 'product-unit.view',
                'name' => 'View Product Unit',
                'description' => 'Ability to view product unit data list.',
                'is_active' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'application_id' => 1,
                'page' => 'Product Unit',
                'action' => 'Create',
                'node' => 'product-unit.create',
                'name' => 'Create Product Unit',
                'description' => 'Ability to create product unit data.',
                'is_active' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'application_id' => 1,
                'page' => 'Product Unit',
                'action' => 'Update',
                'node' => 'product-unit.update',
                'name' => 'Update Product Unit',
                'description' => 'Ability to update product unit data.',
                'is_active' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'application_id' => 1,
                'page' => 'Product Unit',
                'action' => 'Delete',
                'node' => 'product-unit.delete',
                'name' => 'Delete Product Unit',
                'description' => 'Ability to delete product unit data.',
                'is_active' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'application_id' => 1,
                'page' => 'Discount',
                'action' => 'View',
                'node' => 'discount.view',
                'name' => 'View Discount',
                'description' => 'Ability to view discount data list.',
                'is_active' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'application_id' => 1,
                'page' => 'Discount',
                'action' => 'Create',
                'node' => 'discount.create',
                'name' => 'Create Discount',
                'description' => 'Ability to create discount data.',
                'is_active' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'application_id' => 1,
                'page' => 'Discount',
                'action' => 'Update',
                'node' => 'discount.update',
                'name' => 'Update Discount',
                'description' => 'Ability to update discount data.',
                'is_active' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'application_id' => 1,
                'page' => 'Discount',
                'action' => 'Delete',
                'node' => 'discount.delete',
                'name' => 'Delete Discount',
                'description' => 'Ability to delete discount data.',
                'is_active' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],

            [
                'application_id' => 1,
                'page' => 'Reward',
                'action' => 'View',
                'node' => 'reward.view',
                'name' => 'View Reward',
                'description' => 'Ability to view reward data list.',
                'is_active' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'application_id' => 1,
                'page' => 'Reward',
                'action' => 'Create',
                'node' => 'reward.create',
                'name' => 'Create Reward',
                'description' => 'Ability to create reward data.',
                'is_active' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'application_id' => 1,
                'page' => 'Reward',
                'action' => 'Update',
                'node' => 'reward.update',
                'name' => 'Update Reward',
                'description' => 'Ability to update reward data.',
                'is_active' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'application_id' => 1,
                'page' => 'Reward',
                'action' => 'Delete',
                'node' => 'reward.delete',
                'name' => 'Delete Reward',
                'description' => 'Ability to delete reward data.',
                'is_active' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],

            // Cashier
            [
                'application_id' => 2,
                'page' => 'Petty Cash',
                'action' => 'View',
                'node' => 'petty-cash.view',
                'name' => 'View Petty Cash',
                'description' => 'Ability to view petty cash list such as petty cash details.',
                'is_active' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'application_id' => 2,
                'page' => 'Petty Cash',
                'action' => 'Create',
                'node' => 'petty-cash.create',
                'name' => 'Create Petty Cash',
                'description' => 'Ability to create new petty cash data.',
                'is_active' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'application_id' => 2,
                'page' => 'Petty Cash',
                'action' => 'Update',
                'node' => 'petty-cash.update',
                'name' => 'Update Petty Cash',
                'description' => 'Ability to update petty cash data.',
                'is_active' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'application_id' => 2,
                'page' => 'Petty Cash',
                'action' => 'Delete',
                'node' => 'petty-cash.delete',
                'name' => 'Delete Petty Cash',
                'description' => 'Ability to delete petty cash data.',
                'is_active' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'application_id' => 2,
                'page' => 'Bill',
                'action' => 'View',
                'node' => 'bill.view',
                'name' => 'View Bill',
                'description' => 'Ability to view bill list such as bill details.',
                'is_active' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'application_id' => 2,
                'page' => 'Invoice',
                'action' => 'View',
                'node' => 'invoice.view',
                'name' => 'View Invoice',
                'description' => 'Ability to view invoice list such as invoice details.',
                'is_active' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'application_id' => 2,
                'page' => 'Invoice',
                'action' => 'Create',
                'node' => 'invoice.create',
                'name' => 'Create Invoice',
                'description' => 'Ability to create new invoice data.',
                'is_active' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'application_id' => 2,
                'page' => 'Invoice',
                'action' => 'Update',
                'node' => 'invoice.update',
                'name' => 'Update Invoice',
                'description' => 'Ability to update invoice data.',
                'is_active' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'application_id' => 2,
                'page' => 'Invoice',
                'action' => 'Delete',
                'node' => 'invoice.delete',
                'name' => 'Delete Invoice',
                'description' => 'Ability to delete invoice data.',
                'is_active' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'application_id' => 2,
                'page' => 'Transaction',
                'action' => 'View',
                'node' => 'transaction.view',
                'name' => 'View Transaction',
                'description' => 'Ability to view transaction list such as transaction details.',
                'is_active' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'application_id' => 2,
                'page' => 'Transaction',
                'action' => 'Pay',
                'node' => 'transaction.pay',
                'name' => 'Pay Transaction',
                'description' => 'Ability to pay transaction.',
                'is_active' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'application_id' => 2,
                'page' => 'Advance',
                'action' => 'View',
                'node' => 'advance.view',
                'name' => 'View Advance Payment',
                'description' => 'Ability to view advance payment list such as advance payment details.',
                'is_active' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'application_id' => 2,
                'page' => 'Advance',
                'action' => 'Pay',
                'node' => 'advance.pay',
                'name' => 'Pay Advance',
                'description' => 'Ability to pay advance payment data.',
                'is_active' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'application_id' => 2,
                'page' => 'Advance',
                'action' => 'Update',
                'node' => 'advance.update',
                'name' => 'Update Advance',
                'description' => 'Ability to update advance payment data.',
                'is_active' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'application_id' => 2,
                'page' => 'Advance',
                'action' => 'Delete',
                'node' => 'advance.delete',
                'name' => 'Delete Advance',
                'description' => 'Ability to delete advance payment data.',
                'is_active' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'application_id' => 2,
                'page' => 'Verify',
                'action' => 'View',
                'node' => 'verify.view',
                'name' => 'View Verify',
                'description' => 'Ability to verify payment.',
                'is_active' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'application_id' => 2,
                'page' => 'Tax',
                'action' => 'View',
                'node' => 'tax.view',
                'name' => 'Lihat Transaksi Pajak',
                'description' => 'Kemampuan untuk melihat data transaksi pajak, termasuk detail data transaksi pajak.',
                'is_active' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'application_id' => 2,
                'page' => 'Tax',
                'action' => 'Generate',
                'node' => 'tax.generate',
                'name' => 'Generate Nota Pajak',
                'description' => 'Kemampuan untuk generate nota pajak.',
                'is_active' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'application_id' => 2,
                'page' => 'Tax',
                'action' => 'Cancel',
                'node' => 'tax.drop',
                'name' => 'Cancel Transaksi Pajak',
                'description' => 'Kemampuan untuk cancel data transaksi pajak.',
                'is_active' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'application_id' => 2,
                'page' => 'Merchant',
                'action' => 'View',
                'node' => 'merchant.view',
                'name' => 'Lihat Merchant',
                'description' => 'Kemampuan untuk melihat data merchant, termasuk detail data merchant.',
                'is_active' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'application_id' => 2,
                'page' => 'Merchant',
                'action' => 'Create',
                'node' => 'merchant.create',
                'name' => 'Buat Merchant',
                'description' => 'Kemampuan untuk membuat data merchant.',
                'is_active' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'application_id' => 2,
                'page' => 'Merchant',
                'action' => 'Update',
                'node' => 'merchant.update',
                'name' => 'Ubah Merchant',
                'description' => 'Kemampuan untuk mengubah data merchant.',
                'is_active' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'application_id' => 2,
                'page' => 'Merchant',
                'action' => 'Delete',
                'node' => 'merchant.delete',
                'name' => 'Hapus Merchant',
                'description' => 'Kemampuan untuk menghapus data merchant.',
                'is_active' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'application_id' => 2,
                'page' => 'Merchant',
                'action' => 'Restore',
                'node' => 'merchant.restore',
                'name' => 'Pulihkan Merchant',
                'description' => 'Kemampuan untuk memulihkan data merchant.',
                'is_active' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],

            // Point of Sales
            [
                'application_id' => 3,
                'page' => 'Main',
                'action' => 'View',
                'node' => 'main.view',
                'name' => 'View Main',
                'description' => 'Ability to view and create transaction in point of sales.',
                'is_active' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]
        ];

        Permission::insert($permissions);

        $permission_collection = collect(Permission::all(['node', 'id']));

        PermissionRole::insert([
            // Warehouse
            [
                'role_id' => 3,
                'permission_id' => $permission_collection->where('node', '=', 'brand.view')->first()->id,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'role_id' => 3,
                'permission_id' => $permission_collection->where('node', '=', 'brand.create')->first()->id,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'role_id' => 3,
                'permission_id' => $permission_collection->where('node', '=', 'brand.update')->first()->id,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'role_id' => 3,
                'permission_id' => $permission_collection->where('node', '=', 'brand.delete')->first()->id,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'role_id' => 3,
                'permission_id' => $permission_collection->where('node', '=', 'series.view')->first()->id,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'role_id' => 3,
                'permission_id' => $permission_collection->where('node', '=', 'series.create')->first()->id,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'role_id' => 3,
                'permission_id' => $permission_collection->where('node', '=', 'series.update')->first()->id,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'role_id' => 3,
                'permission_id' => $permission_collection->where('node', '=', 'series.delete')->first()->id,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'role_id' => 3,
                'permission_id' => $permission_collection->where('node', '=', 'attribute-group.view')->first()->id,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'role_id' => 3,
                'permission_id' => $permission_collection->where('node', '=', 'attribute-group.create')->first()->id,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'role_id' => 3,
                'permission_id' => $permission_collection->where('node', '=', 'attribute-group.update')->first()->id,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'role_id' => 3,
                'permission_id' => $permission_collection->where('node', '=', 'attribute-group.delete')->first()->id,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'role_id' => 3,
                'permission_id' => $permission_collection->where('node', '=', 'attribute.view')->first()->id,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'role_id' => 3,
                'permission_id' => $permission_collection->where('node', '=', 'attribute.create')->first()->id,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'role_id' => 3,
                'permission_id' => $permission_collection->where('node', '=', 'attribute.update')->first()->id,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'role_id' => 3,
                'permission_id' => $permission_collection->where('node', '=', 'attribute.delete')->first()->id,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'role_id' => 3,
                'permission_id' => $permission_collection->where('node', '=', 'product-need.view')->first()->id,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'role_id' => 3,
                'permission_id' => $permission_collection->where('node', '=', 'product-need.create')->first()->id,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'role_id' => 3,
                'permission_id' => $permission_collection->where('node', '=', 'product-need.update')->first()->id,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'role_id' => 3,
                'permission_id' => $permission_collection->where('node', '=', 'product-need.delete')->first()->id,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'role_id' => 3,
                'permission_id' => $permission_collection->where('node', '=', 'product-family.view')->first()->id,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'role_id' => 3,
                'permission_id' => $permission_collection->where('node', '=', 'product-family.create')->first()->id,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'role_id' => 3,
                'permission_id' => $permission_collection->where('node', '=', 'product-family.update')->first()->id,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'role_id' => 3,
                'permission_id' => $permission_collection->where('node', '=', 'product-family.delete')->first()->id,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'role_id' => 3,
                'permission_id' => $permission_collection->where('node', '=', 'product-class.view')->first()->id,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'role_id' => 3,
                'permission_id' => $permission_collection->where('node', '=', 'product-class.create')->first()->id,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'role_id' => 3,
                'permission_id' => $permission_collection->where('node', '=', 'product-class.update')->first()->id,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'role_id' => 3,
                'permission_id' => $permission_collection->where('node', '=', 'product-class.delete')->first()->id,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'role_id' => 3,
                'permission_id' => $permission_collection->where('node', '=', 'product-line.view')->first()->id,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'role_id' => 3,
                'permission_id' => $permission_collection->where('node', '=', 'product-line.create')->first()->id,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'role_id' => 3,
                'permission_id' => $permission_collection->where('node', '=', 'product-line.update')->first()->id,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'role_id' => 3,
                'permission_id' => $permission_collection->where('node', '=', 'product-line.delete')->first()->id,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'role_id' => 3,
                'permission_id' => $permission_collection->where('node', '=', 'product-type.view')->first()->id,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'role_id' => 3,
                'permission_id' => $permission_collection->where('node', '=', 'product-type.create')->first()->id,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'role_id' => 3,
                'permission_id' => $permission_collection->where('node', '=', 'product-type.update')->first()->id,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'role_id' => 3,
                'permission_id' => $permission_collection->where('node', '=', 'product-type.delete')->first()->id,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'role_id' => 3,
                'permission_id' => $permission_collection->where('node', '=', 'product-brand.view')->first()->id,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'role_id' => 3,
                'permission_id' => $permission_collection->where('node', '=', 'product-brand.create')->first()->id,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'role_id' => 3,
                'permission_id' => $permission_collection->where('node', '=', 'product-brand.update')->first()->id,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'role_id' => 3,
                'permission_id' => $permission_collection->where('node', '=', 'product-brand.delete')->first()->id,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'role_id' => 3,
                'permission_id' => $permission_collection->where('node', '=', 'product-series.view')->first()->id,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'role_id' => 3,
                'permission_id' => $permission_collection->where('node', '=', 'product-series.create')->first()->id,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'role_id' => 3,
                'permission_id' => $permission_collection->where('node', '=', 'product-series.update')->first()->id,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'role_id' => 3,
                'permission_id' => $permission_collection->where('node', '=', 'product-series.delete')->first()->id,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'role_id' => 3,
                'permission_id' => $permission_collection->where('node', '=', 'product-model.view')->first()->id,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'role_id' => 3,
                'permission_id' => $permission_collection->where('node', '=', 'product-model.create')->first()->id,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'role_id' => 3,
                'permission_id' => $permission_collection->where('node', '=', 'product-model.update')->first()->id,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'role_id' => 3,
                'permission_id' => $permission_collection->where('node', '=', 'product-model.delete')->first()->id,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'role_id' => 3,
                'permission_id' => $permission_collection->where('node', '=', 'product-unit.view')->first()->id,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'role_id' => 3,
                'permission_id' => $permission_collection->where('node', '=', 'product-unit.create')->first()->id,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'role_id' => 3,
                'permission_id' => $permission_collection->where('node', '=', 'product-unit.update')->first()->id,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'role_id' => 3,
                'permission_id' => $permission_collection->where('node', '=', 'product-unit.delete')->first()->id,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'role_id' => 3,
                'permission_id' => $permission_collection->where('node', '=', 'discount.view')->first()->id,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'role_id' => 3,
                'permission_id' => $permission_collection->where('node', '=', 'discount.create')->first()->id,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'role_id' => 3,
                'permission_id' => $permission_collection->where('node', '=', 'discount.update')->first()->id,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'role_id' => 3,
                'permission_id' => $permission_collection->where('node', '=', 'discount.delete')->first()->id,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'role_id' => 3,
                'permission_id' => $permission_collection->where('node', '=', 'reward.view')->first()->id,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'role_id' => 3,
                'permission_id' => $permission_collection->where('node', '=', 'reward.create')->first()->id,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'role_id' => 3,
                'permission_id' => $permission_collection->where('node', '=', 'reward.update')->first()->id,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'role_id' => 3,
                'permission_id' => $permission_collection->where('node', '=', 'reward.delete')->first()->id,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],

            // Finance
            [
                'role_id' => 3,
                'permission_id' => $permission_collection->where('node', '=', 'petty-cash.view')->first()->id,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'role_id' => 3,
                'permission_id' => $permission_collection->where('node', '=', 'petty-cash.create')->first()->id,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'role_id' => 3,
                'permission_id' => $permission_collection->where('node', '=', 'petty-cash.update')->first()->id,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'role_id' => 3,
                'permission_id' => $permission_collection->where('node', '=', 'petty-cash.delete')->first()->id,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'role_id' => 3,
                'permission_id' => $permission_collection->where('node', '=', 'bill.view')->first()->id,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'role_id' => 3,
                'permission_id' => $permission_collection->where('node', '=', 'invoice.view')->first()->id,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'role_id' => 3,
                'permission_id' => $permission_collection->where('node', '=', 'invoice.create')->first()->id,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'role_id' => 3,
                'permission_id' => $permission_collection->where('node', '=', 'invoice.update')->first()->id,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'role_id' => 3,
                'permission_id' => $permission_collection->where('node', '=', 'invoice.delete')->first()->id,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'role_id' => 3,
                'permission_id' => $permission_collection->where('node', '=', 'transaction.view')->first()->id,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'role_id' => 3,
                'permission_id' => $permission_collection->where('node', '=', 'transaction.pay')->first()->id,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'role_id' => 3,
                'permission_id' => $permission_collection->where('node', '=', 'advance.view')->first()->id,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'role_id' => 3,
                'permission_id' => $permission_collection->where('node', '=', 'advance.pay')->first()->id,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'role_id' => 3,
                'permission_id' => $permission_collection->where('node', '=', 'advance.update')->first()->id,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'role_id' => 3,
                'permission_id' => $permission_collection->where('node', '=', 'advance.delete')->first()->id,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'role_id' => 3,
                'permission_id' => $permission_collection->where('node', '=', 'verify.view')->first()->id,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'role_id' => 3,
                'permission_id' => $permission_collection->where('node', '=', 'tax.view')->first()->id,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'role_id' => 3,
                'permission_id' => $permission_collection->where('node', '=', 'tax.generate')->first()->id,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'role_id' => 3,
                'permission_id' => $permission_collection->where('node', '=', 'tax.drop')->first()->id,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'role_id' => 3,
                'permission_id' => $permission_collection->where('node', '=', 'merchant.view')->first()->id,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'role_id' => 3,
                'permission_id' => $permission_collection->where('node', '=', 'merchant.create')->first()->id,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'role_id' => 3,
                'permission_id' => $permission_collection->where('node', '=', 'merchant.update')->first()->id,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'role_id' => 3,
                'permission_id' => $permission_collection->where('node', '=', 'merchant.delete')->first()->id,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],

            // Waiter
            [
                'role_id' => 4,
                'permission_id' => $permission_collection->where('node', '=', 'main.view')->first()->id,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]
        ]);
    }
}
