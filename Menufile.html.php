<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menufile</title>
    <link rel="stylesheet" href="Menufile.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <div class='container'>
        <div class='header'>
            <div class='navbar'>
                <div class='logo'>
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path fill="#ffffff" d="M440.5 386.7h-29.3c-1.5 13.5-10.5 30.8-33 30.8-20.5 0-35.3-14.2-49.5-35.8 44.2-34.2 74.7-87.5 74.7-153C403.5 111.2 306.8 32 205 32 105.3 32 7.3 111.7 7.3 228.7c0 134.1 131.3 221.6 249 189C276 451.3 302 480 351.5 480c81.8 0 90.8-75.3 89-93.3zM297 329.2C277.5 300 253.3 277 205.5 277c-30.5 0-54.3 10-69 22.8l12.2 24.3c6.2-3 13-4 19.8-4 35.5 0 53.7 30.8 69.2 61.3-10 3-20.7 4.2-32.7 4.2-75 0-107.5-53-107.5-156.7C97.5 124.5 130 71 205 71c76.2 0 108.7 53.5 108.7 157.7 .1 41.8-5.4 75.6-16.7 100.5z"/></svg>
                </div>
                <ul class='mid'>
                    <li class='mid_icon home'>
                        <button class='button'>
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path fill="#ffffff" d="M575.8 255.5c0 18-15 32.1-32 32.1h-32l.7 160.2c0 2.7-.2 5.4-.5 8.1V472c0 22.1-17.9 40-40 40H456c-1.1 0-2.2 0-3.3-.1c-1.4 .1-2.8 .1-4.2 .1H416 392c-22.1 0-40-17.9-40-40V448 384c0-17.7-14.3-32-32-32H256c-17.7 0-32 14.3-32 32v64 24c0 22.1-17.9 40-40 40H160 128.1c-1.5 0-3-.1-4.5-.2c-1.2 .1-2.4 .2-3.6 .2H104c-22.1 0-40-17.9-40-40V360c0-.9 0-1.9 .1-2.8V287.6H32c-18 0-32-14-32-32.1c0-9 3-17 10-24L266.4 8c7-7 15-8 22-8s15 2 21 7L564.8 231.5c8 7 12 15 11 24z"/></svg>
                        </button>
                    </li>
                    <li class='mid_icon answer' onclick="window.location.href='../Question/Question.html'">
                        <button class='button'>
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path fill="#ffffff" d="M438.6 150.6c12.5-12.5 12.5-32.8 0-45.3l-96-96c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L338.7 96 32 96C14.3 96 0 110.3 0 128s14.3 32 32 32l306.7 0-41.4 41.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l96-96zm-333.3 352c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L109.3 416 416 416c17.7 0 32-14.3 32-32s-14.3-32-32-32l-306.7 0 41.4-41.4c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0l-96 96c-12.5 12.5-12.5 32.8 0 45.3l96 96z"/></svg>
                        </button>
                    </li>
                    <li class='mid_icon space' >
                        <button class='button' id="openFormBtn">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path fill="#ffffff" d="M0 96C0 60.7 28.7 32 64 32H512c35.3 0 64 28.7 64 64V416c0 35.3-28.7 64-64 64H64c-35.3 0-64-28.7-64-64V96zM128 288a32 32 0 1 0 0-64 32 32 0 1 0 0 64zm32-128a32 32 0 1 0 -64 0 32 32 0 1 0 64 0zM128 384a32 32 0 1 0 0-64 32 32 0 1 0 0 64zm96-248c-13.3 0-24 10.7-24 24s10.7 24 24 24H448c13.3 0 24-10.7 24-24s-10.7-24-24-24H224zm0 96c-13.3 0-24 10.7-24 24s10.7 24 24 24H448c13.3 0 24-10.7 24-24s-10.7-24-24-24H224zm0 96c-13.3 0-24 10.7-24 24s10.7 24 24 24H448c13.3 0 24-10.7 24-24s-10.7-24-24-24H224z"/></svg>
                        </button>
                    </li>
                    <li class='mid_icon noti'>
                        <button class='button'>
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path fill="#ffffff" d="M224 0c-17.7 0-32 14.3-32 32V51.2C119 66 64 130.6 64 208v18.8c0 47-17.3 92.4-48.5 127.6l-7.4 8.3c-8.4 9.4-10.4 22.9-5.3 34.4S19.4 416 32 416H416c12.6 0 24-7.4 29.2-18.9s3.1-25-5.3-34.4l-7.4-8.3C401.3 319.2 384 273.9 384 226.8V208c0-77.4-55-142-128-156.8V32c0-17.7-14.3-32-32-32zm45.3 493.3c12-12 18.7-28.3 18.7-45.3H224 160c0 17 6.7 33.3 18.7 45.3s28.3 18.7 45.3 18.7s33.3-6.7 45.3-18.7z"/></svg>
                        </button>
                    </li>
                    <li class='mid_icon person'>
                        <button class='button'>
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path fill="#ffffff" d="M224 256A128 128 0 1 0 224 0a128 128 0 1 0 0 256zm-45.7 48C79.8 304 0 383.8 0 482.3C0 498.7 13.3 512 29.7 512H418.3c16.4 0 29.7-13.3 29.7-29.7C448 383.8 368.2 304 269.7 304H178.3z"/></svg>
                        </button>
                    </li>
                </ul>
                <div class='total-list'>
                    <ul class='last'>
                        <li class='search'>
                            <input placeholder='Search' class='js-search' type='text'>
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path fill="#ffffff" d="M416 208c0 45.9-14.9 88.3-40 122.7L502.6 457.4c12.5 12.5 12.5 32.8 0 45.3s-32.8 12.5-45.3 0L330.7 376c-34.4 25.2-76.8 40-122.7 40C93.1 416 0 322.9 0 208S93.1 0 208 0S416 93.1 416 208zM208 352a144 144 0 1 0 0-288 144 144 0 1 0 0 288z"/></svg>
                        </li>
                        <li class='last_icon list'>
                            <div class='dropdown'>
                                <input type='checkbox' id='dropdown-toggle' class='cb-dropbox'>
                                <label for='dropdown-toggle' class='button animation'>
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path fill="#ffffff" d="M0 96C0 78.3 14.3 64 32 64H416c17.7 0 32 14.3 32 32s-14.3 32-32 32H32C14.3 128 0 113.7 0 96zM0 256c0-17.7 14.3-32 32-32H416c17.7 0 32 14.3 32 32s-14.3 32-32 32H32c-17.7 0-32-14.3-32-32zM448 416c0 17.7-14.3 32-32 32H32c-17.7 0-32-14.3-32-32s14.3-32 32-32H416c17.7 0 32 14.3 32 32z"/></svg>
                                </label>
                                <ul class='dd-c'>
                                    <li>
                                        <button class='accordion first1' id='ap-animation'>
                                            Appearance
                                        </button>
                                    </li>
                                    <div class='line'></div>
                                    <button class='accordion'>
                                        Saved
                                    </button>
                                    <div class='line'></div>
                                    <li>
                                        <button class='accordion last1'>
                                            Log out
                                        </button>
                                    </li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class='body'>
            <div class='status'>
                <div class='new-status'>
                    <a href="#" id="popupTrigger">
                        <ul class='create-status'>
                            <li class='ava-img'>
                                <img src='' alt='' class='circle-image'>
                            </li>
                            <li class='text' id="pop_upbtn">
                                <input type="hidden" name="" id="openFormBtn">
                                <input type='input' placeholder='Create questions.....'>
                            </li>
                            <li class='post-btn'>
                                <button type='submit'><span>Post</span></button>
                            </li>
                        </ul>
                    </a>
                        <div class="popup-display" id="formPopup" style="display: none;">
                            <div class="container-post">
                                <div class="tabs">
                                    <button class="active" onclick="switchToTab('question')">Create Question</button>
                                    <button class="active" onclick="switchToTab('post')">Create Post</button>
                                </div>
                                <div class="outline">
                                    <div id="questionForm" class="create-question form active">
                                        <form action="Menufile.php" method="POST">
                                            <header>Add Question</header>
                                            <input type="text" placeholder="Start your question...." name="question_text" />
                                            <div class="icons-img">
                                                <input type="file" accept="image/*" style="display: none;" id="questionImageInput" />
                                                <label for="questionImageInput">
                                                    <i class="fas fa-image"></i>
                                                </label>
                                                <img id="questionImagePreview" src="#" alt="Question Image" style="display: none; max-width: 100px; max-height: 100px;">
                                                <button class="delete-btn" >Delete</button>
                                            </div>
                                        </form>
                                            <ul class="privacy">
                                                <li>
                                                    <select name="party">
                                                        <option value="Public">Public</option>
                                                        <option value="Limited">Limited</option>
                                                    </select>
                                                </li>
                                                <li class="cancel-btn">
                                                    <button id="closeFormBtn">Cancel</button>
                                                </li>
                                                <li class="submit-btn">
                                                    <button type="submit" name="submit-question">Add question</button>
                                                </li>
                                            </ul>
                                        
                                    </div>
                                    <div id="postForm" class="create-post form">
                                        <form action="Menufile.php" method="POST">
                                            <header>Create Post</header>
                                            <input type="text" placeholder="Start a post" name="caption" />
                                        
                                            <div class="icons-img">
                                                <input type="file" accept="image/*" style="display: none;" id="postImageInput" name="image" />
                                                <label for="postImageInput">
                                                    <i class="fas fa-image"></i>
                                                </label>
                                                <img id="postImagePreview" src="#" alt="Post Image" style="display: none; max-width: 100px; max-height: 100px;">
                                                <button class="delete-btn">Delete</button>
                                            </div>
                                        </form>
                                            <ul class="privacy">
                                                <li>
                                                    <select name="party">
                                                        <option value="Public">Public</option>
                                                        <option value="Limited">Limited</option>
                                                    </select>
                                                </li>
                                                <li class="cancel-btn" onclick="cancel()">
                                                    <button id="closeFormBtn">Cancel</button>
                                                </li>
                                                <li class="submit-btn">
                                                    <button type="submit" name="submit-post">Add post</button>
                                                </li>
                                            </ul>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                </div>
                <div class='old-status'>
                    <ul class='status-header'>
                        <li class='ava-img'>
                            <img src='' alt='' class='circle-image'>
                        </li>
                        <li class='status-title'>
                            <ul class='header-cap'>
                                <li class='header-page'>
                                    <span>moingay1trangsach.vn</span>
                                </li>
                                <li class='cap'>
                                    <span>Sách: Dear, Darling | Hiên</span>                                             
                                </li>
                            </ul>
                        </li>
                        <li class='option'>
                            <input type='checkbox' id='dropbow-dots' class='dp-dropbox'>
                            <label for='dropbow-dots'>
                                <i class="fa-solid fa-ellipsis"></i>
                            </label>
                            <ul class='tasks'>
                                <li class='btn-size'>
                                    <button class='accordion first1'>
                                        Save
                                    </button>
                                </li>
                                <div class='line1'></div>
                                <li class='btn-size'>
                                    <button class='accordion last1'>
                                        Delete
                                    </button>
                                </li>
                            </ul>
                        </li>
                    </ul>
                    <div class='status-img'>
                        <img src='../Images/433432397_1056840445416586_7182932670818211728_n.jpg' alt='' class='img-scale'>
                    </div>
                    <ul class='status-icon'>
                        <li class='heart-icon icons'>
                            <label class='container1'>
                                <input type='checkbox'>
                                <div class='checkmark'>
                                    <svg viewBox="0 0 256 256">
                                    <rect fill="none" height="256" width="256"></rect>
                                    <path d="M224.6,51.9a59.5,59.5,0,0,0-43-19.9,60.5,60.5,0,0,0-44,17.6L128,59.1l-7.5-7.4C97.2,28.3,59.2,26.3,35.9,47.4a59.9,59.9,0,0,0-2.3,87l83.1,83.1a15.9,15.9,0,0,0,22.6,0l81-81C243.7,113.2,245.6,75.2,224.6,51.9Z" stroke-width="20px" stroke="#FFF" fill="none"></path></svg>
                                </div>
                            </label>
                        </li>
                        <li class='comment-icon icons'>
                            <button class='btn-cmt btn'>
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path fill="#ffffff" d="M160 368c26.5 0 48 21.5 48 48v16l72.5-54.4c8.3-6.2 18.4-9.6 28.8-9.6H448c8.8 0 16-7.2 16-16V64c0-8.8-7.2-16-16-16H64c-8.8 0-16 7.2-16 16V352c0 8.8 7.2 16 16 16h96zm48 124l-.2 .2-5.1 3.8-17.1 12.8c-4.8 3.6-11.3 4.2-16.8 1.5s-8.8-8.2-8.8-14.3V474.7v-6.4V468v-4V416H112 64c-35.3 0-64-28.7-64-64V64C0 28.7 28.7 0 64 0H448c35.3 0 64 28.7 64 64V352c0 35.3-28.7 64-64 64H309.3L208 492z"/></svg>
                            </button>
                        </li>
                        <li class='share-icon icons'>
                            <button class='btn-share btn'>
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path fill="#ffffff" d="M307 34.8c-11.5 5.1-19 16.6-19 29.2v64H176C78.8 128 0 206.8 0 304C0 417.3 81.5 467.9 100.2 478.1c2.5 1.4 5.3 1.9 8.1 1.9c10.9 0 19.7-8.9 19.7-19.7c0-7.5-4.3-14.4-9.8-19.5C108.8 431.9 96 414.4 96 384c0-53 43-96 96-96h96v64c0 12.6 7.4 24.1 19 29.2s25 3 34.4-5.4l160-144c6.7-6.1 10.6-14.7 10.6-23.8s-3.8-17.7-10.6-23.8l-160-144c-9.4-8.5-22.9-10.6-34.4-5.4z"/></svg>
                            </button>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
        <script src="Menufile.js"></script>
    
</body>
</html>
