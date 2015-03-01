<?php

namespace Boilerplate;

/**
 * Hook the WordPress plugin into the appropriate WordPress actions and filters.
 *
 * @since 1.0.0
 */

final class PluginLoader {

  /**
   * The instance of Plugin loader class.
   *
   * @var object
   * @since 1.0.0
   */

  private static $instance;

  /**
   * Plugin boilerplate textdomain.
   *
   * @var string
   * @since 1.0.0
   */

  const TEXT_DOMAIN = 'boilerplate';

  /**
   * Get Plugin boilerplate loader instance.
   *
   * @since 1.0.0
   *
   * @return object
   */

  public static function instance() {
    if (!isset(self::$instance)) {
      self::$instance = new static;
      self::$instance->setupActions();
      self::$instance->setupFilters();
      self::$instance->loadTranslatedText();
    }

    return self::$instance;
  }

  /**
   * Load translated strings for the current locale, if a translation exists.
   *
   * @since 1.0.0
   */

  public function loadTranslatedText()

  {
    load_plugin_textdomain(self::TEXT_DOMAIN, false, dirname(dirname(__FILE__)) . '/languages');

  }

  /**
   * Setup WordPress actions.
   *
   * @since 1.0.0
   */

  private function setupActions() {
    add_action('init', [$this, 'loadTranslatedText']);
  }

  /**
   * Setup WordPress filters.
   *
   * @since 1.0.0
   */

  private function setupFilters() {

  }

}
