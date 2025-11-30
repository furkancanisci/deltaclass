@extends('layouts.app')

@section('title', 'Mesajlar')

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
<li>
    <a href="{{ route('student.statistics') }}">
        <i class="fas fa-chart-bar"></i>
        İstatistikler
    </a>
</li>
<li class="active">
    <a href="{{ route('student.messages') }}">
        <i class="fas fa-comments"></i>
        Mesajlar
    </a>
</li>
@endsection

@section('content')
<div class="d-flex justify-content-between align-items-center mb-4">
    <h2><i class="fas fa-comments me-2"></i>Mesajlar</h2>
    <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#newMessageModal">
        <i class="fas fa-plus me-2"></i>Yeni Mesaj
    </button>
</div>

<div class="row">
    <div class="col-lg-4">
        <div class="card">
            <div class="card-header">
                <h5 class="mb-0"><i class="fas fa-inbox me-2"></i>Gelen Kutusu</h5>
            </div>
            <div class="card-body p-0">
                <div class="message-list">
                    <div class="message-item active">
                        <div class="d-flex align-items-center">
                            <img src="https://ui-avatars.com/api/?name=Ayşe+Demir&background=0D8ABC&color=fff" 
                                 alt="Profile" class="rounded-circle me-3" width="40" height="40">
                            <div class="flex-grow-1">
                                <div class="fw-bold">Ayşe Demir</div>
                                <div class="text-muted small">TYT matematik soruları hakkında...</div>
                            </div>
                            <div class="text-muted small">12:45</div>
                        </div>
                    </div>
                    <div class="message-item">
                        <div class="d-flex align-items-center">
                            <img src="https://ui-avatars.com/api/?name=Rehberlik+Hocası&background=0D8ABC&color=fff" 
                                 alt="Profile" class="rounded-circle me-3" width="40" height="40">
                            <div class="flex-grow-1">
                                <div class="fw-bold">Rehberlik Hocası</div>
                                <div class="text-muted small">Haftalık plan değerlendirmesi</div>
                            </div>
                            <div class="text-muted small">Dün</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div class="col-lg-8">
        <div class="card">
            <div class="card-header">
                <div class="d-flex align-items-center">
                    <img src="https://ui-avatars.com/api/?name=Ayşe+Demir&background=0D8ABC&color=fff" 
                         alt="Profile" class="rounded-circle me-3" width="40" height="40">
                    <div>
                        <div class="fw-bold">Ayşe Demir</div>
                        <div class="text-muted small">Öğretmen</div>
                    </div>
                </div>
            </div>
            <div class="card-body chat-container">
                <div class="chat-messages">
                    <div class="message received">
                        <div class="message-content">
                            Merhaba Ahmet, TYT deneme sınavındaki matematik soruları ile ilgili geri bildirimi aldım. 
                            Genel olarak iyi performans gösterdin, ancak özellikle fonksiyonlar konusunda eksiklerin var.
                        </div>
                        <div class="message-time">12:30</div>
                    </div>
                    <div class="message sent">
                        <div class="message-content">
                            Merhaba Hocam, teşekkür ederim. Fonksiyonlar konusunda gerçekten zorlanıyorum. 
                            Ek kaynak önerir misiniz?
                        </div>
                        <div class="message-time">12:35</div>
                    </div>
                    <div class="message received">
                        <div class="message-content">
                            Elbette. Son yıllarda çıkmış fonksiyon sorularını içeren bu PDF'yi inceleyebilirsin. 
                            Ayrıca, her gün 5 fonksiyon sorusu çözmeni öneririm.
                        </div>
                        <div class="message-time">12:40</div>
                    </div>
                </div>
                <div class="chat-input">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Bir mesaj yazın...">
                        <button class="btn btn-primary">
                            <i class="fas fa-paper-plane"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- New Message Modal -->
<div class="modal fade" id="newMessageModal" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title"><i class="fas fa-plus me-2"></i>Yeni Mesaj</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="mb-3">
                        <label class="form-label">Alıcı</label>
                        <select class="form-select">
                            <option>Ayşe Demir (Öğretmen)</option>
                            <option>Rehberlik Hocası (Mehmet Yılmaz)</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Konu</label>
                        <input type="text" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Mesaj</label>
                        <textarea class="form-control" rows="4"></textarea>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">İptal</button>
                <button type="button" class="btn btn-primary">Gönder</button>
            </div>
        </div>
    </div>
</div>
@endsection