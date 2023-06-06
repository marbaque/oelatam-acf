<?php
if (function_exists('acf_add_local_field_group')) :

    acf_add_local_field_group(array(
        'key' => 'group_647f4d1a6ba2d',
        'title' => 'Proyectos',
        'fields' => array(
            array(
                'key' => 'field_647f70bc873cb',
                'label' => 'Lista',
                'name' => 'lista',
                'type' => 'repeater',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'collapsed' => 'field_647f710b873cc',
                'min' => 1,
                'max' => 0,
                'layout' => 'row',
                'button_label' => '',
                'sub_fields' => array(
                    array(
                        'key' => 'field_647f710b873cc',
                        'label' => 'Título',
                        'name' => 'titulo',
                        'type' => 'text',
                        'instructions' => '',
                        'required' => 1,
                        'conditional_logic' => 0,
                        'wrapper' => array(
                            'width' => '',
                            'class' => '',
                            'id' => '',
                        ),
                        'default_value' => '',
                        'placeholder' => '',
                        'prepend' => '',
                        'append' => '',
                        'maxlength' => '',
                    ),
                    array(
                        'key' => 'field_647f4d4924769',
                        'label' => 'Impulsora o autor',
                        'name' => 'impulsora',
                        'type' => 'text',
                        'instructions' => '',
                        'required' => 0,
                        'conditional_logic' => 0,
                        'wrapper' => array(
                            'width' => '',
                            'class' => '',
                            'id' => '',
                        ),
                        'default_value' => '',
                        'placeholder' => '',
                        'prepend' => '',
                        'append' => '',
                        'maxlength' => '',
                    ),
                    array(
                        'key' => 'field_647f551b3e6d7',
                        'label' => 'Vínculos/Colaboraciones',
                        'name' => 'vinculos',
                        'type' => 'text',
                        'instructions' => '',
                        'required' => 0,
                        'conditional_logic' => 0,
                        'wrapper' => array(
                            'width' => '',
                            'class' => '',
                            'id' => '',
                        ),
                        'default_value' => '',
                        'placeholder' => '',
                        'prepend' => '',
                        'append' => '',
                        'maxlength' => '',
                    ),
                    array(
                        'key' => 'field_647f4d6f2476a',
                        'label' => 'Parte de una política',
                        'name' => 'es_politica',
                        'type' => 'true_false',
                        'instructions' => '',
                        'required' => 0,
                        'conditional_logic' => 0,
                        'wrapper' => array(
                            'width' => '',
                            'class' => '',
                            'id' => '',
                        ),
                        'message' => '',
                        'default_value' => 0,
                        'ui' => 1,
                        'ui_on_text' => 'Sí',
                        'ui_off_text' => 'No',
                    ),
                    array(
                        'key' => 'field_647f560dcb619',
                        'label' => 'Política',
                        'name' => 'politica',
                        'type' => 'text',
                        'instructions' => '',
                        'required' => 0,
                        'conditional_logic' => array(
                            array(
                                array(
                                    'field' => 'field_647f4d6f2476a',
                                    'operator' => '==',
                                    'value' => '1',
                                ),
                            ),
                        ),
                        'wrapper' => array(
                            'width' => '',
                            'class' => '',
                            'id' => '',
                        ),
                        'default_value' => '',
                        'placeholder' => '',
                        'prepend' => '',
                        'append' => '',
                        'maxlength' => '',
                    ),
                    array(
                        'key' => 'field_647f61d1ef6b8',
                        'label' => 'Tipo de Rea',
                        'name' => 'tipo_rea',
                        'type' => 'text',
                        'instructions' => '',
                        'required' => 0,
                        'conditional_logic' => 0,
                        'wrapper' => array(
                            'width' => '',
                            'class' => '',
                            'id' => '',
                        ),
                        'default_value' => '',
                        'placeholder' => '',
                        'prepend' => '',
                        'append' => '',
                        'maxlength' => '',
                    ),
                    array(
                        'key' => 'field_647f61f8ef6b9',
                        'label' => 'Abordaje',
                        'name' => 'abordaje',
                        'type' => 'text',
                        'instructions' => '',
                        'required' => 0,
                        'conditional_logic' => 0,
                        'wrapper' => array(
                            'width' => '',
                            'class' => '',
                            'id' => '',
                        ),
                        'default_value' => '',
                        'placeholder' => '',
                        'prepend' => '',
                        'append' => '',
                        'maxlength' => '',
                    ),
                    array(
                        'key' => 'field_647f53e5e10c7',
                        'label' => 'Descripción',
                        'name' => 'desc',
                        'type' => 'textarea',
                        'instructions' => '',
                        'required' => 0,
                        'conditional_logic' => 0,
                        'wrapper' => array(
                            'width' => '',
                            'class' => '',
                            'id' => '',
                        ),
                        'default_value' => '',
                        'placeholder' => '',
                        'maxlength' => '',
                        'rows' => '',
                        'new_lines' => '',
                    ),
                    array(
                        'key' => 'field_647f5773c7879',
                        'label' => 'url',
                        'name' => 'url',
                        'type' => 'url',
                        'instructions' => '',
                        'required' => 0,
                        'conditional_logic' => 0,
                        'wrapper' => array(
                            'width' => '',
                            'class' => '',
                            'id' => '',
                        ),
                        'default_value' => '',
                        'placeholder' => '',
                    ),
                    array(
                        'key' => 'field_647f622d8858d',
                        'label' => 'Licencia',
                        'name' => 'licencia',
                        'type' => 'select',
                        'instructions' => '',
                        'required' => 0,
                        'conditional_logic' => 0,
                        'wrapper' => array(
                            'width' => '',
                            'class' => '',
                            'id' => '',
                        ),
                        'choices' => array(
                            'Reconocimiento (BY)' => 'Reconocimiento (BY)',
                            'Reconocimiento - No Comercial (BY-NC)' => 'Reconocimiento - No Comercial (BY-NC)',
                            'Reconocimiento - No Comercial - Compartir Igual (BY-NC-SA)' => 'Reconocimiento - No Comercial - Compartir Igual (BY-NC-SA)',
                            'Reconocimiento - No Comercial - Sin Obra Derivada (BY-NC-ND)' => 'Reconocimiento - No Comercial - Sin Obra Derivada (BY-NC-ND)',
                            'Reconocimiento - Compartir Igual (BY-SA)' => 'Reconocimiento - Compartir Igual (BY-SA)',
                            'Reconocimiento - Sin Obra Derivada (BY-ND)' => 'Reconocimiento - Sin Obra Derivada (BY-ND)',
                            'Domino Público (C0)' => 'Domino Público (C0)',
                            'Seleccionado por el autor' => 'Seleccionado por el autor',
                        ),
                        'default_value' => false,
                        'allow_null' => 1,
                        'multiple' => 0,
                        'ui' => 0,
                        'return_format' => 'value',
                        'ajax' => 0,
                        'placeholder' => '',
                    ),
                ),
            ),
        ),
        'location' => array(
            array(
                array(
                    'param' => 'block',
                    'operator' => '==',
                    'value' => 'acf/proyectos',
                ),
            ),
        ),
        'menu_order' => 0,
        'position' => 'normal',
        'style' => 'default',
        'label_placement' => 'top',
        'instruction_placement' => 'label',
        'hide_on_screen' => '',
        'active' => true,
        'description' => '',
    ));

endif;
