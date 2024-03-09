<?php declare(strict_types=1);

namespace Unmainsys\Util\Table\Decorator;

class Ascii
{
    public function getTopLeft(): string
    {
        return '+';
    }

    public function getTopRight(): string
    {
        return '+';
    }

    public function getBottomLeft(): string
    {
        return '+';
    }

    public function getBottomRight(): string
    {
        return '+';
    }

    public function getVertical(): string
    {
        return '|';
    }

    public function getHorizontal(): string
    {
        return '-';
    }

    public function getCross(): string
    {
        return '+';
    }

    public function getVerticalRight(): string
    {
        return '+';
    }

    public function getVerticalLeft(): string
    {
        return '+';
    }

    public function getHorizontalDown(): string
    {
        return '+';
    }

    public function getHorizontalUp(): string
    {
        return '+';
    }
}