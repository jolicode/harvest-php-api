<?php

namespace JoliCode\Harvest\Api\Model;

class ExpenseReceipt
{
    /**
     * 
     *
     * @var string|null
     */
    protected $url;
    /**
     * 
     *
     * @var string|null
     */
    protected $fileName;
    /**
     * 
     *
     * @var int|null
     */
    protected $fileSize;
    /**
     * 
     *
     * @var string|null
     */
    protected $contentType;
    /**
     * 
     *
     * @return string|null
     */
    public function getUrl() : ?string
    {
        return $this->url;
    }
    /**
     * 
     *
     * @param string|null $url
     *
     * @return self
     */
    public function setUrl(?string $url) : self
    {
        $this->url = $url;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getFileName() : ?string
    {
        return $this->fileName;
    }
    /**
     * 
     *
     * @param string|null $fileName
     *
     * @return self
     */
    public function setFileName(?string $fileName) : self
    {
        $this->fileName = $fileName;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getFileSize() : ?int
    {
        return $this->fileSize;
    }
    /**
     * 
     *
     * @param int|null $fileSize
     *
     * @return self
     */
    public function setFileSize(?int $fileSize) : self
    {
        $this->fileSize = $fileSize;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getContentType() : ?string
    {
        return $this->contentType;
    }
    /**
     * 
     *
     * @param string|null $contentType
     *
     * @return self
     */
    public function setContentType(?string $contentType) : self
    {
        $this->contentType = $contentType;
        return $this;
    }
}