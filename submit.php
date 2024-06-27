<?php
document.getElementById('contactForm').addEventListener('submit', function(event) {
    event.preventDefault(); // Prevent the form from submitting

    // Fetch the form data
    let formData = new FormData(this);

    // Log form data to check what is being sent
    console.log('Form Data:', formData);

    // Simulate form submission
    fetch('/submit.php', {
        method: 'POST',
        body: formData
    })
    .then(response => {
        console.log('Response:', response);
        if (response.ok) {
            document.getElementById('success-message').innerHTML = "Thank you! Your message has been sent.";
            document.getElementById('success-message').style.display = 'block';
            document.getElementById('contactForm').reset(); // Reset the form
        } else {
            throw new Error('Network response was not ok.');
        }
    })
    .catch(error => {
        console.error('Error:', error);
        document.getElementById('success-message').innerHTML = "Oops! Something went wrong. Please try again later.";
        document.getElementById('success-message').style.display = 'block';
    });
});

?>
