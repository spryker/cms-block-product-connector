<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace Spryker\Zed\CmsBlockProductConnector\Dependency\Facade;

use Generated\Shared\Transfer\PaginationTransfer;
use Generated\Shared\Transfer\ProductAbstractSuggestionCollectionTransfer;

interface CmsBlockProductConnectorToProductFacadeInterface
{
    public function getPaginatedProductAbstractSuggestions(
        string $suggestion,
        PaginationTransfer $paginationTransfer
    ): ProductAbstractSuggestionCollectionTransfer;
}
