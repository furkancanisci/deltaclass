@extends('layouts.app')

@section('title', 'Öğrenciler')

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
    <h2><i class="fas fa-users me-2"></i>Öğrenciler</h2>
    <div>
        <button class="btn btn-outline-primary me-2">
            <i class="fas fa-filter me-1"></i> Filtrele
        </button>
        <button class="btn btn-primary">
            <i class="fas fa-download me-1"></i> Rapor İndir
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
                        <th>Son Sınav</th>
                        <th>Ortalama Net</th>
                        <th>İlerleme</th>
                        <th>Durum</th>
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
                        <td>TYT Deneme #5<br><small class="text-muted">15 Temmuz 2025</small></td>
                        <td class="fw-bold">98.5</td>
                        <td><span class="text-success"><i class="fas fa-arrow-up"></i> 5.75</span></td>
                        <td><span class="badge bg-success">Çok İyi</span></td>
                        <td>
                            <a href="{{ route('teacher.students.show', 1) }}" class="btn btn-sm btn-outline-primary">
                                <i class="fas fa-chart-line me-1"></i>Analiz
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
                        <td>AYT Deneme #3<br><small class="text-muted">10 Temmuz 2025</small></td>
                        <td class="fw-bold">87.25</td>
                        <td><span class="text-success"><i class="fas fa-arrow-up"></i> 2.50</span></td>
                        <td><span class="badge bg-warning">Orta</span></td>
                        <td>
                            <a href="{{ route('teacher.students.show', 2) }}" class="btn btn-sm btn-outline-primary">
                                <i class="fas fa-chart-line me-1"></i>Analiz
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
                        <td>TYT Deneme #4<br><small class="text-muted">5 Temmuz 2025</small></td>
                        <td class="fw-bold">76.5</td>
                        <td><span class="text-danger"><i class="fas fa-arrow-down"></i> 1.25</span></td>
                        <td><span class="badge bg-danger">Dikkat</span></td>
                        <td>
                            <a href="{{ route('teacher.students.show', 3) }}" class="btn btn-sm btn-outline-primary">
                                <i class="fas fa-chart-line me-1"></i>Analiz
                            </a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection