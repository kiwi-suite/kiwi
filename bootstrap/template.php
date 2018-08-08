<?php
namespace App;
use KiwiSuite\Template\TemplateConfigurator;

/** @var TemplateConfigurator $template */

$template->addDirectory('layout', __DIR__ . '/../templates/layout');
$template->addDirectory('page', __DIR__ . '/../templates/page');
$template->addDirectory('block', __DIR__ . '/../templates/block');
$template->addDirectory('partials', __DIR__ . '/../templates/partials');
