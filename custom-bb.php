/**

 * Plugin Name: RoDojo BB Modules

 * Plugin URI: http://rodojo.dev/

 * Description: RoDojo's Custom modules for the Beaver Builder Plugin.

 * Version: 1.0

 * Author: Kai Rojo

 * Author URI: http://rodojo.dev

 */

define( 'MY_MODULES_DIR', plugin_dir_path( __FILE__ ) );

define( 'MY_MODULES_URL', plugins_url( '/', __FILE__ ) );

 

function my_load_module_examples() {

  if ( class_exists( 'FLBuilder' ) ) {

      // add new custom modules below
      require_once 'cards/cards.php';
  }

}

add_action('init', 'my_load_module_examples');