<?php
require_once '../config.php';
$actionPath = $proj_root . "Models/progresstracking.php";
?>
<div class="progress">
    <main>
        <h1 class="progressh1">Progress Tracking</h1>
        <div class="tooltip">
            <div class="tooltip_message">
                <p> About progress tracking</p>
            </div>
            <span class="tooltiptext">
                You have the flexibility to record your body measurements on any date, allowing you to review and track your progress whenever you desire</span>
        </div>
        <div class="container">

            <div class="flex-container">
                <form action="<?php echo $actionPath; ?>" method="post">
                    <div class="grid">
                        <div class="cell1">
                            <p>Body Measurements (in cms)</p>
                        </div>
                        <div class="cell">
                            <input type="date" id="date" name="date" required>
                        </div>
                        <div class="cell">
                            <input type="text" placeholder="Shoulders" id="shoulders" name="shoulders" required>
                        </div>
                        <div class="cell">
                            <input type="text" placeholder="Neck" name="neck" id="neck" required>
                        </div>
                        <div class="cell">
                            <input type="text" placeholder="Forearms" name="forearms" id="forearms" required>
                        </div>
                        <div class="cell">
                            <input type="text" placeholder="Bust" name="bust" id="bust" required>
                        </div>
                        <div class="cell">
                            <input type="text" placeholder="Chest" name="chest" id="chest" required>
                        </div>
                        <div class="cell">
                            <input type="text" placeholder="Right Thigh" name="rightThigh" id="rightThigh" required>
                        </div>
                        <div class="cell">
                            <input type="text" placeholder="Left Thigh" name="leftThigh" id="leftThigh" required>
                        </div>
                        <div class="cell">
                            <input type="text" placeholder="Right Bicep" name="rightBicep" id="rightBicep" required>
                        </div>
                        <div class="cell">
                            <input type="text" placeholder="Left Bicep" name="leftBicep" id="leftBicep" required>
                        </div>
                        <div class="cell2">
                            <button type="submit" class="submit-button">Submit</button>
                        </div>
                </form>
            </div>
            <div class="chart">
                <img src="/DGL_123_PROJECT/assets/images/bodymeasgraph.png">
            </div>
        </div>
</div>
<div class="totalmeas">
    <button id="totalButton" class="bmibutton">Total Measurements (in cms)</button>
    <input class="totalmeassub" type="text" id="totalMeas" name="totalMeasurements">
</div>
</main>