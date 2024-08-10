<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create an Account</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="h-screen bg-gray-50 flex items-center justify-center">

<div class="max-w-md w-full bg-white shadow-md rounded-lg p-8 space-y-6">
    <div class="text-center">
        <h2 class="text-2xl font-bold text-gray-900">Create an Account</h2>
        <p class="mt-2 text-sm text-gray-600">Fill in the details below to create your new account.</p>
    </div>

    <form action="/createAcc" method="POST" class="space-y-6">
        <div>
            <label for="userName" class="block text-sm font-medium text-gray-700">User Name</label>
            <div class="mt-1">
                <input id="userName" name="userName" type="text" required class="block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm placeholder-gray-400 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
            </div>
        </div>

        <div>
            <label for="position" class="block text-sm font-medium text-gray-700">Position</label>
            <div class="mt-1">
                <input id="position" name="position" type="text" required class="block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm placeholder-gray-400 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
            </div>
        </div>

        <div>
            <label for="gender" class="block text-sm font-medium text-gray-700">Gender</label>
            <div class="mt-1">
                <input id="gender" name="gender" type="text" required class="block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm placeholder-gray-400 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
            </div>
        </div>

        <div class="relative">
            <label for="phone" class="block text-sm font-medium text-gray-700">Phone Number</label>
            <div class="relative">
                <input
                        type="tel"
                        id="phone"
                        name="phone"
                        placeholder="Enter your phone number"
                        class="block w-full pl-20 pr-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                        value="+998"
                        onfocus="if(this.value === '+998') this.value = '';"
                        onblur="if(this.value === '') this.value = '+998';"
                />
                <span class="absolute inset-y-0 left-0 flex items-center pl-3 text-gray-500">
                +998
            </span>
            </div>
        </div>

        <div>
            <label for="email" class="block text-sm font-medium text-gray-700">Email address</label>
            <div class="mt-1">
                <input id="email" name="email" type="email" required class="block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm placeholder-gray-400 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
            </div>
        </div>

        <div>
            <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
            <div class="mt-1">
                <input id="password" name="password" type="password" required class="block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm placeholder-gray-400 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
            </div>
        </div>

        <div>
            <label for="confirm_password" class="block text-sm font-medium text-gray-700">Confirm Password</label>
            <div class="mt-1">
                <input id="confirm_password" name="confirm_password" type="password" required class="block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm placeholder-gray-400 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
            </div>
        </div>

        <div>
            <button type="submit" class="w-full flex justify-center py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                Create Account
            </button>
        </div>
    </form>

    <div class="text-center mt-6">
        <a href="/login" class="text-sm text-indigo-600 hover:text-indigo-500">Already have an account? Sign in</a>
    </div>
</div>

</body>
</html>
