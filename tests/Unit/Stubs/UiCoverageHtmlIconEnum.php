<?php

declare(strict_types=1);

namespace Modules\UI\Tests\Unit\Stubs;

use Filament\Support\Contracts\HasColor;
use Filament\Support\Contracts\HasIcon;
use Illuminate\Contracts\Support\Htmlable;
use Illuminate\Support\HtmlString;

/**
 * Enum fixture per RadioBadge::getIconForOption — ramo Htmlable / no __toString.
 */
enum UiCoverageHtmlIconEnum: string implements HasColor, HasIcon
{
    case HtmlStringIcon = 'html_string';
    case HtmlableOnly = 'htmlable_only';

    public function getColor(): string
    {
        return 'gray';
    }

    public function getIcon(): Htmlable
    {
        return match ($this) {
            self::HtmlStringIcon => new HtmlString('<i>x</i>'),
<<<<<<< .merge_file_vYhYla
=======
<<<<<<< .merge_file_m3ZBat
>>>>>>> .merge_file_0PeElo
<<<<<<< HEAD
            self::HtmlableOnly => new class implements Htmlable
            {
=======
            self::HtmlableOnly => new class implements Htmlable {
>>>>>>> laraxot/dev
<<<<<<< .merge_file_vYhYla
=======
=======
            self::HtmlableOnly => new class implements Htmlable {
>>>>>>> .merge_file_2ny5Tj
>>>>>>> .merge_file_0PeElo
                public function toHtml(): string
                {
                    return 'x';
                }
            },
        };
    }
}
