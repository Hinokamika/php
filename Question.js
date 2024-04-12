document.addEventListener('DOMContentLoaded', function() {
    const popUpBtn = document.getElementById('pop_open');
    const formPopup = document.getElementById('anspopup');
    
    popUpBtn.addEventListener('click', function() {
        formPopup.style.display = 'block';
    });

    document.getElementById('closeFormBtn').addEventListener('click', function() {
        formPopup.style.display = 'none';
    });

});

document.addEventListener('DOMContentLoaded', function() {
    const popUpBtn = document.getElementById('pop_appear');
    const formPopup = document.getElementById('up_pop');
    
    popUpBtn.addEventListener('click', function() {
        formPopup.style.display = 'block';
    });

    document.getElementById('close_popupbtn').addEventListener('click', function() {
        formPopup.style.display = 'none';
    });

});