import './bootstrap';
import 'flowbite';

document.addEventListener('DOMContentLoaded', function () {
    document.getElementById('showModalButton').addEventListener('click', function() {
        document.getElementById('popup-modal').classList.remove('hidden');
    });

    document.getElementById('confirmSaveButton').addEventListener('click', function() {
        document.getElementById('noteForm').submit();
    });

    document.querySelectorAll('[data-modal-hide="popup-modal"]').forEach(button => {
        button.addEventListener('click', function() {
            document.getElementById('popup-modal').classList.add('hidden');
        });
    });
});
