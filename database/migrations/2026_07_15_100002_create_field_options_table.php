<?php

declare(strict_types=1);
<<<<<<< .merge_file_0v9yE2

=======
<<<<<<< .merge_file_5sdRca

=======
>>>>>>> .merge_file_GxRNBQ
>>>>>>> .merge_file_gN1QpW
use Illuminate\Database\Schema\Blueprint;
use Modules\UI\Models\FieldOption;
use Modules\Xot\Database\Migrations\XotBaseMigration;

return new class extends XotBaseMigration {
    protected ?string $model_class = FieldOption::class;

    public function up(): void
    {
        // -- CREATE --
        $this->tableCreate(
            function (Blueprint $table): void {
                $table->id();
                $table->string('field_id')->nullable();
                $table->string('label')->nullable();
                $table->text('value')->nullable();
                $table->integer('order')->default(0);
                $table->string('created_by')->nullable();
                $table->string('updated_by')->nullable();
                $table->softDeletes('deleted_at');
                $table->string('deleted_by')->nullable();
                $table->timestamps();
            }
        );

        // -- UPDATE --
        $this->tableUpdate(
            function (Blueprint $table): void {
                if (! $this->hasColumn('field_id')) {
                    $table->string('field_id')->nullable();
                }
            }
        );
    }
};
