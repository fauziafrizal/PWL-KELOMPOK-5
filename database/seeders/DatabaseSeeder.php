<?php
namespace Database\Seeders;

use App\Models\User;
use App\Models\Branch;
use App\Models\Product;
use App\Models\Inventory;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // Create Owner (Pak Jayusman)
        $owner = User::create([
            'name' => 'Pak Jayusman',
            'email' => 'owner@minimarket.local',
            'phone' => '081234567890',
            'password' => bcrypt('password'),
            'role' => 'owner',
        ]);

        // Create 5 branches
        $branches = [
            ['name' => 'Cabang Jakarta Pusat', 'city' => 'Jakarta', 'address' => 'Jl. Merdeka No. 123, Jakarta', 'phone' => '021-1234567', 'manager_name' => 'Budi Santoso'],
            ['name' => 'Cabang Bandung', 'city' => 'Bandung', 'address' => 'Jl. Raya Bandung No. 456, Bandung', 'phone' => '022-2345678', 'manager_name' => 'Siti Nurhaliza'],
            ['name' => 'Cabang Surabaya', 'city' => 'Surabaya', 'address' => 'Jl. Ahmad Yani No. 789, Surabaya', 'phone' => '031-3456789', 'manager_name' => 'Ahmad Rahmat'],
            ['name' => 'Cabang Medan', 'city' => 'Medan', 'address' => 'Jl. Gatot Subroto No. 101, Medan', 'phone' => '061-4567890', 'manager_name' => 'Rini Wijaya'],
            ['name' => 'Cabang Makassar', 'city' => 'Makassar', 'address' => 'Jl. Ratulangi No. 202, Makassar', 'phone' => '0411-5678901', 'manager_name' => 'Darmawan'],
        ];

        $branchModels = [];
        foreach ($branches as $branchData) {
            $branch = Branch::create($branchData);
            $branchModels[] = $branch;

            // Create manager for each branch
            User::create([
                'name' => $branchData['manager_name'],
                'email' => strtolower(str_replace(' ', '.', $branchData['manager_name'])) . '@minimarket.local',
                'phone' => $branchData['phone'],
                'password' => bcrypt('password'),
                'role' => 'manager',
                'branch_id' => $branch->id,
            ]);

            // Create supervisor
            User::create([
                'name' => 'Supervisor ' . $branch->name,
                'email' => 'supervisor' . $branch->id . '@minimarket.local',
                'password' => bcrypt('password'),
                'role' => 'supervisor',
                'branch_id' => $branch->id,
            ]);

            // Create 3 cashiers
            for ($i = 1; $i <= 3; $i++) {
                User::create([
                    'name' => 'Kasir ' . $i . ' - ' . $branch->name,
                    'email' => 'cashier' . $branch->id . $i . '@minimarket.local',
                    'password' => bcrypt('password'),
                    'role' => 'cashier',
                    'branch_id' => $branch->id,
                ]);
            }

            // Create 1 warehouse staff
            User::create([
                'name' => 'Warehouse - ' . $branch->name,
                'email' => 'warehouse' . $branch->id . '@minimarket.local',
                'password' => bcrypt('password'),
                'role' => 'warehouse',
                'branch_id' => $branch->id,
            ]);
        }

        // Create common products
        $products = [
            ['sku' => 'PRD001', 'name' => 'Beras Premium 5kg', 'category' => 'Makanan Pokok', 'price' => 65000, 'unit' => 'pcs', 'reorder_point' => 20],
            ['sku' => 'PRD002', 'name' => 'Gula Pasir 1kg', 'category' => 'Makanan Pokok', 'price' => 12500, 'unit' => 'pcs', 'reorder_point' => 30],
            ['sku' => 'PRD003', 'name' => 'Minyak Goreng 2L', 'category' => 'Minyak', 'price' => 28000, 'unit' => 'pcs', 'reorder_point' => 25],
            ['sku' => 'PRD004', 'name' => 'Telur Ayam 1 Kg', 'category' => 'Protein', 'price' => 22000, 'unit' => 'kg', 'reorder_point' => 15],
            ['sku' => 'PRD005', 'name' => 'Susu UHT 1L', 'category' => 'Minuman', 'price' => 8500, 'unit' => 'pcs', 'reorder_point' => 50],
            ['sku' => 'PRD006', 'name' => 'Roti Tawar 1 pack', 'category' => 'Bakery', 'price' => 15000, 'unit' => 'pcs', 'reorder_point' => 40],
            ['sku' => 'PRD007', 'name' => 'Air Mineral 1.5L', 'category' => 'Minuman', 'price' => 5000, 'unit' => 'pcs', 'reorder_point' => 100],
            ['sku' => 'PRD008', 'name' => 'Sabun Mandi 700ml', 'category' => 'Kebersihan', 'price' => 6500, 'unit' => 'pcs', 'reorder_point' => 35],
            ['sku' => 'PRD009', 'name' => 'Pasta Gigi 160g', 'category' => 'Kebersihan', 'price' => 8000, 'unit' => 'pcs', 'reorder_point' => 40],
            ['sku' => 'PRD010', 'name' => 'Kopi Instan 10pcs', 'category' => 'Minuman', 'price' => 12000, 'unit' => 'box', 'reorder_point' => 30],
        ];

        $productModels = [];
        foreach ($products as $productData) {
            $product = Product::create($productData);
            $productModels[] = $product;
        }

        // Create inventory for each branch
        foreach ($branchModels as $branch) {
            foreach ($productModels as $product) {
                Inventory::create([
                    'branch_id' => $branch->id,
                    'product_id' => $product->id,
                    'quantity' => rand(50, 200),
                    'reserved_quantity' => 0,
                ]);
            }
        }

        echo "Seeder completed successfully!\n";
        echo "Owner account: owner@minimarket.local / password\n";
        echo "Test accounts available for each branch\n";
    }
}