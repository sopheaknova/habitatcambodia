<?php

class sp_widget_categort extends WP_Widget {

	function __construct() {
		
		$id     = 'sp-widget-categort-posts';
		$name   = '<span>' . __( 'Category Posts', 'sptheme_widget' ) . '</span>';
		$widget_ops = array(
			'classname'   => 'sp-widget-categort-posts',
			'description' => __( 'A widget show posts by category','sptheme_widget' )
			);
		$control_ops = array();

		parent::__construct( $id, $name, $widget_ops, $control_ops );
	}
	
	function widget( $args, $instance ) {
		extract( $args );

		$title = apply_filters('widget_title', $instance['cat_posts_title'] );
		$no_of_posts = $instance['no_of_posts'];
		$cats_id = $instance['cats_id'];

		echo $before_widget;
			echo $before_title;
			echo $title ; ?>
		<?php echo $after_title; ?>
				<ul>
					<?php sp_last_posts_cat($no_of_posts , $thumb , $cats_id); ?>	
				</ul>
		<div class="clear"></div>
	<?php 
		echo $after_widget;
	}

	function update( $new_instance, $old_instance ) {
		$instance = $old_instance;
		$instance['cat_posts_title'] = strip_tags( $new_instance['cat_posts_title'] );
		$instance['no_of_posts'] = strip_tags( $new_instance['no_of_posts'] );
		
		$instance['cats_id'] = implode(',' , $new_instance['cats_id']  );
		return $instance;
	}

	function form( $instance ) {
		$defaults = array( 'cat_posts_title' =>__( 'Category Posts' , 'sptheme'), 'no_of_posts' => '5' , 'cats_id' => '1' );
		$instance = wp_parse_args( (array) $instance, $defaults );
		
		$categories_obj = get_categories();
		$categories = array();

		foreach ($categories_obj as $pn_cat) {
			$categories[$pn_cat->cat_ID] = $pn_cat->cat_name;
		}
		?>

		<p>
			<label for="<?php echo $this->get_field_id( 'cat_posts_title' ); ?>">Title : </label>
			<input id="<?php echo $this->get_field_id( 'cat_posts_title' ); ?>" name="<?php echo $this->get_field_name( 'cat_posts_title' ); ?>" value="<?php echo $instance['cat_posts_title']; ?>" class="widefat" type="text" />
		</p>
		<p>
			<label for="<?php echo $this->get_field_id( 'no_of_posts' ); ?>">Number of posts to show: </label>
			<input id="<?php echo $this->get_field_id( 'no_of_posts' ); ?>" name="<?php echo $this->get_field_name( 'no_of_posts' ); ?>" value="<?php echo $instance['no_of_posts']; ?>" type="text" size="3" />
		</p>
		<p>
			<?php $cats_id = explode ( ',' , $instance['cats_id'] ) ; ?>
			<label for="<?php echo $this->get_field_id( 'cats_id' ); ?>">Category : </label>
			<select multiple="multiple" id="<?php echo $this->get_field_id( 'cats_id' ); ?>[]" name="<?php echo $this->get_field_name( 'cats_id' ); ?>[]">
				<?php foreach ($categories as $key => $option) { ?>
				<option value="<?php echo $key ?>" <?php if ( in_array( $key , $cats_id ) ) { echo ' selected="selected"' ; } ?>><?php echo $option; ?></option>
				<?php } ?>
			</select>
		</p>

	<?php
	}
}