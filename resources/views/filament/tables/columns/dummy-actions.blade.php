<?php

declare(strict_types=1);
<<<<<<< .merge_file_u3wld7
<<<<<<< HEAD
=======

>>>>>>> 804451c (Lint)
=======

>>>>>>> .merge_file_q2OUHX
?>
<div class="flex gap-2 justify-center">
    @foreach($getActions() as $action)
        {!! $action->record($getRecord())->render() !!}
    @endforeach

    <x-filament-actions::modals />
</div>
