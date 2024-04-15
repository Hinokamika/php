document.addEventListener('DOMContentLoaded', function() {
    const popUpBtns = document.getElementsByClassName('pop_open');
    const formPopup = document.getElementsByClassName('anspopup')[0]; 
    
    for (let i = 0; i < popUpBtns.length; i++) {
        popUpBtns[i].addEventListener('click', function() {
            formPopup.style.display = 'block';
        });
    }

    const closeFormBtn = document.getElementsByClassName('closeFormBtn')[0]; 
    
    closeFormBtn.addEventListener('click', function() {
        formPopup.style.display = 'none';
    });
});


document.addEventListener('DOMContentLoaded', function() {
    const popUpBtns = document.getElementsByClassName('pop_appear');
    const formPopup = document.getElementsByClassName('up_pop')[0];
    
    for (let i = 0; i < popUpBtns.length; i++) {
        popUpBtns[i].addEventListener('click', function() {
            formPopup.style.display = 'block';
        });
    }

    const closePopupBtn = document.getElementsByClassName('close_popupbtn')[0]; // Assuming there's only one close button
    
    closePopupBtn.addEventListener('click', function() {
        formPopup.style.display = 'none';
    });
});
