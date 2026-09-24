<?php

declare(strict_types=1);
<<<<<<< HEAD
=======

>>>>>>> 804451c (Lint)
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
