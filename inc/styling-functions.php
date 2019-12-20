<?php 
/**
 * Functions for styling and layouts.
 *
 * @package       Tube Ace
 * @subpackage    Play
 * @since         Play 1.0
 * @link          http://tubeace.com
 */

function tubeaceplay_duration($seconds){

    $hours = floor($seconds / 3600);
    $mins = floor(($seconds - $hours*3600) / 60);
    $s = $seconds - ($hours*3600 + $mins*60);

    $mins = ($mins<10?"0".$mins:"".$mins);
    $s = ($s<10?"0".$s:"".$s); 

    $time = ($hours>0?$hours.":":"").$mins.":".$s;
    return $time;
}


/* comment item format */
function tubeaceplay_format_comment($comment, $args, $depth) {

  global $tubeaceplay_defaults;

  $class = ($comment->comment_parent==0 ? 'comment' : 'comment-reply');
  ?>

  <li class="<?php echo $class ?>" id="comment-<?php comment_ID() ?>">
          
    <div class="comment-intro">
      <?php 
      // link to author page
      if(get_theme_mod('comment_link_to_author', $tubeaceplay_defaults['comment_link_to_author'])==1 && ( $comment->user_id != '' || $comment->comment_author_url != '' ) ){

        if( $comment->user_id !='' ){
          $author_url = get_author_posts_url( $comment->user_id );
        } else {
          $author_url = $comment->comment_author_url;
        }

        if(get_theme_mod('comment_show_author_avatar', $tubeaceplay_defaults['comment_show_author_avatar'])==1){
          echo '<a href="'.$author_url.'">'.get_avatar( $comment, get_theme_mod('comment_avatar_size', $tubeaceplay_defaults['comment_avatar_size']) ).'</a> ';
        }
        echo '<a class="comment-author" href="'.$author_url.'">'.get_comment_author().'</a>';

      } else {// don't link to author page

        if(get_theme_mod('comment_show_author_avatar', $tubeaceplay_defaults['comment_show_author_avatar'])==1){

          echo get_avatar( $comment, get_theme_mod('comment_avatar_size', $tubeaceplay_defaults['comment_avatar_size']) ).' ';
        }
        echo get_comment_author();
      } ?>

      on <a class="comment-permalink" href="<?php echo htmlspecialchars ( get_comment_link( $comment->comment_ID ) ) ?>">
      <?php printf(__('%1$s %2$s', 'tubeaceplay'), get_comment_date(), get_comment_time()) ?></a>

      <?php edit_comment_link('<span class="glyphicon glyphicon-edit" aria-hidden="true"></span> '. __('Edit', 'tubeaceplay')); ?>
    </div>

    <?php if ($comment->comment_approved == '0') : ?>
        <em><?php _e('Your comment is awaiting moderation.', 'tubeaceplay') ?></em><br />
    <?php endif; ?>

    <?php comment_text(); ?>
    
    <div class="reply">
        <?php comment_reply_link(array_merge( $args, array('depth' => $depth, 'max_depth' => $args['max_depth']))) ?>
    </div>
        
<?php } 

/* style comment form fields */
// comment inputs
function tubeaceplay_comment_form_fields( $fields ) {
    $commenter = wp_get_current_commenter();
    
    $req      = get_option( 'require_name_email' );
    $aria_req = ( $req ? " aria-required='true'" : '' );
    $html5    = current_theme_supports( 'html5', 'comment-form' ) ? 1 : 0;
    
    $fields   =  array(
        'author' => '<div class="form-group comment-form-author">' . '<label for="author">' . __( 'Name', 'tubeaceplay' ) . ( $req ? ' <span class="required">*</span>' : '' ) . '</label> ' .
                    '<input class="form-control" id="author" name="author" type="text" value="' . esc_attr( $commenter['comment_author'] ) . '" size="30"' . $aria_req . ' /></div>',
        'email'  => '<div class="form-group comment-form-email"><label for="email">' . __( 'Email', 'tubeaceplay' ) . ( $req ? ' <span class="required">*</span>' : '' ) . '</label> ' .
                    '<input class="form-control" id="email" name="email" ' . ( $html5 ? 'type="email"' : 'type="text"' ) . ' value="' . esc_attr(  $commenter['comment_author_email'] ) . '" size="30"' . $aria_req . ' /></div>',
        'url'    => '<div class="form-group comment-form-url"><label for="url">' . __( 'Website', 'tubeaceplay') . '</label> ' .
                    '<input class="form-control" id="url" name="url" ' . ( $html5 ? 'type="url"' : 'type="text"' ) . ' value="' . esc_attr( $commenter['comment_author_url'] ) . '" size="30" /></div>'        
    );
    
    return $fields;
}
add_filter( 'comment_form_default_fields', 'tubeaceplay_comment_form_fields' );

// comment textarea
function tubeaceplay_comment_form( $args ) {
    $args['comment_field'] = '<div class="form-group comment-form-comment">
            <label for="comment">' . __( 'Comment', 'tubeaceplay' ) . '</label> 
            <textarea class="form-control" id="comment" name="comment" cols="45" rows="8" aria-required="true"></textarea>
        </div>';
    $args['class_submit'] = 'btn btn-default';
    
    return $args;
}
add_filter( 'comment_form_defaults', 'tubeaceplay_comment_form' );

/* preview excerpt length */
function tubeaceplay_preview_excerpt_length( $length) {

  global $tubeaceplay_defaults;

  return get_theme_mod('preview_excerpt_length', $tubeaceplay_defaults['preview_excerpt_length']);
}
add_filter( 'excerpt_length', 'tubeaceplay_preview_excerpt_length', 999 );

/* wrap oembed content */
function tubeaceplay_wrap_embed($html, $url, $attr) {

     return '<div class="embed-responsive embed-responsive-16by9">' . $html . '</div>';
}
add_filter('embed_oembed_html', 'tubeaceplay_wrap_embed', 10, 3);

/* add img-responsive class to custom logo */
function tubeaceplay_custom_logo_output( $html ){
  $html = str_replace( 'custom-logo', 'custom-logo img-responsive', $html );
  return $html;
}
add_filter('get_custom_logo', 'tubeaceplay_custom_logo_output', 10);


/* remove pages from search results */
if(get_theme_mod('search_page_show_pages', $tubeaceplay_defaults['search_page_show_pages']) == false ){

  function tubeaceplay_remove_pages_from_search() {
      global $wp_post_types;
      $wp_post_types['page']->exclude_from_search = true;
  }
  add_action('init', 'tubeaceplay_remove_pages_from_search');
}

/* column widths for layout of content & sidebar(s) */
function tubeaceplay_layout() {

  global $tubeaceplay_defaults;

  $layout = get_theme_mod('layout', $tubeaceplay_defaults['layout']);

  $array = explode("-", $layout);

  // left sidebar
  $left_sidebar = $array[0];
  if($left_sidebar!='0'){
    $left_sidebar = "col-md-".$left_sidebar;
  }

  // content
  $content = $array[1];
  if($content!='0'){
    $content = "col-md-".$content;
  }

  // right sidebar
  $right_sidebar = $array[2];
  if($right_sidebar!='0'){
    $right_sidebar = "col-md-".$right_sidebar;
  }  
  return $layout = array('left_sidebar' => $left_sidebar, 'content' => $content, 'right_sidebar' => $right_sidebar);
}

/* array of websafe fonts called in customizer */
function tubeaceplay_websafe_fonts(){

  $fontsArr = array(
    'Arial, Helvetica, sans-serif'=>'Arial, Helvetica, sans-serif',
    '"Arial Black", Gadget, sans-serif'=>'Arial Black, Gadget, sans-serif',
    '"Comic Sans MS", cursive, sans-serif'=>'Comic Sans MS, cursive, sans-serif',
    '"Courier New", Courier, monospace'=>'Courier New, Courier, monospace',
    'Georgia, serif'=>'Georgia, serif',
    'Helvetica, Arial, sans-serif'=>'Helvetica, Arial, sans-serif',
    'Impact, Charcoal, sans-serif'=>'Impact, Charcoal, sans-serif',
    '"Lucida Sans Unicode", "Lucida Grande", sans-serif'=>'Lucida Sans Unicode, Lucida Grande, sans-serif',
    '"Lucida Console", Monaco, monospace'=>'Lucida Console, Monaco, monospace',
    '"Palatino Linotype", "Book Antiqua", Palatino, serif'=>'Palatino Linotype, Book Antiqua, Palatino, serif',
    'Tahoma, Geneva, sans-serif'=>'Tahoma, Geneva, sans-serif',
    '"Times New Roman", Times, serif'=>'Times New Roman, Times, serif',
    '"Trebuchet MS", Helvetica, sans-serif'=>'Trebuchet MS, Helvetica, sans-serif',
    'Verdana, Geneva, sans-serif'=>'Verdana, Geneva, sans-serif',
  );
  return $fontsArr;
}

/* minify CSS */
function tubeaceplay_minify_css($string){

    // comments
    $string = preg_replace('!/\*.*?\*/!s','', $string);
    $string = preg_replace('/\n\s*\n/',"\n", $string);

    // space
    $string = preg_replace('/[\n\r \t]/',' ', $string);
    $string = preg_replace('/ +/',' ', $string);
    $string = preg_replace('/ ?([,:;{}]) ?/','$1',$string);

    // trailing;
    $string = preg_replace('/;}/','}',$string);

    return $string;    
}

?>