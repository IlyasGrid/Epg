

window.addEventListener('DOMContentLoaded', () => {
    const fileInput = document.getElementById('fileInput');
    const fileLabel = document.querySelector('.custom-file-label');

    fileInput.addEventListener('change', (event) => {
        const selectedFile = event.target.files[0];
        fileLabel.textContent = selectedFile.name;
    });
});

