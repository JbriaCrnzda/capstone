<?php
session_start(); // Start the session

// Debugging: Check session variables
// var_dump($_SESSION); 
// exit();

// Check if the user is logged in and is an admin
if (!isset($_SESSION['user_id']) || $_SESSION['user_role'] !== 'admin') {
    header('Location: index.php'); // Redirect to homepage
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin Dashboard</title>
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 p-6">
    <nav class="bg-black shadow-md top-0 left-0 w-full z-50">  
        <div class="container mx-auto px-4 ">
            <div class="flex justify-between items-center py-2 ">
              <div class="flex-1 flex justify-start">
                <a href="index.php" class="text-white">Home</a>
              </div>
              <div class="flex-1 flex justify-center">
                <img src="logo1.png" alt="Logo" width="200px" class="h-20">
              </div>
              <div class="flex-1 flex justify-end">
                <a href="logout.php" class="border-2 border-white bg-black text-white py-2 px-4 rounded">Logout</a>
              </div>
            </div>
        </div>
    </nav>
    
    <section>
        <div>
            <h1 class="text-3xl font-bold text-center py-6">WELCOME TO ADMIN DASHBOARD</h1>
        </div>
    </section>

    <div class="container mx-auto">
        <h2 class="text-3xl font-bold mb-4">Order Details</h2>
        <div class="overflow-x-auto">
            <table class="min-w-full bg-white border border-gray-200">
                <thead class="bg-gray-50">
                    <tr>
                        <th class="py-2 px-4 border-b border-gray-200 text-left text-gray-600 font-bold">Name</th>
                        <th class="py-2 px-4 border-b border-gray-200 text-left text-gray-600 font-bold">Address</th>
                        <th class="py-2 px-4 border-b border-gray-200 text-left text-gray-600 font-bold">Contact</th>
                        <th class="py-2 px-4 border-b border-gray-200 text-left text-gray-600 font-bold">Email address</th>
                        <th class="py-2 px-4 border-b border-gray-200 text-left text-gray-600 font-bold">Item</th>
                        <th class="py-2 px-4 border-b border-gray-200 text-left text-gray-600 font-bold">Size</th>
                        <th class="py-2 px-4 border-b border-gray-200 text-left text-gray-600 font-bold">Image Design</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="py-2 px-4 border-b border-gray-200">John Doe</td>
                        <td class="py-2 px-4 border-b border-gray-200">1234 Main St, City, Country</td>
                        <td class="py-2 px-4 border-b border-gray-200">123-456-7890</td>
                        <td class="py-2 px-4 border-b border-gray-200">john@gmail.com</td>
                        <td class="py-2 px-4 border-b border-gray-200">Basketball Jersey</td>
                        <td class="py-2 px-4 border-b border-gray-200">L</td>
                        <td class="py-2 px-4 border-b border-gray-200">
                            <img src="https://ph-test-11.slatic.net/p/c768b11b5e4babdbf522f336fbc6c56e.jpg" alt="Basketball Jersey" class="w-16 h-16 object-cover">
                        </td>
                    </tr>
                    <!-- Add more rows as needed -->
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>
