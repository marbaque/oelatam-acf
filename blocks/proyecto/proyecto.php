<?php

/**
 * Proyecto Block Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during backend preview render.
 * @param   int $post_id The post ID the block is rendering content against.
 *          This is either the post ID currently being displayed inside a query loop,
 *          or the post ID of the post hosting this block.
 * @param   array $context The context provided to the block by the post or it's parent block.
 */

// Support custom "anchor" values.
$anchor = '';
if (!empty($block['anchor'])) {
    $anchor = 'id="' . esc_attr($block['anchor']) . '" ';
}



// Create class attribute allowing for custom "className" and "align" values.
$class_name = 'proyecto-block';
// Create random number for random IDs of lists
$randy = rand(100, 999);

if (!empty($block['className'])) {
    $class_name .= ' ' . $block['className'];
}
if (!empty($block['align'])) {
    $class_name .= ' align' . $block['align'];
}

// Load values and assign defaults.
$lista              = get_field('lista');
$titulo             = get_sub_field('titulo') ?: 'Nombre del proyecto...';
$impulsora          = get_sub_field('impulsora');
$vinculos           = get_sub_field('vinculos');
$esPolitica         = get_sub_field('es_politica');
$politica           = get_sub_field('politica');
$tipo               = get_sub_field('tipo_rea');
$abordaje           = get_sub_field('abordaje');
$desc               = get_sub_field('desc');
$url                = get_sub_field('url');
$cc                 = get_sub_field('licencia');

// Build a valid style attribute for background and text colors.


?>
<div class="<?php echo esc_attr($class_name); ?>">

    <div class="search-bar">
        <input type="text" id="myInput<?php echo '-' . $randy; ?>" onkeyup="myFunction<?php echo $randy; ?>()" placeholder="Buscar...">
    </div>

    <?php if (have_rows('lista')) : ?>
        <ul id="myUL<?php echo '-' . $randy; ?>" class="lista">
            <?php while (have_rows('lista')) : the_row();

            ?>
                <li class="lista-item">
                    <div class="item-content">
                        <?php if (get_sub_field('url')) : ?>
                            <?php echo do_shortcode('[snap url="' . get_sub_field('url') . '" alt="' . get_sub_field('titulo') . '"]'); ?>

                            <a href="<?php esc_attr(the_sub_field('url')); ?>" target="_blank">
                                <p class="title">
                                    <?php the_sub_field('titulo'); ?>
                                    <i class="fa-light fa-arrow-up-right-from-square"></i>
                                </p>
                            </a>


                        <?php else : ?>
                            <p class="title">
                                <?php the_sub_field('titulo'); ?>
                            </p>
                        <?php endif; ?>
                        <?php if (get_sub_field('pais')) : ?><p class="pais"><i class="fa-light fa-location-dot"></i> <?php the_sub_field('pais'); ?></p><?php endif; ?>
                        <?php if (get_sub_field('autor')) : ?><p class="autor"><?php the_sub_field('impulsora'); ?></p><?php endif; ?>

                        <?php if (get_sub_field('vinculos')) : ?><p>Vínculos/colaboradores: <?php the_sub_field('vinculos'); ?></p><?php endif; ?>

                        <?php if (get_sub_field('es_politica')) : ?><p>Política: <?php the_sub_field('politica'); ?></p><?php endif; ?>

                        <?php if (get_sub_field('tipo_rea')) : ?><p>Tipo de REA: <?php the_sub_field('tipo_rea'); ?></p><?php endif; ?>

                        <?php if (get_sub_field('abordaje')) : ?><p>Abordaje: <?php the_sub_field('abordaje'); ?></p><?php endif; ?>

                        <p><?php the_sub_field('desc'); ?></p>

                        <?php if (get_sub_field('licencia')) : ?><p>Licencia: <?php the_sub_field('licencia'); ?></p><?php endif; ?>
                    </div>
                </li>
            <?php endwhile; ?>
        </ul>
    <?php endif; ?>
    <script>
        function myFunction<?php echo $randy; ?>() {
            // Declare variables
            var input, filter, ul, li, a, i, txtValue;
            input = document.getElementById('myInput<?php echo '-' . $randy; ?>');
            filter = input.value.toUpperCase();
            ul = document.getElementById("myUL<?php echo '-' . $randy; ?>");
            li = ul.getElementsByTagName('li');

            // Loop through all list items, and hide those who don't match the search query
            for (i = 0; i < li.length; i++) {
                a = li[i].getElementsByClassName("item-content")[0];
                txtValue = a.textContent || a.innerText;
                if (txtValue.toUpperCase().indexOf(filter) > -1) {
                    li[i].style.display = "";
                } else {
                    li[i].style.display = "none";
                }
            }
        }
    </script>
</div>