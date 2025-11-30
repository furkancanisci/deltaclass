@extends('layouts.app')

@section('title', 'Randevular')

@section('sidebar-menu')
<li>
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
<li class="active">
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
<div class="d-flex justify-content-between align-items-center mb-4">
    <h2><i class="fas fa-calendar-check me-2"></i>Randevular</h2>
    <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#createAppointmentModal">
        <i class="fas fa-plus me-1"></i> Yeni Randevu
    </button>
</div>

<div class="card">
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>Öğrenci</th>
                        <th>Tarih/Saat</th>
                        <th>Konu</th>
                        <th>Durum</th>
                        <th>İşlemler</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Ahmet Yılmaz</td>
                        <td>21 Kasım 2025, 10:00</td>
                        <td>TYT Hazırlık</td>
                        <td><span class="badge bg-primary">Planlandı</span></td>
                        <td>
                            <button class="btn btn-sm btn-outline-primary">
                                <i class="fas fa-edit me-1"></i>Düzenle
                            </button>
                            <button class="btn btn-sm btn-outline-danger">
                                <i class="fas fa-trash me-1"></i>Sil
                            </button>
                        </td>
                    </tr>
                    <tr>
                        <td>Ayşe Demir</td>
                        <td>22 Kasım 2025, 14:30</td>
                        <td>Motivasyon</td>
                        <td><span class="badge bg-warning">Beklemede</span></td>
                        <td>
                            <button class="btn btn-sm btn-outline-primary">
                                <i class="fas fa-edit me-1"></i>Düzenle
                            </button>
                            <button class="btn btn-sm btn-outline-danger">
                                <i class="fas fa-trash me-1"></i>Sil
                            </button>
                        </td>
                    </tr>
                    <tr>
                        <td>Mehmet Kaya</td>
                        <td>25 Kasım 2025, 11:00</td>
                        <td>Bölüm Seçimi</td>
                        <td><span class="badge bg-success">Tamamlandı</span></td>
                        <td>
                            <button class="btn btn-sm btn-outline-primary">
                                <i class="fas fa-edit me-1"></i>Düzenle
                            </button>
                            <button class="btn btn-sm btn-outline-danger">
                                <i class="fas fa-trash me-1"></i>Sil
                            </button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

<!-- Create Appointment Modal -->
<div class="modal fade" id="createAppointmentModal" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title"><i class="fas fa-calendar-plus me-2"></i>Yeni Randevu</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="mb-3">
                        <label class="form-label">Öğrenci</label>
                        <select class="form-select">
                            <option>Ahmet Yılmaz</option>
                            <option>Ayşe Demir</option>
                            <option>Mehmet Kaya</option>
                        </select>
                    </div>
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
@endsection