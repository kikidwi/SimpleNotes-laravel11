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
    document.getElementById('showModalButton').addEventListener('click', function() {
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
