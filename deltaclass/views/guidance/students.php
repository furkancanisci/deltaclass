<?php
require_once '../../config/config.php';
require_login();
require_role(ROLE_GUIDANCE);

$page_title = "Tüm Öğrenciler";

ob_start();
?>
<div class="d-flex justify-content-between align-items-center mb-4">
    <h2><i class="fas fa-users me-2"></i>Tüm Öğrenciler</h2>
    <div>
        <button class="btn btn-outline-primary me-2">
            <i class="fas fa-filter me-1"></i> Filtrele
        </button>
        <button class="btn btn-primary">
            <i class="fas fa-plus me-1"></i> Yeni Öğrenci
        </button>
    </div>
</div>

<div class="card">
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>Öğrenci</th>
                        <th>Sınıf</th>
                        <th>Hedef Bölüm</th>
                        <th>Son Sınav</th>
                        <th>Ortalama Net</th>
                        <th>Randevu</th>
                        <th>İşlemler</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            <div class="d-flex align-items-center">
                                <img src="https://ui-avatars.com/api/?name=Ahmet+Yılmaz&background=0D8ABC&color=fff" 
                                     alt="Profile" class="rounded-circle me-3" width="40" height="40">
                                <div>
                                    <div class="fw-bold">Ahmet Yılmaz</div>
                                    <div class="text-muted small">ahmet@example.com</div>
                                </div>
                            </div>
                        </td>
                        <td>12. Sınıf</td>
                        <td>Tıp Fakültesi</td>
                        <td>TYT Deneme #5<br><small class="text-muted">15 Temmuz 2025</small></td>
                        <td class="fw-bold">98.5</td>
                        <td><span class="badge bg-success">Bugün, 10:00</span></td>
                        <td>
                            <a href="student_detail.php?id=1" class="btn btn-sm btn-outline-primary">
                                <i class="fas fa-user me-1"></i>Profil
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="d-flex align-items-center">
                                <img src="https://ui-avatars.com/api/?name=Ayşe+Demir&background=0D8ABC&color=fff" 
                                     alt="Profile" class="rounded-circle me-3" width="40" height="40">
                                <div>
                                    <div class="fw-bold">Ayşe Demir</div>
                                    <div class="text-muted small">ayse@example.com</div>
                                </div>
                            </div>
                        </td>
                        <td>12. Sınıf</td>
                        <td>Mühendislik</td>
                        <td>AYT Deneme #3<br><small class="text-muted">10 Temmuz 2025</small></td>
                        <td class="fw-bold">87.25</td>
                        <td><span class="badge bg-warning">Yarın, 14:30</span></td>
                        <td>
                            <a href="student_detail.php?id=2" class="btn btn-sm btn-outline-primary">
                                <i class="fas fa-user me-1"></i>Profil
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="d-flex align-items-center">
                                <img src="https://ui-avatars.com/api/?name=Mehmet+Kaya&background=0D8ABC&color=fff" 
                                     alt="Profile" class="rounded-circle me-3" width="40" height="40">
                                <div>
                                    <div class="fw-bold">Mehmet Kaya</div>
                                    <div class="text-muted small">mehmet@example.com</div>
                                </div>
                            </div>
                        </td>
                        <td>11. Sınıf</td>
                        <td>Eczacılık</td>
                        <td>TYT Deneme #4<br><small class="text-muted">5 Temmuz 2025</small></td>
                        <td class="fw-bold">76.5</td>
                        <td><span class="badge bg-secondary">Planlanmadı</span></td>
                        <td>
                            <a href="student_detail.php?id=3" class="btn btn-sm btn-outline-primary">
                                <i class="fas fa-user me-1"></i>Profil
                            </a>
                        </td>
                    </tr>
                </tbody>
            </table>
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
<li class="active">
    <a href="students.php">
        <i class="fas fa-users"></i>
        Tüm Öğrenciler
    </a>
</li>
<li>
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