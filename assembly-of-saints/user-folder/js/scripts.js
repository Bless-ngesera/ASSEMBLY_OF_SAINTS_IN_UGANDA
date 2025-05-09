// This file contains JavaScript functionality for interactive elements on the frontend pages.

// Function to handle the submission of the contact form
document.getElementById('contactForm').addEventListener('submit', function(event) {
    event.preventDefault(); // Prevent the default form submission

    // Gather form data
    const formData = new FormData(this);

    // Send the form data to the backend API
    fetch('/backend/api/contact_form.php', {
        method: 'POST',
        body: formData
    })
    .then(response => response.json())
    .then(data => {
        if (data.success) {
            alert('Your message has been sent successfully!');
            this.reset(); // Reset the form
        } else {
            alert('There was an error sending your message. Please try again.');
        }
    })
    .catch(error => {
        console.error('Error:', error);
        alert('There was an error sending your message. Please try again.');
    });
});

// Function to load past preachings
function loadPreachings() {
    fetch('/backend/api/fetch_preachings.php')
    .then(response => response.json())
    .then(data => {
        const preachingsContainer = document.getElementById('preachingsContainer');
        data.preachings.forEach(preaching => {
            const preachingElement = document.createElement('div');
            preachingElement.innerHTML = `
                <h3>${preaching.title}</h3>
                <iframe src="${preaching.video_url}" frameborder="0" allowfullscreen></iframe>
            `;
            preachingsContainer.appendChild(preachingElement);
        });
    })
    .catch(error => console.error('Error loading preachings:', error));
}

// Call the loadPreachings function when the page loads
document.addEventListener('DOMContentLoaded', loadPreachings);