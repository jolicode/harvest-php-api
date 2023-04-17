<?php

/*
 * This file is part of JoliCode's Harvest PHP API project.
 *
 * (c) JoliCode <coucou@jolicode.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace JoliCode\Harvest\Api\Model;

class ExpenseReceipt extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * @var string|null
     */
    protected $url;
    /**
     * @var string|null
     */
    protected $fileName;
    /**
     * @var int|null
     */
    protected $fileSize;
    /**
     * @var string|null
     */
    protected $contentType;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    public function getUrl(): ?string
    {
        return $this->url;
    }

    public function setUrl(?string $url): self
    {
        $this->initialized['url'] = true;
        $this->url = $url;

        return $this;
    }

    public function getFileName(): ?string
    {
        return $this->fileName;
    }

    public function setFileName(?string $fileName): self
    {
        $this->initialized['fileName'] = true;
        $this->fileName = $fileName;

        return $this;
    }

    public function getFileSize(): ?int
    {
        return $this->fileSize;
    }

    public function setFileSize(?int $fileSize): self
    {
        $this->initialized['fileSize'] = true;
        $this->fileSize = $fileSize;

        return $this;
    }

    public function getContentType(): ?string
    {
        return $this->contentType;
    }

    public function setContentType(?string $contentType): self
    {
        $this->initialized['contentType'] = true;
        $this->contentType = $contentType;

        return $this;
    }
}
