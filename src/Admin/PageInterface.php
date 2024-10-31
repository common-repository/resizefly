<?php
/**
 * Created by PhpStorm.
 * User: alpipego
 * Date: 08/10/16
 * Time: 13:59.
 */

namespace Alpipego\Resizefly\Admin;

/**
 * Interface AdminInterface.
 */
interface PageInterface
{
    public function run();

    /**
     * @return string
     */
    public function getId();

    /**
     * @return string
     */
    public function getSlug();

    public function localize(array $toLocalize);
}
