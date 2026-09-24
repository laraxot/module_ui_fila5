<?php

declare(strict_types=1);

namespace Modules\UI\Actions\Icon;

use BladeUI\Icons\Factory as IconFactory;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\File;
<<<<<<< HEAD
use ReflectionClass;
=======
>>>>>>> laraxot/dev
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
<<<<<<< HEAD
            $reflection = new ReflectionClass($iconsFactory);
            $property = $reflection->getProperty('sets');
=======
            $reflection = new \ReflectionClass($iconsFactory);
            $property = $reflection->getProperty('iconSets');
>>>>>>> laraxot/dev
            $property->setAccessible(true);
            $icons = $property->getValue($iconsFactory);
        } catch (\Exception $e) {
            // Fallback: restituisci array vuoto se non riesci ad accedere
            return [];
        }

<<<<<<< HEAD
        if (! is_iterable($icons)) {
=======
        // Verifica che $icons sia un array prima di usare Arr::map()
        if (! is_array($icons)) {
>>>>>>> laraxot/dev
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

<<<<<<< HEAD
                foreach (File::allFiles($path) as $file) {
                    // Simply ignore files that aren't SVGs
                    if ($file->getExtension() !== 'svg') {
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
>>>>>>> laraxot/dev
                        continue;
                    }

                    $pathname = $file->getPathname();
<<<<<<< HEAD
=======
                    if (! is_string($pathname)) {
                        continue;
                    }

                    // $iconName = $this->getIconName($file, parentPath: $path, prefix: $prefix);
>>>>>>> laraxot/dev
                    $iconName = str($pathname)
                        ->after($path.DIRECTORY_SEPARATOR)
                        ->replace(DIRECTORY_SEPARATOR, '.')
                        ->basename('.svg')
                        ->toString();

                    $prefix = $set['prefix'] ?? '';
                    $prefixString = is_string($prefix) ? $prefix : '';
<<<<<<< HEAD
                    $iconFullName = $prefixString !== '' ? $prefixString.'-'.$iconName : $iconName;
=======
                    $iconFullName = '' !== $prefixString ? $prefixString.'-'.$iconName : $iconName;
>>>>>>> laraxot/dev
                    $iconsList[] = $iconFullName;
                }
            }
            $set['icons'] = $iconsList;
            $mappedIcons[$name] = $set;
        }

        return $mappedIcons;
    }
}
