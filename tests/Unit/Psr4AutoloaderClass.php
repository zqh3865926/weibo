<?php
namespace Tests\Unit;

class Psr4AutoloaderClass
{
    protected $prefixes = array();

    public function register()
    {
        spl_autoload_register(array($this, "loadClass"));
    }

    public function addNamespace($prefix, $base_dir, $prepend = FALSE)
    {
        $prefix = trim($prefix, '\\').'\\';
        if (isset($this->prefixes[$prefix]) === FALSE){
            $this->prefixes[$prefix] = array();
        }
        if ($prepend){
            array_unshift($this->prefixes[$prefix], $base_dir);
        }else{
            array_push($this->prefixes[$prefix], $base_dir);
        }

    }

    public function loadClass($class)
    {
        
    }
}