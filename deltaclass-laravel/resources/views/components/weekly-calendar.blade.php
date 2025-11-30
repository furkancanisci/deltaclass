<table class="weekly-calendar">
    <thead>
        <tr>
            <th>Pazartesi</th>
            <th>Salı</th>
            <th>Çarşamba</th>
            <th>Perşembe</th>
            <th>Cuma</th>
            <th>Cumartesi</th>
            <th>Pazar</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            @for ($i = 0; $i < 7; $i++)
                @php
                    $date = \Carbon\Carbon::now()->startOfWeek()->addDays($i);
                    $isToday = $date->isToday();
                    $dayClass = $isToday ? 'today' : '';
                @endphp
                <td class="{{ $dayClass }}" data-date="{{ $date->format('Y-m-d') }}" onclick="showDayModal('{{ $date->format('Y-m-d') }}', '{{ $date->format('d F Y') }}')">
                    <div class="day-number">{{ $date->format('d') }}</div>
                    @if ($i == 1)
                        <div class="event" style="border-left-color: #1e3c72">
                            <strong>09:00</strong> TYT Deneme Sınavı
                        </div>
                    @elseif ($i == 3)
                        <div class="event" style="border-left-color: #2a5298">
                            <strong>14:00</strong> Matematik Çalışma
                        </div>
                        <div class="event" style="border-left-color: #1e3c72">
                            <strong>16:00</strong> Türkçe Testi
                        </div>
                    @endif
                </td>
            @endfor
        </tr>
    </tbody>
</table>

<!-- Day Detail Modal -->
<div class="modal fade" id="dayModal" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="dayModalTitle">Gün Detayı</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
                <input type="hidden" id="selectedDate">
                <div class="mb-3">
                    <label class="form-label">Etkinlik Başlığı</label>
                    <input type="text" class="form-control" id="eventTitle" placeholder="Etkinlik başlığı">
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label class="form-label">Başlangıç Saati</label>
                            <input type="time" class="form-control" id="startTime">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label class="form-label">Bitiş Saati</label>
                            <input type="time" class="form-control" id="endTime">
                        </div>
                    </div>
                </div>
                <div class="mb-3">
                    <label class="form-label">Açıklama</label>
                    <textarea class="form-control" id="eventDescription" rows="3" placeholder="Etkinlik açıklaması"></textarea>
                </div>
                <div class="mb-3">
                    <label class="form-label">Renk</label>
                    <select class="form-select" id="eventColor">
                        <option value="#1e3c72">Mavi</option>
                        <option value="#28a745">Yeşil</option>
                        <option value="#dc3545">Kırmızı</option>
                        <option value="#ffc107">Sarı</option>
                    </select>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">İptal</button>
                <button type="button" class="btn btn-primary" onclick="addEvent()">Ekle</button>
            </div>
        </div>
    </div>
</div>

<script>
function showDayModal(date, formattedDate) {
    document.getElementById('selectedDate').value = date;
    document.getElementById('dayModalTitle').textContent = formattedDate + ' için Etkinlik Ekle';
    document.getElementById('eventTitle').value = '';
    document.getElementById('startTime').value = '';
    document.getElementById('endTime').value = '';
    document.getElementById('eventDescription').value = '';
    document.getElementById('eventColor').value = '#1e3c72';
    
    var modal = new bootstrap.Modal(document.getElementById('dayModal'));
    modal.show();
}

function addEvent() {
    const date = document.getElementById('selectedDate').value;
    const title = document.getElementById('eventTitle').value;
    const startTime = document.getElementById('startTime').value;
    const endTime = document.getElementById('endTime').value;
    const description = document.getElementById('eventDescription').value;
    const color = document.getElementById('eventColor').value;
    
    if (!title) {
        alert('Etkinlik başlığı boş olamaz!');
        return;
    }
    
    // In a real application, you would send this data to the server
    // For now, we'll just show an alert
    alert(`Etkinlik eklendi:\nTarih: ${date}\nBaşlık: ${title}\nSaat: ${startTime} - ${endTime}`);
    
    // Close the modal
    var modal = bootstrap.Modal.getInstance(document.getElementById('dayModal'));
    modal.hide();
    
    // In a real application, you would update the calendar display here
}
</script>