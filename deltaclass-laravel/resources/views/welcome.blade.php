<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Deltaclass - TYT AYT Sınav Planlama</title>
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
        .welcome-card {
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
            overflow: hidden;
            background: rgba(255, 255, 255, 0.95);
        }
        .welcome-header {
            background: linear-gradient(to right, #1e3c72, #2a5298);
            color: white;
            padding: 30px;
            text-align: center;
        }
        .logo {
            font-size: 3rem;
            margin-bottom: 20px;
        }
        .feature-icon {
            font-size: 2rem;
            color: #1e3c72;
            margin-bottom: 15px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="welcome-card">
                    <div class="welcome-header">
                        <div class="logo">
                            <i class="fas fa-graduation-cap"></i>
                        </div>
                        <h1>Deltaclass</h1>
                        <p class="lead">TYT ve AYT Sınav Planlama ve Programlama Sistemi</p>
                    </div>
                    <div class="card-body p-5">
                        <div class="row text-center">
                            <div class="col-md-4 mb-4">
                                <div class="feature-icon">
                                    <i class="fas fa-user-graduate"></i>
                                </div>
                                <h4>Öğrenciler</h4>
                                <p class="text-muted">Kişisel sınav planlamalarını yönetin, deneme sonuçlarını inceleyin ve gelişiminizi takip edin.</p>
                            </div>
                            <div class="col-md-4 mb-4">
                                <div class="feature-icon">
                                    <i class="fas fa-chalkboard-teacher"></i>
                                </div>
                                <h4>Öğretmenler</h4>
                                <p class="text-muted">Atanmış öğrencilerinizin sınav sonuçlarını görüntüleyin ve detaylı analizler oluşturun.</p>
                            </div>
                            <div class="col-md-4 mb-4">
                                <div class="feature-icon">
                                    <i class="fas fa-user-cog"></i>
                                </div>
                                <h4>Rehberlikçiler</h4>
                                <p class="text-muted">Öğrenciler için haftalık, aylık ve yıllık planlar oluşturun, randevuları yönetin.</p>
                            </div>
                        </div>
                        
                        <div class="text-center mt-5">
                            <a href="{{ route('login') }}" class="btn btn-primary btn-lg">
                                <i class="fas fa-sign-in-alt me-2"></i>Giriş Yap
                            </a>
                        </div>
                        
                        <div class="text-center mt-4">
                            <small class="text-muted">
                                <i class="fas fa-info-circle me-1"></i>
                                Demo kullanıcılar:<br>
                                Öğrenci: ahmet@example.com / 123456<br>
                                Öğretmen: ayse@example.com / 123456<br>
                                Rehberlikçi: mehmet@example.com / 123456
                            </small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>