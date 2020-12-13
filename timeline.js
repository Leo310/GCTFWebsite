boxElement = document.getElementsByClassName('timelineelement');

var currentElement = 1;

if (boxElement) {
    for(var i = 1; i < boxElement.length-1; i++)
    {
        boxElement[i].style.display = "none";
    }

    boxElement[0].addEventListener('click', beforeBox);
    boxElement[boxElement.length-1].addEventListener('click', nextBox);
    boxElement[currentElement].style.display = "inline-block";
}

function nextBox() {
    // Recalculate position:

    boxElement[currentElement].style.display = "none";
    currentElement++;
    if(currentElement == boxElement.length-1)
        currentElement = 1;
    boxElement[currentElement].style.display = "inline-block";
}

function beforeBox() {
    // Recalculate position:

    boxElement[currentElement].style.display = "none";
    currentElement--;
    if(currentElement == 0)
        currentElement = boxElement.length-2;
    boxElement[currentElement].style.display = "inline-block";
}
