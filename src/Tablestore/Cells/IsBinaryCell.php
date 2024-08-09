<?php

declare(strict_types=1);

namespace Dew\Acs\Tablestore\Cells;

use Override;

trait IsBinaryCell
{
    use IsStringCell;

    /**
     * The cell type.
     */
    #[Override]
    public function type(): ValueType
    {
        return ValueType::BLOB;
    }
}
