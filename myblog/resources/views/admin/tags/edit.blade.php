@include('admin.tags.partials.modal', [
    'modalId' => 'modalEditTag',
    'modalLabel' => 'exampleModalLabel',
    'modalTitle' => 'Editar Etiqueta',
    'formAction' => route('admin.tags.update', $tag),
    'fieldId' => 'editId',
    'fieldName' => 'editName',
    'selectId' => 'editColor',
    'submitButton' => 'Actualizar etiqueta'
])