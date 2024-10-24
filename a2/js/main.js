document.addEventListener('DOMContentLoaded', () => {
    console.log('DOM fully loaded and parsed');
    
    const navigationSelect = document.querySelector('#navigation-select');

    if (navigationSelect) {
        navigationSelect.addEventListener('change', (event) => {
            const selectedValue = event.target.value;
            console.log('Selected URL:', selectedValue);
            if (selectedValue) {
                window.location.assign(selectedValue);
            }
        });
    } else {
        console.warn('Navigation select element not found');
    }
});