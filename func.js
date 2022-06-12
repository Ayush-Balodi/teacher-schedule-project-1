function openForm(day) {
    document.getElementById("popupForm").style.display = "block";
    document.getElementById("hiddenDay").value=day;
}

function closeForm() {
    document.getElementById("popupForm").style.display = "none";
}

function openTable() {
    document.getElementById("viewTable").style.display = "block";
}