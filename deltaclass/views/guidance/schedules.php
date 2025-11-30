<?php
require_once '../../config/config.php';
require_login();
require_role(ROLE_GUIDANCE);

$page_title = "Planlar";

ob_start();
?>
<div class="d-flex justify-content-between align-items-center mb-4">
    <h2><i class="fas fa-calendar-alt me-2"></i>Planlar</h2>
    <div>
        <button class="btn btn-outline-primary me-2">
            <i class="fas fa-filter me-1"></i> Filtrele
        </button>
        <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#createScheduleModal">
            <i class="fas fa-plus me-1"></i> Yeni Plan
        </button>
    </div>
</div>

<ul class="nav nav-tabs mb-4">
    <li class="nav-item">
        <a class="nav-link active" href="#"><i class="fas fa-calendar-day me-1"></i> Günlük</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="#"><i class="fas fa-calendar-week me-1"></i> Haftalık</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="#"><i class="fas fa-calendar me-1"></i> Aylık</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="#"><i class="fas fa-calendar-year me-1"></i> Yıllık</a>
    </li>
</ul>

<div class="card">
    <div class="card-body">
        <div id="weekly-calendar"></div>
    </div>
</div>

<div class="mt-4">
    <h4><i class="fas fa-list me-2"></i>Tüm Planlar</h4>
    <div class="card">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>Öğrenci</th>
                            <th>Plan Türü</th>
                            <th>Başlangıç</th>
                            <th>Bitiş</th>
                            <th>Durum</th>
                            <th>İşlemler</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Ahmet Yılmaz</td>
                            <td>Haftalık</td>
                            <td>15 Temmuz 2025</td>
                            <td>21 Temmuz 2025</td>
                            <td><span class="badge bg-success">Aktif</span></td>
                            <td>
                                <a href="schedule_detail.php?id=1" class="btn btn-sm btn-outline-primary">
                                    <i class="fas fa-eye me-1"></i>Görüntüle
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td>Ayşe Demir</td>
                            <td>Aylık</td>
                            <td>1 Ağustos 2025</td>
                            <td>31 Ağustos 2025</td>
                            <td><span class="badge bg-warning">Devam Ediyor</span></td>
                            <td>
                                <a href="schedule_detail.php?id=2" class="btn btn-sm btn-outline-primary">
                                    <i class="fas fa-eye me-1"></i>Görüntüle
                                </a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<!-- Create Schedule Modal -->
<div class="modal fade" id="createScheduleModal" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title"><i class="fas fa-calendar-plus me-2"></i>Yeni Plan Oluştur</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="mb-3">
                        <label class="form-label">Öğrenci</label>
                        <select class="form-select">
                            <option>Ahmet Yılmaz</option>
                            <option>Ayşe Demir</option>
                            <option>Mehmet Kaya</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Plan Türü</label>
                        <select class="form-select">
                            <option>Haftalık</option>
                            <option>Aylık</option>
                            <option>Yıllık</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Başlangıç Tarihi</label>
                        <input type="date" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Bitiş Tarihi</label>
                        <input type="date" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Açıklama</label>
                        <textarea class="form-control" rows="3" placeholder="Plan açıklaması..."></textarea>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">İptal</button>
                <button type="button" class="btn btn-primary">Oluştur</button>
            </div>
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