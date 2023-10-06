<?php
/*
 * Title: Search Posts
 * Slug: quasifolio/search-posts
 * Categories: quasifolio, posts
 * Block Types: core/query
*/

?>

<!-- wp:query {"queryId":27,"query":{"perPage":7,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":true},"align":"wide"} -->
<div class="wp-block-query alignwide"><!-- wp:post-template -->
    <!-- wp:columns {"align":"wide"} -->
    <div class="wp-block-columns alignwide"><!-- wp:column {"verticalAlignment":"center","width":"35%"} -->
        <div class="wp-block-column is-vertically-aligned-center" style="flex-basis:35%"><!-- wp:post-terms {"term":"category","style":{"typography":{"fontStyle":"normal","fontWeight":"700"}},"className":"is-style-no-decoration","fontSize":"medium"} /-->

            <!-- wp:post-date {"style":{"typography":{"fontStyle":"normal","fontWeight":"700"}},"fontSize":"extra-small"} /-->
        </div>
        <!-- /wp:column -->

        <!-- wp:column {"verticalAlignment":"center","width":"65%"} -->
        <div class="wp-block-column is-vertically-aligned-center" style="flex-basis:65%"><!-- wp:post-title {"textAlign":"left","isLink":true,"style":{"typography":{"lineHeight":"1.1"},"color":{"link":"#ffffff"}},"fontSize":"max-48"} /--></div>
        <!-- /wp:column -->
    </div>
    <!-- /wp:columns -->

    <!-- wp:separator {"backgroundColor":"neutral","className":"alignwide is-style-wide"} -->
    <hr class="wp-block-separator has-text-color has-neutral-color has-alpha-channel-opacity has-neutral-background-color has-background alignwide is-style-wide" />
    <!-- /wp:separator -->
    <!-- /wp:post-template -->

    <!-- wp:query-pagination {"className":"is-style-buttons-pagination is-style-boxed-pagination","layout":{"type":"flex","justifyContent":"center"}} -->
    <!-- wp:query-pagination-previous {"label":"Previous"} /-->

    <!-- wp:query-pagination-numbers /-->

    <!-- wp:query-pagination-next {"label":"Next"} /-->
    <!-- /wp:query-pagination -->

    <!-- wp:query-no-results -->
    <!-- wp:paragraph {"fontSize":"medium"} -->
    <p class="has-medium-font-size">Sorry, but nothing matched your search terms.</p>
    <!-- /wp:paragraph -->

    <!-- wp:paragraph {"placeholder":"Add text or blocks that will display when a query returns no results."} -->
    <p>Please try again with some different keywords:</p>
    <!-- /wp:paragraph -->

    <!-- wp:search {"label":"Search","showLabel":false,"buttonText":"Search","className":"is-style-search-opinionated"} /-->
    <!-- /wp:query-no-results -->
</div>
<!-- /wp:query -->