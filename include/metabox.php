<?php

add_filter( 'rwmb_meta_boxes', 'your_prefix_meta_boxes' );

function your_prefix_meta_boxes( $meta_boxes ) {

    $meta_boxes[] = array(
        'title'      => __( 'Informações adicionais', 'textdomain' ),
        'post_types' => 'post',
        'fields'     => array(
           
            // FILE ADVANCED (WP 3.5+)
            array(
                'name'             => esc_html__( 'Upload de arquivos', 'your-prefix' ),
                'id'               => "{$prefix}file_advanced",
                'type'             => 'file_advanced',
                'max_file_uploads' => 4,
                'mime_type'        => 'application,audio,video', // Deixar em branco para receber qualquer tipo de arquivo
        )),
    );
    return $meta_boxes;
}

?>