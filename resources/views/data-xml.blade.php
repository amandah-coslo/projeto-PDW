<?php echo '<?xml version="1.0" encoding="UTF-8"?>'; ?>
<data>
@foreach($registros as $item)
    <item>
        <tipoItem>{{ $item->tipoItem }}</tipoItem>
        <preco>{{ $item->preco }}</preco>
        <material>{{ $item->material }}</material>
        <cor>{{ $item->cor }}</cor>
        <tamanho>{{ $item->tamanho }}</tamanho>
    </item>
@endforeach
</data>