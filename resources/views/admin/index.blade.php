<x-adminLayout>
    <!-- Main content -->
    <h1>Welcome to my website</h1>
    <style>
        .form-group {
            width: 40%;
        }

        .custom-file-input::-webkit-file-upload-button {
            visibility: hidden;
        }

        .custom-file-input::before {
            content: 'Browse';
            display: inline-block;
            background: #007bff;
            color: #fff;
            padding: 6px 12px;
            outline: none;
            border: none;
            border-radius: 4px;
            white-space: nowrap;
            cursor: pointer;
        }

        .custom-file-input:hover::before {
            background: #547daa;
        }

        .custom-file-label {
            overflow: hidden;
            text-overflow: ellipsis;
            white-space: nowrap;
            cursor: pointer;
        }

        .custom-file-label::after {
            content: 'Browse';
            display: inline-block;
            background: #007bff;
            color: #fff;
            padding: 6px 12px;
            outline: none;
            border: none;
            border-radius: 4px;
            white-space: nowrap;
            cursor: pointer;
        }

        .custom-file-input:focus~.custom-file-label::after {
            box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, 0.25);
        }

        .custom-file-input {
            z-index: -1;
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            opacity: 0;
        }

        .custom-file-droparea {
            border: 2px dashed #007bff;
            padding: 1rem;
            text-align: center;
            cursor: pointer;
        }

        .custom-file-droparea:hover {
            background-color: #5279a0;
        }

        .custom-file-droparea.drag-over {
            background-color: #13304c;
        }
    </style>
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
