<?php

function blog_postlist($atts) {
    global $post;
    ob_start();
    $html = '';
    $html .= "<div class='post-title-date'>";
    // $html .= '<h2>'. get_the_title() . '</h2>';
    $html .= '<p class="post-title-date">' . get_the_date('F d, Y') . '</p>';
    $html .= '</div>';
    $output = ob_get_clean();

    return $html . $output;
}
// add_shortcode('post-date', 'blog_postlist');

function practice_year($atts) {
    global $post;
    ob_start();
    $html = '';
    $postid = get_option('page_on_front');
    $prayear = get_post_meta($postid, 'opt95_practice_start_year', true);
    $d1 = $prayear;
    $d2 = date('Y');

    $diff = $d2 - $d1;
    $output = ob_get_clean();

    return $diff . $output;
}
// add_shortcode('practice-year', 'practice_year');

function blog_postlist1($atts) {
    global $post;
    ob_start();
    $html = '';

    $html .= '<h1>' . get_the_title() . '</h1>';
    $html .= '<p class="post-title-date">' . get_the_date('F d, Y') . '</p>';
    //$html .= '</div>' ;
    $output = ob_get_clean();

    return $html . $output;
}
// add_shortcode('post-title', 'blog_postlist1');

function bio_postlist($atts) {
    global $post;
    ob_start();
    $html .= '<div>';
    $html .= get_avatar(get_the_author_meta('ID'), 149);
    $html .= '</div>';
    $html .= '<p><strong>' . get_the_author() . '</strong>' . get_the_author_meta('description') . '</p>';
    $output = ob_get_clean();

    return $html . $output;
}
// add_shortcode('user-bio', 'bio_postlist');

function blog_postlist2($atts) {
    global $post;
    ob_start();
    $html = '';
    $html .= '<img src="' . get_the_post_thumbnail_url($post->ID, 'full') . '" alt="' . get_the_title() . '"/>';
    $output = ob_get_clean();

    return $html . $output;
}
// add_shortcode('post-image', 'blog_postlist2');

/*---Header Title----*/
function header_title() {
    ob_start();
    global $wp_query;
    $postid = get_option('page_on_front');
    $headerTitle = get_post_meta($postid, 'opt1_header_title', true);
    if (!$headerTitle) {
        $html = 'John Freemore, LPC';
    } else {
        $html = $headerTitle;
    }
    wp_reset_postdata();

    return $html;
}
// add_shortcode('header-title', 'header_title');

function header_title1() {
    ob_start();
    global $wp_query;
    $postid = get_option('page_on_front');
    $headertag = get_post_meta($postid, 'opt11_header_tagline', true);
    if (!$headertag) {
        $html = 'Counselling For Children and Teens';
    } else {
        $html = $headertag;
    }
    wp_reset_postdata();

    return $html;
}
// add_shortcode('header-tagline', 'header_title1');

/*---Header Title----*/
function header_title_link() {
    ob_start();
    global $wp_query;
    $postid = get_option('page_on_front');
    $headerTitle = get_post_meta($postid, 'opt1_header_title', true);
    if (!$headerTitle) {
        $html = '<a href="' . get_permalink($postid) . '">Allison Rose, PhD</a>';
    } else {
        $html = '<a href="' . get_permalink($postid) . '">' . $headerTitle . '</a>';
    }
    wp_reset_postdata();

    return $html;
}
// add_shortcode('header-title-link', 'header_title_link');

/*---Telephone----*/
function tele_phone() {
    ob_start();
    global $wp_query;
    $postid = get_option('page_on_front');
    $telephone = get_post_meta($postid, 'opt9_tele_phone', true);
    if (!$telephone) {
        $html = '888-888-8888';
    } else {
        $html = $telephone;
    }
    wp_reset_postdata();

    return $html;
}
// add_shortcode('telephone', 'tele_phone');

/*---Address----*/
function site_address() {
    ob_start();
    global $wp_query;
    $postid = get_option('page_on_front');
    $address = get_post_meta($postid, 'opt92_address', true);
    if (!$address) {
        $html = '123 Main St. #123<br/>Los Angeles, CA 12345';
    } else {
        $html = $address;
    }
    wp_reset_postdata();

    return $html;
}
// add_shortcode('address', 'site_address');

function site_address1() {
    ob_start();
    global $wp_query;
    $postid = get_option('page_on_front');
    $maplink = get_post_meta($postid, 'opt93_map_link', true);
    if (!$maplink) {
        $html = '<a href="https://goo.gl/maps/h58u6paTbm2XdYmr5" target="_blank" rel="noopener noreferrer">(View Google Map)</a>';
    } else {
        $html = '<a href="' . $maplink . '" target="_blank" rel="noopener noreferrer">(view google map)</a>';
    }
    wp_reset_postdata();

    return $html;
}
// add_shortcode('map-link', 'site_address1');

function site_address2() {
    ob_start();
    global $wp_query;
    $postid = get_option('page_on_front');
    $maplink = get_post_meta($postid, 'opt94_map_code', true);
    if (!$maplink) {
        $html = '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d387193.3059353029!2d-74.25986548248684!3d40.697149419326095!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24fa5d33f083b%3A0xc80b8f06e177fe62!2sNew+York%2C+NY%2C+USA!5e0!3m2!1sen!2sph!4v1529121513655" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>';
    } else {
        $html = $maplink;
    }
    wp_reset_postdata();

    return $html;
}
// add_shortcode('map-code', 'site_address2');

/*---Email----*/
function site_email() {
    ob_start();
    global $wp_query;
    $postid = get_option('page_on_front');
    $semail = get_post_meta($postid, 'opt91_email_id', true);
    if (!$semail) {
        $html = 'themes@therapistrising.com';
    } else {
        $html = $semail;
    }
    wp_reset_postdata();

    return $html;
}
// add_shortcode('email', 'site_email');

/*---banner_headline----*/
function banner_headline() {
    ob_start();
    global $wp_query;
    $postid = get_option('page_on_front');
    $banner_headline = get_post_meta($postid, 'opt2_banner_headline', true);
    if (!$banner_headline) {
        $html = 'Counseling for Children & Teens';
    } else {
        $html = $banner_headline;
    }
    wp_reset_postdata();

    return $html;
}
// add_shortcode('banner-headline', 'banner_headline');

/*---banner_headline_subtext----*/
function banner_headline_subtext() {
    ob_start();
    global $wp_query;
    $postid = get_option('page_on_front');
    $banner_headline_subtext = get_post_meta($postid, 'opt3_banner_headline_subtext', true);
    if (!$banner_headline_subtext) {
        $html = 'Supporting kids and young adults in finding balance and joy';
    } else {
        $html = $banner_headline_subtext;
    }
    wp_reset_postdata();

    return $html;
}
// add_shortcode('banner-subtext', 'banner_headline_subtext');

/*---therapy_services1----*/
function therapy_services1() {
    ob_start();
    global $wp_query;
    $postid = get_option('page_on_front');
    $therapy_services1 = get_post_meta($postid, 'opt4_therapy_services1', true);
    if (!$therapy_services1) {
        $html = 'Child-Centered<br/>Play Therapy';
    } else {
        $html = $therapy_services1;
    }
    wp_reset_postdata();

    return $html;
}
// add_shortcode('services1', 'therapy_services1');

/*---therapy_services2----*/
function therapy_services2() {
    ob_start();
    global $wp_query;
    $postid = get_option('page_on_front');
    $therapy_services2 = get_post_meta($postid, 'opt4_therapy_services2', true);
    if (!$therapy_services2) {
        $html = 'Adolescent and<br/>Teen Therapy';
    } else {
        $html = $therapy_services2;
    }
    wp_reset_postdata();

    return $html;
}
// add_shortcode('services2', 'therapy_services2');

/*---therapy_services3----*/
function therapy_services3() {
    ob_start();
    global $wp_query;
    $postid = get_option('page_on_front');
    $therapy_services3 = get_post_meta($postid, 'opt4_therapy_services3', true);
    if (!$therapy_services3) {
        $html = 'Parent Counseling<br/>and Therapy';
    } else {
        $html = $therapy_services3;
    }
    wp_reset_postdata();

    return $html;
}
// add_shortcode('services3', 'therapy_services3');

/*---therapy_quote----*/
function therapy_quote() {
    ob_start();
    global $wp_query;
    $postid = get_option('page_on_front');
    $quote = get_post_meta($postid, 'opt7_quote', true);
    if (!$quote) {
        $html = 'Although the world is full of suffering, it is also full of the overcoming of it';
    } else {
        $html = $quote;
    }
    wp_reset_postdata();

    return $html;
}
// add_shortcode('quote-text', 'therapy_quote');

/*---About_text----*/
function about_text() {
    ob_start();
    global $wp_query;
    $postid = get_option('page_on_front');
    $about_text = get_post_meta($postid, 'opt8_about_text', true);
    if (!$about_text) {
        $html = 'Welcome to my website. I am Karen Young, FMT, a licensed psychologist. My main area of specialty is working with children and teens. It brings me great joy to see the look in their eyes when a child or a teen has a new insight that helps them live a better and happier life from day to day. Sometimes children just need a little bit of guidance in the right direction to make a shift that helps both them and their family with whatever situation they may be dealing with. I also work with with teens who may be having a hard time adjusting in their life. I find that teens who are open to receiving therapy can make shifts in their life that are beneficial and long lasting. Often times teens feel misunderstood and need someone to talk to who can relate to them on their level. If the parents of the child or teen also feel they can benefit from therapy, I am also available for therapy for parents.';
    } else {
        $html = $about_text;
    }
    wp_reset_postdata();

    return $html;
}
// add_shortcode('about-text', 'about_text');

function all_testimonial($atts) {
    global $post;
    ob_start();
    $html = '';

    extract(shortcode_atts([
    ], $atts));

    $my_query = new WP_Query([
        'post_type' => 'as_testimonial',
        'posts_per_page' => 9,
        'orderby' => 'publish_date',
        //'order' => 'ASC',
        'paged' => get_query_var('paged'),
        'meta_query' => [
            [
                //  'key' => 'featured-checkbox',
                //  'value' => 'yes'
            ],
        ],
    ]);
    if ($my_query->have_posts()) {
        $hcounter = 0;
        $html .= "<div class='AllTestimonials'>";
        while ($my_query->have_posts()) {
            $my_query->the_post();
            $category = get_the_category();
            $clientexcerpt1 = get_the_content();
            $post_id = $post->ID;
            $category_object = get_the_category($post_id);

            $terms = get_the_terms($post->ID, 'types');
            foreach ($terms as $tag) {
                $category_logo = $tag->name;
            }

            if ($category_logo == 'HealthGrades') {
                $cat_class = '<div class="HealthGrades"></div>';
            } else {
            }

            if ($category_logo == 'RateMDs') {
                $cat_class = '<div class="RateMDs"></div>';
            } else {
            }

            if ($category_logo == 'Yelp') {
                $cat_class = '<div class="Yelp"></div>';
            } else {
            }

            if ($category_logo == 'ZocDoc') {
                $cat_class = '<div class="ZocDoc"></div>';
            } else {
            }

            if ($category_logo == 'Google') {
                $cat_class = '<div class="Google"></div>';
            } else {
            }

            if ($category_logo == 'Doctor.com') {
                $cat_class = '<div class="Doctor"></div>';
            } else {
            }

            /*--Totla review count--*/
            $count_args = [
                'post_type' => 'as_testimonial',
                'post_status' => 'published',
                'numberposts' => -1,
                'tax_query' => [
                    [
                        'taxonomy' => 'types',
                        'field' => 'name',
                        'terms' => $category_logo,
                    ],
                ],
            ];

            $total_count1 = count(get_posts($count_args));
            $total_count = $total_count1 - 3;
            /*----*/

            /*--Star rating--*/
            $star_rating = get_post_meta($post_id, 'op1_rating', true);
            if ($star_rating == '5') {
                $star_icon = '<p class="StarRate star5"></p>';
            } else {
            }

            if ($star_rating == '4') {
                $star_icon = '<p class="StarRate star4"></p>';
            } else {
            }

            if ($star_rating == '3') {
                $star_icon = '<p class="StarRate star3"></p>';
            } else {
            }
            /*----*/

            $html .= '<div class="Testimonial-col3"><div class="Testi-Content">';
            $html .= '<div class="GuideData">';
            $html .= '<p>' . $clientexcerpt1 . '</p>';
            $html .= '</div>';
            $html .= '<div class="Testi-Footer"><div>';
            $html .= '<p class="reveiw">' . $total_count . ' reviews</p>';
            $html .= $star_icon;
            $html .= '<p class="Testi_author">Anonymous</p>';
            $html .= '</div>';
            $html .= $cat_class;
            $html .= '</div></div></div>';
        }

        $html .= '</div>';
        $html .= wp_pagenavi(['query' => $my_query]);
        $output = ob_get_clean();
    }
    wp_reset_postdata();

    return $html . $output;
}

add_shortcode('all-testimonial', 'all_testimonial');

function all_testimonial1($atts) {
    global $post;
    ob_start();
    $html = '';

    extract(shortcode_atts([
        'ids' => '',
    ], $atts));

    $attributes = shortcode_atts(
        [
            'ids' => '',
        ],
        $atts
    );

    $string = $ids;
    $pids = explode(',', $string);

    $my_query = new WP_Query([
        'post_type' => 'as_testimonial',
        'orderby' => 'post__in',
        // 'post__in' => array(8199,8189,8203,8202,8175,8196,8199,8183,8136,8177,8193,8187,8182,8181,8158,8157,8156,8155),
        'post__in' => $pids,
        'posts_per_page' => 21,

        //'order'=>'ASC',
        /* 'meta_query' => array(
          array(
              'key' => 'featured-checkbox',
              'value' => 'yes'
                 )
             )*/
    ]);

    if ($my_query->have_posts()) {
        $hcounter = 0;
        $html .= "<div class='Testimonials-slider'>";
        //$html.= $atts;
        $fid = 1;
        while ($my_query->have_posts()) {
            $my_query->the_post();
            $category = get_the_category();
            $clientexcerpt1 = get_the_content();
            $post_id = $post->ID;
            $category_object = get_the_category($post_id);

            $terms = get_the_terms($post->ID, 'types');
            foreach ($terms as $tag) {
                $category_logo = $tag->name;
            }

            if ($category_logo == 'HealthGrades') {
                $cat_class = '<div class="HealthGrades"></div>';
            } else {
            }

            if ($category_logo == 'RateMDs') {
                //$cat_class = '<div class="RateMDs"><a href="'.get_post_meta($post_id, 'op2_popupimg', true).'" class="fancybox">RateMDs</a></div>' ;
                $cat_class = '<div class="RateMDs"></div>';
            } else {
            }

            if ($category_logo == 'Yelp') {
                $cat_class = '<div class="Yelp"></div>';
            } else {
            }

            if ($category_logo == 'ZocDoc') {
                $cat_class = '<div class="ZocDoc"></div>';
            } else {
            }

            if ($category_logo == 'Google') {
                $cat_class = '<div class="Google"></div>';
            } else {
            }

            if ($category_logo == 'Doctor.com') {
                $cat_class = '<div class="Doctor"></div>';
            } else {
            }

            /*--Star rating--*/
            $star_rating = get_post_meta($post_id, 'op1_rating', true);
            if ($star_rating == '5') {
                $star_icon = '<p class="StarRate star5"></p>';
            } else {
            }

            if ($star_rating == '4') {
                $star_icon = '<p class="StarRate star4"></p>';
            } else {
            }

            if ($star_rating == '3') {
                $star_icon = '<p class="StarRate star3"></p>';
            } else {
            }
            /*----*/

            if (has_post_thumbnail($post_id)) {
                $Ethunb_img = get_the_post_thumbnail($post_id, 'full');
                $Ethunb_img_out = '<div class="Evet-img">' . $Ethunb_img . '</div>';
            } else {
                $Ethunb_img_out = '';
            }

            $stringcont = str_word_count($clientexcerpt1);
            if ($stringcont > 42) {
                $redmor = '<a class="trdmore fancybox-inline12" href="TId' . $fid . '">Read More</a><div class="Tinline"><div class="fanlin-content" id="TId' . $fid . '"><div>' . $Ethunb_img . '</div>' . $clientexcerpt1 . '</div></div>';
            } else {
                $redmor = '';
            }

            $html .= '<div class="Testimonial-col3"><div class="Testi-Content">';
            $html .= $Ethunb_img_out;
            $html .= '<div class="GuideData">';
            $html .= '<p>' . $clientexcerpt1 . '</p>';
            $html .= '</div>' . $redmor;
            $html .= '<div class="Testi-Footer"><div>';
            if(isset($total_count)) {
              $html .= '<p class="reveiw">' . $total_count . ' reviews</p>';
            }
            $html .= $star_icon;
            $html .= '<p class="Testi_author">Anonymous</p>';
            $html .= '</div>';
            $html .= $cat_class;
            $html .= '</div></div></div>';
            ++$fid;
        }

        $html .= '</div>';
        //$html .=  wp_pagenavi( array( 'query' => $my_query ) );
        $output = ob_get_clean();
    }
    wp_reset_postdata();

    return $html . $output;
}
add_shortcode('testimonial-slider', 'all_testimonial1');

function all_testimonial12($atts) {
    global $post;
    ob_start();
    $html = '';

    extract(shortcode_atts([
        'ids' => '',
    ], $atts));

    $attributes = shortcode_atts(
        [
            'ids' => '',
        ],
        $atts
    );

    $string = $ids;
    $pids = explode(',', $string);

    $my_query = new WP_Query([
        'post_type' => 'as_testimonial',
        'orderby' => 'post__in',
        // 'post__in' => array(8199,8189,8203,8202,8175,8196,8199,8183,8136,8177,8193,8187,8182,8181,8158,8157,8156,8155),
        'post__in' => $pids,
        'posts_per_page' => 21,

        //'order'=>'ASC',
        /* 'meta_query' => array(
          array(
              'key' => 'featured-checkbox',
              'value' => 'yes'
                 )
             )*/
    ]);

    if ($my_query->have_posts()) {
        $hcounter = 0;
        $html .= "<div class='Testimonials-slider2 fulls'>";
        //$html.= $atts;
        while ($my_query->have_posts()) {
            $my_query->the_post();
            $category = get_the_category();
            $clientexcerpt1 = get_the_content();
            $post_id = $post->ID;
            $category_object = get_the_category($post_id);

            $terms = get_the_terms($post->ID, 'types');
            foreach ($terms as $tag) {
                $category_logo = $tag->name;
            }

            if ($category_logo == 'HealthGrades') {
                $cat_class = '<div class="HealthGrades"></div>';
            } else {
            }

            if ($category_logo == 'RateMDs') {
                $cat_class = '<div class="RateMDs"></div>';
            } else {
            }

            if ($category_logo == 'Yelp') {
                $cat_class = '<div class="Yelp"></div>';
            } else {
            }

            if ($category_logo == 'ZocDoc') {
                $cat_class = '<div class="ZocDoc"></div>';
            } else {
            }

            if ($category_logo == 'Google') {
                $cat_class = '<div class="Google"></div>';
            } else {
            }

            if ($category_logo == 'Doctor.com') {
                $cat_class = '<div class="Doctor"></div>';
            } else {
            }

            /*--Star rating--*/
            $star_rating = get_post_meta($post_id, 'op1_rating', true);
            if ($star_rating == '5') {
                $star_icon = '<p class="StarRate star5"></p>';
            } else {
            }

            if ($star_rating == '4') {
                $star_icon = '<p class="StarRate star4"></p>';
            } else {
            }

            if ($star_rating == '3') {
                $star_icon = '<p class="StarRate star3"></p>';
            } else {
            }
            /*----*/

            if (has_post_thumbnail($post_id)) {
                $Ethunb_img = get_the_post_thumbnail($post_id, 'full');
                $Ethunb_img_out = '<div class="Evet-img">' . $Ethunb_img . '</div>';
            } else {
                $Ethunb_img_out = '';
            }

            $html .= '<div class="Testimonial-col3"><div class="Testi-Content">';
            $html .= $Ethunb_img_out;
            $html .= '<div class="GuideData">';
            $html .= '<p>' . $clientexcerpt1 . '</p>';
            $html .= '</div>';
            $html .= '<div class="Testi-Footer"><div>';
            $html .= '<p class="reveiw">' . $total_count . ' reviews</p>';
            $html .= $star_icon;
            $html .= '<p class="Testi_author">Anonymous</p>';
            $html .= '</div>';
            $html .= $cat_class;
            $html .= '</div></div></div>';
        }

        $html .= '</div>';
        //$html .=  wp_pagenavi( array( 'query' => $my_query ) );
        $output = ob_get_clean();
    }
    wp_reset_postdata();

    return $html . $output;
}
// add_shortcode('testimonial-slider-full', 'all_testimonial12');

function all_testimonialmenu() {
    global $post;
    ob_start();

    $dropdown = '<div class="TestiDropdownMenu">';
    $dropdown .= '<div><span>View testimonials and reviews from:</span></div>';

    // Testing something
    // $dropdown .= '<div>Current URL: ' . get_permalink() . '</div>';
    $current_url = get_permalink();

    $count_args2 = [
        'post_type' => 'as_testimonial',
        'post_status' => 'published',
        'numberposts' => -1,
    ];
    $total_count2 = count(get_posts($count_args2));
    $total_count3 = $total_count2 - 3;

    $dropdown .= '<div><select onChange="window.location.href=this.value">';

    $testimonials_url = get_permalink(3737);
    $selected = $current_url === $testimonials_url ? ' selected' : '';
    // $dropdown .= '<option value="' . get_permalink(3737) . '" selected>All (' . $total_count3 . ')</option>';
    $dropdown .= sprintf( '<option value="%s"%s>All (%s)</option>', $testimonials_url, $selected, $total_count3 );

    $terms1 = get_terms([
        'taxonomy' => 'types',
        'hide_empty' => false,
    ]);
    foreach ($terms1 as $tag1) {
        $count_args1 = [
            'post_type' => 'as_testimonial',
            'post_status' => 'published',
            'numberposts' => -1,
            'tax_query' => [
                [
                    'taxonomy' => 'types',
                    'field' => 'name',
                    'terms' => $tag1->name,
                ],
            ],
        ];

        $total_count1 = count(get_posts($count_args1));

        $category_url = sprintf( '%s%s/', $testimonials_url, $tag1->slug );
        $selected = $current_url === $category_url ? ' selected' : '';

        // $dropdown .= '<option value="' . get_site_url() . '/testimonial-category/' . $tag1->slug . '">' . $tag1->name . ' (' . $total_count1 . ')</option>';
        $dropdown .= sprintf( '<option value="%s"%s>%s (%s)</option>', $category_url, $selected, $tag1->name, $total_count1 );
    }
    $dropdown .= '</select></div>';
    $dropdown .= '</div>';

    $output = ob_get_clean();

    wp_reset_postdata();

    return $dropdown . $output;
}
add_shortcode('dropdown-menu', 'all_testimonialmenu');

function all_testimonialmenu12() {
    $count_args = [
        'post_type' => 'as_testimonial',
        'post_status' => 'published',
        'numberposts' => -1,
    ];
    $total_count = count(get_posts($count_args));
    $total_count = $total_count - 3;

    return $total_count;
}

add_shortcode('total-testimonial', 'all_testimonialmenu12');

function random_slide($atts) {
    global $post;
    ob_start();
    $html = '';

    extract(shortcode_atts([
        'imgid' => '',
    ], $atts));

    $istring = $imgid;
    $randimageid = explode(',', $istring);
    shuffle($randimageid);

    $html .= '<div id="RandomSlider">';

    foreach ($randimageid as $randimage) {
        $html .= '<div><img src="' . wp_get_attachment_url($randimage) . '" alt="services"></div>';
    }

    $html .= '</div>';

    return $html;
}

// add_shortcode('random-slider', 'random_slide');

function Formuser_name($atts) {
    return $_GET['uname'];
}
// add_shortcode('Formuser-name', 'Formuser_name');

function page_title_sc( ){
   return get_the_title();
}
// add_shortcode( 'page_title', 'page_title_sc' );
