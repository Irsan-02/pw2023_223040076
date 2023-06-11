const keyword = document.getElementById('keyword');
const searchContainer = document.getElementById('search-table');

keyword.addEventListener('keyup', function() {
    fetch('ajax/search.php?keyword='+keyword.value)
        .then(response => response.text())
        .then(text => searchContainer.innerHTML = text)
});
