<?php

declare(strict_types=1);

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use ApiPlatform\Core\Annotation\ApiSubresource;
use Doctrine\ORM\Mapping as ORM;

/**
 * Book.
 *
 * @ORM\Table(name="book")
 * @ORM\Entity
 * @ApiResource()
 */
class Book
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private int $id;

    /**
     * @var string
     *
     * @ORM\Column(name="title", type="string", length=100, nullable=false)
     */
    private string $title;

    /**
     * @var string
     *
     * @ORM\Column(name="publicationDate", type="date", nullable=false)
     */
    private string $publicationDate;

    /**
     * @var string
     * @ORM\ManyToOne(targetEntity="Author", inversedBy="books")
     * @ORM\JoinColumn(name="author_id", referencedColumnName="id")
     * @ApiSubresource()
     */
    private Author $author;


}
