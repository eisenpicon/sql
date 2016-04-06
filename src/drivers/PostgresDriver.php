<?php

namespace mindplay\sql\drivers;

use mindplay\sql\framework\Driver;

class PostgresDriver extends Driver
{
    public function quoteName($table, $column = null)
    {
        return '"' . $table . '"' . ($column ? '."' . $column . '"' : '');
    }
}
