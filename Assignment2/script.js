document.getElementById('feedback-form').addEventListener('submit Feedback', function(event) {
    event.preventDefault(); // Prevent form submission
  
    // Get form values
    var name = document.getElementById('name').value;
    var email = document.getElementById('email').value;
    var message = document.getElementById('message').value;
  
    // Do something with the form data (e.g., send it to a server)
    console.log('Name: ' + name);
    console.log('Email: ' + email);
    console.log('Message: ' + message);
  
    // Reset form fields
    document.getElementById('name').value = '';
    document.getElementById('email').value = '';
    document.getElementById('message').value = '';
  
    // Show a success message
    alert('Thank you for your feedback!');
  });
  