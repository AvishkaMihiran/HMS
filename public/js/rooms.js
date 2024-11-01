document.querySelectorAll('.section').forEach(section => {
    section.addEventListener('mouseenter', () => {
        section.classList.add('hovered');
    });

    section.addEventListener('mouseleave', () => {
        section.classList.remove('hovered');
    });

    section.addEventListener('click', () => {
        const sectionTitle = section.querySelector('h2').textContent;
        if (sectionTitle === 'Booking') {
            window.location.href = roomBookingUrl;
        } else {
            alert(`Navigating to ${sectionTitle}`);
        }
    });
});
