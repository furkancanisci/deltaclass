@extends('layouts.app')

@section('title', 'Öğrenci Paneli')

@section('sidebar-menu')
<li class="active">
    <a href="{{ route('student.dashboard') }}">
        <i class="fas fa-home"></i>
        Ana Sayfa
    </a>
</li>
<li>
    <a href="{{ route('student.exams') }}">
        <i class="fas fa-file-alt"></i>
        Deneme Sınavları
    </a>
</li>
<li>
    <a href="{{ route('student.schedule') }}">
        <i class="fas fa-calendar-alt"></i>
        Çalışma Planı
    </a>
</li>
<li>
    <a href="{{ route('student.statistics') }}">
        <i class="fas fa-chart-bar"></i>
        İstatistikler
    </a>
</li>
<li>
    <a href="{{ route('student.messages') }}">
        <i class="fas fa-comments"></i>
        Mesajlar
    </a>
</li>
@endsection

@section('content')
<!-- Welcome Banner -->
<div class="welcome-banner">
    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="col-md-8">
                <h1 class="welcome-title">Hoş Geldin, {{ Auth::user()->name }}!</h1>
                <p class="welcome-subtitle">Kişisel sınav planlamalarını yönet, deneme sonuçlarını incele ve gelişimini takip et.</p>
            </div>
            <div class="col-md-4 text-md-end">
                <a href="{{ route('student.schedule') }}" class="btn btn-create-plan">
                    <i class="fas fa-calendar-plus me-2"></i>Plan Oluştur
                </a>
            </div>
        </div>
    </div>
</div>

<!-- Stats Overview -->
<div class="stats-overview">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3">
                <div class="stat-card">
                    <div class="stat-icon bg-primary">
                        <i class="fas fa-file-alt"></i>
                    </div>
                    <div class="stat-content">
                        <h3 class="stat-number">12</h3>
                        <p class="stat-label">Toplam Sınav</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="stat-card">
                    <div class="stat-icon bg-success">
                        <i class="fas fa-calendar-check"></i>
                    </div>
                    <div class="stat-content">
                        <h3 class="stat-number">8</h3>
                        <p class="stat-label">Tamamlanan Plan</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="stat-card">
                    <div class="stat-icon bg-info">
                        <i class="fas fa-chart-line"></i>
                    </div>
                    <div class="stat-content">
                        <h3 class="stat-number">+12%</h3>
                        <p class="stat-label">Performans Artışı</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="stat-card">
                    <div class="stat-icon bg-warning">
                        <i class="fas fa-bullseye"></i>
                    </div>
                    <div class="stat-content">
                        <h3 class="stat-number">78</h3>
                        <p class="stat-label">Hedef Puan</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Main Content Grid -->
<div class="main-content-grid">
    <div class="container-fluid">
        <div class="row">
            <!-- Left Column -->
            <div class="col-lg-8">
                <!-- Performance Charts -->
                <div class="row">
                    <div class="col-md-6">
                        <div class="dashboard-card">
                            <div class="card-header">
                                <h5 class="mb-0"><i class="fas fa-chart-line me-2"></i>Performans Özeti</h5>
                            </div>
                            <div class="card-body">
                                <div class="chart-container">
                                    <canvas id="barChart"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="dashboard-card">
                            <div class="card-header">
                                <h5 class="mb-0"><i class="fas fa-percentage me-2"></i>Doğru/Yanlış Dağılımı</h5>
                            </div>
                            <div class="card-body">
                                <div class="chart-container">
                                    <canvas id="pieChart"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Subject Progress -->
                <div class="dashboard-card mt-4">
                    <div class="card-header">
                        <h5 class="mb-0"><i class="fas fa-book-open me-2"></i>Konu Dağılımı</h5>
                    </div>
                    <div class="card-body">
                        <div class="subject-progress-list">
                            <div class="subject-progress-item">
                                <div class="subject-info">
                                    <h6>Matematik</h6>
                                    <span class="progress-percent">78%</span>
                                </div>
                                <div class="progress" style="height: 10px;">
                                    <div class="progress-bar bg-primary" role="progressbar" style="width: 78%"></div>
                                </div>
                            </div>
                            <div class="subject-progress-item">
                                <div class="subject-info">
                                    <h6>Türkçe</h6>
                                    <span class="progress-percent">65%</span>
                                </div>
                                <div class="progress" style="height: 10px;">
                                    <div class="progress-bar bg-success" role="progressbar" style="width: 65%"></div>
                                </div>
                            </div>
                            <div class="subject-progress-item">
                                <div class="subject-info">
                                    <h6>Fen Bilimleri</h6>
                                    <span class="progress-percent">45%</span>
                                </div>
                                <div class="progress" style="height: 10px;">
                                    <div class="progress-bar bg-info" role="progressbar" style="width: 45%"></div>
                                </div>
                            </div>
                            <div class="subject-progress-item">
                                <div class="subject-info">
                                    <h6>Sosyal Bilimler</h6>
                                    <span class="progress-percent">52%</span>
                                </div>
                                <div class="progress" style="height: 10px;">
                                    <div class="progress-bar bg-warning" role="progressbar" style="width: 52%"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Right Column -->
            <div class="col-lg-4">
                <!-- Upcoming Exams -->
                <div class="dashboard-card">
                    <div class="card-header">
                        <h5 class="mb-0"><i class="fas fa-tasks me-2"></i>Yaklaşan Sınavlar</h5>
                    </div>
                    <div class="card-body">
                        <div class="upcoming-exams-list">
                            <div class="exam-item">
                                <div class="exam-title">TYT Deneme Sınavı #5</div>
                                <div class="exam-date">Yarın, 09:30</div>
                                <div class="exam-status status-warning">Yaklaşan</div>
                            </div>
                            <div class="exam-item">
                                <div class="exam-title">AYT Matematik Konu Tekrarı</div>
                                <div class="exam-date">15 Temmuz, 14:00</div>
                                <div class="exam-status status-info">Planlandı</div>
                            </div>
                            <div class="exam-item">
                                <div class="exam-title">TYT Türkçe Deneme</div>
                                <div class="exam-date">20 Temmuz, 10:00</div>
                                <div class="exam-status status-info">Planlandı</div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Recent Activity -->
                <div class="dashboard-card mt-4">
                    <div class="card-header">
                        <h5 class="mb-0"><i class="fas fa-history me-2"></i>Son Aktiviteler</h5>
                    </div>
                    <div class="card-body">
                        <div class="activity-list">
                            <div class="activity-item">
                                <div class="activity-icon bg-success">
                                    <i class="fas fa-file-alt"></i>
                                </div>
                                <div class="activity-content">
                                    <div class="activity-title">TYT Deneme Sonuçları Girildi</div>
                                    <div class="activity-time">2 saat önce</div>
                                </div>
                            </div>
                            <div class="activity-item">
                                <div class="activity-icon bg-primary">
                                    <i class="fas fa-calendar-check"></i>
                                </div>
                                <div class="activity-content">
                                    <div class="activity-title">Haftalık Plan Güncellendi</div>
                                    <div class="activity-time">1 gün önce</div>
                                </div>
                            </div>
                            <div class="activity-item">
                                <div class="activity-icon bg-info">
                                    <i class="fas fa-chart-line"></i>
                                </div>
                                <div class="activity-content">
                                    <div class="activity-title">Performans Raporu Oluşturuldu</div>
                                    <div class="activity-time">2 gün önce</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('styles')
<style>
    .welcome-banner {
        background: linear-gradient(135deg, #1e3c72, #2a5298);
        color: white;
        padding: 2rem 0;
        margin-bottom: 2rem;
        border-radius: 10px;
        box-shadow: 0 4px 12px rgba(0,0,0,0.1);
    }
    
    .welcome-title {
        font-size: 2rem;
        font-weight: 700;
        margin-bottom: 0.5rem;
    }
    
    .welcome-subtitle {
        font-size: 1.1rem;
        opacity: 0.9;
        margin-bottom: 0;
    }
    
    .btn-create-plan {
        background: #fff;
        color: #1e3c72;
        border: none;
        padding: 12px 24px;
        font-weight: 600;
        border-radius: 8px;
        transition: all 0.3s ease;
        box-shadow: 0 4px 8px rgba(0,0,0,0.1);
    }
    
    .btn-create-plan:hover {
        transform: translateY(-2px);
        box-shadow: 0 6px 12px rgba(0,0,0,0.15);
        color: #1e3c72;
    }
    
    .stats-overview {
        margin-bottom: 2rem;
    }
    
    .stat-card {
        background: white;
        border-radius: 10px;
        box-shadow: 0 4px 8px rgba(0,0,0,0.05);
        padding: 1.5rem;
        display: flex;
        align-items: center;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        margin-bottom: 1.5rem;
    }
    
    .stat-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 8px 16px rgba(0,0,0,0.1);
    }
    
    .stat-icon {
        width: 60px;
        height: 60px;
        border-radius: 12px;
        display: flex;
        align-items: center;
        justify-content: center;
        margin-right: 1rem;
        color: white;
        font-size: 1.5rem;
    }
    
    .stat-content {
        flex: 1;
    }
    
    .stat-number {
        font-size: 2rem;
        font-weight: 700;
        margin-bottom: 0.25rem;
        color: #333;
    }
    
    .stat-label {
        font-size: 0.9rem;
        color: #666;
        margin-bottom: 0;
    }
    
    .main-content-grid {
        margin-bottom: 2rem;
    }
    
    .dashboard-card {
        background: white;
        border-radius: 10px;
        box-shadow: 0 4px 8px rgba(0,0,0,0.05);
        margin-bottom: 1.5rem;
        transition: box-shadow 0.3s ease;
    }
    
    .dashboard-card:hover {
        box-shadow: 0 8px 16px rgba(0,0,0,0.1);
    }
    
    .card-header {
        background: #f8f9fa;
        border-bottom: 1px solid #e9ecef;
        padding: 1rem 1.5rem;
        border-radius: 10px 10px 0 0 !important;
    }
    
    .card-body {
        padding: 1.5rem;
    }
    
    .subject-progress-list {
        display: flex;
        flex-direction: column;
        gap: 1.5rem;
    }
    
    .subject-progress-item {
        display: flex;
        flex-direction: column;
    }
    
    .subject-info {
        display: flex;
        justify-content: space-between;
        margin-bottom: 0.5rem;
    }
    
    .subject-info h6 {
        margin-bottom: 0;
        font-weight: 600;
    }
    
    .progress-percent {
        font-weight: 600;
        color: #495057;
    }
    
    .upcoming-exams-list {
        display: flex;
        flex-direction: column;
        gap: 1rem;
    }
    
    .exam-item {
        padding: 1rem;
        border-radius: 8px;
        background: #f8f9fa;
        border-left: 4px solid #1e3c72;
    }
    
    .exam-title {
        font-weight: 600;
        margin-bottom: 0.25rem;
        color: #333;
    }
    
    .exam-date {
        font-size: 0.85rem;
        color: #666;
        margin-bottom: 0.5rem;
    }
    
    .exam-status {
        display: inline-block;
        padding: 0.25rem 0.75rem;
        border-radius: 20px;
        font-size: 0.8rem;
        font-weight: 600;
    }
    
    .status-warning {
        background: #fff3cd;
        color: #856404;
    }
    
    .status-info {
        background: #d1ecf1;
        color: #0c5460;
    }
    
    .activity-list {
        display: flex;
        flex-direction: column;
        gap: 1rem;
    }
    
    .activity-item {
        display: flex;
        gap: 1rem;
    }
    
    .activity-icon {
        width: 40px;
        height: 40px;
        border-radius: 10px;
        display: flex;
        align-items: center;
        justify-content: center;
        color: white;
        flex-shrink: 0;
    }
    
    .activity-content {
        flex: 1;
    }
    
    .activity-title {
        font-weight: 500;
        margin-bottom: 0.25rem;
        color: #333;
    }
    
    .activity-time {
        font-size: 0.85rem;
        color: #666;
    }
    
    @media (max-width: 768px) {
        .welcome-title {
            font-size: 1.5rem;
        }
        
        .stat-card {
            padding: 1rem;
        }
        
        .stat-number {
            font-size: 1.5rem;
        }
    }
</style>
@endsection

@section('scripts')
<script>
    // Initialize charts when the page loads
    document.addEventListener('DOMContentLoaded', function() {
        // Bar Chart
        var barCtx = document.getElementById('barChart').getContext('2d');
        var barChart = new Chart(barCtx, {
            type: 'bar',
            data: {
                labels: ['TYT', 'AYT', 'Deneme 1', 'Deneme 2', 'Deneme 3'],
                datasets: [{
                    label: 'Net Ortalaması',
                    data: [45, 52, 48, 55, 58],
                    backgroundColor: [
                        'rgba(30, 60, 114, 0.7)',
                        'rgba(42, 82, 152, 0.7)',
                        'rgba(54, 104, 190, 0.7)',
                        'rgba(66, 126, 228, 0.7)',
                        'rgba(78, 148, 255, 0.7)'
                    ],
                    borderColor: [
                        'rgba(30, 60, 114, 1)',
                        'rgba(42, 82, 152, 1)',
                        'rgba(54, 104, 190, 1)',
                        'rgba(66, 126, 228, 1)',
                        'rgba(78, 148, 255, 1)'
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                scales: {
                    y: {
                        beginAtZero: true,
                        max: 100
                    }
                }
            }
        });

        // Pie Chart
        var pieCtx = document.getElementById('pieChart').getContext('2d');
        var pieChart = new Chart(pieCtx, {
            type: 'pie',
            data: {
                labels: ['Doğru', 'Yanlış', 'Boş'],
                datasets: [{
                    data: [78, 12, 10],
                    backgroundColor: [
                        'rgba(40, 167, 69, 0.7)',
                        'rgba(220, 53, 69, 0.7)',
                        'rgba(108, 117, 125, 0.7)'
                    ],
                    borderColor: [
                        'rgba(40, 167, 69, 1)',
                        'rgba(220, 53, 69, 1)',
                        'rgba(108, 117, 125, 1)'
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                plugins: {
                    legend: {
                        position: 'bottom'
                    }
                }
            }
        });
    });
</script>
@endsection