<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace SprykerTest\Service\UtilDateTime\Model;

use Codeception\Test\Unit;
use Spryker\Service\UtilDateTime\Model\DateTimeFormatterTwigExtension;
use Spryker\Service\UtilDateTime\UtilDateTimeServiceInterface;
use Twig\TwigFilter;

/**
 * Auto-generated group annotations
 *
 * @group SprykerTest
 * @group Service
 * @group UtilDateTime
 * @group Model
 * @group DateTimeFormatterTwigExtensionTest
 * Add your own group annotations below this line
 */
class DateTimeFormatterTwigExtensionTest extends Unit
{
    /**
     * @var string
     */
    public const DATE_TO_FORMAT = '1980-12-06 08:00:00';

    public function testInstantiationShouldReturnExtension(): void
    {
        $utilDateTimeServiceMock = $this->getUtilDateTimeServiceMock();
        $dateTimeFormatterTwigExtension = new DateTimeFormatterTwigExtension($utilDateTimeServiceMock);

        $this->assertInstanceOf(DateTimeFormatterTwigExtension::class, $dateTimeFormatterTwigExtension);
    }

    public function testGetNameReturnsNameOfExtension(): void
    {
        $utilDateTimeServiceMock = $this->getUtilDateTimeServiceMock();
        $dateTimeFormatterTwigExtension = new DateTimeFormatterTwigExtension($utilDateTimeServiceMock);

        $this->assertSame(DateTimeFormatterTwigExtension::EXTENSION_NAME, $dateTimeFormatterTwigExtension->getName());
    }

    public function testGetFiltersShouldReturnArray(): void
    {
        $utilDateTimeServiceMock = $this->getUtilDateTimeServiceMock();
        $dateTimeFormatterTwigExtension = new DateTimeFormatterTwigExtension($utilDateTimeServiceMock);

        $this->assertContainsOnly(TwigFilter::class, $dateTimeFormatterTwigExtension->getFilters());
    }

    public function testGetFunctionsShouldReturnArray(): void
    {
        $utilDateTimeServiceMock = $this->getUtilDateTimeServiceMock();
        $dateTimeFormatterTwigExtension = new DateTimeFormatterTwigExtension($utilDateTimeServiceMock);

        $this->assertIsArray($dateTimeFormatterTwigExtension->getFunctions());
    }

    public function testFormatDateDelegatesToDateTimeFormatter(): void
    {
        $utilDateTimeServiceMock = $this->getUtilDateTimeServiceMock();
        $utilDateTimeServiceMock->expects(static::once())->method('formatDate');

        $dateTimeFormatterTwigExtension = new DateTimeFormatterTwigExtension($utilDateTimeServiceMock);
        $dateTimeFormatterTwigExtension->formatDate(static::DATE_TO_FORMAT);
    }

    public function testFormatDateTimeDelegatesToDateTimeFormatter(): void
    {
        $utilDateTimeServiceMock = $this->getUtilDateTimeServiceMock();
        $utilDateTimeServiceMock->expects(static::once())->method('formatDateTime');

        $dateTimeFormatterTwigExtension = new DateTimeFormatterTwigExtension($utilDateTimeServiceMock);
        $dateTimeFormatterTwigExtension->formatDateTime(static::DATE_TO_FORMAT);
    }

    public function testFormatTimeDelegatesToDateTimeFormatter(): void
    {
        $utilDateTimeServiceMock = $this->getUtilDateTimeServiceMock();
        $utilDateTimeServiceMock->expects(static::once())->method('formatTime');

        $dateTimeFormatterTwigExtension = new DateTimeFormatterTwigExtension($utilDateTimeServiceMock);
        $dateTimeFormatterTwigExtension->formatTime(static::DATE_TO_FORMAT);
    }

    /**
     * @return \PHPUnit\Framework\MockObject\MockObject|\Spryker\Service\UtilDateTime\UtilDateTimeServiceInterface
     */
    protected function getUtilDateTimeServiceMock(): UtilDateTimeServiceInterface
    {
        $utilDateTimeServiceMock = $this->getMockBuilder(UtilDateTimeServiceInterface::class)->getMock();

        return $utilDateTimeServiceMock;
    }
}
