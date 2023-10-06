<?php
/*
 * Title: Home Posts
 * Slug: quasifolio/home-posts
 * Categories: quasifolio, posts
 * Block Types: core/query
*/

?>


<!-- wp:query {"queryId":58,"query":{"perPage":7,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":true},"layout":{"type":"constrained"}} -->
<div class="wp-block-query"><!-- wp:post-template -->
    <!-- wp:columns -->
    <div class="wp-block-columns"><!-- wp:column {"width":"35%"} -->
        <div class="wp-block-column" style="flex-basis:35%"><!-- wp:post-featured-image {"aspectRatio":"3/2"} /--></div>
        <!-- /wp:column -->

        <!-- wp:column {"width":"65%","style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0"},"blockGap":"1rem"},"border":{"width":"0px","style":"none"}}} -->
        <div class="wp-block-column" style="border-style:none;border-width:0px;padding-top:0;padding-bottom:0;padding-left:0;flex-basis:65%"><!-- wp:post-terms {"term":"category","style":{"typography":{"fontStyle":"normal","fontWeight":"600"}},"className":"is-style-no-decoration","fontSize":"medium"} /-->

            <!-- wp:post-title {"isLink":true,"style":{"typography":[]},"className":"is-style-default"} /-->

            <!-- wp:post-excerpt {"excerptLength":21,"style":{"typography":{"fontStyle":"normal","fontWeight":"300"}}} /-->
        </div>
        <!-- /wp:column -->
    </div>
    <!-- /wp:columns -->

    <!-- wp:separator {"backgroundColor":"neutral","className":"is-style-wide"} -->
    <hr class="wp-block-separator has-text-color has-neutral-color has-alpha-channel-opacity has-neutral-background-color has-background is-style-wide" />
    <!-- /wp:separator -->
    <!-- /wp:post-template -->

    <!-- wp:query-pagination {"className":"is-style-boxed-pagination","layout":{"type":"flex","justifyContent":"center"}} -->
    <!-- wp:query-pagination-previous {"label":"Previous"} /-->

    <!-- wp:query-pagination-numbers /-->

    <!-- wp:query-pagination-next {"label":"Next"} /-->
    <!-- /wp:query-pagination -->

    <!-- wp:query-no-results -->
    <!-- wp:paragraph {"placeholder":"Add text or blocks that will display when a query returns no results."} -->
    <p>No Results</p>
    <!-- /wp:paragraph -->
    <!-- /wp:query-no-results -->
</div>
<!-- /wp:query -->