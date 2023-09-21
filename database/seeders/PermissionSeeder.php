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
                'page' => 'Booking',
                'action' => 'Parent',
                'node' => 'BK',
                'name' => 'Booking',
                'description' => 'Access To Booking Page',
                'is_active' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'application_id' => 1,
                'page' => 'Order',
                'action' => 'Parent',
                'node' => 'ORD',
                'name' => 'Order',
                'description' => 'Access To Order Page',
                'is_active' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'application_id' => 1,
                'page' => 'Manage Booking',
                'action' => 'View',
                'node' => 'BK',
                'name' => 'Manage Booking',
                'description' => 'Access To Manage Booking Page',
                'is_active' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'application_id' => 1,
                'page' => 'Detail Booking',
                'action' => 'Parentless',
                'node' => 'BK',
                'name' => 'Detail Booking',
                'description' => 'Access To Detail Booking Page',
                'is_active' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'application_id' => 1,
                'page' => 'Create Booking',
                'action' => 'Create',
                'node' => 'BK',
                'name' => 'Create Booking',
                'description' => 'Access To Create Booking Page',
                'is_active' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'application_id' => 1,
                'page' => 'Create Order',
                'action' => 'Create',
                'node' => 'ORD',
                'name' => 'Create Order',
                'description' => 'Access To Create Order Page',
                'is_active' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'application_id' => 1,
                'page' => 'Manage Order',
                'action' => 'View',
                'node' => 'ORD',
                'name' => 'Manage Order',
                'description' => 'Access To Manage Order Page',
                'is_active' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'application_id' => 1,
                'page' => 'Detail Order',
                'action' => 'Parentless',
                'node' => 'ORD',
                'name' => 'Detail Order',
                'description' => 'Access To Detail Order Page',
                'is_active' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'application_id' => 1,
                'page' => 'Edit Order',
                'action' => 'Edit',
                'node' => 'ORD',
                'name' => 'Edit Order',
                'description' => 'Access To Edit Order Page',
                'is_active' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'application_id' => 1,
                'page' => 'Buat SPK',
                'action' => 'Parentless',
                'node' => 'ORD',
                'name' => 'Buat SPK',
                'description' => 'Access To Buat SPK Page',
                'is_active' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'application_id' => 1,
                'page' => 'Pemotongan Stock',
                'action' => 'Parentless',
                'node' => 'ORD',
                'name' => 'Pemotongan Stock',
                'description' => 'Access To Pemotongan Stock Page',
                'is_active' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'application_id' => 1,
                'page' => 'Hasil Pemotongan',
                'action' => 'Parentless',
                'node' => 'ORD',
                'name' => 'Hasil Pemotongan',
                'description' => 'Access To Hasil Pemotongan Page',
                'is_active' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'application_id' => 1,
                'page' => 'Request Stock',
                'action' => 'Parent',
                'node' => 'RS',
                'name' => 'Request Stock',
                'description' => 'Access To Request Stock Page',
                'is_active' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'application_id' => 1,
                'page' => 'Manage Request',
                'action' => 'View',
                'node' => 'RS',
                'name' => 'Manage Request',
                'description' => 'Access To Manage Request Page',
                'is_active' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'application_id' => 1,
                'page' => 'Detail Request',
                'action' => 'Parentless',
                'node' => 'RS',
                'name' => 'Detail Request',
                'description' => 'Access To Detail Request Page',
                'is_active' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'application_id' => 1,
                'page' => 'Create Request',
                'action' => 'Create',
                'node' => 'RS',
                'name' => 'Create Request',
                'description' => 'Access To Create Request Page',
                'is_active' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'application_id' => 1,
                'page' => 'Rejected Stock',
                'action' => 'Parent',
                'node' => 'RT',
                'name' => 'Rejected Stock',
                'description' => 'Access To Rejected Stock Page',
                'is_active' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'application_id' => 1,
                'page' => 'Manage Rejected',
                'action' => 'View',
                'node' => 'RT',
                'name' => 'Manage Rejected',
                'description' => 'Access To Manage Rejected Page',
                'is_active' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'application_id' => 1,
                'page' => 'Detail Rejected',
                'action' => 'Parentless',
                'node' => 'RT',
                'name' => 'Detail Rejected',
                'description' => 'Access To Detail Rejected Page',
                'is_active' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'application_id' => 1,
                'page' => 'Inventori stock',
                'action' => 'Parentless',
                'node' => 'Empty',
                'name' => 'Inventori stock',
                'description' => 'Access To Inventori stock Page',
                'is_active' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'application_id' => 1,
                'page' => 'Task Gudang',
                'action' => 'Parent',
                'node' => 'TG',
                'name' => 'Task Gudang',
                'description' => 'Access To Task Gudang Page',
                'is_active' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'application_id' => 1,
                'page' => 'Manage Task',
                'action' => 'View',
                'node' => 'TG',
                'name' => 'Manage Task',
                'description' => 'Access To Manage Task Page',
                'is_active' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'application_id' => 1,
                'page' => 'Send Stock',
                'action' => 'Create',
                'node' => 'Parentless',
                'name' => 'Send Stock',
                'description' => 'Access To Send Stock Page',
                'is_active' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'application_id' => 1,
                'page' => 'Detail Task',
                'action' => 'View',
                'node' => 'Parentless',
                'name' => 'Detail Task',
                'description' => 'Access To Detail Task Page',
                'is_active' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'application_id' => 1,
                'page' => 'Receive Stock',
                'action' => 'Create',
                'node' => 'Parentless',
                'name' => 'Receive Stock',
                'description' => 'Access To Receive Stock Page',
                'is_active' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'application_id' => 1,
                'page' => 'Dashboard',
                'action' => 'View',
                'node' => 'Parent',
                'name' => 'Dashboard',
                'description' => 'Access to Dashboard',
                'is_active' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'application_id' => 1,
                'page' => 'Purchase Order',
                'action' => 'View',
                'node' => 'PO',
                'name' => 'Purchase Order',
                'description' => 'Access to Purchase Order',
                'is_active' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'application_id' => 1,
                'page' => 'Return Order',
                'action' => 'View',
                'node' => 'RO',
                'name' => 'Return Order',
                'description' => 'Access to Return Order',
                'is_active' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'application_id' => 1,
                'page' => 'Maintain Produk',
                'action' => 'View',
                'node' => 'MP',
                'name' => 'Maintain Produk',
                'description' => 'Access to Maintain Produk',
                'is_active' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'application_id' => 1,
                'page' => 'Maintain Supplier',
                'action' => 'View',
                'node' => 'MS',
                'name' => 'Maintain Supplier',
                'description' => 'Access to Maintain Supplier',
                'is_active' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'application_id' => 1,
                'page' => 'Maintain Cabang',
                'action' => 'View',
                'node' => 'MC',
                'name' => 'Maintain Cabang',
                'description' => 'Access to Maintain Cabang',
                'is_active' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'application_id' => 1,
                'page' => 'Maintain Role',
                'action' => 'View',
                'node' => 'MR',
                'name' => 'Maintain Role',
                'description' => 'Access to Maintain Role',
                'is_active' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'application_id' => 1,
                'page' => 'Maintain Team',
                'action' => 'View',
                'node' => 'MT',
                'name' => 'Maintain Team',
                'description' => 'Access to Maintain Team',
                'is_active' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
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
            ]
        ];

        Permission::insert($permissions);

        PermissionRole::insert([
            [
                'role_id' => 2,
                'permission_id' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'role_id' => 2,
                'permission_id' => 2,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'role_id' => 2,
                'permission_id' => 3,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'role_id' => 2,
                'permission_id' => 4,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'role_id' => 2,
                'permission_id' => 5,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'role_id' => 2,
                'permission_id' => 6,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'role_id' => 2,
                'permission_id' => 7,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'role_id' => 2,
                'permission_id' => 8,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'role_id' => 2,
                'permission_id' => 9,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'role_id' => 2,
                'permission_id' => 10,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'role_id' => 2,
                'permission_id' => 11,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'role_id' => 2,
                'permission_id' => 12,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'role_id' => 2,
                'permission_id' => 13,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'role_id' => 2,
                'permission_id' => 14,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'role_id' => 2,
                'permission_id' => 15,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'role_id' => 2,
                'permission_id' => 16,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'role_id' => 2,
                'permission_id' => 17,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'role_id' => 2,
                'permission_id' => 18,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'role_id' => 2,
                'permission_id' => 19,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'role_id' => 2,
                'permission_id' => 20,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'role_id' => 2,
                'permission_id' => 21,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'role_id' => 2,
                'permission_id' => 22,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'role_id' => 2,
                'permission_id' => 23,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'role_id' => 2,
                'permission_id' => 24,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'role_id' => 2,
                'permission_id' => 25,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'role_id' => 2,
                'permission_id' => 26,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'role_id' => 2,
                'permission_id' => 33,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'role_id' => 3,
                'permission_id' => 20,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'role_id' => 3,
                'permission_id' => 21,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'role_id' => 3,
                'permission_id' => 22,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'role_id' => 3,
                'permission_id' => 23,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'role_id' => 3,
                'permission_id' => 24,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'role_id' => 3,
                'permission_id' => 25,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'role_id' => 4,
                'permission_id' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'role_id' => 4,
                'permission_id' => 2,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'role_id' => 4,
                'permission_id' => 3,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'role_id' => 4,
                'permission_id' => 4,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'role_id' => 4,
                'permission_id' => 5,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'role_id' => 4,
                'permission_id' => 6,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'role_id' => 4,
                'permission_id' => 7,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'role_id' => 4,
                'permission_id' => 8,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'role_id' => 4,
                'permission_id' => 9,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]
        ]);
    }
}
