 // check to see if the HTML elements have finished loading
$(document).ready(function(){
    // add an on change event handler to the drop down list
    $('#happiness').change(function(){
        // check to see what value the user changed the drop down list to
        if ($(this).val() == "dissatisfied" || $(this).val() == "very_dissatisfied"){
            // make the followup div appear
            $('#followup').slideDown();
        }
        // for any other values selected, make the comments div disappear
        else{
            // make the followup div disappear
            $('#followup').slideUp();
        }
    }); // $('#happiness').change(function(){

    // count the number of characters the user has typed in the comments textarea
    $('#comments').on('input', function(){
        // max number of characters
        let maxNum = 250;
        // keep track of the current number of characters that were typed
        let currChars = $(this).val().length;

        // update the character counter div
        $('#char_count').text(`${currChars}/${maxNum} characters`);

        // if the user has exceeded the number of characters, change the div text color to red
        if (currChars > maxNum){
            $('#char_count').css('color', 'red');
        }
        // otherwise use the default black text for the character counter
        else{
            $('#char_count').css('color', 'black');
        }

    }); // $('#comments').on('input', function(){

}); //$(document).ready(function(){