document.addEventListener('DOMContentLoaded', function() {
    // Initialize weekly calendar
    initializeWeeklyCalendar();
});

function initializeWeeklyCalendar() {
    const calendarContainer = document.getElementById('weekly-calendar');
    if (!calendarContainer) return;
    
    // Create calendar HTML
    const today = new Date();
    const startOfWeek = getStartOfWeek(today);
    
    let calendarHTML = `
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
    `;
    
    // Generate days for the week
    for (let i = 0; i < 7; i++) {
        const currentDate = new Date(startOfWeek);
        currentDate.setDate(startOfWeek.getDate() + i);
        
        const isToday = isSameDay(currentDate, new Date());
        const dayClass = isToday ? 'today' : '';
        const dayNumber = currentDate.getDate();
        
        calendarHTML += `
            <td class="${dayClass}" data-date="${currentDate.toISOString().split('T')[0]}">
                <div class="day-number">${dayNumber}</div>
                ${generateEventsForDay(currentDate)}
            </td>
        `;
    }
    
    calendarHTML += `
                </tr>
            </tbody>
        </table>
    `;
    
    calendarContainer.innerHTML = calendarHTML;
    
    // Add event listeners to calendar cells
    document.querySelectorAll('.weekly-calendar td').forEach(cell => {
        cell.addEventListener('click', function() {
            const date = this.getAttribute('data-date');
            showEventModal(date);
        });
    });
}

function getStartOfWeek(date) {
    const day = date.getDay();
    const diff = date.getDate() - day + (day === 0 ? -6 : 1); // Adjust when day is Sunday
    return new Date(date.setDate(diff));
}

function isSameDay(date1, date2) {
    return date1.getFullYear() === date2.getFullYear() &&
           date1.getMonth() === date2.getMonth() &&
           date1.getDate() === date2.getDate();
}

function generateEventsForDay(date) {
    // Sample events - in a real app, this would come from the database
    const events = [
        { time: '09:00', title: 'TYT Deneme Sınavı', color: '#1e3c72' },
        { time: '14:00', title: 'Matematik Çalışma', color: '#2a5298' }
    ];
    
    let eventsHTML = '';
    
    // Only show events for some days as examples
    if (date.getDay() === 1 || date.getDay() === 3) { // Monday and Wednesday
        events.forEach(event => {
            eventsHTML += `
                <div class="event" style="border-left-color: ${event.color}">
                    <strong>${event.time}</strong> ${event.title}
                </div>
            `;
        });
    }
    
    return eventsHTML;
}

function showEventModal(date) {
    // In a real implementation, this would show a modal to add/edit events
    console.log('Showing event modal for date:', date);
}

// Monthly calendar functionality
function renderMonthlyCalendar(month, year) {
    const calendarContainer = document.getElementById('monthly-calendar');
    if (!calendarContainer) return;
    
    const firstDay = new Date(year, month, 1);
    const lastDay = new Date(year, month + 1, 0);
    const startDate = new Date(firstDay);
    startDate.setDate(startDate.getDate() - firstDay.getDay());
    
    const endDate = new Date(lastDay);
    endDate.setDate(endDate.getDate() + (6 - lastDay.getDay()));
    
    let calendarHTML = `
        <table class="monthly-calendar">
            <thead>
                <tr>
                    <th>Pzt</th>
                    <th>Sal</th>
                    <th>Çar</th>
                    <th>Per</th>
                    <th>Cum</th>
                    <th>Cmt</th>
                    <th>Paz</th>
                </tr>
            </thead>
            <tbody>
    `;
    
    let currentDate = new Date(startDate);
    
    for (let week = 0; week < 6; week++) {
        calendarHTML += '<tr>';
        
        for (let day = 0; day < 7; day++) {
            const isCurrentMonth = currentDate.getMonth() === month;
            const isToday = isSameDay(currentDate, new Date());
            const cellClass = `${isCurrentMonth ? '' : 'other-month'} ${isToday ? 'today' : ''}`;
            
            calendarHTML += `
                <td class="${cellClass}" data-date="${currentDate.toISOString().split('T')[0]}">
                    <div class="day-number">${currentDate.getDate()}</div>
                </td>
            `;
            
            currentDate.setDate(currentDate.getDate() + 1);
        }
        
        calendarHTML += '</tr>';
        
        // Stop if we've passed the end date
        if (currentDate > endDate) break;
    }
    
    calendarHTML += `
            </tbody>
        </table>
    `;
    
    calendarContainer.innerHTML = calendarHTML;
}