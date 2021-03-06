<?php

namespace Jp\YahooApis\YDN\V201907\Media;

class MediaService extends \Jp\YahooApis\YDN\AdApiSample\Util\Service
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'SoapHeader' => 'Jp\\YahooApis\\YDN\\V201907\\SoapHeader',
      'SoapResponseHeader' => 'Jp\\YahooApis\\YDN\\V201907\\SoapResponseHeader',
      'Paging' => 'Jp\\YahooApis\\YDN\\V201907\\Paging',
      'Error' => 'Jp\\YahooApis\\YDN\\V201907\\Error',
      'ErrorDetail' => 'Jp\\YahooApis\\YDN\\V201907\\ErrorDetail',
      'Page' => 'Jp\\YahooApis\\YDN\\V201907\\Page',
      'ReturnValue' => 'Jp\\YahooApis\\YDN\\V201907\\ReturnValue',
      'ListReturnValue' => 'Jp\\YahooApis\\YDN\\V201907\\ListReturnValue',
      'MediaSelector' => 'Jp\\YahooApis\\YDN\\V201907\\Media\\MediaSelector',
      'MediaPage' => 'Jp\\YahooApis\\YDN\\V201907\\Media\\MediaPage',
      'MediaValues' => 'Jp\\YahooApis\\YDN\\V201907\\Media\\MediaValues',
      'MediaRecord' => 'Jp\\YahooApis\\YDN\\V201907\\Media\\MediaRecord',
      'Media' => 'Jp\\YahooApis\\YDN\\V201907\\Media\\Media',
      'ImageMedia' => 'Jp\\YahooApis\\YDN\\V201907\\Media\\ImageMedia',
      'MediaOperation' => 'Jp\\YahooApis\\YDN\\V201907\\Media\\MediaOperation',
      'MediaReturnValue' => 'Jp\\YahooApis\\YDN\\V201907\\Media\\MediaReturnValue',
      'Operation' => 'Jp\\YahooApis\\YDN\\V201907\\Media\\Operation',
      'get' => 'Jp\\YahooApis\\YDN\\V201907\\Media\\get',
      'getResponse' => 'Jp\\YahooApis\\YDN\\V201907\\Media\\getResponse',
      'mutate' => 'Jp\\YahooApis\\YDN\\V201907\\Media\\mutate',
      'mutateResponse' => 'Jp\\YahooApis\\YDN\\V201907\\Media\\mutateResponse',
    );

    /**
     * @param array $options A array of config values
     * @param string $endpoint Service Endpont URL
     * @param string $wsdl The wsdl file to use
     */
    public function __construct($wsdl = null, $endpoint = null, array $options = array())
    {
      foreach (self::$classmap as $key => $value) {
        if (!isset($options['classmap'][$key])) {
          $options['classmap'][$key] = $value;
        }
      }
      $options = array_merge(array (
      'features' => 1,
    ), $options);
      if (!$wsdl) {
        $wsdl = 'https://location.im.yahooapis.jp/services/V201907/MediaService?wsdl';
      }
      parent::__construct($wsdl, $endpoint, $options);
    }

    /**
     * @param get $parameters
     * @return getResponse
     */
    public function get(get $parameters)
    {
      return parent::invoke('get', $parameters);
    }

    /**
     * @param mutate $parameters
     * @return mutateResponse
     */
    public function mutate(mutate $parameters)
    {
      return parent::invoke('mutate', $parameters);
    }

}
