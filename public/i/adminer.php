<?php
function adminer_object() {
    // required to run any plugin
    include_once "./plugins/plugin.php";
    
    // autoloader
    foreach (glob("plugins/*.php") as $filename) {
        include_once "./$filename";
    }
    
    $plugins = array(
	//new AdminerDumpAlter,
	//new AdminerEditCalendar,
	new FasterTablesFilter,
        //new AdminerFileUpload,
        new AdminerForeignSystem,
        //new AdminerFrames,
        //new AdminerLoginServers,
        // specify enabled plugins here
        //new AdminerDumpXml,
        //new AdminerTinymce,
        //new AdminerFileUpload("data/"),
        //new AdminerSlugify,
        //new AdminerTranslation,
        //new AdminerForeignSystem,
    );
    
    /* It is possible to combine customization and plugins:
    class AdminerCustomization extends AdminerPlugin {
    }
    return new AdminerCustomization($plugins);
    */
    
    return new AdminerPlugin($plugins);
}

// include original Adminer or Adminer Editor
include "./adminer-4.2.5.php";
?>
