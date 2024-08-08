document.addEventListener('DOMContentLoaded', (event) => {
    console.log('DOM fully loaded and parsed');
    const navigationSelect = document.getElementById('navigation-select');

    if (navigationSelect) {
        navigationSelect.addEventListener('change', function () {
            var url = this.value;
            console.log('Selected URL:', url);
            if (url !== "0") {
                window.location.href = url;
            }
        });
    } else {
        console.log('Navigation select element not found');
    }
});