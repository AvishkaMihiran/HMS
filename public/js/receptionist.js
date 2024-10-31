function navigateTo(section) {
    switch (section) {
        case 'foods':
            window.location.href = '/foods'; // Update with the actual route
            break;
        case 'rooms':
            window.location.href = '/rooms'; // Update with the actual route
            break;
        case 'calendar':
            window.location.href = '/calendar'; // Update with the actual route
            break;
        case 'bill':
            window.location.href = '/bill'; // Update with the actual route
            break;
        default:
            console.error("Invalid section");
    }
}
