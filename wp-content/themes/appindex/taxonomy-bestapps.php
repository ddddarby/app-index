<?php

//Get the correct taxonomy ID by slug
$term = get_term_by( 'slug', get_query_var( 'term' ), get_query_var( 'taxonomy' ) );
//Get Taxonomy Meta
$saved_data = get_tax_meta($term->term_id,'text_field_id');
echo $saved_data;

?>