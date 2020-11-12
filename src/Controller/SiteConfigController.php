<?php

namespace Drupal\u_of_a\Controller;

use Drupal\Core\Controller\ControllerBase;

/**
 * Class SiteConfigController.
 */
class SiteConfigController extends ControllerBase {

  /**
   * Site Config Page.
   *
   * @return array
   *   The site config page, as a render array.
   */
  public function siteConfigPage() {
    return [
      '#theme' => 'site_config',
    ];
  }

}
