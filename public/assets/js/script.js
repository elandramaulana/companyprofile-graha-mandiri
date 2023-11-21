document.addEventListener("DOMContentLoaded", function() {
    if (sessionStorage.getItem('success')) {
        alert(sessionStorage.getItem('success'));
        sessionStorage.removeItem('success'); // Remove the success message from sessionStorage
    }
});