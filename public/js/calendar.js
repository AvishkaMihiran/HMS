// public/js/calendar.js
document.addEventListener('DOMContentLoaded', function() {
    const calendarEl = document.getElementById('calendar');
    const bookingTableBody = document.getElementById('booking-table-body');

    // Initialize a basic calendar using FullCalendar.js
    const calendar = new FullCalendar.Calendar(calendarEl, {
        initialView: 'dayGridMonth',
        selectable: true,
        dateClick: function(info) {
            const selectedDate = info.dateStr;

            // Fetch booking data for the selected date
            fetch(`/receptionist/get-bookings/${selectedDate}`)
                .then(response => response.json())
                .then(data => {
                    bookingTableBody.innerHTML = ''; // Clear previous data

                    if (data.length > 0) {
                        data.forEach(booking => {
                            const row = document.createElement('tr');
                            row.innerHTML = `
                                <td>${booking.id}</td>
                                <td>${booking.room_type}</td>
                                <td>${booking.check_out_date}</td>
                                <td>${booking.num_rooms}</td>
                            `;
                            bookingTableBody.appendChild(row);
                        });
                    } else {
                        const row = document.createElement('tr');
                        row.innerHTML = `<td colspan="4">No bookings on this date</td>`;
                        bookingTableBody.appendChild(row);
                    }
                });
        }
    });

    calendar.render();
});
