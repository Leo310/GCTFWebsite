boxElement = document.getElementsByClassName('timelineelement');

var currentElement = 0;

if (boxElement) {
    for(var i = 0; i < boxElement.length; i++)
    {
        boxElement[i].style.display = "none";
    }

    boxElement[currentElement].style.display = "inline-block";
}

function nextBox() {
    // Recalculate position:

    boxElement[currentElement].style.display = "none";
    currentElement++;
    if(currentElement == boxElement.length)
        currentElement = 0;
    boxElement[currentElement].style.display = "inline-block";
}

function beforeBox() {
    // Recalculate position:

    boxElement[currentElement].style.display = "none";
    currentElement--;
    if(currentElement < 0)
        currentElement = boxElement.length-1;
    boxElement[currentElement].style.display = "inline-block";
}
