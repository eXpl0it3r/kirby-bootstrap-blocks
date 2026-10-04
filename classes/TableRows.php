<?php

namespace Expl0it3r\BootstrapBlocks;

/**
 * The cells of the table block, stored as JSON array of rows, each row an array of strings.
 */
class TableRows
{
    /**
     * Returns the rows as rectangular grid of strings.
     * Content that was edited by hand or broken JSON shouldn't break the Panel, as such anything odd turns into an empty grid.
     */
    public static function decode(mixed $value): array
    {
        if (is_string($value)) {
            $value = json_decode($value, true);
        }

        if (!is_array($value) || $value === []) {
            return static::empty();
        }

        $rows = [];

        foreach ($value as $row) {
            $rows[] = array_map(fn ($cell) => is_scalar($cell) ? (string)$cell : '', array_values((array)$row));
        }

        $columns = max(1, ...array_map('count', $rows));

        return array_map(fn ($row) => array_pad($row, $columns, ''), $rows);
    }

    public static function encode(mixed $value): string
    {
        return json_encode(static::decode($value), JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES);
    }

    public static function empty(int $rows = 3, int $columns = 3): array
    {
        return array_fill(0, $rows, array_fill(0, $columns, ''));
    }
}
