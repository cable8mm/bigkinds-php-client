<?php

namespace Cable8mm\BigkindsPhpClient\Codetable;

/**
 * Codetable Accessor for Dependency Injection to BigkinsClient.
 */
class CodetableAccess
{
    /**
     * Each Codetable.
     *
     * @var \Cable8mm\BigkindsPhpClient\Codetable
     */
    public $codetable;

    public function __construct(ICodetable $codetable)
    {
        $this->codetable = $codetable;
    }

    /**
     * Output codetables.
     *
     * @return array
     */
    public function getAll()
    {
        return $this->codetable->getAll();
    }

    /**
     * Get a string containing the version of the category.
     *
     * @return string
     */
    public function getCodetableVersion()
    {
        return $this->codetable->getCodetableVersion();
    }
}
