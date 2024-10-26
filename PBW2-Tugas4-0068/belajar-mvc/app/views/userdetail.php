<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Detail</title>
    <!--  Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
     <style>
        body {
            font-family: 'Roboto', sans-serif;
            background-color: #f8f9fa;
        }
        .video-background {
            position: fixed; 
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
            z-index: -1; 
        }
        .card {
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        .card-header {
            background-color: #007bff;
            color: white;
            border-top-left-radius: 10px;
            border-top-right-radius: 10px;
        }
        .btn-primary {
            background-color: #007bff;
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
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h4 class="mb-0">User Detail</h4>
                    </div>
                    <div class="card-body">
                        <p><strong>ID:</strong> <?php echo $user['id']; ?></p>
                        <p><strong>Name:</strong> <?php echo $user['name']; ?></p>
                        <p><strong>Email:</strong> <?php echo $user['email']; ?></p>
                        <a href="index.php" class="btn btn-primary">Kembali Ke Halaman Utama</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
