<?php
require_once '../../config/config.php';
require_login();
require_role(ROLE_GUIDANCE);

$page_title = "Öğrenci Detayı";

ob_start();
?>
<div class="d-flex justify-content-between align-items-center mb-4">
    <div>
        <h2><i class="fas fa-user me-2"></i>Ahmet Yılmaz</h2>
        <p class="text-muted mb-0">Öğrenci Profili ve Yönetim Paneli</p>
    </div>
    <a href="students.php" class="btn btn-secondary">
        <i class="fas fa-arrow-left me-2"></i>Geri
    </a>
</div>

<div class="row">
    <div class="col-lg-4">
        <div class="card mb-4">
            <div class="card-body text-center">
                <img src="https://ui-avatars.com/api/?name=Ahmet+Yılmaz&background=0D8ABC&color=fff" 
                     alt="Profile" class="rounded-circle mb-3" width="100" height="100">
                <h5>Ahmet Yılmaz</h5>
                <p class="text-muted">12. Sınıf Öğrencisi</p>
                <p class="mb-3">Hedef: Tıp Fakültesi</p>
                <div class="d-grid gap-2">
                    <button class="btn btn-primary mb-2" data-bs-toggle="modal" data-bs-target="#scheduleModal">
                        <i class="fas fa-calendar-plus me-2"></i>Plan Oluştur
                    </button>
                    <button class="btn btn-outline-primary mb-2" data-bs-toggle="modal" data-bs-target="#appointmentModal">
                        <i class="fas fa-calendar-check me-2"></i>Randevu Ayarla
                    </button>
                    <button class="btn btn-outline-primary">
                        <i class="fas fa-comment me-2"></i>Mesaj Gönder
                    </button>
                </div>
            </div>
        </div>
        
        <div class="card">
            <div class="card-header">
                <h5 class="mb-0"><i class="fas fa-info-circle me-2"></i>İletişim Bilgileri</h5>
            </div>
            <div class="card-body">
                <p class="mb-2"><i class="fas fa-envelope me-2 text-primary"></i> ahmet@example.com</p>
                <p class="mb-2"><i class="fas fa-phone me-2 text-primary"></i> +90 555 123 4567</p>
                <p class="mb-0"><i class="fas fa-map-marker-alt me-2 text-primary"></i> İstanbul, Türkiye</p>
            </div>
        </div>
    </div>
    
    <div class="col-lg-8">
        <div class="card mb-4">
            <div class="card-header">
                <h5 class="mb-0"><i class="fas fa-chart-line me-2"></i>Performans Özeti</h5>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-3 text-center">
                        <div class="display-6 text-primary">98.5</div>
                        <p class="mb-0">Son Sınav Neti</p>
                    </div>
                    <div class="col-md-3 text-center">
                        <div class="display-6 text-success">+12%</div>
                        <p class="mb-0">İlerleme</p>
                    </div>
                    <div class="col-md-3 text-center">
                        <div class="display-6">12</div>
                        <p class="mb-0">Toplam Sınav</p>
                    </div>
                    <div class="col-md-3 text-center">
                        <div class="display-6">92.75</div>
                        <p class="mb-0">Ortalama Net</p>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="card mb-4">
            <div class="card-header">
                <h5 class="mb-0"><i class="fas fa-calendar-alt me-2"></i>Haftalık Plan</h5>
            </div>
            <div class="card-body">
                <div id="weekly-calendar"></div>
            </div>
        </div>
        
        <div class="card">
            <div class="card-header">
                <h5 class="mb-0"><i class="fas fa-file-alt me-2"></i>Sınav Geçmişi</h5>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>Sınav</th>
                                <th>Tarih</th>
                                <th>Toplam Net</th>
                                <th>İlerleme</th>
                                <th>İşlemler</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>TYT Deneme #5</td>
                                <td>15 Temmuz 2025</td>
                                <td class="fw-bold">98.5</td>
                                <td><span class="text-success">+5.75</span></td>
                                <td>
                                    <a href="exam_detail.php?id=1" class="btn btn-sm btn-outline-primary">
                                        <i class="fas fa-chart-bar me-1"></i>Analiz
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>TYT Deneme #4</td>
                                <td>5 Temmuz 2025</td>
                                <td class="fw-bold">92.75</td>
                                <td><span class="text-success">+3.50</span></td>
                                <td>
                                    <a href="exam_detail.php?id=2" class="btn btn-sm btn-outline-primary">
                                        <i class="fas fa-chart-bar me-1"></i>Analiz
                                    </a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Schedule Modal -->
<div class="modal fade" id="scheduleModal" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title"><i class="fas fa-calendar-plus me-2"></i>Yeni Plan Oluştur</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="mb-3">
                        <label class="form-label">Plan Türü</label>
                        <select class="form-select">
                            <option value="weekly">Haftalık</option>
                            <option value="monthly">Aylık</option>
                            <option value="yearly">Yıllık</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Başlangıç Tarihi</label>
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

<!-- Appointment Modal -->
<div class="modal fade" id="appointmentModal" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title"><i class="fas fa-calendar-check me-2"></i>Yeni Randevu</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="mb-3">
                        <label class="form-label">Tarih</label>
                        <input type="date" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Saat</label>
                        <input type="time" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Konu</label>
                        <select class="form-select">
                            <option>Motivasyon</option>
                            <option>TYT Hazırlık</option>
                            <option>AYT Hazırlık</option>
                            <option>Bölüm Seçimi</option>
                            <option>Stres Yönetimi</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Notlar</label>
                        <textarea class="form-control" rows="3" placeholder="Randevu notları..."></textarea>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">İptal</button>
                <button type="button" class="btn btn-primary">Randevu Oluştur</button>
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