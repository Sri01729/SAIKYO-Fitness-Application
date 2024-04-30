<?php
require_once '../config.php';
$imagePath = $proj_root . "assets/images/piechart.png";
?>
<div class="progress">
    <main>
        <h1 style="text-align: center; color: #f99c1a; margin-bottom: 10px;">Nutrition Tracking</h1>
        <div class="tooltip">
            <div class="tooltip_message">
                <p> About progress tracking</p>
            </div>
            <span class="tooltiptext">
                Here, you have the capability to determine the macronutrient content present in your meals. (FYI: Have to enter all three foods).</span>
        </div>
        <div class="nutrition-form">
            <div class="meal-dropdown">
                <label for="meal">Meal:</label>
                <select id="meal">
                    <option value="breakfast">Breakfast</option>
                    <option value="lunch">Lunch</option>
                    <option value="dinner">Dinner</option>
                    <option value="snacks">Snacks</option>
                </select>
            </div>
            <div class="add-food">
                <label for="food">Add Food:</label>
                <span class="add-button">+</span>
            </div>
            <div class="tablecont">
                <table>
                    <tr>
                        <td>
                            <label for="food1">Food:</label>
                            <select id="food1">
                                <option value="">Select the food item</option>
                                <?php
                                // Include the PHP file to access the $food array
                                include '../Models/nutritiondata.php';

                                // Loop through $food and populate the dropdown
                                foreach ($food as $foodItem) {
                                    echo '<option value="' . $foodItem['id'] . '">' . $foodItem['food_name'] . '</option>';
                                }
                                ?>
                            </select>
                        </td>
                        <td>
                            <label for="quantity1">Quantity(In gms):</label>
                            <input type="number" id="quantity1" placeholder="0" required>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="food2">Food:</label>
                            <select id="food2">
                                <option value="">Select the food item</option>
                                <?php
                                // Include the PHP file to access the $food array
                                include '../Models/nutritiondata.php';

                                // Loop through $food and populate the dropdown
                                foreach ($food as $foodItem) {
                                    echo '<option value="' . $foodItem['id'] . '">' . $foodItem['food_name'] . '</option>';
                                }
                                ?>
                            </select>
                        </td>
                        <td>
                            <label for="quantity2">Quantity(In gms):</label>
                            <input type="number" id="quantity2" placeholder="0" required>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="food3">Food:</label>
                            <select id="food3">
                                <option value="">Select the food item</option>
                                <?php
                                // Include the PHP file to access the $food array
                                include '../Models/nutritiondata.php';

                                // Loop through $food and populate the dropdown
                                foreach ($food as $foodItem) {
                                    echo '<option value="' . $foodItem['id'] . '">' . $foodItem['food_name'] . '</option>';
                                }
                                ?>
                            </select>
                        </td>
                        <td>
                            <label for="quantity3">Quantity(In gms):</label>
                            <input type="number" id="quantity3" placeholder="0" required>
                        </td>
                    </tr>
                </table>
                <div class="macro">
                    <h2>Macro Nutrients</h2>
                    <div class="macro-inputs">
                        <div class="macro-row">
                            <label for="protein">Protein(per 100gms):</label>
                            <input type="text" id="protein">
                        </div>
                        <div class="macro-row">
                            <label for="fats">Fats(per 100gms):</label>
                            <input type="text" id="fat">
                        </div>
                        <div class="macro-row">
                            <label for="carbs">Carbs(per 100gms):</label>
                            <input type="text" id="carbs">
                        </div>
                        <div class="macro-row">
                            <label for="calories">Calories:</label>
                            <input type="text" id="calories">
                        </div>
                    </div>
                    <div class="macro-chart">
                        <img src="<?= $imagePath ?>">
                    </div>
                </div>
            </div>
        </div>
        <div style="margin-top: 100px ;"></div>
        <button class="submit-button" onclick="calculateMacroNutrition()" style=" margin: 0px 0px 80px 650px; ">Submit</button>
    </main>