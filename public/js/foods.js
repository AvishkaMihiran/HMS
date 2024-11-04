document.querySelectorAll('.section').forEach(section => {
    // Add hover effect
    section.addEventListener('mouseenter', () => {
        section.classList.add('hovered');
    });

    section.addEventListener('mouseleave', () => {
        section.classList.remove('hovered');
    });

    // Add click functionality with redirection for each section
    section.addEventListener('click', () => {
        const sectionTitle = section.querySelector('h2').textContent;
        if (sectionTitle === 'Order') {
            window.location.href = foodOrderingUrl; // Redirect to food-ordering URL
        } else if (sectionTitle === 'Details') {
            window.location.href = foodMenuUrl; // Redirect to foodmenu URL
        } else {
            alert(`Navigating to ${sectionTitle}`);
        }
    });
});

