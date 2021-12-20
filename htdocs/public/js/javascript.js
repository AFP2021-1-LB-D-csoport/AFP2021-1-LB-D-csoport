document.getElementById("detailedSearchButton1")
    .addEventListener("click", function() {
        document.getElementById("dropdownButton").hidden = true;
        document.getElementById("dropupButton").hidden = false;
        document.getElementById("detailedSearchPanel").hidden = false;
    }, false);

document.getElementById("detailedSearchButton2")
    .addEventListener("click", function() {
        document.getElementById("dropupButton").hidden = true;
        document.getElementById("dropdownButton").hidden = false;
        document.getElementById("detailedSearchPanel").hidden = true;
    }, false);