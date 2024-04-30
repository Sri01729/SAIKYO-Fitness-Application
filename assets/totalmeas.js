document.addEventListener("DOMContentLoaded", function () {
// Attach the click event handler to the button
 var calculateButton = document.getElementById("totalButton");


    calculateButton.addEventListener('click', function () {
    var shoulders = parseFloat(document.getElementById("shoulders").value) || 0;
    var neck = parseFloat(document.getElementById("neck").value) || 0;
    var forearms = parseFloat(document.getElementById("forearms").value) || 0;
    var bust = parseFloat(document.getElementById("bust").value) || 0;
    var chest = parseFloat(document.getElementById("chest").value) || 0;
    var rightThigh = parseFloat(document.getElementById("rightThigh").value) || 0;
    var leftThigh = parseFloat(document.getElementById("leftThigh").value) || 0;
    var rightBicep = parseFloat(document.getElementById("rightBicep").value) || 0;
    var leftBicep = parseFloat(document.getElementById("leftBicep").value) || 0;

    var totalMeasurements = shoulders + neck + forearms + bust + chest + rightThigh + leftThigh + rightBicep + leftBicep;

        document.getElementById("totalMeas").value = totalMeasurements.toFixed(2);

    });
 });