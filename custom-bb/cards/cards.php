class Cards extends FLBuilderModule {

public function __construct()

{

  parent::__construct(array(

    'name' => __( 'Cards', 'fl-builder' ),

    'description' => __( 'This will display cards on click', 'fl-builder' ),

    'group' => __( 'Basic', 'fl-builder' ),

    'category' => __( 'Menu', 'fl-builder' ),

    'dir' => MY_MODULES_DIR . 'cards/',

    'url' => MY_MODULES_URL . 'car/',

    'icon' => 'button.svg',

  ));

}

}

FLBuilder::register_module( 'Cards', array(
  'my-tab-1'      => array(
      'title'         => __( 'Tab 1', 'fl-builder' ),
  ),
  'my-tab-2'      => array(
      'title'         => __( 'Tab 2', 'fl-builder' ),
  ),
) );