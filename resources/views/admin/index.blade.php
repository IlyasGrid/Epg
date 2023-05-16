<x-adminLayout>
    <!-- Main content -->
    <h1>Welcome to my website</h1>

    <div class="form-group">
        <label for="fileInput">Choose a file:</label>
        <div class="custom-file">
            <input type="file" class="custom-file-input" id="fileInput">
            <label class="custom-file-label" for="fileInput">Select file</label>
        </div>
    </div>
    <script defer>
        // Get the file input and drop area elements
        const fileInput = document.getElementById('fileInput');
        const dropArea = document.querySelector('.custom-file-droparea');

        // Add event listeners for drag and drop functionality
        dropArea.addEventListener('dragover', handleDragOver);
        dropArea.addEventListener('dragleave', handleDragLeave);
        dropArea.addEventListener('drop', handleDrop);

        // Handle the 'dragover' event
        function handleDragOver(event) {
            event.preventDefault();
            event.stopPropagation();
            dropArea.classList.add('drag-over');
        }

        // Handle the 'dragleave' event
        function handleDragLeave(event) {
            event.preventDefault();
            event.stopPropagation();
            dropArea.classList.remove('drag-over');
        }

        // Handle the 'drop' event
        function handleDrop(event) {
            event.preventDefault();
            event.stopPropagation();
            dropArea.classList.remove('drag-over');
            const files = event.dataTransfer.files;
            fileInput.files = files;
            updateLabelText(files[0].name);
        }

        // Update the label text with the selected file name
        function updateLabelText(filename) {
            const label = document.querySelector('.custom-file-label');
            label.textContent = filename;
        }
    </script>
</x-adminLayout>
