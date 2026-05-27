<x-app-layout>

    <div class="max-w-7xl mx-auto py-10">

        <div class="flex justify-between mb-6">

            <h1 class="text-3xl font-bold">
                Administración de Usuarios
            </h1>

            <a
                href="{{ route('admin.users.create') }}"
                class="bg-green-600 text-white px-4 py-2 rounded">

                Nuevo Usuario

            </a>

        </div>

        <div class="bg-white shadow rounded p-5">

            <table class="w-full border">

                <thead class="bg-gray-200">

                    <tr>

                        <th class="border p-2">ID</th>
                        <th class="border p-2">Nombre</th>
                        <th class="border p-2">Usuario</th>
                        <th class="border p-2">Email</th>
                        <th class="border p-2">Rol</th>

                    </tr>

                </thead>

                <tbody>

                    @foreach($users as $user)

                        <tr>

                            <td class="border p-2">
                                {{ $user->id }}
                            </td>

                            <td class="border p-2">
                                {{ $user->name }}
                            </td>

                            <td class="border p-2">
                                {{ $user->user }}
                            </td>

                            <td class="border p-2">
                                {{ $user->email }}
                            </td>

                            <td class="border p-2">
                                {{ $user->rol }}
                            </td>

                        </tr>

                    @endforeach

                </tbody>

            </table>

        </div>

    </div>

</x-app-layout>