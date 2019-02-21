<?php
function example_add_dashboard_widgets() {

wp_add_dashboard_widget(
             'example_dashboard_widget',         // Widget slug.
             'Example Dashboard Widget',         // Title.
             'example_dashboard_widget_function' // Display function.
    );	
}
function example_dashboard_widget_function() {

        // Display whatever it is you want to show.
        echo "Hello World, I'm a great Dashboard Widget";
    }  
