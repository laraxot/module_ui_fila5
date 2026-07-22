<?php

declare(strict_types=1);

namespace Modules\UI\Actions\Block;

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;
use Modules\Xot\Actions\File\GetClassNameByPathAction;
use Modules\Xot\Datas\ComponentFileData;
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> dfbb8305 (.)

use function Safe\realpath;

use Spatie\LaravelData\DataCollection;
use Spatie\QueueableAction\QueueableAction;
<<<<<<< HEAD
=======
use function Safe\realpath;
use Spatie\LaravelData\DataCollection;
>>>>>>> dfac49d (.)
=======
>>>>>>> dfbb8305 (.)
use Webmozart\Assert\Assert;

final class GetAllBlocksAction
{
<<<<<<< HEAD
<<<<<<< HEAD
    use QueueableAction;

=======
>>>>>>> dfac49d (.)
=======
    use QueueableAction;

>>>>>>> dfbb8305 (.)
    /**
     * @return DataCollection<int, ComponentFileData>
     */
    public function execute(): DataCollection
    {
        Assert::string($relativePath = config('modules.paths.generator.model.path'));

        $files = File::glob(base_path('Modules').'/*/'.$relativePath.'/../Filament/Blocks/*.php');

        /** @var list<string> $files */
        $files = is_array($files) ? array_values($files) : [];

        /** @var array<int, array{name: string, class: class-string, module: string, path: string|false}> $blocks */
<<<<<<< HEAD
<<<<<<< HEAD
        $blocks = Arr::map($files, function (string $path): array {
=======
        $blocks = Arr::map($files, static function (string $path): array {
>>>>>>> dfac49d (.)
=======
        $blocks = Arr::map($files, function (string $path): array {
>>>>>>> dfbb8305 (.)
            $path = realpath($path);
            $class = app(GetClassNameByPathAction::class)->execute($path);

            $name = Str::of(class_basename($class))->snake()->toString();
            if (Str::endsWith($name, '_block')) {
                $name = Str::before($name, '_block');
            }

            $module = Str::of($class)->between('Modules\\', '\Filament\\')->toString();

            return [
                'name' => $name,
                'class' => $class,
                'module' => $module,
                'path' => $path,
            ];
        });

        return ComponentFileData::collection(array_values($blocks));
    }
}
