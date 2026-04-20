<div class="modal fade" id="editUserModal{{ $user->id }}" tabindex="-1">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Editar {{ $user->name }}</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>
      <form action="{{ route('admin.users.update', $user->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="modal-body">
          <div class="mb-3">
            <label class="form-label">Nombre</label>
            <input type="text" class="form-control" name="name" value="{{ $user->name }}" required>
          </div>
          <div class="mb-3">
            <label class="form-label">Email</label>
            <input type="email" class="form-control" name="email" value="{{ $user->email }}" required>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
          <button type="submit" class="btn btn-primary">Actualizar</button>
        </div>
      </form>
    </div>
  </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
  const editButtons = document.querySelectorAll('[data-user-edit]');
  editButtons.forEach(button => {
    button.addEventListener('click', function() {
      const userId = this.dataset.userId;
      fetch(`/admin/users/${userId}/edit`)
        .then(response => response.json())
        .then(user => {
          const modal = document.getElementById(`editUserModal${userId}`);
          modal.querySelector('[name="name"]').value = user.name;
          modal.querySelector('[name="email"]').value = user.email;
          new bootstrap.Modal(modal).show();
        });
    });
  });
});
</script>
