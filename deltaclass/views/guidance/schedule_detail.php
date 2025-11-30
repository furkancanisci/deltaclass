<?php
require_once '../../config/config.php';
require_login();
require_role(ROLE_GUIDANCE);

$page_title = "Plan Detayı";

ob_start();
?>
<div class="d-flex justify-content-between align-items-center mb-4">
    <div>
        <h2><i class="fas fa-calendar-alt me-2"></i>Ahmet Yılmaz - Haftalık Plan</h2>
        <p class="text-muted mb-0">15 - 21 Temmuz 2025</p>
    </div>
    <a href="schedules.php" class="btn btn-secondary">
        <i class="fas fa-arrow-left me-2"></i>Geri
    </a>
</div>

<div class="row">
    <div class="col-lg-8">
        <div class="card mb-4">
            <div class="card-header">
                <h5 class="mb-0"><i class="fas fa-calendar-week me-2"></i>Haftalık Görünüm</h5>
            </div>
            <div class="card-body">
                <div id="weekly-calendar"></div>
            </div>
        </div>
    </div>
    
    <div class="col-lg-4">
        <div class="card mb-4">
            <div class="card-header">
                <h5 class="mb-0"><i class="fas fa-info-circle me-2"></i>Plan Bilgileri</h5>
            </div>
            <div class="card-body">
                <p><strong>Öğrenci:</strong> Ahmet Yılmaz</p>
                <p><strong>Tür:</strong> Haftalık</p>
                <p><strong>Başlangıç:</strong> 15 Temmuz 2025</p>
                <p><strong>Bitiş:</strong> 21 Temmuz 2025</p>
                <p><strong>Durum:</strong> <span class="badge bg-success">Aktif</span></p>
                <p><strong>Oluşturan:</strong> Mehmet Korkmaz</p>
                <p><strong>Oluşturma Tarihi:</strong> 14 Temmuz 2025</p>
            </div>
        </div>
        
        <div class="card">
            <div class="card-header">
                <h5 class="mb-0"><i class="fas fa-tasks me-2"></i>Görevler</h5>
            </div>
            <div class="card-body">
                <div class="form-check mb-3">
                    <input class="form-check-input" type="checkbox" id="task1" checked>
                    <label class="form-check-label" for="task1">
                        <strong>Matematik Konu Tekrarı</strong><br>
                        <small class="text-muted">15 Temmuz, 10:00 - 12:00</small>
                    </label>
                </div>
                <div class="form-check mb-3">
                    <input class="form-check-input" type="checkbox" id="task2">
                    <label class="form-check-label" for="task2">
                        <strong>Fen Bilimleri Soru Çözümü</strong><br>
                        <small class="text-muted">16 Temmuz, 14:00 - 16:00</small>
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="task3">
                    <label class="form-check-label" for="task3">
                        <strong>Türkçe Paragraf Testi</strong><br>
                        <small class="text-muted">17 Temmuz, 09:00 - 10:30</small>
                    </label>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="card">
    <div class="card-header">
        <h5 class="mb-0"><i class="fas fa-sticky-note me-2"></i>Notlar</h5>
    </div>
    <div class="card-body">
        <p>Bu hafta TYT deneme sınavına hazırlanıyoruz. Matematik konularında eksikler var, bu yüzden daha fazla pratik yapması gerekiyor. Fen bilimlerinde iyi ilerleme var,继续保持.</p>
        <div class="d-flex justify-content-end">
            <button class="btn btn-outline-primary">
                <i class="fas fa-edit me-1"></i>Notu Düzenle
            </button>
        </div>
    </div>
</div>
<?php
$content = ob_get_clean();

// Guidance sidebar menu
ob_start();
?>
<li>
    <a href="dashboard.php">
        <i class="fas fa-home"></i>
        Ana Sayfa
    </a>
</li>
<li>
    <a href="students.php">
        <i class="fas fa-users"></i>
        Tüm Öğrenciler
    </a>
</li>
<li class="active">
    <a href="schedules.php">
        <i class="fas fa-calendar-alt"></i>
        Planlar
    </a>
</li>
<li>
    <a href="exams.php">
        <i class="fas fa-file-alt"></i>
        Sınav Sonuçları
    </a>
</li>
<li>
    <a href="appointments.php">
        <i class="fas fa-calendar-check"></i>
        Randevular
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