<?php $numero_paignas = numero_paginas($products_config['post_por_pagina'], $conexion); ?>

<section class="paginacion">
    <ul>
        <?php if(pagina_actual() === 1): ?>
            <li class="disable">&laquo;</li>
        <?php else: ?>
            <li><a href="productos.php?p=<?php echo pagina_actual() - 1; ?>">&laquo;</a></li>
        <?php endif ?>

        <?php for ($i=1; $i <= $numero_paignas ; $i++): ?>
            <?php if (pagina_actual() === $i): ?>
                <li class="active"><?php echo $i; ?></li>
            <?php else: ?>
                <li><a href="productos.php?p=<?php echo $i; ?>"><?php echo $i?></a></li>
            <?php endif; ?>
        <?php endfor; ?>

        <?php if(pagina_actual() == $numero_paignas): ?>
            <li class="disable">&raquo;</li>
        <?php else: ?>
            <li><a href="productos.php?p=<?php echo pagina_actual() + 1; ?>">&raquo;</a></li>
        <?php endif; ?>

    </ul>
</section>