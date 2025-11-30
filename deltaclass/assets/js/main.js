(function($) {
    "use strict";

    // Toggle sidebar
    $('#sidebarCollapse').on('click', function () {
        $('#sidebar').toggleClass('active');
        $('#content').toggleClass('active');
    });

    // Initialize charts if canvas elements exist
    if ($('#barChart').length > 0) {
        var ctx = document.getElementById('barChart').getContext('2d');
        var barChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: ['Matematik', 'Türkçe', 'Fen', 'Sosyal'],
                datasets: [{
                    label: 'Netler',
                    data: [35, 32, 28, 30],
                    backgroundColor: [
                        'rgba(30, 60, 114, 0.7)',
                        'rgba(42, 82, 152, 0.7)',
                        'rgba(30, 60, 114, 0.5)',
                        'rgba(42, 82, 152, 0.5)'
                    ],
                    borderColor: [
                        'rgba(30, 60, 114, 1)',
                        'rgba(42, 82, 152, 1)',
                        'rgba(30, 60, 114, 1)',
                        'rgba(42, 82, 152, 1)'
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                responsive: true,
                plugins: {
                    legend: {
                        display: false
                    }
                },
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
    }

    if ($('#pieChart').length > 0) {
        var ctx2 = document.getElementById('pieChart').getContext('2d');
        var pieChart = new Chart(ctx2, {
            type: 'pie',
            data: {
                labels: ['Doğru', 'Yanlış', 'Boş'],
                datasets: [{
                    data: [120, 30, 10],
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
                plugins: {
                    legend: {
                        position: 'bottom'
                    }
                }
            }
        });
    }

    // Calendar functionality
    $('.calendar-table td').on('click', function() {
        // Highlight selected date
        $('.calendar-table td').removeClass('bg-light-blue');
        $(this).addClass('bg-light-blue');
        
        // Show event details or form for adding events
        const date = $(this).data('date');
        console.log('Selected date:', date);
    });

    // Initialize tooltips
    var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'));
    var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
        return new bootstrap.Tooltip(tooltipTriggerEl);
    });

})(jQuery);