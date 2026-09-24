<?php

declare(strict_types=1);

namespace Modules\UI\Filament\Forms\Components;

// use bjeavons\ZxcvbnPhp\Zxcvbn;
<<<<<<< .merge_file_vNqKg6
<<<<<<< HEAD
<<<<<<< .merge_file_LmOuMp
<<<<<<< HEAD
use Filament\Forms\Components\TextInput;

class PasswordStrengthField extends TextInput
=======
<<<<<<< HEAD
use Modules\Xot\Filament\Forms\Components\XotBaseTextInput;

class PasswordStrengthField extends XotBaseTextInput
=======
=======
>>>>>>> 804451c (Lint)
<<<<<<< HEAD
use Filament\Forms\Components\TextInput;

class PasswordStrengthField extends TextInput
=======
use Modules\Xot\Filament\Forms\Components\XotBaseTextInput;

class PasswordStrengthField extends XotBaseTextInput
>>>>>>> laraxot/dev
<<<<<<< HEAD
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
use Modules\Xot\Filament\Forms\Components\XotBaseTextInput;

class PasswordStrengthField extends XotBaseTextInput
>>>>>>> .merge_file_C6y9B8
=======
>>>>>>> 804451c (Lint)
=======
use Filament\Forms\Components\TextInput;

class PasswordStrengthField extends TextInput
>>>>>>> .merge_file_LUaB4T
{
    /**
     * Setup iniziale del componente.
     */
    protected function setUp(): void
    {
        parent::setUp();

        /** @var view-string $viewString */
        $viewString = 'ui::filament.forms.components.password-strength';
        $this->view($viewString);
    }

    public function evaluateStrength(): static
    {
<<<<<<< .merge_file_vNqKg6
<<<<<<< HEAD
<<<<<<< .merge_file_LmOuMp
<<<<<<< HEAD
        $this->afterStateUpdated(function (string $state): void {
=======
<<<<<<< HEAD
        $this->afterStateUpdated(static function (string $state): void {
=======
=======
>>>>>>> 804451c (Lint)
<<<<<<< HEAD
        $this->afterStateUpdated(function (string $state): void {
=======
        $this->afterStateUpdated(static function (string $state): void {
>>>>>>> laraxot/dev
<<<<<<< HEAD
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
        $this->afterStateUpdated(static function (string $state): void {
>>>>>>> .merge_file_C6y9B8
=======
>>>>>>> 804451c (Lint)
=======
        $this->afterStateUpdated(function (string $state): void {
>>>>>>> .merge_file_LUaB4T
            unset($state);
            // $zxcvbn = new Zxcvbn();
            // $result = $zxcvbn->passwordStrength($state);
            // Ottieni il punteggio della password (da 0 a 4)
            // $score = $result['score'];
            /*
             * // Puoi gestire la logica in base al punteggio qui (opzionale)
             * if ($score < 3) {
             * $this->warning('La tua password è troppo debole!');
             * } else {
             * $this->info('La tua password è abbastanza forte.');
             * }
             */
            // $this->state(['passwordStrengthScore' => $score]);
        });

        return $this;
    }
}
