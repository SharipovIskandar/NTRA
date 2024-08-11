<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Posts</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="bg-gray-100">
<!-- Navbar -->
<nav class="bg-blue-500 p-4">
    <div class="max-w-7xl mx-auto flex justify-between items-center">
        <a href="#" class="text-white text-xl font-bold">All Posts</a>
        <div>
            <a href="/" class="text-white px-4">Home</a>
            <a href="/createAds" class="text-white px-4">Create Post</a>
            <a href="" class="text-white px-4">About</a>
        </div>
    </div>
</nav>

<!-- Search and Filter -->
<div class="max-w-7xl mx-auto mt-6">
    <div class="flex justify-between items-center mb-6">
        <!-- Search Bar -->
        <div class="w-full md:w-1/2">
            <input type="text" placeholder="Search posts..." class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
        </div>
        <!-- Filters -->
        <div class="w-full md:w-1/2 flex justify-end">
            <select class="block appearance-none w-full bg-white border border-gray-400 hover:border-gray-500 px-4 py-2 pr-8 rounded shadow leading-tight focus:outline-none focus:shadow-outline">
                <option value="">Filter by Category</option>
                <option value="electronics">Electronics</option>
                <option value="vehicles">Vehicles</option>
                <option value="real-estate">Real Estate</option>
                <option value="services">Services</option>
                <option value="jobs">Jobs</option>
                <option value="others">Others</option>
            </select>
        </div>
    </div>

    <!-- Posts List -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        <!-- Post 1 -->
        <div class="bg-white p-4 rounded-lg shadow-lg">
            <img src="https://via.placeholder.com/150" alt="Post Image" class="w-full h-48 object-cover rounded-t-lg">
            <div class="p-4">
                <h2 class="text-xl font-bold mb-2">Post Title 1</h2>
                <p class="text-gray-700">Short description of the post goes here...</p>
                <div class="mt-4 flex justify-between items-center">
                    <span class="text-gray-900 font-bold">$100</span>
                    <a href="#" class="text-blue-500 hover:underline">View Details</a>
                </div>
            </div>
        </div>

        <!-- Post 2 -->
        <div class="bg-white p-4 rounded-lg shadow-lg">
            <img src="https://via.placeholder.com/150" alt="Post Image" class="w-full h-48 object-cover rounded-t-lg">
            <div class="p-4">
                <h2 class="text-xl font-bold mb-2">Post Title 2</h2>
                <p class="text-gray-700">Short description of the post goes here...</p>
                <div class="mt-4 flex justify-between items-center">
                    <span class="text-gray-900 font-bold">$250</span>
                    <a href="#" class="text-blue-500 hover:underline">View Details</a>
                </div>
            </div>
        </div>

        <!-- Post 3 -->
        <div class="bg-white p-4 rounded-lg shadow-lg">
            <img src="https://via.placeholder.com/150" alt="Post Image" class="w-full h-48 object-cover rounded-t-lg">
            <div class="p-4">
                <h2 class="text-xl font-bold mb-2">Post Title 3</h2>
                <p class="text-gray-700">Short description of the post goes here...</p>
                <div class="mt-4 flex justify-between items-center">
                    <span class="text-gray-900 font-bold">$400</span>
                    <a href="#" class="text-blue-500 hover:underline">View Details</a>
                </div>
            </div>
        </div>

        <!-- Add more posts here -->
    </div>
</div>
</body>

</html>
