<?php

declare(strict_types=1);

namespace Modules\UI\Actions\Icon;

use BladeUI\Icons\Factory as IconFactory;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\File;
<<<<<<< .merge_file_AYRZcJ
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
use ReflectionClass;
=======
<<<<<<< HEAD
=======
use ReflectionClass;
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
use ReflectionClass;
>>>>>>> 804451c (Lint)
>>>>>>> laraxot/dev
=======
>>>>>>> .merge_file_LvhvXl
use Spatie\QueueableAction\QueueableAction;

class GetAllIconsAction
{
    use QueueableAction;

    /**
     * @return array<string, array<string, mixed>>
     */
    public function execute(string $_context = 'form'): array
    {
        $iconsFactory = App::make(IconFactory::class);

        // Uso reflection per accedere alle icone in modo sicuro
        try {
            $reflection = new \ReflectionClass($iconsFactory);
<<<<<<< .merge_file_AYRZcJ
<<<<<<< HEAD
<<<<<<< .merge_file_NeiVhj
            $property = $reflection->getProperty('iconSets');
=======
<<<<<<< HEAD
            $reflection = new ReflectionClass($iconsFactory);
            $property = $reflection->getProperty('sets');
=======
<<<<<<< HEAD
            $reflection = new \ReflectionClass($iconsFactory);
=======
>>>>>>> 804451c (Lint)
            $property = $reflection->getProperty('iconSets');
=======
            $reflection = new ReflectionClass($iconsFactory);
            $property = $reflection->getProperty('sets');
>>>>>>> laraxot/dev
<<<<<<< HEAD
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
            $property = $reflection->getProperty('sets');
>>>>>>> .merge_file_G45wnI
=======
>>>>>>> 804451c (Lint)
=======
            $property = $reflection->getProperty('iconSets');
>>>>>>> .merge_file_LvhvXl
            $property->setAccessible(true);
            $icons = $property->getValue($iconsFactory);
        } catch (\Exception $e) {
            // Fallback: restituisci array vuoto se non riesci ad accedere
            return [];
        }

<<<<<<< .merge_file_AYRZcJ
<<<<<<< HEAD
<<<<<<< .merge_file_NeiVhj
<<<<<<< HEAD
        // Verifica che $icons sia un array prima di usare Arr::map()
        if (! is_array($icons)) {
=======
<<<<<<< HEAD
        if (! is_iterable($icons)) {
=======
=======
>>>>>>> 804451c (Lint)
<<<<<<< HEAD
        // Verifica che $icons sia un array prima di usare Arr::map()
        if (! is_array($icons)) {
=======
        if (! is_iterable($icons)) {
>>>>>>> laraxot/dev
<<<<<<< HEAD
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
        if (! is_iterable($icons)) {
>>>>>>> .merge_file_G45wnI
=======
>>>>>>> 804451c (Lint)
=======
        // Verifica che $icons sia un array prima di usare Arr::map()
        if (! is_array($icons)) {
>>>>>>> .merge_file_LvhvXl
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

<<<<<<< .merge_file_AYRZcJ
<<<<<<< HEAD
<<<<<<< .merge_file_NeiVhj
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
=======
<<<<<<< HEAD
>>>>>>> 804451c (Lint)
                $iconsList = array_merge(
                    $iconsList,
                    $this->collectSvgIconNamesFromPath($path, $set['prefix'] ?? ''),
                );
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> laraxot/dev
                foreach (File::allFiles($path) as $file) {
                    // Simply ignore files that aren't SVGs
                    if ($file->getExtension() !== 'svg') {
=======
                foreach (File::allFiles($path) as $file) {
                    // Simply ignore files that aren't SVGs
                    if ('svg' !== $file->getExtension()) {
>>>>>>> .merge_file_G45wnI
=======
=======
                foreach (File::allFiles($path) as $file) {
                    // Simply ignore files that aren't SVGs
                    if ($file->getExtension() !== 'svg') {
>>>>>>> 804451c (Lint)
=======
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
                    if ('svg' !== $file->getExtension()) {
>>>>>>> .merge_file_LvhvXl
                        continue;
                    }

                    $pathname = $file->getPathname();
<<<<<<< .merge_file_AYRZcJ
<<<<<<< HEAD
<<<<<<< .merge_file_NeiVhj
=======
=======
>>>>>>> .merge_file_LvhvXl
                    if (! is_string($pathname)) {
                        continue;
                    }

                    // $iconName = $this->getIconName($file, parentPath: $path, prefix: $prefix);
<<<<<<< .merge_file_AYRZcJ
>>>>>>> .merge_file_G45wnI
=======
>>>>>>> 804451c (Lint)
=======
>>>>>>> .merge_file_LvhvXl
                    $iconName = str($pathname)
                        ->after($path.DIRECTORY_SEPARATOR)
                        ->replace(DIRECTORY_SEPARATOR, '.')
                        ->basename('.svg')
                        ->toString();

                    $prefix = $set['prefix'] ?? '';
                    $prefixString = is_string($prefix) ? $prefix : '';
<<<<<<< .merge_file_AYRZcJ
<<<<<<< HEAD
<<<<<<< .merge_file_NeiVhj
                    $iconFullName = $prefixString !== '' ? $prefixString.'-'.$iconName : $iconName;
                    $iconsList[] = $iconFullName;
                }
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
                    $iconFullName = '' !== $prefixString ? $prefixString.'-'.$iconName : $iconName;
                    $iconsList[] = $iconFullName;
                }
>>>>>>> .merge_file_G45wnI
=======
                    $iconFullName = $prefixString !== '' ? $prefixString.'-'.$iconName : $iconName;
                    $iconsList[] = $iconFullName;
                }
>>>>>>> laraxot/dev
>>>>>>> 804451c (Lint)
=======
                    $iconFullName = '' !== $prefixString ? $prefixString.'-'.$iconName : $iconName;
                    $iconsList[] = $iconFullName;
                }
>>>>>>> .merge_file_LvhvXl
            }
            $set['icons'] = $iconsList;
            $mappedIcons[$name] = $set;
        }

        return $mappedIcons;
    }
<<<<<<< .merge_file_AYRZcJ
<<<<<<< HEAD
<<<<<<< .merge_file_NeiVhj
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
=======
<<<<<<< HEAD
>>>>>>> 804451c (Lint)

    /**
     * @return list<string>
     */
    private function collectSvgIconNamesFromPath(string $path, mixed $prefix): array
    {
        $files = File::allFiles($path);
        if (! is_iterable($files)) {
            return [];
        }

        $prefixString = is_string($prefix) ? $prefix : '';
        $iconNames = [];

        foreach ($files as $file) {
            if (! $file instanceof \SplFileInfo || 'svg' !== $file->getExtension()) {
                continue;
            }

            $pathname = $file->getPathname();
            if (! is_string($pathname)) {
                continue;
            }

            $iconName = str($pathname)
                ->after($path.DIRECTORY_SEPARATOR)
                ->replace(DIRECTORY_SEPARATOR, '.')
                ->basename('.svg')
                ->toString();

            $iconNames[] = '' !== $prefixString ? $prefixString.'-'.$iconName : $iconName;
        }

        return $iconNames;
    }
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
>>>>>>> .merge_file_G45wnI
=======
=======
>>>>>>> laraxot/dev
>>>>>>> 804451c (Lint)
=======
>>>>>>> .merge_file_LvhvXl
}
