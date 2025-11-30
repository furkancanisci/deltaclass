@extends('layouts.app')

@section('title', 'Rehberlikçi Paneli')

@section('sidebar-menu')
<li class="active">
    <a href="{{ route('guidance.dashboard') }}">
        <i class="fas fa-home"></i>
        Ana Sayfa
    </a>
</li>
<li>
    <a href="{{ route('guidance.students') }}">
        <i class="fas fa-users"></i>
        Tüm Öğrenciler
    </a>
</li>
<li>
    <a href="{{ route('guidance.schedules') }}">
        <i class="fas fa-calendar-alt"></i>
        Planlar
    </a>
</li>
<li>
    <a href="#">
        <i class="fas fa-file-alt"></i>
        Sınav Sonuçları
    </a>
</li>
<li>
    <a href="{{ route('guidance.appointments') }}">
        <i class="fas fa-calendar-check"></i>
        Randevular
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
<div class="hero-banner">
    <h1>Hoş Geldin, {{ auth()->user()->name }}!</h1>
    <p>Öğrencilerin için haftalık, aylık ve yıllık planlar oluştur, randevuları yönet.</p>
    <a href="{{ route('guidance.students') }}" class="btn btn-light btn-lg">
        <i class="fas fa-users me-2"></i>Tüm Öğrenciler
    </a>
</div>

<div class="grid-container">
    <!-- Student Overview -->
    <div class="card">
        <div class="card-header">
            <h5 class="mb-0"><i class="fas fa-users me-2"></i>Öğrenci Özeti</h5>
        </div>
        <div class="card-body">
            <div class="row text-center">
                <div class="col-md-3">
                    <div class="display-4 text-primary">42</div>
                    <p>Toplam Öğrenci</p>
                </div>
                <div class="col-md-3">
                    <div class="display-4 text-success">38</div>
                    <p>Aktif Öğrenci</p>
                </div>
                <div class="col-md-3">
                    <div class="display-4 text-warning">3</div>
                    <p>Randevuda</p>
                </div>
                <div class="col-md-3">
                    <div class="display-4 text-info">12</div>
                    <p>Bugün Planlanan</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Upcoming Appointments -->
    <div class="card">
        <div class="card-header">
            <h5 class="mb-0"><i class="fas fa-calendar-check me-2"></i>Randevular</h5>
        </div>
        <div class="card-body">
            <div class="d-flex justify-content-between mb-3">
                <div>
                    <h6 class="mb-0">Ahmet Yılmaz</h6>
                    <small class="text-muted">Bugün, 10:00</small>
                </div>
                <span class="badge bg-primary">TYT Hazırlık</span>
            </div>
            <div class="d-flex justify-content-between mb-3">
                <div>
                    <h6 class="mb-0">Ayşe Demir</h6>
                    <small class="text-muted">Yarın, 14:30</small>
                </div>
                <span class="badge bg-success">AYT Takibi</span>
            </div>
            <div class="d-flex justify-content-between">
                <div>
                    <h6 class="mb-0">Mehmet Kaya</h6>
                    <small class="text-muted">25 Temmuz, 11:00</small>
                </div>
                <span class="badge bg-warning">Motivasyon</span>
            </div>
        </div>
    </div>

    <!-- Performance Summary -->
    <div class="card">
        <div class="card-header">
            <h5 class="mb-0"><i class="fas fa-chart-line me-2"></i>Genel Performans</h5>
        </div>
        <div class="card-body">
            <div class="progress-card">
                <div class="progress-value text-success">+12%</div>
                <div class="progress-title">Ortalama TYT Net Artışı</div>
            </div>
            <div class="progress-card">
                <div class="progress-value text-primary">87%</div>
                <div class="progress-title">Hedefe Ulaşma Oranı</div>
            </div>
        </div>
    </div>
</div>

<!-- Schedule Section -->
<div class="row">
    <div class="col-lg-8">
        <div class="calendar-container">
            <div class="calendar-header">
                <h5><i class="fas fa-calendar-alt me-2"></i>Haftalık Plan</h5>
                <div>
                    <button class="btn btn-sm btn-outline-primary me-2">
                        <i class="fas fa-chevron-left"></i>
                    </button>
                    <button class="btn btn-sm btn-outline-primary">
                        <i class="fas fa-chevron-right"></i>
                    </button>
                </div>
            </div>
            <div id="weekly-calendar">
                @include('components.weekly-calendar')
            </div>
        </div>
    </div>
    
    <div class="col-lg-4">
        <div class="right-sidebar">
            <div class="sidebar-section">
                <h5><i class="fas fa-tasks me-2"></i>Yapılacaklar</h5>
                <div class="event-item">
                    <div class="fw-bold">Ahmet Yılmaz için plan hazırla</div>
                    <div class="event-time">Bugün, 16:00</div>
                </div>
                <div class="event-item">
                    <div class="fw-bold">Ayşe Demir ile görüşme</div>
                    <div class="event-time">Yarın, 14:30</div>
                </div>
            </div>
            
            <div class="sidebar-section">
                <h5><i class="fas fa-history me-2"></i>Son Aktiviteler</h5>
                <div class="activity-item">
                    <div class="fw-bold">Yeni çalışma planı oluşturuldu</div>
                    <div class="activity-time">2 saat önce</div>
                </div>
                <div class="activity-item">
                    <div class="fw-bold">Randevu oluşturuldu</div>
                    <div class="activity-time">1 gün önce</div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection