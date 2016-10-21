var fruits = ["lemon.png", "kiwi.png", "grapefruit.png", "banana.png"];
var index = 0;

// Date Code from Week 7 Lecture Code
window.onload = function date_and_season() {
    "use strict";
    // variables
    var monthNames = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"],

        full_date = new Date(),

        today = full_date.getDate(),
        this_month_text = monthNames[full_date.getMonth()],
        this_year = full_date.getFullYear(),

        new_span = document.createElement('span'),
        new_text = document.createTextNode(today + ' ' + this_month_text + ', ' + this_year),
        position = document.getElementsByTagName('footer')[0];

    new_span.appendChild(new_text);
    position.appendChild(new_span);
}

function imageForwardChange(){
    index=index+1;  
    var main_pic = document.getElementById('main_image');
    
    main_pic.src = 'images/' + fruits[index];

    if () {}
}

function imageBackChange() {
    index=index-1;  
    var main_pic = document.getElementById('main_image');
    
    main_pic.src = 'images/' + fruits[index];
}