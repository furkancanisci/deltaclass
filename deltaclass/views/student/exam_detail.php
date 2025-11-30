<?php
require_once '../../config/config.php';
require_login();
require_role(ROLE_STUDENT);

$page_title = "Sınav Detayı";

ob_start();
?>
<div class="d-flex justify-content-between align-items-center mb-4">
    <h2><i class="fas fa-file-alt me-2"></i>TYT Deneme Sınavı #5</h2>
    <a href="exams.php" class="btn btn-secondary">
        <i class="fas fa-arrow-left me-2"></i>Geri
    </a>
</div>

<div class="row">
    <div class="col-lg-8">
        <div class="card mb-4">
            <div class="card-header">
                <h5 class="mb-0"><i class="fas fa-chart-bar me-2"></i>Genel İstatistikler</h5>
            </div>
            <div class="card-body">
                <div class="row text-center">
                    <div class="col-md-3">
                        <div class="display-4 text-primary">98.5</div>
                        <p>Toplam Net</p>
                    </div>
                    <div class="col-md-3">
                        <div class="display-4 text-success">112</div>
                        <p>Doğru</p>
                    </div>
                    <div class="col-md-3">
                        <div class="display-4 text-danger">10</div>
                        <p>Yanlış</p>
                    </div>
                    <div class="col-md-3">
                        <div class="display-4 text-muted">4</div>
                        <p>Boş</p>
                    </div>
                </div>
                
                <div class="mt-4">
                    <h6><i class="fas fa-clock me-2"></i>Sınav Süresi</h6>
                    <p class="mb-0">135 dakika (Bitirme süresi: 128 dakika)</p>
                </div>
            </div>
        </div>
        
        <div class="card">
            <div class="card-header">
                <h5 class="mb-0"><i class="fas fa-book me-2"></i>Ders Bazlı Detaylar</h5>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>Ders</th>
                                <th>Doğru</th>
                                <th>Yanlış</th>
                                <th>Boş</th>
                                <th>Net</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Türkçe</td>
                                <td class="text-success">32</td>
                                <td class="text-danger">3</td>
                                <td class="text-muted">5</td>
                                <td class="fw-bold">29.75</td>
                            </tr>
                            <tr>
                                <td>Matematik</td>
                                <td class="text-success">28</td>
                                <td class="text-danger">4</td>
                                <td class="text-muted">3</td>
                                <td class="fw-bold">25.00</td>
                            </tr>
                            <tr>
                                <td>Fen Bilimleri</td>
                                <td class="text-success">20</td>
                                <td class="text-danger">2</td>
                                <td class="text-muted">3</td>
                                <td class="fw-bold">19.50</td>
                            </tr>
                            <tr>
                                <td>Sosyal Bilimler</td>
                                <td class="text-success">32</td>
                                <td class="text-danger">1</td>
                                <td class="text-muted">2</td>
                                <td class="fw-bold">31.75</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    
    <div class="col-lg-4">
        <div class="card mb-4">
            <div class="card-header">
                <h5 class="mb-0"><i class="fas fa-chart-pie me-2"></i>Dağılım</h5>
            </div>
            <div class="card-body">
                <div class="chart-container">
                    <canvas id="distributionChart"></canvas>
                </div>
            </div>
        </div>
        
        <div class="card">
            <div class="card-header">
                <h5 class="mb-0"><i class="fas fa-history me-2"></i>Geçmiş Sınavlar</h5>
            </div>
            <div class="card-body">
                <div class="d-flex justify-content-between mb-3">
                    <div>
                        <h6 class="mb-0">TYT Deneme #4</h6>
                        <small class="text-muted">5 Temmuz 2025</small>
                    </div>
                    <div class="text-end">
                        <div class="fw-bold">92.75</div>
                        <small class="text-success"><i class="fas fa-arrow-up"></i> 5.75</small>
                    </div>
                </div>
                <div class="d-flex justify-content-between mb-3">
                    <div>
                        <h6 class="mb-0">TYT Deneme #3</h6>
                        <small class="text-muted">28 Haziran 2025</small>
                    </div>
                    <div class="text-end">
                        <div class="fw-bold">89.25</div>
                        <small class="text-success"><i class="fas fa-arrow-up"></i> 3.50</small>
                    </div>
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
<li>
    <a href="dashboard.php">
        <i class="fas fa-home"></i>
        Ana Sayfa
    </a>
</li>
<li class="active">
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