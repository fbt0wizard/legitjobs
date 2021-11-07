var counter = 0;

function moreFields() {
    if(counter < 5) {
        counter++;
        var newFields = document.getElementById('default2').cloneNode(true);
        newFields.id = '';
        newFields.style.display = 'block';
        var newField = newFields.childNodes;
        for (var i=0;i<newField.length;i++) {
            var theName = newField[i].name
            if (theName)
                newField[i].name = theName + counter;
        }
        var insertHere = document.getElementById('showHere');
        insertHere.parentNode.insertBefore(newFields,insertHere);
    }
}

function act() {
    var checked = document.getElementById('stillWorking').checked;
        if(checked == true) {
            $(".to").css("display", "none");
        }else {
            $(".to").css("display", "block");
        }
    
}
