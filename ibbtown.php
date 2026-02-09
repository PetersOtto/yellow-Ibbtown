<?php
// Ibbtown is a theme for the Yellow CMS by datenstrom.

class YellowIbbtown {
    const VERSION = "0.9.3";
    public $yellow;         // access to API
    
    // Handle initialisation
    public function onLoad($yellow) {
        $this->yellow = $yellow;
    }
    
    // Handle update
    public function onUpdate($action) {
        $fileName = $this->yellow->system->get("coreExtensionDirectory").$this->yellow->system->get("coreSystemFile");
        if ($action=="install") {
            $this->yellow->system->save($fileName, array("theme" => "ibbtown"));
        } elseif ($action=="uninstall" && $this->yellow->system->get("theme")=="ibbtown") {
            $this->yellow->system->save($fileName, array("theme" => $this->yellow->system->getDifferent("theme")));
        }
    }

    // Handle enumeration
    public function onEnumerate($action, $context) {
        $output = null;
        if ($action=="theme") {
            $path = $this->yellow->system->get("coreThemeDirectory");
            $output = $this->yellow->toolbox->getDirectoryEntries($path, "/.*/", false, true, false);
        }
        return $output;
    }
}
