document.getElementById('edit-button').addEventListener('click', function() {
    var inputs = document.querySelectorAll('.profile-section input');
    inputs.forEach(function(input) {
        input.removeAttribute('readonly');
    });
    document.getElementById('edit-button').style.display = 'none';
    document.getElementById('submit-button').style.display = 'inline-block';
});
