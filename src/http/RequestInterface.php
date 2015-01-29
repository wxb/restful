<?php

/**
 * @file
 * Contains \Drupal\restful\Http\RequestInterface.
 */

namespace Drupal\restful\Http;

interface RequestInterface {

  /**
   * Creates a new request with values from PHP's super globals.
   *
   * @return RequestInterface
   *   Request A Request instance
   */
  public static function createFromGlobals();

  /**
   * Creates a Request based on a given URI and configuration.
   *
   * TODO: Add documentation.
   *
   * @return RequestInterface
   *   Request A Request instance
   */
  public static function create($path, $query, $method = 'GET', HttpHeaderBag $headers, $viaRouter = FALSE, $csrfToken = NULL, $cookies = array(), $files = array(), $server = array());

  /**
   * Determines if the HTTP method represents a write operation.
   *
   * @param string $method
   *   The method name.
   *
   * @return boolean
   *   TRUE if it is a write operation. FALSE otherwise.
   */
  public static function isWriteMethod($method);

  /**
   * Determines if the HTTP method represents a read operation.
   *
   * @param string $method
   *   The method name.
   *
   * @return boolean
   *   TRUE if it is a read operation. FALSE otherwise.
   */
  public static function isReadMethod($method);

  /**
   * Determines if the HTTP method is one of the known methods.
   *
   * @param string $method
   *   The method name.
   *
   * @return boolean
   *   TRUE if it is a known method. FALSE otherwise.
   */
  public static function isValidMethod($method);

  /**
   * Helper method to know if the current request is for a list.
   *
   * @return boolean
   *   TRUE if the request is for a list. FALSE otherwise.
   */
  public function isListRequest();

  /**
   * Gets the request path.
   *
   * @return string
   */
  public function getPath();

  /**
   * Gets the fully qualified URL with the query params.
   *
   * @return string
   *   The URL.
   */
  public function href();

  /**
   * Gets the headers bag.
   *
   * @return HttpHeaderBag
   */
  public function getHeaders();

  /**
   * Returns the user.
   *
   * @return
   *   string|null
   */
  public function getUser();

  /**
   * Returns the password.
   *
   * @return
   *   string|null
   */
  public function getPassword();

}