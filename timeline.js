boxElement = document.getElementsByClassName('timelineelement');
dateBtns = document.getElementsByClassName('datebtn');

var currentElement = 0;

if (boxElement) {
    for(var i = 0; i < boxElement.length; i++)
    {
        boxElement[i].style.display = "none";
    }
    dateBtns[currentElement].style.border = "1px solid #950740"
    boxElement[currentElement].style.display = "inline-block";
}

function nextBox() {
    boxElement[currentElement].style.display = "none";
    dateBtns[currentElement].style.border = "1px solid transparent";

    currentElement++;
    if(currentElement == boxElement.length)
        currentElement = 0;

        
    boxElement[currentElement].style.display = "inline-block";
    dateBtns[currentElement].style.border = "1px solid #950740";
}
    
function beforeBox() {
        
    boxElement[currentElement].style.display = "none";
    dateBtns[currentElement].style.border = "1px solid transparent";
    currentElement--;
    if(currentElement < 0)
        currentElement = boxElement.length-1;
    boxElement[currentElement].style.display = "inline-block";
    dateBtns[currentElement].style.border = "1px solid #950740";
}

function selectDate(clicked_id)
{
    var selector = clicked_id.substring(7,8);
    var difference = currentElement - (selector - 1);       //-1 because id starts at 1
    if(Math.sign(difference) == 1)
    {
        for(var i = 0; i < difference; i++)
            beforeBox();
    }
    else if(Math.sign(difference) == -1)
    {
        for(var i = 0; i < difference*-1; i++)
            nextBox();
    }
}