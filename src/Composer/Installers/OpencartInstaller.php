<?php
namespace Composer\Installers;

class OpencartInstaller extends BaseInstaller
{
    protected $locations = array(
        'vqmod' => 'vqmod/xml/',
        'theme' => 'catalog/view/theme/{$name}/',
        'language' => 'catalog/language/{$name}/',
    );
}
