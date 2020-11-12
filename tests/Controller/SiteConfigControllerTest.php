<?php

namespace Drupal\u_of_a\Tests;

use Drupal\simpletest\WebTestBase;

/**
 * Provides automated tests for the u_of_a module.
 */
class SiteConfigControllerTest extends WebTestBase {


  /**
   * {@inheritdoc}
   */
  public static function getInfo() {
    return [
      'name' => "u_of_a SiteConfigController's controller functionality",
      'description' => 'Test Unit for module u_of_a and controller SiteConfigController.',
      'group' => 'Other',
    ];
  }

  /**
   * {@inheritdoc}
   */
  public function setUp() {
    parent::setUp();
  }

  /**
   * Tests u_of_a functionality.
   */
  public function testSiteConfigController() {
    // Check that the basic functions of module u_of_a.
    $this->assertEquals(TRUE, TRUE, 'Test Unit Generated via Drupal Console.');
  }

}
