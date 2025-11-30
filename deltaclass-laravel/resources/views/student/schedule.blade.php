@extends('layouts.app')

@section('title', 'Çalışma Planı')

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
<li class="active">
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
<div class="container-fluid p-0">
    <!-- Top Bar -->
    <div class="schedule-top-bar d-flex justify-content-between align-items-center p-3 bg-white shadow-sm">
        <div class="d-flex align-items-center">
            <h2 class="mb-0"><i class="fas fa-calendar-alt me-3"></i>Haftalık Plan</h2>
            <div class="ms-4">
                <button class="btn btn-sm btn-outline-primary me-2">
                    <i class="fas fa-chevron-left"></i>
                </button>
                <span class="fw-bold">15-21 Temmuz 2025</span>
                <button class="btn btn-sm btn-outline-primary ms-2">
                    <i class="fas fa-chevron-right"></i>
                </button>
            </div>
        </div>
        <div>
            <button class="btn btn-primary">
                <i class="fas fa-plus me-2"></i>Yeni Görev
            </button>
        </div>
    </div>

    <!-- Kanban Board -->
    <div class="kanban-board d-flex overflow-auto p-3" style="height: calc(100vh - 180px);">
        <!-- Monday -->
        <div class="kanban-column flex-shrink-0 me-3" style="width: 250px;">
            <div class="kanban-column-header bg-light p-2 rounded-top text-center">
                <h6 class="mb-0">Pazartesi</h6>
                <small class="text-muted">15 Tem</small>
            </div>
            <div class="kanban-column-body bg-white rounded-bottom p-2 border">
                <div class="kanban-card bg-white rounded shadow-sm mb-2 p-3">
                    <div class="d-flex justify-content-between align-items-start">
                        <h6 class="mb-1">Matematik Çalışma</h6>
                        <span class="badge bg-primary">09:00</span>
                    </div>
                    <p class="text-muted small mb-2">Temel Kavramlar</p>
                    <div class="d-flex justify-content-between">
                        <span class="badge bg-light text-dark">TYT</span>
                        <span class="text-muted small">2h</span>
                    </div>
                </div>
                <div class="kanban-card bg-white rounded shadow-sm mb-2 p-3">
                    <div class="d-flex justify-content-between align-items-start">
                        <h6 class="mb-1">Fen Soru Çözümü</h6>
                        <span class="badge bg-success">14:00</span>
                    </div>
                    <p class="text-muted small mb-2">Fizik - Manyetizma</p>
                    <div class="d-flex justify-content-between">
                        <span class="badge bg-light text-dark">AYT</span>
                        <span class="text-muted small">1.5h</span>
                    </div>
                </div>
                <div class="kanban-card bg-white rounded shadow-sm mb-2 p-3">
                    <div class="d-flex justify-content-between align-items-start">
                        <h6 class="mb-1">Türkçe Paragraf</h6>
                        <span class="badge bg-info">16:30</span>
                    </div>
                    <p class="text-muted small mb-2">Paragraf Testi</p>
                    <div class="d-flex justify-content-between">
                        <span class="badge bg-light text-dark">TYT</span>
                        <span class="text-muted small">1h</span>
                    </div>
                </div>
            </div>
        </div>

        <!-- Tuesday -->
        <div class="kanban-column flex-shrink-0 me-3" style="width: 250px;">
            <div class="kanban-column-header bg-light p-2 rounded-top text-center">
                <h6 class="mb-0">Salı</h6>
                <small class="text-muted">16 Tem</small>
            </div>
            <div class="kanban-column-body bg-white rounded-bottom p-2 border">
                <div class="kanban-card bg-white rounded shadow-sm mb-2 p-3">
                    <div class="d-flex justify-content-between align-items-start">
                        <h6 class="mb-1">TYT Deneme Sınavı</h6>
                        <span class="badge bg-danger">09:30</span>
                    </div>
                    <p class="text-muted small mb-2">Tamamı</p>
                    <div class="d-flex justify-content-between">
                        <span class="badge bg-light text-dark">TYT</span>
                        <span class="text-muted small">3h</span>
                    </div>
                </div>
                <div class="kanban-card bg-white rounded shadow-sm mb-2 p-3">
                    <div class="d-flex justify-content-between align-items-start">
                        <h6 class="mb-1">Kimya Çalışma</h6>
                        <span class="badge bg-warning">14:00</span>
                    </div>
                    <p class="text-muted small mb-2">Kimyasal Tepkimeler</p>
                    <div class="d-flex justify-content-between">
                        <span class="badge bg-light text-dark">AYT</span>
                        <span class="text-muted small">2h</span>
                    </div>
                </div>
            </div>
        </div>

        <!-- Wednesday -->
        <div class="kanban-column flex-shrink-0 me-3" style="width: 250px;">
            <div class="kanban-column-header bg-light p-2 rounded-top text-center">
                <h6 class="mb-0">Çarşamba</h6>
                <small class="text-muted">17 Tem</small>
            </div>
            <div class="kanban-column-body bg-white rounded-bottom p-2 border">
                <div class="kanban-card bg-white rounded shadow-sm mb-2 p-3">
                    <div class="d-flex justify-content-between align-items-start">
                        <h6 class="mb-1">Tarih Çalışma</h6>
                        <span class="badge bg-secondary">10:00</span>
                    </div>
                    <p class="text-muted small mb-2">Osmanlı Devleti</p>
                    <div class="d-flex justify-content-between">
                        <span class="badge bg-light text-dark">TYT</span>
                        <span class="text-muted small">1.5h</span>
                    </div>
                </div>
                <div class="kanban-card bg-white rounded shadow-sm mb-2 p-3">
                    <div class="d-flex justify-content-between align-items-start">
                        <h6 class="mb-1">Coğrafya Test</h6>
                        <span class="badge bg-success">13:00</span>
                    </div>
                    <p class="text-muted small mb-2">İklim</p>
                    <div class="d-flex justify-content-between">
                        <span class="badge bg-light text-dark">TYT</span>
                        <span class="text-muted small">1h</span>
                    </div>
                </div>
            </div>
        </div>

        <!-- Thursday -->
        <div class="kanban-column flex-shrink-0 me-3" style="width: 250px;">
            <div class="kanban-column-header bg-light p-2 rounded-top text-center">
                <h6 class="mb-0">Perşembe</h6>
                <small class="text-muted">18 Tem</small>
            </div>
            <div class="kanban-column-body bg-white rounded-bottom p-2 border">
                <div class="kanban-card bg-white rounded shadow-sm mb-2 p-3">
                    <div class="d-flex justify-content-between align-items-start">
                        <h6 class="mb-1">Matematik Soru</h6>
                        <span class="badge bg-primary">09:00</span>
                    </div>
                    <p class="text-muted small mb-2">Üslü-Köklü İfadeler</p>
                    <div class="d-flex justify-content-between">
                        <span class="badge bg-light text-dark">TYT</span>
                        <span class="text-muted small">2h</span>
                    </div>
                </div>
                <div class="kanban-card bg-white rounded shadow-sm mb-2 p-3">
                    <div class="d-flex justify-content-between align-items-start">
                        <h6 class="mb-1">Felsefe Çalışma</h6>
                        <span class="badge bg-info">14:00</span>
                    </div>
                    <p class="text-muted small mb-2">Bilgi Felsefesi</p>
                    <div class="d-flex justify-content-between">
                        <span class="badge bg-light text-dark">TYT</span>
                        <span class="text-muted small">1.5h</span>
                    </div>
                </div>
            </div>
        </div>

        <!-- Friday -->
        <div class="kanban-column flex-shrink-0 me-3" style="width: 250px;">
            <div class="kanban-column-header bg-light p-2 rounded-top text-center">
                <h6 class="mb-0">Cuma</h6>
                <small class="text-muted">19 Tem</small>
            </div>
            <div class="kanban-column-body bg-white rounded-bottom p-2 border">
                <div class="kanban-card bg-white rounded shadow-sm mb-2 p-3">
                    <div class="d-flex justify-content-between align-items-start">
                        <h6 class="mb-1">Biyoloji Çalışma</h6>
                        <span class="badge bg-success">10:00</span>
                    </div>
                    <p class="text-muted small mb-2">Hücre Bölünmeleri</p>
                    <div class="d-flex justify-content-between">
                        <span class="badge bg-light text-dark">AYT</span>
                        <span class="text-muted small">2h</span>
                    </div>
                </div>
                <div class="kanban-card bg-white rounded shadow-sm mb-2 p-3">
                    <div class="d-flex justify-content-between align-items-start">
                        <h6 class="mb-1">Yeni Türk Devleti</h6>
                        <span class="badge bg-secondary">13:00</span>
                    </div>
                    <p class="text-muted small mb-2">Konu Tekrarı</p>
                    <div class="d-flex justify-content-between">
                        <span class="badge bg-light text-dark">TYT</span>
                        <span class="text-muted small">1.5h</span>
                    </div>
                </div>
            </div>
        </div>

        <!-- Saturday -->
        <div class="kanban-column flex-shrink-0 me-3" style="width: 250px;">
            <div class="kanban-column-header bg-light p-2 rounded-top text-center">
                <h6 class="mb-0">Cumartesi</h6>
                <small class="text-muted">20 Tem</small>
            </div>
            <div class="kanban-column-body bg-white rounded-bottom p-2 border">
                <div class="kanban-card bg-white rounded shadow-sm mb-2 p-3">
                    <div class="d-flex justify-content-between align-items-start">
                        <h6 class="mb-1">AYT Deneme Sınavı</h6>
                        <span class="badge bg-danger">09:00</span>
                    </div>
                    <p class="text-muted small mb-2">Matematik</p>
                    <div class="d-flex justify-content-between">
                        <span class="badge bg-light text-dark">AYT</span>
                        <span class="text-muted small">3h</span>
                    </div>
                </div>
                <div class="kanban-card bg-white rounded shadow-sm mb-2 p-3">
                    <div class="d-flex justify-content-between align-items-start">
                        <h6 class="mb-1">Genel Tekrar</h6>
                        <span class="badge bg-warning">13:00</span>
                    </div>
                    <p class="text-muted small mb-2">Haftalık Konular</p>
                    <div class="d-flex justify-content-between">
                        <span class="badge bg-light text-dark">TYT/AYT</span>
                        <span class="text-muted small">2h</span>
                    </div>
                </div>
            </div>
        </div>

        <!-- Sunday -->
        <div class="kanban-column flex-shrink-0" style="width: 250px;">
            <div class="kanban-column-header bg-light p-2 rounded-top text-center">
                <h6 class="mb-0">Pazar</h6>
                <small class="text-muted">21 Tem</small>
            </div>
            <div class="kanban-column-body bg-white rounded-bottom p-2 border">
                <div class="kanban-card bg-white rounded shadow-sm mb-2 p-3">
                    <div class="d-flex justify-content-between align-items-start">
                        <h6 class="mb-1">Dinlenme</h6>
                        <span class="badge bg-success">10:00</span>
                    </div>
                    <p class="text-muted small mb-2">Hafta Sonu</p>
                    <div class="d-flex justify-content-between">
                        <span class="badge bg-light text-dark">Boş</span>
                        <span class="text-muted small">4h</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    .schedule-top-bar {
        position: sticky;
        top: 0;
        z-index: 100;
    }
    
    .kanban-board {
        display: flex;
        overflow-x: auto;
        padding-bottom: 1rem;
    }
    
    .kanban-column {
        display: flex;
        flex-direction: column;
        height: 100%;
    }
    
    .kanban-column-header {
        font-weight: 600;
        border: 1px solid #dee2e6;
        border-bottom: none;
    }
    
    .kanban-column-body {
        flex: 1;
        overflow-y: auto;
        min-height: 200px;
        max-height: calc(100vh - 250px);
    }
    
    .kanban-card {
        cursor: pointer;
        transition: all 0.2s ease;
        border-left: 3px solid #1e3c72;
    }
    
    .kanban-card:hover {
        transform: translateY(-2px);
        box-shadow: 0 4px 8px rgba(0,0,0,0.1);
    }
    
    .kanban-card h6 {
        font-size: 0.95rem;
        font-weight: 600;
    }
    
    .kanban-card .badge {
        font-size: 0.7rem;
    }
    
    .kanban-card .text-muted {
        font-size: 0.8rem;
    }
</style>
@endsection