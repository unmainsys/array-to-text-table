<?php declare(strict_types=1);

namespace Unmainsys\Util\Table\Decorator;

use function chr;

class Unicode
{
    public function getTopLeft(): string
    {
        return $this->unicodeToChar(0x250C);
    }

    public function getTopRight(): string
    {
        return $this->unicodeToChar(0x2510);
    }

    public function getBottomLeft(): string
    {
        return $this->unicodeToChar(0x2514);
    }

    public function getBottomRight(): string
    {
        return $this->unicodeToChar(0x2518);
    }

    public function getVertical(): string
    {
        return $this->unicodeToChar(0x2502);
    }

    public function getHorizontal(): string
    {
        return $this->unicodeToChar(0x2500);
    }

    public function getCross(): string
    {
        return $this->unicodeToChar(0x253C);
    }

    public function getVerticalRight(): string
    {
        return $this->unicodeToChar(0x251C);
    }

    public function getVerticalLeft(): string
    {
        return $this->unicodeToChar(0x2524);
    }

    public function getHorizontalDown(): string
    {
        return $this->unicodeToChar(0x252C);
    }

    public function getHorizontalUp(): string
    {
        return $this->unicodeToChar(0x2534);
    }

    /**
     * Convert am unicode character code to a character
     */
    protected function unicodeToChar(int $code): string
    {
        if ($code <= 0x7F) {
            $char = chr($code);
        } elseif ($code <= 0x7FF) {
            $char = chr(0xC0 | $code >> 6)
                . chr(0x80 | $code & 0x3F);
        } elseif ($code <= 0xFFFF) {
            $char = chr(0xE0 | $code >> 12)
                . chr(0x80 | $code >> 6 & 0x3F)
                . chr(0x80 | $code & 0x3F);
        } elseif ($code <= 0x10FFFF) {
            $char = chr(0xF0 | $code >> 18)
                . chr(0x80 | $code >> 12 & 0x3F)
                . chr(0x80 | $code >> 6 & 0x3F)
                . chr(0x80 | $code & 0x3F);
        } else {
            return '';
        }

        return $char;
    }
}