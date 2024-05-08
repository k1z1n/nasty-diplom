const errorMessage = document.getElementById('error-message');

if (errorMessage) {
    setTimeout(() => {
        errorMessage.classList.add('invisible');
    }, 3000);
}
