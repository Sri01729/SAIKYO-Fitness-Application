
function calculateMacroNutrition() {
    console.log("enter the function");

    var quantity_1 = document.getElementById("quantity1").value;
    var quantity_2 = document.getElementById("quantity2").value;
    var quantity_3 = document.getElementById("quantity3").value;

    console.log(quantity_1);
    // Get the select element
    var dropdown1 = document.getElementById("food1");
    var dropdown2 = document.getElementById("food2");
    var dropdown3 = document.getElementById("food3");

    // Get the selected option
    var selectedOption1 = dropdown1.options[dropdown1.selectedIndex];
    var selectedOption2 = dropdown2.options[dropdown2.selectedIndex];
    var selectedOption3 = dropdown3.options[dropdown3.selectedIndex];

    // Get the value of the selected option
    var selectedValue1 = selectedOption1.textContent;
    var selectedValue2 = selectedOption2.textContent;
    var selectedValue3 = selectedOption3.textContent;
    console.log(selectedValue1);
    // Define an array to food groups and their corresponding types
    var foodGroups = {
        dairy: ["Panner", "Ice cream"],
        veg: ["Roti", "Rice", "Peanut butter", "Oats"],
        non_veg: ["Beef", "Lamb", "Chicken"],
        snacks: ["Chocolate"]
    };

    // Function to calculate macro nutrients for a specific food and quantity
    function calculateMacroNutrients(food, quantity) {
        var group;
        for (var g in foodGroups) {
            if (foodGroups[g].includes(food)) {
                group = g;
                break;
            }
        }

        var protein, fat, carbs, calories;

        switch (group) {
            case "dairy":
                protein = (20 / 100) * quantity;
                fat = (40 / 100) * quantity;
                carbs = (9 / 100) * quantity;
                break;
            case "veg":
                protein = (13 / 100) * quantity;
                fat = (5 / 100) * quantity;
                carbs = (60 / 100) * quantity;
                break;
            case "non_veg":
                protein = (40 / 100) * quantity;
                fat = (15 / 100) * quantity;
                carbs = (5 / 100) * quantity;
                break;
            case "snacks":
                protein = (3 / 100) * quantity;
                fat = (80 / 100) * quantity;
                carbs = (10 / 100) * quantity;
                break;
        }


        calories = (protein * 4) + (carbs * 4) + (fat * 9);

        return {
            protein: protein,
            fat: fat,
            carbs: carbs,
            calories: calories,
        };
    }

    // Calculate macro nutrients for each selected food and quantity
        var result1 = calculateMacroNutrients(selectedValue1, quantity_1);
        var result2 = calculateMacroNutrients(selectedValue2, quantity_2);
        var result3 = calculateMacroNutrients(selectedValue3, quantity_3);

    // Set the calculated values in the corresponding input fields
        document.getElementById("protein").value = parseFloat(result1.protein.toFixed(2))+parseFloat(result2.protein.toFixed(2))+parseFloat(result3.protein.toFixed(2));
        document.getElementById("fat").value = parseFloat(result1.fat.toFixed(2))+parseFloat(result2.fat.toFixed(2))+parseFloat(result3.fat.toFixed(2));
        document.getElementById("carbs").value = parseFloat(result1.carbs.toFixed(2))+parseFloat(result2.carbs.toFixed(2))+parseFloat(result3.carbs.toFixed(2));
        document.getElementById("calories").value = parseFloat(result1.calories.toFixed(2))+parseFloat(result2.calories.toFixed(2))+parseFloat(result3.calories.toFixed(2));

}