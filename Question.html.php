<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="Question.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <div class="answer-container">
        <div class='header'>
            <div class='navbar'>
                <div class='logo'>
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path fill="#ffffff" d="M440.5 386.7h-29.3c-1.5 13.5-10.5 30.8-33 30.8-20.5 0-35.3-14.2-49.5-35.8 44.2-34.2 74.7-87.5 74.7-153C403.5 111.2 306.8 32 205 32 105.3 32 7.3 111.7 7.3 228.7c0 134.1 131.3 221.6 249 189C276 451.3 302 480 351.5 480c81.8 0 90.8-75.3 89-93.3zM297 329.2C277.5 300 253.3 277 205.5 277c-30.5 0-54.3 10-69 22.8l12.2 24.3c6.2-3 13-4 19.8-4 35.5 0 53.7 30.8 69.2 61.3-10 3-20.7 4.2-32.7 4.2-75 0-107.5-53-107.5-156.7C97.5 124.5 130 71 205 71c76.2 0 108.7 53.5 108.7 157.7 .1 41.8-5.4 75.6-16.7 100.5z"/></svg>
                </div>
                <ul class='mid'>
                    <li class='mid_icon home'>
                        <button class='button' onclick="window.location.href='../Menu/Menufile.html.php'">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path fill="#ffffff" d="M575.8 255.5c0 18-15 32.1-32 32.1h-32l.7 160.2c0 2.7-.2 5.4-.5 8.1V472c0 22.1-17.9 40-40 40H456c-1.1 0-2.2 0-3.3-.1c-1.4 .1-2.8 .1-4.2 .1H416 392c-22.1 0-40-17.9-40-40V448 384c0-17.7-14.3-32-32-32H256c-17.7 0-32 14.3-32 32v64 24c0 22.1-17.9 40-40 40H160 128.1c-1.5 0-3-.1-4.5-.2c-1.2 .1-2.4 .2-3.6 .2H104c-22.1 0-40-17.9-40-40V360c0-.9 0-1.9 .1-2.8V287.6H32c-18 0-32-14-32-32.1c0-9 3-17 10-24L266.4 8c7-7 15-8 22-8s15 2 21 7L564.8 231.5c8 7 12 15 11 24z"/></svg>
                        </button>
                    </li>
                    <li class='mid_icon answer'>
                        <button class='button'>
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path fill="#ffffff" d="M438.6 150.6c12.5-12.5 12.5-32.8 0-45.3l-96-96c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L338.7 96 32 96C14.3 96 0 110.3 0 128s14.3 32 32 32l306.7 0-41.4 41.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l96-96zm-333.3 352c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L109.3 416 416 416c17.7 0 32-14.3 32-32s-14.3-32-32-32l-306.7 0 41.4-41.4c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0l-96 96c-12.5 12.5-12.5 32.8 0 45.3l96 96z"/></svg>
                        </button>
                    </li>
                    <li class='mid_icon space'>
                        <button class='button'>
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
        <div class="body">
            <div class="answer-display">
                <div class="answer-form">
                    <ul class="title-cross">
                        <li class="question-title">
                            <span>Where can I find website developers at an affordable price in 2024</span>
                        </li>
                        <li class="Xmark-icon">
                            <button class="cross-btn">
                                <svg viewBox="0 0 40 40" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M31.34 24.53A4.32 4.32 0 0 1 27 28.68h-1.24L20.45 34v-5.32H13a4.32 4.32 0 0 1-4.32-4.15ZM27 6H13a4.32 4.32 0 0 0-4.3 3.74h22.6A4.32 4.32 0 0 0 27 6ZM8.66 11.57v4.65h22.68v-4.65Zm0 11.13h22.68v-4.65H8.66Z" fill="#ffffff" class="fill-000000"></path>
                                </svg>
                            </button>
                        </li>
                    </ul>
                    <div class="num-answer">
                        <span>20 answers</span>
                    </div>
                    <ul class="function-icons">
                        <li class="answer-btn">
                            <button class="Btn">
                                <div class="sign">
                                    <svg viewBox="0 0 40 40" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M31.34 24.53A4.32 4.32 0 0 1 27 28.68h-1.24L20.45 34v-5.32H13a4.32 4.32 0 0 1-4.32-4.15ZM27 6H13a4.32 4.32 0 0 0-4.3 3.74h22.6A4.32 4.32 0 0 0 27 6ZM8.66 11.57v4.65h22.68v-4.65Zm0 11.13h22.68v-4.65H8.66Z" fill="#ffffff" class="fill-000000"></path>
                                    </svg>
                                </div>
                                <div class="text-btn">Answer</div>
                            </button>
                        </li>
                        <li class="like-btn">
                            <button class="Btn">
                                <div class="sign">
                                    <svg viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M348.45 432.7H261.8a141.5 141.5 0 0 1-49.52-8.9l-67.5-25.07a15 15 0 0 1 10.45-28.12l67.49 25.07a111.79 111.79 0 0 0 39.08 7h86.65a14.21 14.21 0 1 0 0-28.42 15 15 0 0 1 0-30h20.45a14.21 14.21 0 1 0 0-28.42 15 15 0 0 1 0-30h20.44a14.21 14.21 0 0 0 10.05-24.26 14.08 14.08 0 0 0-10.05-4.16 15 15 0 0 1 0-30h20.45a14.21 14.21 0 0 0 10-24.26 14.09 14.09 0 0 0-10-4.17H268.15A15 15 0 0 1 255 176.74a100.2 100.2 0 0 0 9.2-29.33c3.39-21.87-.79-41.64-12.42-58.76a12.28 12.28 0 0 0-22.33 7c.49 51.38-23.25 88.72-68.65 108a15 15 0 1 1-11.72-27.61c18.72-8 32.36-19.75 40.55-35.08 6.68-12.51 10-27.65 9.83-45C199.31 77 211 61 229.18 55.34s36.81.78 47.45 16.46c24.71 36.36 20.25 74.1 13.48 97.21h119.68a44.21 44.21 0 0 1 19.59 83.84 44.27 44.27 0 0 1-20.44 58.42 44.27 44.27 0 0 1-20.45 58.43 44.23 44.23 0 0 1-40 63Z" fill="#ffffff" class="fill-000000"></path>
                                        <path d="M155 410.49H69.13a15 15 0 0 1-15-15V189.86a15 15 0 0 1 15-15H155a15 15 0 0 1 15 15v205.63a15 15 0 0 1-15 15Zm-70.84-30H140V204.86H84.13Z" fill="#ffffff" class="fill-000000"></path>
                                    </svg>
                                </div>
                                <div class="text-btn">Like</div>
                            </button>
                        </li>
                        <li class="Pass-btn">
                            <button class="Btn">
                                <div class="sign">
                                    <svg viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M242.28 427.39a43.85 43.85 0 0 1-13.1-2c-18.22-5.69-29.87-21.64-29.69-40.62.16-17.35-3.15-32.5-9.83-45-8.19-15.33-21.83-27.13-40.55-35.08A15 15 0 1 1 160.83 277c45.4 19.26 69.14 56.6 68.65 108a12.28 12.28 0 0 0 22.33 7c28.34-41.71 3.47-87.63 3.22-88.09a15 15 0 0 1 13.12-22.27h141.64a14.22 14.22 0 0 0 0-28.43h-20.45a15 15 0 1 1 0-30A14.2 14.2 0 0 0 403.55 209a14.23 14.23 0 0 0-14.21-14.21H368.9a15 15 0 0 1 0-30 14.21 14.21 0 1 0 0-28.42h-20.45a15 15 0 0 1 0-30 14.21 14.21 0 1 0 0-28.42H261.8a111.69 111.69 0 0 0-39.07 7l-67.5 25.07A15 15 0 0 1 144.78 82l67.5-25.07A141.5 141.5 0 0 1 261.8 48h86.65a44.25 44.25 0 0 1 40 63 44.27 44.27 0 0 1 20.45 58.43 44.27 44.27 0 0 1 20.44 58.42 44.21 44.21 0 0 1-19.59 83.84H290.11c6.77 23.11 11.23 60.85-13.48 97.22a41.21 41.21 0 0 1-34.35 18.48Z" fill="#ffffff" class="fill-000000"></path>
                                        <path d="M155 305.85H69.13a15 15 0 0 1-15-15V85.21a15 15 0 0 1 15-15H155a15 15 0 0 1 15 15v205.64a15 15 0 0 1-15 15Zm-70.84-30H140V100.21H84.13Z" fill="#ffffff" class="fill-000000"></path>
                                    </svg>
                                </div>
                                <div class="text-btn">Pass</div>
                            </button>
                        </li>
                        <li class="option-an">
                            <input type="checkbox" id="dropbow-dots" class="dp-dropbox" />
                            <label for="dropbow-dots">
                                <svg viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M448 256c0-4.4-3.6-8-8-8H72c-4.4 0-8 3.6-8 8s3.6 8 8 8h368c4.4 0 8-3.6 8-8zm-128 64c0-4.4-3.6-8-8-8H184c-4.4 0-8 3.6-8 8s3.6 8 8 8h128c4.4 0 8-3.6 8-8zm-128-128c0-4.4-3.6-8-8-8H56c-4.4 0-8 3.6-8 8s3.6 8 8 8h128c4.4 0 8-3.6 8-8z"/>
                                </svg>
                            </label>
                            <ul class="tasks">
                                <li class="btn-size">
                                    <button class="accordion first1">Save</button>
                                </li>
                                <div class="line1"></div>
                                <li class="btn-size">
                                    <button class="accordion last1">Delete</button>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
            <?php
            include '../Menu/Menufile.php';
            $questions = []; // Initialize the $questions variable as an empty array
            foreach ($questions as $question){
            ?>
            <div class="answer-display">
                <div class="answer-form">
                    <ul class="title-cross">
                        <li class="question-title">
                            <span><?= $question['question_text']?></span>
                        </li>
                        <li class="Xmark-icon">
                            <button class="cross-btn">
                                <svg viewBox="0 0 40 40" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M31.34 24.53A4.32 4.32 0 0 1 27 28.68h-1.24L20.45 34v-5.32H13a4.32 4.32 0 0 1-4.32-4.15ZM27 6H13a4.32 4.32 0 0 0-4.3 3.74h22.6A4.32 4.32 0 0 0 27 6ZM8.66 11.57v4.65h22.68v-4.65Zm0 11.13h22.68v-4.65H8.66Z" fill="#ffffff" class="fill-000000"></path>
                                </svg>
                            </button>
                        </li>
                    </ul>
                    <div class="num-answer">
                        <span><?= $question['number_of_answers']?></span>
                    </div>
                    <ul class="function-icons">
                        <li class="answer-btn">
                            <button class="Btn">
                                <div class="sign">
                                    <svg viewBox="0 0 40 40" xmlns="http://www.w3.org/2000/svg">
                                    </svg>
                                </div>
                                <div class="text-btn">Answer</div>
                            </button>
                        </li>
                        <li class="like-btn">
                            <button class="Btn">
                                <div class="sign">
                                    <svg viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M348.45 432.7H261.8a141.5 141.5 0 0 1-49.52-8.9l-67.5-25.07a15 15 0 0 1 10.45-28.12l67.49 25.07a111.79 111.79 0 0 0 39.08 7h86.65a14.21 14.21 0 1 0 0-28.42 15 15 0 0 1 0-30h20.45a14.21 14.21 0 1 0 0-28.42 15 15 0 0 1 0-30h20.44a14.21 14.21 0 0 0 10.05-24.26 14.08 14.08 0 0 0-10.05-4.16 15 15 0 0 1 0-30h20.45a14.21 14.21 0 0 0 10-24.26 14.09 14.09 0 0 0-10-4.17H268.15A15 15 0 0 1 255 176.74a100.2 100.2 0 0 0 9.2-29.33c3.39-21.87-.79-41.64-12.42-58.76a12.28 12.28 0 0 0-22.33 7c.49 51.38-23.25 88.72-68.65 108a15 15 0 1 1-11.72-27.61c18.72-8 32.36-19.75 40.55-35.08 6.68-12.51 10-27.65 9.83-45C199.31 77 211 61 229.18 55.34s36.81.78 47.45 16.46c24.71 36.36 20.25 74.1 13.48 97.21h119.68a44.21 44.21 0 0 1 19.59 83.84 44.27 44.27 0 0 1-20.44 58.42 44.27 44.27 0 0 1-19.58 1.44z"></path>
                                    </svg>
                                </div>
                                <div class="text-btn">Like</div>
                            </button>
                        </li>
                        <li class="Pass-btn">
                            <button class="Btn">
                                <div class="sign">
                                    <svg viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M242.28 427.39a43.85 43.85 0 0 1-13.1-2c-18.22-5.69-29.87-21.64-29.69-40.62.16-17.35-3.15-32.5-9.83-45-8.19-15.33-21.83-27.13-40.55-35.08A15 15 0 1 1 160.83 277c45.4 19.26 69.14 56.6 68.65 108a12.28 12.28 0 0 0 22.33 7c28.34-41.71 3.47-87.63 3.22-88.09a15 15 0 0 1 13.12-22.27h141.64a14.22 14.22 0 0 0 0-28.43h-20.45a15 15 0 1 1 0-30A14.2 14.2 0 0 0 403.55 209a14.23 14.23 0 0 0-14.21-14.21H368.9a15 15 0 0 1 0-30 14.21 14.21 0 1 0 0-28.42h-20.45a15 15 0 0 1 0-30 14.21 14.21 0 1 0 0-28.42H261.8a111.69 111.69 0 0 0-39.07 7l-67.5 25.07A15 15 0 0 1 144.78 82l67.5-25.07A141.5 141.5 0 0 1 261.8 48h86.65a44.25 44.25 0 0 1 40 63 44.27 44.27 0 0 1 20.45 58.43 44.27 44.27 0 0 1 20.44 58.42 44.21 44.21 0 0 1-19.59 83.84H290.11c6.77 23.11 11.23 60.85-13.48 97.22a41.21 41.21 0 0 1-34.35 18.48Z" fill="#ffffff" class="fill-000000"></path>
                                        <path d="M155 305.85H69.13a15 15 0 0 1-15-15V85.21a15 15 0 0 1 15-15H155a15 15 0 0 1 15 15v205.64a15 15 0 0 1-15 15Zm-70.84-30H140V100.21H84.13Z" fill="#ffffff" class="fill-000000"></path>
                                    </svg>
                                </div>
                                <div class="text-btn">Pass</div>
                            </button>
                        </li>
                        <li class="option-an">
                            <input type="checkbox" id="dropbow-dots" class="dp-dropbox" />
                            <label for="dropbow-dots">
                                <svg viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M448 256c0-4.4-3.6-8-8-8H72c-4.4 0-8 3.6-8 8s3.6 8 8 8h368c4.4 0 8-3.6 8-8zm-128 64c0-4.4-3.6-8-8-8H184c-4.4 0-8 3.6-8 8s3.6 8 8 8h128c4.4 0 8-3.6 8-8zm-128-128c0-4.4-3.6-8-8-8H56c-4.4 0-8 3.6-8 8s3.6 8 8 8h128c4.4 0 8-3.6 8-8z"/>
                                </svg>
                            </label>
                            <ul class="tasks">
                                <li class="btn-size">
                                    <button class="accordion first1">Edit</button>
                                </li>
                                <div class="line1"></div>
                                <li class="btn-size">
                                    <button class="accordion last1">Delete</button>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
            <?php
            }
            ?>
        </div>
        
    </div>
</body>
</html>