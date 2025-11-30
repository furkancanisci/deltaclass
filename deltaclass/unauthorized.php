<?php
require_once '../config/config.php';
?>

<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo SITE_NAME; ?> - Yetkisiz Erişim</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        body {
            background: linear-gradient(135deg, #1e3c72, #2a5298);
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .error-card {
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
            overflow: hidden;
            background: rgba(255, 255, 255, 0.95);
        }
        .error-header {
            background: linear-gradient(to right, #e74c3c, #c0392b);
            color: white;
            padding: 20px;
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 col-lg-6">
                <div class="error-card">
                    <div class="error-header">
                        <div class="logo">
                            <i class="fas fa-exclamation-triangle fa-3x"></i>
                        </div>
                        <h2>Yetkisiz Erişim</h2>
                        <p>Bu sayfaya erişim izniniz bulunmamaktadır.</p>
                    </div>
                    <div class="card-body p-4 text-center">
                        <div class="alert alert-danger">
                            <h5><i class="fas fa-ban me-2"></i>Erişim Reddedildi</h5>
                            <p>Bu sayfayı görüntülemek için gerekli yetkilere sahip değilsiniz.</p>
                        </div>
                        
                        <a href="../index.php" class="btn btn-primary">
                            <i class="fas fa-home me-2"></i>Ana Sayfaya Dön
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>