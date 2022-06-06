function openForm() {
    $day = document.getElementById("popupForm").innerHTML;
    document.getElementById("popupForm").style.display = "block";
}

function closeForm() {
    document.getElementById("popupForm").style.display = "none";
}

function openTable() {
    document.getElementById("viewTable").style.display = "block";
}