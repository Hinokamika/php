document.addEventListener('DOMContentLoaded', function() {
    const popUpBtn = document.getElementById('pop_upbtn');
    const formPopup = document.getElementById('formPopup');
    
    popUpBtn.addEventListener('click', function() {
        formPopup.style.display = 'block';
    });

    document.getElementById('closeFormBtn').addEventListener('click', function() {
        formPopup.style.display = 'none';
    });

});



function switchToTab(tabName) {
    var questionForm = document.getElementById('questionForm');
    var postForm = document.getElementById('postForm');

    if (tabName === 'question') {
        questionForm.classList.add('active');
        postForm.classList.remove('active');
    } else if (tabName === 'post') {
        questionForm.classList.remove('active');
        postForm.classList.add('active');
    }


    document.querySelectorAll('.tabs button').forEach(function(button) {
        button.classList.remove('active');
    });

    activeButton.classList.add('active');
}


