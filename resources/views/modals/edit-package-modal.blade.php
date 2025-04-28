<div id="editPackageModal" class="hidden fixed inset-0 bg-blue-500/50 flex justify-center items-center">
    <div class="bg-white rounded-lg shadow-lg w-full sm:w-1/3">
        <div class="px-4 py-2 bg-blue-500 text-white rounded-t-lg">
            <h2 class="text-lg font-bold">Editar Paquete</h2>
        </div>
        <form id="editPackageForm" method="POST" class="p-4">
            @csrf
            @method('PUT')
            <div class="mb-4">
                <label for="nombre" class="block text-blue-700">Nombre</label>
                <input type="text" id="editNombre" name="nombre" class="w-full border border-blue-300 rounded-lg px-3 py-2" required>
            </div>
            <div class="mb-4">
                <label for="peso" class="block text-blue-700">Peso (lb)</label>
                <input type="number" id="editPeso" name="peso" class="w-full border border-blue-300 rounded-lg px-3 py-2" step="any" required>
            </div>
            <div class="mb-4">
                <label for="dimensiones" class="block text-blue-700">Dimensiones</label>
                <input type="text" id="editDimensiones" name="dimensiones" class="w-full border border-blue-300 rounded-lg px-3 py-2" required>
            </div>
            <div class="mb-4">
                <label for="estado" class="block text-blue-700">Estado</label>
                <select id="editEstado" name="estado" class="w-full border border-blue-300 rounded-lg px-3 py-2">
                    <option value="pendiente">Pendiente</option>
                    <option value="enviado">Enviado</option>
                    <option value="entregado">Entregado</option>
                </select>
            </div>
            <div class="mb-4">
                <label for="usuario_id" class="block text-blue-700">Usuario</label>
                <select id="editUsuarioId" name="usuario_id" class="w-full border border-blue-300 rounded-lg px-3 py-2">
                    @foreach ($usuarios as $usuario)
                        <option value="{{ $usuario->id }}">{{ $usuario->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="flex justify-end">
                <button type="button" class="bg-blue-400 text-white px-4 py-2 rounded-lg mr-2 hover:bg-blue-500"
                        onclick="document.getElementById('editPackageModal').classList.add('hidden')">
                    Cancelar
                </button>
                <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700">
                    Guardar Cambios
                </button>
            </div>
        </form>
    </div>
</div>
