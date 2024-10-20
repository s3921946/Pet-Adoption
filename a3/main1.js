function searchFilter() {
    const selectedCategory = document.getElementById('myInput').value.toLowerCase();
    const galleryItems = document.getElementById('items').getElementsByClassName('col-md-4');

    for (let i = 0; i < galleryItems.length; i++) {
        const item = galleryItems[i];
        const category = item.getAttribute('data-category').trim().toLowerCase();

        if (selectedCategory === "" || selectedCategory === category || selectedCategory === "all") {
            item.style.display = '';
        } else {
            item.style.display = 'none';
        }
    }
}

function searchFilterGallery() {
    var filterValue = document.getElementById("myInput").value;
    var items = document.querySelectorAll("#items .col-12");

    items.forEach(function(item) {
        var category = item.getAttribute('data-category');

        if (filterValue === "" || filterValue === category) {
            item.style.display = "block";
        } else {
            item.style.display = "none";
        }
    });
}

function navsearch() {
    var searchInput = document.getElementById("searchInput").value;
    if (searchInput !== "") {
        window.location.href = "search.php?search=" + (searchInput);
        return false;
    }
    return false;
}

function confirmDeletion() {
    return confirm('Are you sure you want to delete this record?');
}