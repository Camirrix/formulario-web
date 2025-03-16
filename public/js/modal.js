document.addEventListener('DOMContentLoaded', function() {
    function openModal(campo, valor) {
        document.getElementById('campoLabel').innerText = 'Editar ' + campo;
        document.getElementById('campoInput').value = valor;
        document.getElementById('campoField').value = campo;
        document.getElementById('editModal').classList.remove('hidden');
    }

    function closeModal() {
        document.getElementById('editModal').classList.add('hidden');
    }

    function submitModalUpdate() {
        var editForm = document.getElementById('editForm');
        let campo = document.getElementById('campoField').value;
        let valor = document.getElementById('campoInput').value;
        let url = editForm.getAttribute('action');
        let data = new FormData(editForm);

        fetch(url, {
            method: 'POST',
            headers: {
                'X-Requested-With': 'XMLHttpRequest',
                'Accept': 'application/json'
            },
            body: data
        })
        .then(response => {
            if (!response.ok) { throw new Error('Falló la actualización.'); }
            return response.json();
        })
        .then(result => {
            let cell = document.querySelector('th[name="'+campo+'"]').parentElement.querySelector('td');
            if(cell) { cell.innerText = valor || 'No se rellenó'; }
            closeModal();
        })
        .catch(error => { console.error('Error:', error); });
    }

    // Se hacen globales para poder ser llamados desde el HTML
    window.openModal = openModal;
    window.closeModal = closeModal;
    window.submitModalUpdate = submitModalUpdate;
});
