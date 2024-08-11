<?php

use App\DB;
use App\Ads;
use PDO;

$post = new Ads();
$posts = $post->showPosts();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Ads</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">
<!-- Navbar -->
<nav class="bg-gray-800 p-4">
    <div class="container mx-auto flex justify-between items-center">
        <a href="/" class="text-white font-bold text-lg">Home</a>
        <a href="/createAds" class="text-white font-bold text-lg">Create New Ad</a>
    </div>
</nav>

<div class="container mx-auto p-8">
    <h1 class="text-2xl font-bold mb-6 text-gray-800">All Ads</h1>

    <!-- Filter & Search -->
    <div class="mb-6">
        <input type="text" placeholder="Search by title..." class="w-full px-3 py-2 border rounded-md focus:outline-none focus:ring focus:border-blue-300">
    </div>

    <div class="grid grid-cols-1 gap-6">
        <?php foreach ($posts as $post): ?>
            <div class="bg-white p-6 rounded-lg shadow-lg">
                <h2 class="text-xl font-bold text-gray-800 mb-2"><?php echo htmlspecialchars($post['title']); ?></h2>
                <p class="text-gray-600 mb-4"><?php echo htmlspecialchars($post['description']); ?></p>
                <div class="text-gray-700 mb-2">
                    <strong>User:</strong> <?php echo htmlspecialchars($post['user_name']); ?>
                </div>
                <div class="text-gray-700 mb-2">
                    <strong>Branch:</strong> <?php echo htmlspecialchars($post['branch_address']); ?>
                </div>
                <div class="text-gray-700 mb-2">
                    <strong>Status:</strong> <?php echo htmlspecialchars($post['status_name']); ?>
                </div>
                <div class="text-gray-700 mb-2">
                    <strong>Address:</strong> <?php echo htmlspecialchars($post['address']); ?>
                </div>
                <div class="text-gray-700 mb-2">
                    <strong>Price:</strong> $<?php echo htmlspecialchars($post['price']); ?>
                </div>
                <div class="text-gray-700 mb-2">
                    <strong>Rooms:</strong> <?php echo htmlspecialchars($post['rooms']); ?>
                </div>
                <div class="text-gray-700">
                    <strong>Created At:</strong> <?php echo htmlspecialchars($post['created_at']); ?>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>
</body>
</html>
