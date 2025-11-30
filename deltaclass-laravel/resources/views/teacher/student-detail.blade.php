@extends('layouts.app')

@section('title', 'Öğrenci Detayı')

@section('sidebar-menu')
<li>
    <a href="{{ route('teacher.dashboard') }}">
        <i class="fas fa-home"></i>
        Ana Sayfa
    </a>
</li>
<li class="active">
    <a href="{{ route('teacher.students') }}">
        <i class="fas fa-users"></i>
        Öğrenciler
    </a>
</li>
<li>
    <a href="{{ route('teacher.exams') }}">
        <i class="fas fa-file-alt"></i>
        Sınav Sonuçları
    </a>
</li>
<li>
    <a href="#">
        <i class="fas fa-chart-bar"></i>
        Analizler
    </a>
</li>
<li>
    <a href="#">
        <i class="fas fa-comments"></i>
        Mesajlar
    </a>
</li>
@endsection

@section('content')
<div class="d-flex justify-content-between align-items-center mb-4">
    <div>
        <h2><i class="fas fa-user me-2"></i>Ahmet Yılmaz</h2>
        <p class="text-muted mb-0">Öğrenci Detay ve Analiz Raporu</p>
    </div>
    <a href="{{ route('teacher.students') }}" class="btn btn-secondary">
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
                <p class="text-muted">ahmet@example.com</p>
                <div class="d-grid">
                    <button class="btn btn-primary mb-2">
                        <i class="fas fa-comment me-2"></i>Mesaj Gönder
                    </button>
                    <button class="btn btn-outline-primary">
                        <i class="fas fa-calendar-plus me-2"></i>Randevu Ayarla
                    </button>
                </div>
            </div>
        </div>
        
        <div class="card">
            <div class="card-header">
                <h5 class="mb-0"><i class="fas fa-chart-line me-2"></i>Genel İstatistikler</h5>
            </div>
            <div class="card-body">
                <div class="row text-center">
                    <div class="col-6">
                        <div class="display-6 text-primary">98.5</div>
                        <p class="mb-0">Son Sınav Neti</p>
                    </div>
                    <div class="col-6">
                        <div class="display-6 text-success">+5.75</div>
                        <p class="mb-0">İlerleme</p>
                    </div>
                </div>
                <hr>
                <div class="row text-center">
                    <div class="col-6">
                        <div class="display-6">12</div>
                        <p class="mb-0">Toplam Sınav</p>
                    </div>
                    <div class="col-6">
                        <div class="display-6">92.75</div>
                        <p class="mb-0">Ortalama Net</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div class="col-lg-8">
        <div class="card mb-4">
            <div class="card-header">
                <h5 class="mb-0"><i class="fas fa-chart-bar me-2"></i>Performans Grafiği</h5>
            </div>
            <div class="card-body">
                <div class="chart-container">
                    <canvas id="performanceChart"></canvas>
                </div>
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
                                    <a href="#" class="btn btn-sm btn-outline-primary">
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
                                    <a href="#" class="btn btn-sm btn-outline-primary">
                                        <i class="fas fa-chart-bar me-1"></i>Analiz
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>TYT Deneme #3</td>
                                <td>28 Haziran 2025</td>
                                <td class="fw-bold">89.25</td>
                                <td><span class="text-success">+2.25</span></td>
                                <td>
                                    <a href="#" class="btn btn-sm btn-outline-primary">
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
@endsection