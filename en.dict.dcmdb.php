<?php
/**
 * Localized data
 *
 * @copyright   Copyright (C) 2013 XXXXX
 * @license     http://opensource.org/licenses/AGPL-3.0
 */

Dict::Add('EN US', 'English', 'English', array(
    
    //Classes
    'Class:Site' => 'Site',
    'Class:Site/Attribute:name' => 'Name',
    'Class:Site/Attribute:org_id' => 'Organization',
    'Class:Site/Attribute:location_id' => 'Location',
    'Class:Site/Attribute:description' => 'Description',
    'Class:Site/Attribute:docsolution_id' => 'Document Solution',
    'Class:Site/Attribute:docimplementation_list' => 'Implementations',

    'Class:DocProcess' => 'Document Process',
    'Class:DocProcess/Attribute:shortname' => 'Short Name',
    'Class:DocProcess/Attribute:doccategory_list' => 'Document Categories',
    'Class:DocProcess/Attribute:docgroup_list' => 'Document Groups',
    'Class:DocProcess/Attribute:docartifact_list' => 'Document Artifacts',

    'Class:DocCategory' => 'Document Category',
    'Class:DocCategory/Name' => '%1$s',
    'Class:DocCategory/Attribute:name' => 'Name',
    'Class:DocCategory/Attribute:shortname' => 'Short Name',
    'Class:DocCategory/Attribute:docprocess_id' => 'Document Process',
    'Class:DocCategory/Attribute:description' => 'Description',
    'Class:DocCategory/Attribute:docgroup_list' => 'Document Groups',
    'Class:DocCategory/Attribute:docartifact_list' => 'Document Artifacts',
    
    'Class:DocGroup' => 'Document Group',
    'Class:DocGroup/Name' => '%1$s',
    'Class:DocGroup/Attribute:name' => 'Name',
    'Class:DocGroup/Attribute:shortname' => 'Short Name',
    'Class:DocGroup/Attribute:docprocess_id' => 'Document Process',
    'Class:DocGroup/Attribute:doccategory_id' => 'Document Category',
    'Class:DocGroup/Attribute:docimplementation_id' => 'Implementation',
    'Class:DocGroup/Attribute:description' => 'Description',
    'Class:DocGroup/Attribute:docartifact_list' => 'Document Artifacts',
    'Class:DocGroup/Attribute:docimplementation_list' => 'Implementations',

    'Class:DocArtifact' => 'Document Artifact',
    'Class:DocArtifact/Name' => '%1$s',
    'Class:DocArtifact/Attribute:name' => 'Name',
    'Class:DocArtifact/Attribute:subgroup' => 'Subgroup',
    'Class:DocArtifact/Attribute:region' => 'Region',
    'Class:DocArtifact/Attribute:docprocess_id' => 'Document Process',
    'Class:DocArtifact/Attribute:doccategory_id' => 'Document Category',
    'Class:DocArtifact/Attribute:docgroup_id' => 'Document Group',
    'Class:DocArtifact/Attribute:description' => 'Description',

    'Class:DocSolution' => 'DM Solution',
    'Class:DocSolution/Attribute:docimplementation_list' => 'DM Implementations',

    'Class:DocImplementation' => 'DM Implementation',
    'Class:DocImplementation/Name' => '%1$s:%2$s:%3$s',
    'Class:DocImplementation/Attribute:name' => 'Name',
    'Class:DocImplementation/Attribute:status' => 'Status',
    'Class:DocImplementation/Attribute:site_id' => 'Site',
    'Class:DocImplementation/Attribute:docgroup_id' => 'Document Group',
    'Class:DocImplementation/Attribute:docsolution_id' => 'Document Solution',
    'Class:DocImplementation/Attribute:description' => 'Description',
    'Class:DocImplementation/Attribute:docgroup_list' => 'Document Groups',
    
    'Class:lnkDocImplementationToDocGroup' => 'Implementation to Group',
    'Class:lnkDocImplementationToDocGroup/Attribute:docimplementation_id' => 'DM Implementation',
    'Class:lnkDocImplementationToDocGroup/Attribute:docgroup_id' => 'Document Group',
    

    //Menu and Dashboard
    'Menu:DocTypes' => 'Document Management Applications',
    'Menu:DocTypes:Overview' => 'Overview',
    'Menu:DocTypes:DocTypes' => 'Document Types',
    'Menu:DocTypes:Location' => 'Locations',
    'Menu:DocTypes:DocImplementation' => 'Implementations',
    'Menu:DocTypes:DocImplementation:Location' => 'Location',
    'Menu:DocTypes:DocImplementation:Site' => 'Sites',
    'Menu:DocTypes:DocImplementation:DocSolution' => 'DM Solutions',
    'Menu:DocTypes:DocImplementation:DocImplementation' => 'DM Implementations',
    'Menu:DocTypes:DocProcess' => 'Document Processes',
    'Menu:DocTypes:DocCategory' => 'Document Categories',
    'Menu:DocTypes:DocGroup' => 'Document Groups',
    'Menu:DocTypes:DocArtifact' => 'Document Artifacts',
    
));
  
?>
