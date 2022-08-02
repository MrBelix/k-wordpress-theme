<?php

/**
 * Theme filters.
 */

namespace App;

/**
 * Add "… Continued" to the excerpt.
 *
 * @return string
 */
add_filter('excerpt_more', function () {
    return sprintf(' &hellip; <a href="%s">%s</a>', get_permalink(), __('Continued', 'sage'));
});

add_filter( 'block_editor_rest_api_preload_paths',
    function( $preload_paths ) {
        global $post;
        $rest_path    = rest_get_route_for_post( $post );
        $remove_paths = array(
            add_query_arg( 'context', 'edit', $rest_path ),
            sprintf( '%s/autosaves?context=edit', $rest_path ),
        );

        return array_filter(
            $preload_paths,
            function( $url ) use ( $remove_paths ) {
                return ! in_array( $url, $remove_paths, true );
            }
        );
    }, 10, 1 );


add_filter( 'wp_video_extensions',
    function( $exts ) {
        $exts[] = 'mov';
        return $exts;
    }
);
