<!DOCTYPE html>
<html lang="en">
<head>
    
    <meta charset="UTF-8"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel - Manage Packages</title>
    <!-- Include your CSS file -->
    <link rel="stylesheet" href="your-custom-css-file.css">
</head>
<body>

    <!-- Add your admin panel HTML structure here -->
    <h1>Admin Panel - Manage Packages</h1>

    <!-- Form for adding/updating packages -->
    <form method="post" enctype="multipart/form-data">
        <input type="hidden" name="package_id" value="<?php if(isset($package['id'])) echo $package['id']; ?>">
        <input type="text" name="name" placeholder="Package Name" value="<?php if(isset($package['name'])) echo $package['name']; ?>" required>
        <input type="text" name="cost" placeholder="Package Cost" value="<?php if(isset($package['cost'])) echo $package['cost']; ?>" required>
        <input type="text" name="description" placeholder="Package description" value="<?php if(isset($package['description'])) echo $package['description']; ?>" required>
        <!-- Add input field for image upload if needed -->
        <input type="file" name="image" required>

        <button type="submit" name="send">Submit</button>
    </form>

    <!-- Table to display existing packages -->
    <table>
        <tr>
            <th>Package Name</th>
            <th>Package Cost</th>
            <th>Package Description</th>
            <th>Action</th>
        </tr>
        
        <?php
         foreach ($packages as $pack): ?>
        <tr>
            
        <td><?= $pack['name'] ?></td>
        <td><?= $pack['cost'] ?></td>
        <td><?= $pack['description'] ?></td>
            
            <td>
                

                <!-- Form for deleting a package -->
                <form method="post">
                    <input type="hidden" name="package_id" value="<?= $pack['id'] ?>">
                    <button type="submit" name="del">Delete</button>
                </form>
                <!-- Form for updating a package -->
                <form method="post">
                    <input type="hidden" name="package_id" value="<?= $pack['id'] ?>">
                    <input type="hidden" name="name" value="<?= $pack['name'] ?>">
                    <input type="hidden" name="cost" value="<?= $pack['cost'] ?>">
                    <input type="hidden" name="description" value="<?= $pack['description'] ?>">
                    <!-- <input type="hidden" name="image" value="<?= $pack['image'] ?>"> -->
                    <button type="submit" name="submit">Update</button>
                </form>
            </td>
        </tr>
        <?php endforeach; ?>
    </table>

    <!-- Include your footer or any additional HTML content as needed -->

</body>
</html>


<!DOCTYPE html>
<html lang="en">
<head>
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 20px;
        }

        h1 {
            text-align: center;
            margin-bottom: 20px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        table th, table td {
            padding: 10px;
            border: 1px solid #ddd;
        }

        table th {
            background-color: #f2f2f2;
            font-weight: bold;
            text-align: left;
        }

        table tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        table tr:hover {
            background-color: #f2f2f2;
        }

        form {
            display: inline;
        }
    </style>
</head>

</html>
