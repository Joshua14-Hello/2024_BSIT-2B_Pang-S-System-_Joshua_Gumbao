document.addEventListener('DOMContentLoaded', function () {
    // Get references to elements
    const uploadCoverButton = document.getElementById('upload-cover-button');
    const coverPhotoInput = document.getElementById('cover-photo-input');
    const coverPhotoImg = document.getElementById('cover-photo-img');

    const uploadProfileButton = document.getElementById('upload-profile-button');
    const profilePictureInput = document.getElementById('profile-picture-input');
    const profilePictureImg = document.getElementById('profile-picture-img');

    const editButton = document.getElementById('edit-button');
    const submitButton = document.getElementById('submit-button');
    const passwordChangeSection = document.getElementById('password-change-section');
    const changePasswordButton = document.getElementById('change-password-button');
    const oldPasswordInput = document.getElementById('old-password');
    const newPasswordInput = document.getElementById('new-password');
    const confirmNewPasswordInput = document.getElementById('confirm-new-password');

    // Event listener for cover photo upload button
    uploadCoverButton.addEventListener('click', function () {
        coverPhotoInput.click();
    });

    // Event listener for profile picture upload button
    uploadProfileButton.addEventListener('click', function () {
        profilePictureInput.click();
    });

    // Event listener for cover photo input change
    coverPhotoInput.addEventListener('change', function () {
        const file = this.files[0];
        if (file) {
            const reader = new FileReader();
            reader.onload = function (e) {
                coverPhotoImg.src = e.target.result;
            };
            reader.readAsDataURL(file);
        }
    });

    // Event listener for profile picture input change
    profilePictureInput.addEventListener('change', function () {
        const file = this.files[0];
        if (file) {
            const reader = new FileReader();
            reader.onload = function (e) {
                profilePictureImg.src = e.target.result;
            };
            reader.readAsDataURL(file);
        }
    });

    // Edit profile details
    editButton.addEventListener('click', function() {
        var inputs = document.querySelectorAll('.details_container-section input');
        inputs.forEach(function(input) {
            input.removeAttribute('readonly');
        });
        editButton.style.display = 'none';
        submitButton.style.display = 'inline-block';
        passwordChangeSection.style.display = 'block'; // Show the password change section
    });

    // Change password
    changePasswordButton.addEventListener('click', function() {
        const oldPassword = oldPasswordInput.value;
        const newPassword = newPasswordInput.value;
        const confirmNewPassword = confirmNewPasswordInput.value;

        if (newPassword !== confirmNewPassword) {
            alert("New passwords do not match.");
            return;
        }

        // This is where you would add your server-side verification
        // For example, using AJAX to verify the old password and update the new password

        // Example of client-side password verification (replace with server-side call)
        const storedOldPassword = "old password"; // This should be securely fetched from the server
        if (oldPassword === storedOldPassword) {
            alert("Password successfully changed.");
            // Here, you would send the new password to the server to update the user's password
        } else {
            alert("Old password is incorrect.");
        }
    });
});
