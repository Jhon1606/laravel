@include('admin.tags.partials.modal', [
    'modalId' => 'modalCreateTag',
    'modalLabel' => 'exampleModalLabel',
    'modalTitle' => 'Crear Etiqueta',
    'methodPut' => false,
    'formAction' => route('admin.tags.store', $tag),
    'fieldName' => 'name',
    'selectId' => 'color',
    'submitButton' => 'Crear etiqueta'
])