<?php
require_once '../../config/config.php';
require_login();
require_role(ROLE_STUDENT);

$page_title = "Öğrenci Paneli";
$additional_css = ['../../assets/css/calendar.css'];
$additional_js = ['../../assets/js/calendar.js'];

// Get student's exams
$student_exams = get_student_exams($_SESSION['user']['id']);

ob_start();
?>
<div class="hero-banner">
    <h1>Hoş Geldin, !</h1>
    <p>Kişisel sınav planlamalarını yönet, deneme sonuçlarını incele ve gelişimini takip et.</p>
    <a href="schedule.php" class="btn btn-light btn-lg">
        <i class="fas fa-calendar-plus me-2"></i>Plan Oluştur
    </a>
</div>

<div class="grid-container">
    <!-- Exam Stats Card -->
    <div class="card">
        <div class="card-header">
            <h5 class="mb-0"><i class="fas fa-chart-line me-2"></i>Performans Özeti</h5>
        </div>
        <div class="card-body">
            <div class="chart-container">
                <canvas id="barChart"></canvas>
            </div>
        </div>
    </div>

    <!-- Correct/Wrong Distribution -->
    <div class="card">
        <div class="card-header">
            <h5 class="mb-0"><i class="fas fa-percentage me-2"></i>Doğru/Yanlış Dağılımı</h5>
        </div>
        <div class="card-body">
            <div class="chart-container">
                <canvas id="pieChart"></canvas>
            </div>
        </div>
    </div>

    <!-- Learning Progress -->
    <div class="card">
        <div class="card-header">
            <h5 class="mb-0"><i class="fas fa-book-open me-2"></i>Konu Dağılımı</h5>
        </div>
        <div class="card-body">
            <div class="progress-card">
                <div class="progress-value">78%</div>
                <div class="progress-title">Matematik Tamamlama</div>
                <div class="progress mt-3" style="height: 10px;">
                    <div class="progress-bar bg-primary" role="progressbar" style="width: 78%"></div>
                </div>
            </div>
            <div class="progress-card">
                <div class="progress-value">65%</div>
                <div class="progress-title">Türkçe Tamamlama</div>
                <div class="progress mt-3" style="height: 10px;">
                    <div class="progress-bar bg-success" role="progressbar" style="width: 65%"></div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Schedule Section -->
<div class="row">
    <div class="col-lg-8">
        <div class="calendar-container">
            <div class="calendar-header">
                <h5><i class="fas fa-calendar-alt me-2"></i>Haftalık Plan</h5>
                <div>
                    <button class="btn btn-sm btn-outline-primary me-2">
                        <i class="fas fa-chevron-left"></i>
                    </button>
                    <button class="btn btn-sm btn-outline-primary">
                        <i class="fas fa-chevron-right"></i>
                    </button>
                </div>
            </div>
            <div id="weekly-calendar"></div>
        </div>
    </div>
    
    <div class="col-lg-4">
        <div class="right-sidebar">
            <div class="sidebar-section">
                <h5><i class="fas fa-tasks me-2"></i>Yaklaşan Sınavlar</h5>
                <div class="event-item">
                    <div class="fw-bold">TYT Deneme Sınavı #5</div>
                    <div class="event-time">Yarın, 09:30</div>
                </div>
                <div class="event-item">
                    <div class="fw-bold">AYT Matematik Konu Tekrarı</div>
                    <div class="event-time">15 Temmuz, 14:00</div>
                </div>
            </div>
            
            <div class="sidebar-section">
                <h5><i class="fas fa-history me-2"></i>Son Aktiviteler</h5>
                <div class="activity-item">
                    <div class="fw-bold">TYT Deneme Sonuçları Girildi</div>
                    <div class="activity-time">2 saat önce</div>
                </div>
                <div class="activity-item">
                    <div class="fw-bold">Haftalık Plan Güncellendi</div>
                    <div class="activity-time">1 gün önce</div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
$content = ob_get_clean();

// Student sidebar menu
ob_start();
?>
<li class="active">
    <a href="dashboard.php">
        <i class="fas fa-home"></i>
        Ana Sayfa
    </a>
</li>
<li>
    <a href="exams.php">
        <i class="fas fa-file-alt"></i>
        Deneme Sınavları
    </a>
</li>
<li>
    <a href="schedule.php">
        <i class="fas fa-calendar-alt"></i>
        Çalışma Planı
    </a>
</li>
<li>
    <a href="statistics.php">
        <i class="fas fa-chart-bar"></i>
        İstatistikler
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