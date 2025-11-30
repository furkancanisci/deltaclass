@extends('layouts.app')

@section('title', 'Sınavlar')

@section('sidebar-menu')
<li>
    <a href="{{ route('teacher.dashboard') }}">
        <i class="fas fa-home"></i>
        Ana Sayfa
    </a>
</li>
<li>
    <a href="{{ route('teacher.students') }}">
        <i class="fas fa-users"></i>
        Öğrenciler
    </a>
</li>
<li class="active">
    <a href="{{ route('teacher.exams') }}">
        <i class="fas fa-file-alt"></i>
        Sınavlar
    </a>
</li>
<li>
    <a href="{{ route('teacher.messages') }}">
        <i class="fas fa-comments"></i>
        Mesajlar
    </a>
</li>
@endsection

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="page-header">
                <h1>Öğrenci Sınavları</h1>
                <p>Atanmış öğrencilerinizin tüm deneme sınavlarını burada görüntüleyebilirsiniz.</p>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h5 class="mb-0"><i class="fas fa-file-alt me-2"></i>Sınav Listesi</h5>
                    <div class="d-flex gap-2">
                        <select class="form-select">
                            <option>Tüm Sınıflar</option>
                            <option>9. Sınıf</option>
                            <option>10. Sınıf</option>
                            <option>11. Sınıf</option>
                            <option>12. Sınıf</option>
                        </select>
                        <button class="btn btn-primary">
                            <i class="fas fa-filter me-2"></i>Filtrele
                        </button>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>Öğrenci</th>
                                    <th>Sınıf</th>
                                    <th>Sınav Adı</th>
                                    <th>Tarih</th>
                                    <th>Toplam Net</th>
                                    <th>TYT Puanı</th>
                                    <th>AYT Puanı</th>
                                    <th>Durum</th>
                                    <th>İşlemler</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Ahmet Yılmaz</td>
                                    <td>12. Sınıf</td>
                                    <td>TYT Deneme Sınavı #1</td>
                                    <td>15.06.2025</td>
                                    <td>45.5</td>
                                    <td>285.4</td>
                                    <td>-</td>
                                    <td><span class="badge bg-success">Tamamlandı</span></td>
                                    <td>
                                        <a href="#" class="btn btn-sm btn-outline-primary">Detay</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Ahmet Yılmaz</td>
                                    <td>12. Sınıf</td>
                                    <td>TYT Deneme Sınavı #2</td>
                                    <td>22.06.2025</td>
                                    <td>48.0</td>
                                    <td>298.7</td>
                                    <td>-</td>
                                    <td><span class="badge bg-success">Tamamlandı</span></td>
                                    <td>
                                        <a href="#" class="btn btn-sm btn-outline-primary">Detay</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Ahmet Yılmaz</td>
                                    <td>12. Sınıf</td>
                                    <td>AYT Deneme Sınavı #1</td>
                                    <td>29.06.2025</td>
                                    <td>38.5</td>
                                    <td>-</td>
                                    <td>265.3</td>
                                    <td><span class="badge bg-success">Tamamlandı</span></td>
                                    <td>
                                        <a href="#" class="btn btn-sm btn-outline-primary">Detay</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Mehmet Demir</td>
                                    <td>11. Sınıf</td>
                                    <td>TYT Deneme Sınavı #3</td>
                                    <td>05.07.2025</td>
                                    <td>-</td>
                                    <td>-</td>
                                    <td>-</td>
                                    <td><span class="badge bg-warning">Beklemede</span></td>
                                    <td>
                                        <a href="#" class="btn btn-sm btn-outline-primary">Detay</a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
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
    }
    
    .page-header p {
        color: #6c757d;
        margin-bottom: 0;
    }
    
    .table th {
        font-weight: 600;
        color: #495057;
    }
    
    .badge {
        font-size: 0.85em;
        padding: 0.5em 0.75em;
    }
    
    .form-select {
        width: auto;
    }
</style>
@endsection