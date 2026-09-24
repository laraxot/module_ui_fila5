<?php

declare(strict_types=1);
<<<<<<< .merge_file_6ofREA
<<<<<<< HEAD
=======

>>>>>>> 804451c (Lint)
=======

>>>>>>> .merge_file_epdUJf
?>
@php
    $data=Arr::get($block,'data.gallery.0',null);
    if($data==null){
      return ;
    }    
@endphp

<div>
  @include('ui::components.blocks.'.$tpl.'.'.$data['version'])
</div>
