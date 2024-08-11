<?php

use App\DB;

try {
    $pdo = DB::connect();

    $stmt_branch = $pdo->query("SELECT * FROM branch");
    $branches = $stmt_branch->fetchAll(PDO::FETCH_ASSOC);

    $stmt_status = $pdo->query("SELECT * FROM status");
    $statuses = $stmt_status->fetchAll(PDO::FETCH_ASSOC);

} catch (PDOException $e) {
    echo "Connection Error: " . $e->getMessage();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add New Ad</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">
<div class="container mx-auto p-8">
    <!-- Link with "<-" symbol -->
    <a href="/adsDashboard" class="bg-blue-500 text-white font-bold py-2 px-4 rounded-full hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-400"><-</a>
    <h1 class="text-2xl font-bold mb-6 text-gray-800">Create New Ad</h1>
    <form class="bg-white p-6 rounded-lg shadow-lg" action="/createAdsPage" method="post">


    <div class="container mx-auto mt-8">
            <h1 class="text-2xl font-bold mb-4">Branch</h1>
            <table class="min-w-full bg-white border border-gray-300">
                <thead class="bg-gray-200">
                <tr>
                    <th class="py-2 px-4 border-b">ID</th>
                    <th class="py-2 px-4 border-b">Name</th>
                    <th class="py-2 px-4 border-b">Address</th>
                    <th class="py-2 px-4 border-b">Created At</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($branches as $branch): ?>
                    <tr class="hover:bg-gray-100">
                        <td class="py-2 px-4 border-b"><?php echo htmlspecialchars($branch['id']); ?></td>
                        <td class="py-2 px-4 border-b"><?php echo htmlspecialchars($branch['name']); ?></td>
                        <td class="py-2 px-4 border-b"><?php echo htmlspecialchars($branch['address']); ?></td>
                        <td class="py-2 px-4 border-b"><?php echo htmlspecialchars($branch['created_at']); ?></td>
                    </tr>
                <?php endforeach; ?>
                </tbody>
            </table>

            <h1 class="text-2xl font-bold mt-8 mb-4">Status</h1>
            <table class="min-w-full bg-white border border-gray-300">
                <thead class="bg-gray-200">
                <tr>
                    <th class="py-2 px-4 border-b">ID</th>
                    <th class="py-2 px-4 border-b">Name</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($statuses as $status): ?>
                    <tr class="hover:bg-gray-100">
                        <td class="py-2 px-4 border-b"><?php echo htmlspecialchars($status['id']); ?></td>
                        <td class="py-2 px-4 border-b"><?php echo htmlspecialchars($status['name']); ?></td>
                    </tr>
                <?php endforeach; ?>
                </tbody>
            </table>
        </div>

        <div class="mb-4">
            <label for="title" class="block text-gray-700 font-bold mb-2">Ad Title</label>
            <input type="text" name="title" id="title" placeholder="Enter Ad Title" class="w-full px-3 py-2 border rounded-md focus:outline-none focus:ring focus:border-blue-300">
        </div>
        <div class="mb-4">
            <label for="description" class="block text-gray-700 font-bold mb-2">Description</label>
            <textarea id="description" name="description" placeholder="Enter Description" class="w-full px-3 py-2 border rounded-md focus:outline-none focus:ring focus:border-blue-300"></textarea>
        </div>


        <div class="mb-4">
            <label for="image" class="block text-gray-700 font-bold mb-2">Ad Image</label>
            <input type="file" id="image" class="w-full px-3 py-2 border rounded-md focus:outline-none focus:ring focus:border-blue-300">
        </div>

        <div class="mb-4">
            <label for="user_id" class="block text-gray-700 font-bold mb-2">User Id</label>
            <input type="number" name="userId" id="user_id" placeholder="Rooms Count" class="w-full px-3 py-2 border rounded-md focus:outline-none focus:ring focus:border-blue-300">
        </div>

        <div class="mb-4">
            <label for="branch_id" class="block text-gray-700 font-bold mb-2">Branch Id</label>
            <input type="number" name="branchId" id="branch_id" placeholder="Rooms Count" class="w-full px-3 py-2 border rounded-md focus:outline-none focus:ring focus:border-blue-300">
        </div>

        <div class="mb-4">
            <label for="status_id" class="block text-gray-700 font-bold mb-2">Set Status</label>
            <input type="number" name="statusId" id="status_id" placeholder="Rooms Count" class="w-full px-3 py-2 border rounded-md focus:outline-none focus:ring focus:border-blue-300">
        </div>

        <div class="mb-4">
            <label for="address" class="block text-gray-700 text-sm font-medium mb-2">Address</label>
            <input id="address" name="address" type="text" placeholder="Enter the Address"
                   class="w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-indigo-500">
        </div>


        <div class="mb-4">
            <label for="rooms" class="block text-gray-700 font-bold mb-2">Rooms</label>
            <input type="number" name="rooms" id="rooms" placeholder="Rooms Count" class="w-full px-3 py-2 border rounded-md focus:outline-none focus:ring focus:border-blue-300">
        </div>

        <div class="mb-4">
            <label for="prince" class="block text-gray-700 font-bold mb-2">Price at $</label>
            <input type="number" name="price" id="prince" placeholder="Enter Price" class="w-full px-3 py-2 border rounded-md focus:outline-none focus:ring focus:border-blue-300">
        </div>
        <div class="flex justify-end">
            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-300">Create Ad</button>
        </div>
    </form>
</div>
</body>
</html>
