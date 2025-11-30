<?php
require_once '../../config/config.php';
require_login();
require_role(ROLE_STUDENT);

$page_title = "Çalışma Planı";

ob_start();
?>
<div class="d-flex justify-content-between align-items-center mb-4">
    <h2><i class="fas fa-calendar-alt me-2"></i>Çalışma Planı</h2>
    <div>
        <button class="btn btn-outline-primary me-2">
            <i class="fas fa-calendar-day me-1"></i> Günlük
        </button>
        <button class="btn btn-primary me-2">
            <i class="fas fa-calendar-week me-1"></i> Haftalık
        </button>
        <button class="btn btn-outline-primary">
            <i class="fas fa-calendar me-1"></i> Aylık
        </button>
    </div>
</div>

<div class="card">
    <div class="card-body">
        <div id="weekly-calendar"></div>
    </div>
</div>

<div class="mt-4">
    <h4><i class="fas fa-tasks me-2"></i>Planlanmış Görevler</h4>
    <div class="card">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>Görev</th>
                            <th>Ders</th>
                            <th>Tarih</th>
                            <th>Saat</th>
                            <th>Durum</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Matematik Konu Tekrarı</td>
                            <td>Matematik</td>
                            <td>15 Temmuz 2025</td>
                            <td>10:00 - 12:00</td>
                            <td><span class="badge bg-success">Tamamlandı</span></td>
                        </tr>
                        <tr>
                            <td>Fen Bilimleri Soru Çözümü</td>
                            <td>Fen Bilimleri</td>
                            <td>16 Temmuz 2025</td>
                            <td>14:00 - 16:00</td>
                            <td><span class="badge bg-warning">Devam Ediyor</span></td>
                        </tr>
                        <tr>
                            <td>Türkçe Paragraf Testi</td>
                            <td>Türkçe</td>
                            <td>17 Temmuz 2025</td>
                            <td>09:00 - 10:30</td>
                            <td><span class="badge bg-secondary">Planlandı</span></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<?php
$content = ob_get_clean();

// Student sidebar menu
ob_start();
?>
<li>
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
<li class="active">
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