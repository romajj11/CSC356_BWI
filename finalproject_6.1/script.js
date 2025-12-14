// Wait for the page to load
$(document).ready(function() {

    // =================== GAME PAGE =====================
    // Only run if ".answer" elements exist on the page
    if ($(".answer").length > 0) {

        let selectedAnswer = ""; // Stores user's selection

        // When user clicks on an answer
        $(".answer").click(function() {
            // Remove "selected" class from all options
            $(".answer").removeClass("selected");

            // Highlight the clicked answer
            $(this).addClass("selected");

            // Store the selected answer text
            selectedAnswer = $(this).attr("data-answer");
        });

        // When user clicks "Submit Answer"
        $("#submitBtn").click(function() {

            // Check if an answer is selected
            if (selectedAnswer === "") {
                alert("Please select an answer first!");
                return;
            }

            // Check if answer is correct
            let correctAnswer = "Paris"; // Replace with dynamic check from DB if needed

            if (selectedAnswer === correctAnswer) {
                let currentScore = parseInt($("#scoreValue").text());
                $("#scoreValue").text(currentScore + 1);
                alert("Correct!");
            } else {
                alert("Incorrect!");
            }
        });
    }

});
