<?php

declare(strict_types=1);

namespace Modules\UI\Tests\Unit\Helpers;

use Modules\Cms\Actions\ResolveLocalizedBlockDataAction;
<<<<<<< HEAD
<<<<<<< .merge_file_Zc4g3C
use ReflectionClass;
=======
<<<<<<< .merge_file_d6ygPZ
=======
<<<<<<< .merge_file_cYEeEE
>>>>>>> .merge_file_YXs1IW
<<<<<<< HEAD
use ReflectionClass;
=======
>>>>>>> laraxot/dev
<<<<<<< .merge_file_d6ygPZ
=======
=======
>>>>>>> .merge_file_P2ECcY
>>>>>>> .merge_file_YXs1IW
>>>>>>> .merge_file_LgFC0Q
=======
use ReflectionClass;
>>>>>>> laraxot/dev

/**
 * Helper condivisi per sweep coverage UI (evita redeclare tra file Pest).
 */
final class UiCoverageMissHelpers
{
    public static function prop(object $target, string $name): mixed
    {
<<<<<<< HEAD
<<<<<<< .merge_file_Zc4g3C
        $ref = new ReflectionClass($target);
        while ($ref !== false) {
=======
<<<<<<< .merge_file_d6ygPZ
=======
<<<<<<< .merge_file_cYEeEE
>>>>>>> .merge_file_YXs1IW
<<<<<<< HEAD
        $ref = new ReflectionClass($target);
        while ($ref !== false) {
=======
        $ref = new \ReflectionClass($target);
        while (false !== $ref) {
>>>>>>> laraxot/dev
<<<<<<< .merge_file_d6ygPZ
=======
=======
        $ref = new \ReflectionClass($target);
        while (false !== $ref) {
>>>>>>> .merge_file_P2ECcY
>>>>>>> .merge_file_YXs1IW
>>>>>>> .merge_file_LgFC0Q
=======
        $ref = new ReflectionClass($target);
        while ($ref !== false) {
>>>>>>> laraxot/dev
            if ($ref->hasProperty($name)) {
                $prop = $ref->getProperty($name);
                $prop->setAccessible(true);

                return $prop->getValue($target);
            }
            $ref = $ref->getParentClass();
        }

        return null;
    }

    public static function set(object $target, string $name, mixed $value): void
    {
<<<<<<< HEAD
<<<<<<< .merge_file_Zc4g3C
        $ref = new ReflectionClass($target);
        while ($ref !== false) {
=======
<<<<<<< .merge_file_d6ygPZ
=======
<<<<<<< .merge_file_cYEeEE
>>>>>>> .merge_file_YXs1IW
<<<<<<< HEAD
        $ref = new ReflectionClass($target);
        while ($ref !== false) {
=======
        $ref = new \ReflectionClass($target);
        while (false !== $ref) {
>>>>>>> laraxot/dev
<<<<<<< .merge_file_d6ygPZ
=======
=======
        $ref = new \ReflectionClass($target);
        while (false !== $ref) {
>>>>>>> .merge_file_P2ECcY
>>>>>>> .merge_file_YXs1IW
>>>>>>> .merge_file_LgFC0Q
=======
        $ref = new ReflectionClass($target);
        while ($ref !== false) {
>>>>>>> laraxot/dev
            if ($ref->hasProperty($name)) {
                $prop = $ref->getProperty($name);
                $prop->setAccessible(true);
                try {
                    $prop->setValue($target, $value);
                } catch (\Throwable) {
                }

                return;
            }
            $ref = $ref->getParentClass();
        }
    }

    public static function ensureCmsStub(): void
    {
        if (class_exists(ResolveLocalizedBlockDataAction::class, false)) {
            return;
        }

        eval(<<<'PHP'
namespace Modules\Cms\Actions;
class ResolveLocalizedBlockDataAction
{
    /** @var callable|null */
    public static $handler = null;
    public function execute(array $viewParams): array|string
    {
        if (is_callable(self::$handler)) {
            return (self::$handler)($viewParams);
        }
        // Default: pass-through (non rompere altri test ResolveLocalized)
        return $viewParams;
    }
}
PHP);
    }
}
