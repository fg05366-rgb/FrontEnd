<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Usuarios</title>
@vite(['resources/css/app.css','resources/js/app.js','resources/css/styles.css'])
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>

<h1>Usuarios</h1>

<div class="contenedor">
    <table class="table table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Email</th>
                <th>Fecha Creación</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @forelse($users as $user)
            <tr>
                <td>{{ $user->id }}</td>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                <td>{{ $user->created_at->format('d/m/Y H:i') }}</td>
                <td>
                    <button class="btn btn-sm btn-outline-primary data-user-edit" data-user-id="{{ $user->id }}">Editar</button>
                    <button class="btn btn-sm btn-outline-danger" data-bs-toggle="modal" data-bs-target="#deleteUserModal{{ $user->id }}">Eliminar</button>
                </td>
            </tr>
            @include('components.edit-user-modal', ['user' => $user])
            @include('components.delete-user-modal', ['user' => $user])
            @empty
            <tr>
                <td colspan="5" class="text-center">No hay usuarios.</td>
            </tr>
            @endforelse
        </tbody>
    </table>
</div>

</body>
</html>