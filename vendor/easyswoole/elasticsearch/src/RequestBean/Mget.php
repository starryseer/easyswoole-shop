<?php
/**
 * Created by PhpStorm.
 * User: xcg
 * Date: 2019/12/12
 * Time: 16:15
 */

namespace EasySwoole\ElasticSearch\RequestBean;


class Mget extends AbstractBean
{
    protected $index;
    protected $type;
    protected $stored_fields;
    protected $preference;
    protected $realtime;
    protected $refresh;
    protected $routing;
    protected $_source;
    protected $_source_excludes;
    protected $_source_includes;
    protected $body;

    /**
     * @return mixed
     */
    public function getIndex()
    {
        return $this->index;
    }

    /**
     * @param mixed $index
     */
    public function setIndex($index): void
    {
        $this->index = $index;
    }

    /**
     * @return mixed
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param mixed $type
     */
    public function setType($type): void
    {
        $this->type = $type;
    }

    /**
     * @return mixed
     */
    public function getStoredFields()
    {
        return $this->stored_fields;
    }

    /**
     * @param mixed $stored_fields
     */
    public function setStoredFields($stored_fields): void
    {
        $this->stored_fields = $stored_fields;
    }

    /**
     * @return mixed
     */
    public function getPreference()
    {
        return $this->preference;
    }

    /**
     * @param mixed $preference
     */
    public function setPreference($preference): void
    {
        $this->preference = $preference;
    }

    /**
     * @return mixed
     */
    public function getRealtime()
    {
        return $this->realtime;
    }

    /**
     * @param mixed $realtime
     */
    public function setRealtime($realtime): void
    {
        $this->realtime = $realtime;
    }

    /**
     * @return mixed
     */
    public function getRefresh()
    {
        return $this->refresh;
    }

    /**
     * @param mixed $refresh
     */
    public function setRefresh($refresh): void
    {
        $this->refresh = $refresh;
    }

    /**
     * @return mixed
     */
    public function getRouting()
    {
        return $this->routing;
    }

    /**
     * @param mixed $routing
     */
    public function setRouting($routing): void
    {
        $this->routing = $routing;
    }

    /**
     * @return mixed
     */
    public function getSource()
    {
        return $this->_source;
    }

    /**
     * @param mixed $source
     */
    public function setSource($source): void
    {
        $this->_source = $source;
    }

    /**
     * @return mixed
     */
    public function getSourceExcludes()
    {
        return $this->_source_excludes;
    }

    /**
     * @param mixed $source_excludes
     */
    public function setSourceExcludes($source_excludes): void
    {
        $this->_source_excludes = $source_excludes;
    }

    /**
     * @return mixed
     */
    public function getSourceIncludes()
    {
        return $this->_source_includes;
    }

    /**
     * @param mixed $source_includes
     */
    public function setSourceIncludes($source_includes): void
    {
        $this->_source_includes = $source_includes;
    }

    /**
     * @return mixed
     */
    public function getBody()
    {
        return $this->body;
    }

    /**
     * @param mixed $body
     */
    public function setBody($body): void
    {
        $this->body = $body;
    }
}