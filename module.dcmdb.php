<?php
//
// iTop module definition file
//

SetupWebPage::AddModule(
    __FILE__, // Path to the current file, all other file names are relative to the directory containing this file
    'dcmdb/',
    array(
        // Identification
        //
        'label' => 'Document Type Objects',
        'category' => 'business',

        // Setup
        //
        'dependencies' => array(
            'itop-config-mgmt/2.0.0',
            'itop-service-mgmt/2.0.0',
        ),
        'mandatory' => false,
        'visible' => true,

        // Components
        //
        'datamodel' => array(
            'model.dcmdb.php',
            //'main.dcmdb.php'
        ),
        'webservice' => array(

        ),
        'data.struct' => array(
            // add your 'structure' definition XML files here,
            //'data.struct.dcmdb.xml'
        ),
        'data.sample' => array(
            // add your sample data XML files here,
        ),

        // Documentation
        //
        'doc.manual_setup' => '', // hyperlink to manual setup documentation, if any
        'doc.more_information' => '', // hyperlink to more information, if any

        // Default settings
        //
        'settings' => array(
            // Module specific settings go here, if any
        ),
    )
);

?>
