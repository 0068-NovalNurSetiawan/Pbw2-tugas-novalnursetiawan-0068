<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User List</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            margin: 0;
            padding: 0;
            height: 100vh;
            overflow: hidden;
            position: relative;
        }

        /* Video Background */
        .video-background {
            position: fixed; 
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
            z-index: -1; 
        }

        .container {
            position: relative;
            z-index: 1; 
        }

        .table {
            margin-top: 20px;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .table-hover tbody tr:hover {
            background-color: #f1f1f1;
        }
        .btn-sm {
            margin-right: 5px;
        }
        .btn-primary {
            background-color: #007bff;
        }
        .btn-warning {
            background-color: #ffc107;
        }
        .btn-danger {
            background-color: #dc3545;
        }

        
        .blur-content {
            background-color: rgba(255, 255, 255, 0.8);
            padding: 20px;
            border-radius: 10px;
        }
    </style>
</head>
<body>

    <!-- Video background -->
    <video class="video-background" autoplay loop muted>
        <source src="video/langit.mp4" type="video/mp4">
    </video>

    <!-- Konten -->
    <div class="container mt-5">
        <div class="blur-content">
            <h1 class="mb-4">User List</h1>
            <table class="table table-hover table-striped">
                <thead class="table-dark">
                    <tr>
                        <th>ID</th>
                        <th>Nama</th>
                        <th>Email</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($users as $user) : ?>
                        <tr>
                            <td><?php echo $user['id']; ?></td>
                            <td><?php echo $user['name']; ?></td>
                            <td><?php echo $user['email']; ?></td>
                            <td>
                                <a href="index.php?action=detail&id=<?php echo $user['id']; ?>" class="btn btn-primary btn-sm">Detail</a>
                                <a href="index.php?action=edit&id=<?php echo $user['id']; ?>" class="btn btn-warning btn-sm">Edit</a>
                                <a href="index.php?action=delete&id=<?php echo $user['id']; ?>" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this user?')">Hapus</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
