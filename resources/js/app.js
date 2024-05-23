import './bootstrap';
import 'flowbite';

document.addEventListener('DOMContentLoaded', function () {
    document.getElementById('showModalButton').addEventListener('click', function() {
        document.getElementById('modalSave').classList.remove('hidden');
    });

    document.getElementById('confirmSaveButton').addEventListener('click', function() {
        document.getElementById('saveForm').submit();
    });

    document.querySelectorAll('[data-modal-hide="modalSave"]').forEach(button => {
        button.addEventListener('click', function() {
            document.getElementById('modalSave').classList.add('hidden');
        });
    });
});


document.addEventListener('DOMContentLoaded', function () {
    document.getElementById('showModalDeleteButton').addEventListener('click', function() {
        document.getElementById('modalDelete').classList.remove('hidden');
    });

    document.getElementById('confirmDeleteButton').addEventListener('click', function() {
        document.getElementById('deleteForm').submit();
    });

    document.querySelectorAll('[data-modal-hide="modalDelete"]').forEach(button => {
        button.addEventListener('click', function() {
            document.getElementById('modalDelete').classList.add('hidden');
        });
    });
});

document.addEventListener('DOMContentLoaded', function () {

    document.getElementById('closeNote').addEventListener('click', function() {
        window.history.back();
    });

    document.querySelectorAll('[data-modal-hide="showNote"]').forEach(button => {
        button.addEventListener('click', function() {
            window.history.back();
        });
    });

});


const form = document.getElementById('saveForm');
const judulInput = document.getElementById('judul');
const isiInput = document.getElementById('isi');
const submitBtn = document.getElementById('showModalButton');

// Function to check if the input is empty
const checkInput = () => {
    if ((judulInput.value.trim() === '') && (isiInput.value.trim() === '')) {
        submitBtn.disabled = true;
        submitBtn.classList.add('opacity-50', 'cursor-not-allowed');
    } else {
        submitBtn.disabled = false;
        submitBtn.classList.remove('opacity-50', 'cursor-not-allowed');
    }
}

// Add event listener to the input field
judulInput.addEventListener('input', checkInput);

// Initial check
checkInput();


