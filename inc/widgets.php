<?php

/**
 * new WordPress Widget format
 * Wordpress 2.8 and above
 * @see http://codex.wordpress.org/Widgets_API#Developing_Widgets
 */
class MIF_SOCIAL_Widget extends WP_Widget {

    /**
     * Constructor
     *
     * @return void
     **/
    function MIF_SOCIAL_Widget() {
        $widget_ops = array( 'classname' => 'MFI Data Widget', 'description' => 'Description' );
        $this->WP_Widget( 'MFI Data Widget', 'MFI Social Data', $widget_ops );
    }

    /**
     * Outputs the HTML for this widget.
     *
     * @param array  An array of standard parameters for widgets in this theme
     * @param array  An array of settings for this widget instance
     * @return void Echoes it's output
     **/
    function widget( $args, $instance ) {
        extract( $args, EXTR_SKIP );
        echo $before_widget;
        echo $before_title;
        echo 'Title'; // Can set this with a widget option, or omit altogether
        echo $after_title;

    //
    // Widget display logic goes here
    //

    echo $after_widget;
    }

    /**
     * Deals with the settings when they are saved by the admin. Here is
     * where any validation should be dealt with.
     *
     * @param array  An array of new settings as submitted by the admin
     * @param array  An array of the previous settings
     * @return array The validated and (if necessary) amended settings
     **/
    function update( $new_instance, $old_instance ) {

        // update logic goes here
        $updated_instance = $new_instance;
        return $updated_instance;
    }

    /**
     * Displays the form for this widget on the Widgets page of the WP Admin area.
     *
     * @param array  An array of the current settings for this widget
     * @return void Echoes it's output
     **/
    function form( $instance ) {

    	
        $instance = wp_parse_args( (array) $instance, $this->defaults );

        // display field names here using:
        // $this->get_field_id( 'option_name' ) - the CSS ID
        // $this->get_field_name( 'option_name' ) - the HTML name
        // $instance['option_name'] - the option value
        ?>

         <p>
            <label for="<?php echo $this->get_field_id( 'linkdin' ); ?>"><?php _e( 'Linkdin URL', 'mfi-insights' ); ?>:</label>
            <input type="url" id="<?php echo $this->get_field_id( 'linkdin' ); ?>" name="<?php echo $this->get_field_name( 'linkdin' ); ?>" value="<?php echo esc_attr( $instance['linkdin'] ); ?>" class="widefat" />
        </p>

        <p>
            <label for="<?php echo $this->get_field_id( 'facebook' ); ?>"><?php _e( 'Facebook URL', 'mfi-insights' ); ?>:</label>
            <input type="url" id="<?php echo $this->get_field_id( 'facebook' ); ?>" name="<?php echo $this->get_field_name( 'facebook' ); ?>" value="<?php echo esc_attr( $instance['facebook'] ); ?>" class="widefat" />
        </p>

        <p>
            <label for="<?php echo $this->get_field_id( 'twitter' ); ?>"><?php _e( 'Twitter URL', 'mfi-insights' ); ?>:</label>
            <input type="url" id="<?php echo $this->get_field_id( 'twitter' ); ?>" name="<?php echo $this->get_field_name( 'twitter' ); ?>" value="<?php echo esc_attr( $instance['twitter'] ); ?>" class="widefat" />
        </p>

        <p>
            <label for="<?php echo $this->get_field_id( 'email' ); ?>"><?php _e( 'Email Address', 'mfi-insights' ); ?>:</label>
            <input type="email" id="<?php echo $this->get_field_id( 'email' ); ?>" name="<?php echo $this->get_field_name( 'email' ); ?>" value="<?php echo esc_attr( $instance['email'] ); ?>" class="widefat" />
        </p>

<?php

    }
}

add_action( 'widgets_init', create_function( '', "register_widget( 'MIF_SOCIAL_Widget' );" ) );