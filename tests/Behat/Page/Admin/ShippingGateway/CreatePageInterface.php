<?php

/*
 * This file was created by the developers from BitBag.
 * Feel free to contact us once you face any issues or want to start
 * another great project.
 * You can find more information about us on https://bitbag.shop and write us
 * an email on mikolaj.krol@bitbag.pl.
*/

declare(strict_types=1);

namespace Tests\BitBag\SyliusDhl24PlShippingExportPlugin\Behat\Page\Admin\ShippingGateway;

use Sylius\Behat\Page\Admin\Crud\CreatePageInterface as BaseCreatePageInterface;

interface CreatePageInterface extends BaseCreatePageInterface
{
    public function selectShippingMethod($name): void;

    public function selectFieldOption($field, $option): void;

    public function fillField($field, $value): void;

    public function submit(): void;
}
