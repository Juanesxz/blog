<x-mail::message>
# Correo por aprobar


<x-mail::panel>
    se ha creado un nuevo post que necesita ser enviado
</x-mail::panel>

<x-mail::button :url="route('posts.show', $post)" color="primary">
    Click aqui para aprobar
</x-mail::button>

</x-mail::message>
