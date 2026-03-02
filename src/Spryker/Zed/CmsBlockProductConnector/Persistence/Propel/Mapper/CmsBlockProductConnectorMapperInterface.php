<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace Spryker\Zed\CmsBlockProductConnector\Persistence\Propel\Mapper;

use Generated\Shared\Transfer\ProductAbstractTransfer;
use Orm\Zed\Product\Persistence\SpyProductAbstract;

interface CmsBlockProductConnectorMapperInterface
{
    public function mapProductAbstractEntityToProductAbstractTransfer(
        SpyProductAbstract $productAbstractEntity,
        ProductAbstractTransfer $productAbstractTransfer
    ): ProductAbstractTransfer;
}
