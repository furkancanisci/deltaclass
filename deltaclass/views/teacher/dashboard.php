<?php
require_once '../../config/config.php';
require_login();
require_role(ROLE_TEACHER);

$page_title = "Öğretmen Paneli";

ob_start();
?>
<div class="hero-banner">
    <h1>Hoş Geldin, <?php echo $_SESSION['user']['name']; ?>!</h1>
    <p>Atanmış öğrencilerinin sınav sonuçlarını incele ve detaylı analizler oluştur.</p>
    <a href="students.php" class="btn btn-light btn-lg">
        <i class="fas fa-users me-2"></i>Öğrenciler
    </a>
</div>

<div class="grid-container">
    <!-- Student Stats Card -->
    <div class="card">
        <div class="card-header">
            <h5 class="mb-0"><i class="fas fa-users me-2"></i>Öğrenci İstatistikleri</h5>
        </div>
        <div class="card-body">
            <div class="row text-center">
                <div class="col-md-4">
                    <div class="display-4 text-primary">12</div>
                    <p>Toplam Öğrenci</p>
                </div>
                <div class="col-md-4">
                    <div class="display-4 text-success">8</div>
                    <p>Aktif Öğrenci</p>
                </div>
                <div class="col-md-4">
                    <div class="display-4 text-warning">4</div>
                    <p>İzleme Gereken</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Performance Chart -->
    <div class="card">
        <div class="card-header">
            <h5 class="mb-0"><i class="fas fa-chart-line me-2"></i>Sınıf Performansı</h5>
        </div>
        <div class="card-body">
            <div class="chart-container">
                <canvas id="barChart"></canvas>
            </div>
        </div>
    </div>

    <!-- Recent Exams -->
    <div class="card">
        <div class="card-header">
            <h5 class="mb-0"><i class="fas fa-file-contract me-2"></i>Son Yüklenen Sınavlar</h5>
        </div>
        <div class="card-body">
            <div class="d-flex justify-content-between mb-3">
                <div>
                    <h6 class="mb-0">TYT Deneme Sınavı #5</h6>
                    <small class="text-muted">Ahmet Yılmaz</small>
                </div>
                <span class="badge bg-success">Yüksek Başarı</span>
            </div>
            <div class="d-flex justify-content-between mb-3">
                <div>
                    <h6 class="mb-0">AYT Matematik</h6>
                    <small class="text-muted">Mehmet Kaya</small>
                </div>
                <span class="badge bg-warning">Orta Seviye</span>
            </div>
            <div class="d-flex justify-content-between">
                <div>
                    <h6 class="mb-0">TYT Fen Bilimleri</h6>
                    <small class="text-muted">Ayşe Demir</small>
                </div>
                <span class="badge bg-danger">Düşük Başarı</span>
            </div>
        </div>
    </div>
</div>

<!-- Detailed Analysis Section -->
<div class="row">
    <div class="col-lg-8">
        <div class="card">
            <div class="card-header">
                <h5 class="mb-0"><i class="fas fa-chart-pie me-2"></i>Ders Bazlı Başarı Analizi</h5>
            </div>
            <div class="card-body">
                <div class="chart-container">
                    <canvas id="pieChart"></canvas>
                </div>
            </div>
        </div>
    </div>
    
    <div class="col-lg-4">
        <div class="right-sidebar">
            <div class="sidebar-section">
                <h5><i class="fas fa-comments me-2"></i>Mesajlar</h5>
                <div class="message-item">
                    <div class="message-sender">Ahmet Yılmaz</div>
                    <div class="message-preview">TYT matematik soruları hakkında...</div>
                    <div class="activity-time">10 dakika önce</div>
                </div>
                <div class="message-item">
                    <div class="message-sender">Ayşe Demir</div>
                    <div class="message-preview">Konu tekrar önerisi...</div>
                    <div class="activity-time">2 saat önce</div>
                </div>
            </div>
            
            <div class="sidebar-section">
                <h5><i class="fas fa-history me-2"></i>Son Aktiviteler</h5>
                <div class="activity-item">
                    <div class="fw-bold">Yeni sınav sonucu eklendi</div>
                    <div class="activity-time">1 saat önce</div>
                </div>
                <div class="activity-item">
                    <div class="fw-bold">Geri bildirim gönderildi</div>
                    <div class="activity-time">3 saat önce</div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
$content = ob_get_clean();

// Teacher sidebar menu
ob_start();
?>
<li class="active">
    <a href="dashboard.php">
        <i class="fas fa-home"></i>
        Ana Sayfa
    </a>
</li>
<li>
    <a href="students.php">
        <i class="fas fa-users"></i>
        Öğrenciler
    </a>
</li>
<li>
    <a href="exams.php">
        <i class="fas fa-file-alt"></i>
        Sınav Sonuçları
    </a>
</li>
<li>
    <a href="analytics.php">
        <i class="fas fa-chart-bar"></i>
        Analizler
    </a>
</li>
<li>
    <a href="messages.php">
        <i class="fas fa-comments"></i>
        Mesajlar
    </a>
</li>
<?php
$sidebar_menu = ob_get_clean();

include '../layout/base.php';
?>