<div class="modal fade" id="editModal{{ $product->id }}" tabindex="-1">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Editar {{ $product->name }}</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>
      <form action="{{ route('admin.products.update', $product->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="modal-body">
          <div class="mb-3">
            <label class="form-label">Nombre</label>
            <input type="text" class="form-control" name="name" value="{{ $product->name }}" required>
          </div>
          <div class="mb-3">
            <label class="form-label">Descripción</label>
            <textarea class="form-control" name="description">{{ $product->description }}</textarea>
          </div>
          <div class="mb-3">
            <label class="form-label">Precio</label>
            <input type="number" step="0.01" class="form-control" name="price" value="{{ $product->price }}" required>
          </div>
          <div class="mb-3">
            <label class="form-label">Imagen (opcional)</label>
            <input type="file" class="form-control" name="image" accept="image/*">
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
  const editButtons = document.querySelectorAll('[data-edit]');
  editButtons.forEach(button => {
    button.addEventListener('click', function() {
      const productId = this.dataset.productId;
      fetch(`/admin/products/${productId}/edit`)
        .then(response => response.json())
        .then(product => {
          // Update modal fields
          const modal = document.getElementById(`editModal${productId}`);
          modal.querySelector('[name="name"]').value = product.name;
          modal.querySelector('[name="description"]').value = product.description || '';
          modal.querySelector('[name="price"]').value = product.price;
          new bootstrap.Modal(modal).show();
        });
    });
  });
});
</script>
