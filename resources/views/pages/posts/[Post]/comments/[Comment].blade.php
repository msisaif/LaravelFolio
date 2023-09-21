<?php
 
    use function Laravel\Folio\{middleware};
    
    middleware(['auth']);
?>

<div>
    {{ $comment->body }}
</div>