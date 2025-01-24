<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Film Review Page</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <!-- Header -->
    <header>
        <div class="logo">MBO Cinemas</div>
        <nav>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="films.php">Films</a></li>
                <li><a href="aanbiedingen.php">Aanbiedingen</a></li>
            </ul>
        </nav>
    </header>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        .comment-box {
            margin-bottom: 20px;
        }
        .rating-buttons button {
            margin: 5px;
            padding: 10px;
            border: none;
            cursor: pointer;
        }
        .red {
            background-color: red;
            color: white;
        }
        .orange {
            background-color: orange;
            color: white;
        }
        .green {
            background-color: green;
            color: white;
        }
        .comments-section {
            margin-top: 30px;
        }
        .comment {
            padding: 10px;
            border: 1px solid #ddd;
            margin-bottom: 10px;
            border-radius: 5px;
        }
        .rating-buttons {
            display: none;
        }
        .stars {
            margin-top: 5px;
            font-size: 16px;
            color: gold;
        }
    </style>
</head>
<body>
    <h1>films reviews :D</h1>

    <div class="comment-box">
        <textarea id="comment-input" placeholder="Write your review here..." rows="4" cols="50"></textarea><br>
        <button id="post-comment">Post Comment</button>
        <div class="rating-buttons">
            <button class="red" id="rate-red">Rate 1 Star</button>
            <button class="orange" id="rate-orange">Rate 3 Stars</button>
            <button class="green" id="rate-green">Rate 5 Stars</button>
        </div>
    </div>

    <div class="comments-section" id="comments-section">
        <h2>Reviews</h2>
    </div>

    <script>
        // Select elements
        const commentInput = document.getElementById('comment-input');
        const commentsSection = document.getElementById('comments-section');
        const postCommentButton = document.getElementById('post-comment');
        const ratingButtons = document.querySelector('.rating-buttons');

        let lastCommentDiv = null;

        // Load saved comments from localStorage on page load
        window.addEventListener('load', () => {
            const savedComments = JSON.parse(localStorage.getItem('comments')) || [];
            savedComments.forEach(({ text, color, stars }) => {
                addCommentToPage(text, color, stars);
            });
        });

        // Event listener for posting a comment
        postCommentButton.addEventListener('click', () => {
            const commentText = commentInput.value.trim();
            if (commentText === '') {
                alert('Please write a comment before posting.');
                return;
            }

            // Create a new comment element
            lastCommentDiv = document.createElement('div');
            lastCommentDiv.classList.add('comment');
            lastCommentDiv.textContent = commentText;

            // Append the comment to the comments section
            commentsSection.appendChild(lastCommentDiv);

            // Clear the input field
            commentInput.value = '';

            // Show rating buttons
            ratingButtons.style.display = 'block';
        });

        // Event listeners for rating buttons
        document.getElementById('rate-red').addEventListener('click', () => rateComment('red', 1));
        document.getElementById('rate-orange').addEventListener('click', () => rateComment('orange', 3));
        document.getElementById('rate-green').addEventListener('click', () => rateComment('green', 5));

        function rateComment(ratingColor, stars) {
            if (lastCommentDiv) {
                lastCommentDiv.style.borderLeft = `5px solid ${ratingColor}`;

                // Add stars to the comment
                const starsDiv = document.createElement('div');
                starsDiv.classList.add('stars');
                starsDiv.textContent = '★'.repeat(stars);
                lastCommentDiv.appendChild(starsDiv);

                // Save the comment to localStorage
                saveCommentToLocalStorage(lastCommentDiv.textContent, ratingColor, stars);

                lastCommentDiv = null;
                ratingButtons.style.display = 'none';
            } else {
                alert('Please post a comment first before rating.');
            }
        }

        function saveCommentToLocalStorage(text, color, stars) {
            const savedComments = JSON.parse(localStorage.getItem('comments')) || [];
            savedComments.push({ text, color, stars });
            localStorage.setItem('comments', JSON.stringify(savedComments));
        }

        function addCommentToPage(text, color, stars) {
            const commentDiv = document.createElement('div');
            commentDiv.classList.add('comment');
            commentDiv.style.borderLeft = `5px solid ${color}`;
            commentDiv.textContent = text;

            const starsDiv = document.createElement('div');
            starsDiv.classList.add('stars');
            starsDiv.textContent = '★'.repeat(stars);
            commentDiv.appendChild(starsDiv);

            commentsSection.appendChild(commentDiv);
        }
    </script>

<footer>
        <div>
            <a href="locaties.php">Onze Locaties</a>
            <a href="klantenservice.php">Klantenservice</a>
            <a href="contact.php">Contact</a>
        </div>
    </footer>
</body>
</html>
