@extends('layouts.app')

@section('title', 'Sınav Detayı')

@section('sidebar-menu')
<li>
    <a href="{{ route('student.dashboard') }}">
        <i class="fas fa-home"></i>
        Ana Sayfa
    </a>
</li>
<li class="active">
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
    <a href="#">
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
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="page-header d-flex justify-content-between align-items-center">
                <div>
                    <h1>TYT Deneme Sınavı #2</h1>
                    <p class="mb-0">22 Haziran 2025 - 10:00</p>
                </div>
                <div>
                    <span class="badge bg-success fs-6">Tamamlandı</span>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-8">
            <div class="card mb-4">
                <div class="card-header">
                    <h5 class="mb-0"><i class="fas fa-chart-bar me-2"></i>Genel Performans</h5>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="text-center">
                                <div class="stat-number">48.0</div>
                                <div class="stat-label">Toplam Net</div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="text-center">
                                <div class="stat-number">298.7</div>
                                <div class="stat-label">TYT Puanı</div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="text-center">
                                <div class="stat-number text-success">+12.3</div>
                                <div class="stat-label">Önceki Sınava göre</div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="text-center">
                                <div class="stat-number">15</div>
                                <div class="stat-label">Sıralama</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card mb-4">
                <div class="card-header">
                    <h5 class="mb-0"><i class="fas fa-list me-2"></i>Detaylı Sonuçlar</h5>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered">
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
                                    <td>32</td>
                                    <td>3</td>
                                    <td>5</td>
                                    <td>31.25</td>
                                </tr>
                                <tr>
                                    <td>Sosyal Bilimler</td>
                                    <td>18</td>
                                    <td>2</td>
                                    <td>0</td>
                                    <td>17.5</td>
                                </tr>
                                <tr>
                                    <td>Temel Matematik</td>
                                    <td>25</td>
                                    <td>5</td>
                                    <td>0</td>
                                    <td>23.75</td>
                                </tr>
                                <tr>
                                    <td>Fen Bilimleri</td>
                                    <td>15</td>
                                    <td>5</td>
                                    <td>0</td>
                                    <td>13.75</td>
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
                    <h5 class="mb-0"><i class="fas fa-chart-pie me-2"></i>Dağılım Grafiği</h5>
                </div>
                <div class="card-body">
                    <div class="chart-container">
                        <canvas id="distributionChart"></canvas>
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="card-header">
                    <h5 class="mb-0"><i class="fas fa-lightbulb me-2"></i>Öneriler</h5>
                </div>
                <div class="card-body">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                            <i class="fas fa-arrow-up text-success me-2"></i>
                            <strong>Matematik</strong> netleriniz arttı,继续保持!
                        </li>
                        <li class="list-group-item">
                            <i class="fas fa-arrow-down text-danger me-2"></i>
                            <strong>Fen Bilimleri</strong> konularında eksiklerinizi tamamlayın
                        </li>
                        <li class="list-group-item">
                            <i class="fas fa-equals text-warning me-2"></i>
                            <strong>Türkçe</strong> netlerinizi sabit tutun
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    .page-header {
        margin-bottom: 2rem;
        padding-bottom: 1rem;
        border-bottom: 1px solid #e9ecef;
    }
    
    .page-header h1 {
        font-weight: 700;
        color: #1e3c72;
    }
    
    .stat-number {
        font-size: 2rem;
        font-weight: 700;
        color: #1e3c72;
        margin-bottom: 0.5rem;
    }
    
    .stat-label {
        font-size: 0.9rem;
        color: #6c757d;
    }
    
    .chart-container {
        position: relative;
        height: 250px;
    }
</style>

@section('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function() {
        var ctx = document.getElementById('distributionChart').getContext('2d');
        var distributionChart = new Chart(ctx, {
            type: 'doughnut',
            data: {
                labels: ['Türkçe', 'Sosyal', 'Matematik', 'Fen'],
                datasets: [{
                    data: [31.25, 17.5, 23.75, 13.75],
                    backgroundColor: [
                        'rgba(30, 60, 114, 0.7)',
                        'rgba(42, 82, 152, 0.7)',
                        'rgba(54, 104, 190, 0.7)',
                        'rgba(66, 126, 228, 0.7)'
                    ],
                    borderColor: [
                        'rgba(30, 60, 114, 1)',
                        'rgba(42, 82, 152, 1)',
                        'rgba(54, 104, 190, 1)',
                        'rgba(66, 126, 228, 1)'
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