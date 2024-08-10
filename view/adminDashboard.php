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
    <h1 class="text-2xl font-bold mb-6 text-gray-800">Create New Ad</h1>
    <form class="bg-white p-6 rounded-lg shadow-lg" action="/dashboard">
        <div class="mb-4">
            <label for="title" class="block text-gray-700 font-bold mb-2">Ad Title</label>
            <input type="text" id="title" placeholder="Enter Ad Title" class="w-full px-3 py-2 border rounded-md focus:outline-none focus:ring focus:border-blue-300">
        </div>
        <div class="mb-4">
            <label for="description" class="block text-gray-700 font-bold mb-2">Description</label>
            <textarea id="description" placeholder="Enter Description" class="w-full px-3 py-2 border rounded-md focus:outline-none focus:ring focus:border-blue-300"></textarea>
        </div>
        <div class="mb-4">
            <label for="image" class="block text-gray-700 font-bold mb-2">Ad Image</label>
            <input type="file" id="image" class="w-full px-3 py-2 border rounded-md focus:outline-none focus:ring focus:border-blue-300">
        </div>
        <div class="mb-4">
            <label for="link" class="block text-gray-700 font-bold mb-2">Link</label>
            <input type="url" id="link" placeholder="Enter Ad Link" class="w-full px-3 py-2 border rounded-md focus:outline-none focus:ring focus:border-blue-300">
        </div>
        <div class="mb-4">
            <label for="category" class="block text-gray-700 font-bold mb-2">Category</label>
            <select id="category" class="w-full px-3 py-2 border rounded-md focus:outline-none focus:ring focus:border-blue-300">
                <option>Select Category</option>
                <option>Technology</option>
                <option>Health</option>
                <option>Business</option>
            </select>
        </div>
        <div class="mb-4">
            <label for="budget" class="block text-gray-700 font-bold mb-2">Budget</label>
            <input type="number" id="budget" placeholder="Enter Budget" class="w-full px-3 py-2 border rounded-md focus:outline-none focus:ring focus:border-blue-300">
        </div>
        <div class="flex justify-end">
            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-300">Create Ad</button>
        </div>
    </form>
</div>
</body>
</html>
