@extends('layouts.app')

@section('title', 'İstatistikler')

@section('sidebar-menu')
<li>
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
<li class="active">
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
<div class="container-fluid" style="padding-left: 15px; padding-right: 15px;">
    <div class="row">
        <div class="col-12">
            <div class="page-header d-flex justify-content-between align-items-center">
                <h1><i class="fas fa-chart-bar me-3"></i>Detaylı İstatistikler</h1>
                <div>
                    <select class="form-select">
                        <option>Son 30 Gün</option>
                        <option>Son 3 Ay</option>
                        <option>Son 6 Ay</option>
                        <option>Son 1 Yıl</option>
                    </select>
                </div>
            </div>
        </div>
    </div>

    <!-- Performance Overview -->
    <div class="row">
        <div class="col-md-3 col-sm-6">
            <div class="stat-card">
                <div class="stat-icon bg-primary">
                    <i class="fas fa-chart-line"></i>
                </div>
                <div class="stat-content">
                    <h3 class="stat-number">+12%</h3>
                    <p class="stat-label">Performans Artışı</p>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-6">
            <div class="stat-card">
                <div class="stat-icon bg-success">
                    <i class="fas fa-file-alt"></i>
                </div>
                <div class="stat-content">
                    <h3 class="stat-number">48.5</h3>
                    <p class="stat-label">Ortalama Net</p>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-6">
            <div class="stat-card">
                <div class="stat-icon bg-info">
                    <i class="fas fa-calendar-check"></i>
                </div>
                <div class="stat-content">
                    <h3 class="stat-number">85%</h3>
                    <p class="stat-label">Plan Tamamlama</p>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-6">
            <div class="stat-card">
                <div class="stat-icon bg-warning">
                    <i class="fas fa-bullseye"></i>
                </div>
                <div class="stat-content">
                    <h3 class="stat-number">295</h3>
                    <p class="stat-label">TYT Hedef Puanı</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Subject Performance -->
    <div class="row mt-4">
        <div class="col-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h5 class="mb-0"><i class="fas fa-book-open me-2"></i>Ders Bazında Detaylı Performans</h5>
                    <div>
                        <button class="btn btn-sm btn-outline-primary active">TYT</button>
                        <button class="btn btn-sm btn-outline-primary">AYT</button>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>Ders</th>
                                    <th>Konu</th>
                                    <th>Çalışılan Soru</th>
                                    <th>Doğru</th>
                                    <th>Yanlış</th>
                                    <th>Net</th>
                                    <th>Başarı Oranı</th>
                                    <th>Performans</th>
                                </tr>
                            </thead>
                            <tbody>
                                <!-- Matematik -->
                                <tr>
                                    <td rowspan="5">Matematik</td>
                                    <td>Temel Kavramlar</td>
                                    <td>120</td>
                                    <td>95</td>
                                    <td>25</td>
                                    <td>88.75</td>
                                    <td>79.2%</td>
                                    <td><span class="text-success"><i class="fas fa-arrow-up"></i> +5.2%</span></td>
                                </tr>
                                <tr>
                                    <td>Sayılar</td>
                                    <td>85</td>
                                    <td>68</td>
                                    <td>17</td>
                                    <td>63.75</td>
                                    <td>80.0%</td>
                                    <td><span class="text-success"><i class="fas fa-arrow-up"></i> +3.1%</span></td>
                                </tr>
                                <tr>
                                    <td>Basit Eşitsizlikler</td>
                                    <td>72</td>
                                    <td>45</td>
                                    <td>27</td>
                                    <td>38.25</td>
                                    <td>62.5%</td>
                                    <td><span class="text-danger"><i class="fas fa-arrow-down"></i> -2.3%</span></td>
                                </tr>
                                <tr>
                                    <td>Mutlak Değer</td>
                                    <td>65</td>
                                    <td>42</td>
                                    <td>23</td>
                                    <td>36.25</td>
                                    <td>64.6%</td>
                                    <td><span class="text-success"><i class="fas fa-arrow-up"></i> +1.7%</span></td>
                                </tr>
                                <tr>
                                    <td>Üslü-Köklü İfadeler</td>
                                    <td>98</td>
                                    <td>78</td>
                                    <td>20</td>
                                    <td>73.00</td>
                                    <td>79.6%</td>
                                    <td><span class="text-success"><i class="fas fa-arrow-up"></i> +4.2%</span></td>
                                </tr>
                                <!-- Türkçe -->
                                <tr>
                                    <td rowspan="4">Türkçe</td>
                                    <td>Paragraf</td>
                                    <td>210</td>
                                    <td>175</td>
                                    <td>35</td>
                                    <td>166.25</td>
                                    <td>83.3%</td>
                                    <td><span class="text-success"><i class="fas fa-arrow-up"></i> +2.1%</span></td>
                                </tr>
                                <tr>
                                    <td>Sözcükte Anlam</td>
                                    <td>85</td>
                                    <td>72</td>
                                    <td>13</td>
                                    <td>68.75</td>
                                    <td>84.7%</td>
                                    <td><span class="text-success"><i class="fas fa-arrow-up"></i> +1.5%</span></td>
                                </tr>
                                <tr>
                                    <td>Cümlede Anlam</td>
                                    <td>92</td>
                                    <td>78</td>
                                    <td>14</td>
                                    <td>74.50</td>
                                    <td>84.8%</td>
                                    <td><span class="text-success"><i class="fas fa-arrow-up"></i> +2.3%</span></td>
                                </tr>
                                <tr>
                                    <td>Anlatım Bozuklukları</td>
                                    <td>68</td>
                                    <td>52</td>
                                    <td>16</td>
                                    <td>48.00</td>
                                    <td>76.5%</td>
                                    <td><span class="text-danger"><i class="fas fa-arrow-down"></i> -1.2%</span></td>
                                </tr>
                                <!-- Fen Bilimleri -->
                                <tr>
                                    <td rowspan="4">Fen Bilimleri</td>
                                    <td>Fizik - Manyetizma</td>
                                    <td>75</td>
                                    <td>45</td>
                                    <td>30</td>
                                    <td>37.50</td>
                                    <td>60.0%</td>
                                    <td><span class="text-danger"><i class="fas fa-arrow-down"></i> -3.1%</span></td>
                                </tr>
                                <tr>
                                    <td>Kimya - Kimyasal Tepkimeler</td>
                                    <td>68</td>
                                    <td>52</td>
                                    <td>16</td>
                                    <td>48.00</td>
                                    <td>76.5%</td>
                                    <td><span class="text-success"><i class="fas fa-arrow-up"></i> +2.7%</span></td>
                                </tr>
                                <tr>
                                    <td>Biyoloji - Hücre Bölünmeleri</td>
                                    <td>82</td>
                                    <td>61</td>
                                    <td>21</td>
                                    <td>55.75</td>
                                    <td>74.4%</td>
                                    <td><span class="text-success"><i class="fas fa-arrow-up"></i> +1.9%</span></td>
                                </tr>
                                <tr>
                                    <td>Fizik - Elektrik</td>
                                    <td>70</td>
                                    <td>42</td>
                                    <td>28</td>
                                    <td>35.00</td>
                                    <td>60.0%</td>
                                    <td><span class="text-danger"><i class="fas fa-arrow-down"></i> -4.2%</span></td>
                                </tr>
                                <!-- Sosyal Bilimler -->
                                <tr>
                                    <td rowspan="4">Sosyal Bilimler</td>
                                    <td>Tarih - Osmanlı Devleti</td>
                                    <td>95</td>
                                    <td>78</td>
                                    <td>17</td>
                                    <td>73.75</td>
                                    <td>82.1%</td>
                                    <td><span class="text-success"><i class="fas fa-arrow-up"></i> +3.7%</span></td>
                                </tr>
                                <tr>
                                    <td>Coğrafya - İklim</td>
                                    <td>88</td>
                                    <td>72</td>
                                    <td>16</td>
                                    <td>68.00</td>
                                    <td>81.8%</td>
                                    <td><span class="text-success"><i class="fas fa-arrow-up"></i> +2.5%</span></td>
                                </tr>
                                <tr>
                                    <td>Felsefe - Bilgi Felsefesi</td>
                                    <td>75</td>
                                    <td>58</td>
                                    <td>17</td>
                                    <td>53.75</td>
                                    <td>77.3%</td>
                                    <td><span class="text-success"><i class="fas fa-arrow-up"></i> +1.8%</span></td>
                                </tr>
                                <tr>
                                    <td>Yeni Türk Devleti</td>
                                    <td>82</td>
                                    <td>65</td>
                                    <td>17</td>
                                    <td>60.75</td>
                                    <td>79.3%</td>
                                    <td><span class="text-success"><i class="fas fa-arrow-up"></i> +2.2%</span></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Charts Section -->
    <div class="row mt-4">
        <div class="col-lg-6">
            <div class="card">
                <div class="card-header">
                    <h5 class="mb-0"><i class="fas fa-chart-line me-2"></i>Performans Grafiği</h5>
                </div>
                <div class="card-body">
                    <div class="chart-container">
                        <canvas id="performanceChart"></canvas>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="card">
                <div class="card-header">
                    <h5 class="mb-0"><i class="fas fa-percentage me-2"></i>Doğru/Yanlış Dağılımı</h5>
                </div>
                <div class="card-body">
                    <div class="chart-container">
                        <canvas id="correctWrongChart"></canvas>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Weekly Study Hours -->
    <div class="row mt-4">
        <div class="col-lg-6">
            <div class="card">
                <div class="card-header">
                    <h5 class="mb-0"><i class="fas fa-clock me-2"></i>Haftalık Çalışma Saatleri</h5>
                </div>
                <div class="card-body">
                    <div class="chart-container">
                        <canvas id="studyHoursChart"></canvas>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="card">
                <div class="card-header">
                    <h5 class="mb-0"><i class="fas fa-trophy me-2"></i>Başarı Hedefleri</h5>
                </div>
                <div class="card-body">
                    <div class="goal-item">
                        <div class="d-flex justify-content-between">
                            <span>TYT 300+ Puan</span>
                            <span>78%</span>
                        </div>
                        <div class="progress mt-2">
                            <div class="progress-bar bg-primary" role="progressbar" style="width: 78%"></div>
                        </div>
                    </div>
                    <div class="goal-item mt-4">
                        <div class="d-flex justify-content-between">
                            <span>AYT 280+ Puan</span>
                            <span>45%</span>
                        </div>
                        <div class="progress mt-2">
                            <div class="progress-bar bg-success" role="progressbar" style="width: 45%"></div>
                        </div>
                    </div>
                    <div class="goal-item mt-4">
                        <div class="d-flex justify-content-between">
                            <span>Fen Net Artışı</span>
                            <span>62%</span>
                        </div>
                        <div class="progress mt-2">
                            <div class="progress-bar bg-info" role="progressbar" style="width: 62%"></div>
                        </div>
                    </div>
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
        font-size: 1.5rem;
    }
    
    .stat-card {
        background: white;
        border-radius: 10px;
        box-shadow: 0 4px 8px rgba(0,0,0,0.05);
        padding: 1rem;
        display: flex;
        align-items: center;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        margin-bottom: 1rem;
    }
    
    .stat-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 8px 16px rgba(0,0,0,0.1);
    }
    
    .stat-icon {
        width: 50px;
        height: 50px;
        border-radius: 10px;
        display: flex;
        align-items: center;
        justify-content: center;
        margin-right: 0.75rem;
        color: white;
        font-size: 1.2rem;
    }
    
    .stat-content {
        flex: 1;
    }
    
    .stat-number {
        font-size: 1.5rem;
        font-weight: 700;
        margin-bottom: 0.25rem;
        color: #333;
    }
    
    .stat-label {
        font-size: 0.8rem;
        color: #666;
        margin-bottom: 0;
    }
    
    .chart-container {
        position: relative;
        height: 250px;
    }
    
    .goal-item {
        padding: 0.75rem;
        border-radius: 8px;
        background: #f8f9fa;
        margin-bottom: 1rem;
    }
    
    .form-select {
        width: auto;
        font-size: 0.9rem;
    }
    
    .table th {
        font-weight: 600;
        color: #495057;
        font-size: 0.85rem;
    }
    
    .table td {
        vertical-align: middle;
        font-size: 0.85rem;
    }
    
    .table-responsive {
        overflow-x: auto;
        -webkit-overflow-scrolling: touch;
    }
    
    @media (max-width: 768px) {
        .page-header h1 {
            font-size: 1.25rem;
        }
        
        .stat-number {
            font-size: 1.25rem;
        }
        
        .chart-container {
            height: 200px;
        }
        
        .table th, .table td {
            font-size: 0.75rem;
            padding: 0.5rem;
        }
    }
</style>

@section('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Performance Chart
        var performanceCtx = document.getElementById('performanceChart').getContext('2d');
        var performanceChart = new Chart(performanceCtx, {
            type: 'line',
            data: {
                labels: ['Ocak', 'Şubat', 'Mart', 'Nisan', 'Mayıs', 'Haziran', 'Temmuz'],
                datasets: [{
                    label: 'TYT Puanı',
                    data: [220, 235, 250, 265, 275, 285, 295],
                    borderColor: '#1e3c72',
                    backgroundColor: 'rgba(30, 60, 114, 0.1)',
                    tension: 0.3,
                    fill: true
                }, {
                    label: 'AYT Puanı',
                    data: [180, 195, 210, 225, 240, 255, 265],
                    borderColor: '#2a5298',
                    backgroundColor: 'rgba(42, 82, 152, 0.1)',
                    tension: 0.3,
                    fill: true
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                scales: {
                    y: {
                        beginAtZero: false,
                        min: 150
                    }
                }
            }
        });

        // Correct/Wrong Chart
        var correctWrongCtx = document.getElementById('correctWrongChart').getContext('2d');
        var correctWrongChart = new Chart(correctWrongCtx, {
            type: 'doughnut',
            data: {
                labels: ['Doğru', 'Yanlış', 'Boş'],
                datasets: [{
                    data: [194, 32, 14],
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
                        position: 'bottom',
                        labels: {
                            font: {
                                size: 10
                            }
                        }
                    }
                }
            }
        });

        // Study Hours Chart
        var studyHoursCtx = document.getElementById('studyHoursChart').getContext('2d');
        var studyHoursChart = new Chart(studyHoursCtx, {
            type: 'bar',
            data: {
                labels: ['Pzt', 'Sal', 'Çar', 'Per', 'Cum', 'Cmt', 'Paz'],
                datasets: [{
                    label: 'Çalışma Saati',
                    data: [4.5, 5.2, 3.8, 6.0, 4.2, 7.5, 3.0],
                    backgroundColor: [
                        'rgba(30, 60, 114, 0.7)',
                        'rgba(42, 82, 152, 0.7)',
                        'rgba(54, 104, 190, 0.7)',
                        'rgba(66, 126, 228, 0.7)',
                        'rgba(78, 148, 255, 0.7)',
                        'rgba(90, 170, 255, 0.7)',
                        'rgba(102, 192, 255, 0.7)'
                    ],
                    borderColor: [
                        'rgba(30, 60, 114, 1)',
                        'rgba(42, 82, 152, 1)',
                        'rgba(54, 104, 190, 1)',
                        'rgba(66, 126, 228, 1)',
                        'rgba(78, 148, 255, 1)',
                        'rgba(90, 170, 255, 1)',
                        'rgba(102, 192, 255, 1)'
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
    });
</script>
@endsection