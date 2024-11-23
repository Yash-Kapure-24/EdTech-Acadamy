document.addEventListener('DOMContentLoaded', function () {
    var payButton = document.getElementById('payButton');
    var popup = document.getElementById('popup');
    var closePopup = document.getElementById('closePopup');

    payButton.addEventListener('click', function (event) {
        event.preventDefault(); // Prevent form submission

        // Show the popup
        popup.style.display = 'block';
    });

    closePopup.addEventListener('click', function () {
        popup.classList.remove('show'); // Hide the popup
    });
});