<?php

declare(strict_types=1);

namespace Modules\UI\Actions\Icon;

use BladeUI\Icons\Factory as IconFactory;
<<<<<<< HEAD
<<<<<<< HEAD
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\File;
=======
use Exception;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\File;
use ReflectionClass;
>>>>>>> dfac49d (.)
=======
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\File;
>>>>>>> dfbb8305 (.)
use Spatie\QueueableAction\QueueableAction;

class GetAllIconsAction
{
    use QueueableAction;

    /**
     * @return array<string, array<string, mixed>>
     */
<<<<<<< HEAD
<<<<<<< HEAD
    public function execute(string $_context = 'form'): array
=======
    public function execute(string $context = 'form'): array
>>>>>>> dfac49d (.)
=======
    public function execute(string $_context = 'form'): array
>>>>>>> dfbb8305 (.)
    {
        $iconsFactory = App::make(IconFactory::class);

        // Uso reflection per accedere alle icone in modo sicuro
        try {
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> dfbb8305 (.)
            $reflection = new \ReflectionClass($iconsFactory);
            $property = $reflection->getProperty('iconSets');
            $property->setAccessible(true);
            $icons = $property->getValue($iconsFactory);
        } catch (\Exception $e) {
<<<<<<< HEAD
=======
            $reflection = new ReflectionClass($iconsFactory);
            $property = $reflection->getProperty('iconSets');
            $property->setAccessible(true);
            $icons = $property->getValue($iconsFactory);
        } catch (Exception $e) {
>>>>>>> dfac49d (.)
=======
>>>>>>> dfbb8305 (.)
            // Fallback: restituisci array vuoto se non riesci ad accedere
            return [];
        }

        // Verifica che $icons sia un array prima di usare Arr::map()
        if (! is_array($icons)) {
            return [];
        }

        /** @var array<string, array<string, mixed>> $mappedIcons */
        $mappedIcons = [];
        foreach ($icons as $name => $setRaw) {
            if (! is_array($setRaw)) {
                continue;
            }
            if (! is_string($name)) {
                continue;
            }

            /** @var array<string, mixed> $set */
            $set = $setRaw;
            $set['name'] = $name;
            /** @var array<int, string> $iconsList */
            $iconsList = [];

            $paths = $set['paths'] ?? [];
            if (! is_iterable($paths)) {
                $mappedIcons[$name] = $set;

                continue;
            }

            foreach ($paths as $path) {
                if (! is_string($path)) {
                    continue;
                }

                $files = File::allFiles($path);
                if (! is_iterable($files)) {
                    continue;
                }

                foreach ($files as $file) {
                    // Type narrowing per SplFileInfo
                    if (! $file instanceof \SplFileInfo) {
                        continue;
                    }

                    // Simply ignore files that aren't SVGs
<<<<<<< HEAD
<<<<<<< HEAD
                    if ('svg' !== $file->getExtension()) {
=======
                    if ($file->getExtension() !== 'svg') {
>>>>>>> dfac49d (.)
=======
                    if ('svg' !== $file->getExtension()) {
>>>>>>> dfbb8305 (.)
                        continue;
                    }

                    $pathname = $file->getPathname();
                    if (! is_string($pathname)) {
                        continue;
                    }

                    // $iconName = $this->getIconName($file, parentPath: $path, prefix: $prefix);
                    $iconName = str($pathname)
                        ->after($path.DIRECTORY_SEPARATOR)
                        ->replace(DIRECTORY_SEPARATOR, '.')
                        ->basename('.svg')
                        ->toString();

                    $prefix = $set['prefix'] ?? '';
                    $prefixString = is_string($prefix) ? $prefix : '';
<<<<<<< HEAD
<<<<<<< HEAD
                    $iconFullName = '' !== $prefixString ? $prefixString.'-'.$iconName : $iconName;
=======
                    $iconFullName = $prefixString !== '' ? $prefixString.'-'.$iconName : $iconName;
>>>>>>> dfac49d (.)
=======
                    $iconFullName = '' !== $prefixString ? $prefixString.'-'.$iconName : $iconName;
>>>>>>> dfbb8305 (.)
                    $iconsList[] = $iconFullName;
                }
            }
            $set['icons'] = $iconsList;
            $mappedIcons[$name] = $set;
        }

        return $mappedIcons;
    }
}
