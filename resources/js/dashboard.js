function openEditModal(paquete) {
    document.getElementById('editPackageModal').classList.remove('hidden');
    document.getElementById('editPackageForm').action = `/paquetes/${paquete.id}`;
    document.getElementById('editNombre').value = paquete.nombre;
    document.getElementById('editPeso').value = paquete.peso;
    document.getElementById('editDimensiones').value = paquete.dimensiones;
    document.getElementById('editEstado').value = paquete.estado;
    document.getElementById('editUsuarioId').value = paquete.usuario_id;
}

window.openEditModal = openEditModal;

document.addEventListener('DOMContentLoaded', function () {
    const userMenuButton = document.getElementById('userMenuButton');
    const userMenu = document.getElementById('userMenu');

    userMenuButton.addEventListener('click', () => {
        userMenu.classList.toggle('hidden');
    });
});
