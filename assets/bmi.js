    document.addEventListener("DOMContentLoaded", function () {
        // Get references to the height, weight, BMI button, and BMI result elements
        var heightInput = document.querySelector('input[name="height"]');
        var weightInput = document.querySelector('input[name="weight"]');
        var calculateButton = document.getElementById('calculateBMI');
        var bmiResultInput = document.getElementById('bmiResult');

        // Add a click event listener to the BMI button
        calculateButton.addEventListener('click', function () {
            // Get the height and weight values from the input fields
            var height = parseFloat(heightInput.value);
            var weight = parseFloat(weightInput.value);

            // Check if height and weight are valid numbers
            if (!isNaN(height) && !isNaN(weight)) {
                // Calculate BMI (BMI = weight / (height * height))
                var bmi = weight / ((height / 100) * (height / 100));

                // Update the BMI result input field with the calculated value
                bmiResultInput.value = bmi.toFixed(2);
            } else {
                // Handle invalid input
                alert('Please enter valid height and weight values.');
            }
        });
    });

