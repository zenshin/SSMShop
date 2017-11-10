{if isset($slider)}
    {addJsDef slider_loop=$slider.loop|intval}
    {addJsDef slider_width=$slider.width|intval}
    {addJsDef slider_speed=$slider.speed|intval}
    {addJsDef slider_pause=$slider.pause|intval}
{/if}