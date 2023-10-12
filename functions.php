function add_fb_linkedin_social_sharing_links_after_title($title) {
    if (is_single('post')) { 
        $post_permalink = get_permalink(); 
        $post_title = get_the_title(); 

        $linkedin = 'https://www.linkedin.com/shareArticle?mini=true&url=' . urlencode($post_permalink);
        $facebook = 'https://www.facebook.com/sharer/sharer.php?u=' . urlencode($post_permalink);

        $social_links_container = '<div class="social-sharing-container">';
        $social_links_container .= '<a href="' . $linkedin . '" target="_blank" rel="nofollow" id="linkedIn">LinkedIn</a>'; <-- or use some font icons
        $social_links_container .= '<a href="' . $facebook . '" target="_blank" rel="nofollow" id="faceBook">Facebook</a>';
        $social_links_container .= '</div>';

        $title .= $social_links_container;
    }

    return $title;
}

add_filter('the_title', 'add_fb_linkedin_social_sharing_links_after_title');
