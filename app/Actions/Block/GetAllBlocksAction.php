<?php

declare(strict_types=1);

namespace Modules\UI\Actions\Block;

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;
use Modules\Xot\Actions\File\GetClassNameByPathAction;
use Modules\Xot\Datas\ComponentFileData;

use function Safe\realpath;

use Spatie\LaravelData\DataCollection;
<<<<<<< HEAD
<<<<<<< .merge_file_ZJk7Ui
<<<<<<< HEAD
=======
use Spatie\QueueableAction\QueueableAction;
>>>>>>> laraxot/dev
=======
use Spatie\QueueableAction\QueueableAction;
>>>>>>> .merge_file_iMr5aV
=======
use Spatie\QueueableAction\QueueableAction;
>>>>>>> 0dadab4 (Lint)
use Webmozart\Assert\Assert;

final class GetAllBlocksAction
{
<<<<<<< HEAD
<<<<<<< .merge_file_ZJk7Ui
<<<<<<< HEAD
=======
    use QueueableAction;

>>>>>>> laraxot/dev
=======
    use QueueableAction;

>>>>>>> .merge_file_iMr5aV
=======
    use QueueableAction;

>>>>>>> 0dadab4 (Lint)
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
        $blocks = Arr::map($files, function (string $path): array {
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
