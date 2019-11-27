
const search = document.getElementById('icon-span');
const searchText = document.getElementById('search-field');
const searchForm = document.getElementById('search-form');

searchText.style.display = "none";





search.addEventListener("click", function () {

    if (searchText.style.display === "none") {
        searchText.style.display = "block";
        searchForm.style.right = "7%";
    } else {
        searchText.style.display = "none";
        searchForm.style.right = "19%";
    }
}
)
