<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- link to the jquery library of code -->
    <script src="https://code.jquery.com/jquery-4.0.0.min.js"></script>
    <!-- link to the survey jQuery code -->
    <script src="survey.js"></script>
    
    <link rel="stylesheet" href="final.css">
</head>
<body>
    <header>
        <h1><< theme to be determined >> Survey</h1>
    </header>
    <main>
        <form id="surveyForm" name="surveyForm">
            <label for="happiness">How satisfied are you with our service?</label>
            <select id="happiness" name="happiness" required>
                <option value="" selected disabled>Select an option</option>
                <option value="very_satisfied">Very Satisfied</option>
                <option value="satisfied">Satisfied</option>
                <option value="neutral">Neutral</option>
                <option value="dissatisfied">Dissatisfied</option>
                <option value="very_dissatisfied">Very Dissatisfied</option>
            </select>

            <div id="followup" class="hidden">
                <label for="reason">What could we do better?</label>
                <textarea id="reason" name="reason" rows="5" cols="30"></textarea>
            </div>

            <div>
                <label for="comments">Any comments?</label>
                <textarea id="comments" name="comments" rows="5" cols="30"></textarea>
                <div id="char_count">0/250 characters</div>
            </div>

            <button type="submit">Submit Survey</button>
        </form>
    </main>
</body>
</html>