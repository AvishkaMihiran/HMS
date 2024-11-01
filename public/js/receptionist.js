// public/js/receptionist.js
function navigateTo(section) {
    switch (section) {
        case 'calendar':
            window.location.href = '/calendar'; // Update this if there's a named route for calendar
            break;
        case 'bill':
            window.location.href = '/bill'; // Update this if there's a named route for bill
            break;
        default:
            console.error("Invalid section");
    }
}

