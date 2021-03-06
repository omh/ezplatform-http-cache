<?php

/**
 * @copyright Copyright (C) eZ Systems AS. All rights reserved.
 * @license For full copyright and license information view LICENSE file distributed with this source code.
 */
namespace EzSystems\PlatformHttpCacheBundle\Tests\SignalSlot\ContentTypeService;

use eZ\Publish\Core\SignalSlot\Signal\ContentTypeService\AssignContentTypeGroupSignal;
use EzSystems\PlatformHttpCacheBundle\SignalSlot\ContentTypeService\AssignContentTypeGroupSlot;
use EzSystems\PlatformHttpCacheBundle\Tests\SignalSlot\AbstractSlotTest;

class AssignContentTypeGroupSlotTest extends AbstractSlotTest
{
    public function createSignal()
    {
        return new AssignContentTypeGroupSignal([
            'contentTypeGroupId' => 4,
        ]);
    }

    public function generateTags()
    {
        return ['type-group-4'];
    }

    public function getReceivedSignalClasses()
    {
        return [
            AssignContentTypeGroupSignal::class,
        ];
    }

    public function getSlotClass()
    {
        return AssignContentTypeGroupSlot::class;
    }
}
