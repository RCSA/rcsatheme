<?php foreach ($items as $delta => $item) :?>
<span class="file"><img class="file-icon" alt="" title="application/pdf" 
                        src="/modules/file/icons/application-pdf.png"> 
    <a 
        href="<?php print render($item);?>" 
        type="application/pdf; length=205060">
        Minutes
    </a></span>
<?php endforeach;?>