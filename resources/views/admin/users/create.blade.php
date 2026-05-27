<x-app-layout>

    <div class="max-w-4xl mx-auto py-10">

        <h1 class="text-3xl font-bold mb-6">
            Crear Usuario
        </h1>

        <form action="{{ route('admin.users.store') }}" method="POST">

            @csrf

            <div class="mb-4">
                <label class="block font-bold">
                    Nombre
                </label>

                <input
                    type="text"
                    name="name"
                    class="w-full border rounded p-2"
                    required>
            </div>

            <div class="mb-4">
                <label class="block font-bold">
                    Usuario
                </label>

                <input
                    type="text"
                    name="user"
                    class="w-full border rounded p-2"
                    required>
            </div>

            <div class="mb-4">
                <label class="block font-bold">
                    Email
                </label>

                <input
                    type="email"
                    name="email"
                    class="w-full border rounded p-2"
                    required>
            </div>

            <div class="mb-4">
                <label class="block font-bold">
                    Rol
                </label>

                <select
                    name="rol"
                    class="w-full border rounded p-2">

                    <option value="usuario">
                        Usuario
                    </option>

                    <option value="admin">
                        Administrador
                    </option>

                </select>
            </div>

            <div class="mb-4">
                <label class="block font-bold">
                    Contraseña
                </label>

                <input
                    type="password"
                    name="password"
                    class="w-full border rounded p-2"
                    required>
            </div>

            <button
                type="submit"
                class="bg-blue-600 text-white px-4 py-2 rounded">

                Guardar Usuario

            </button>

        </form>

    </div>

</x-app-layout>