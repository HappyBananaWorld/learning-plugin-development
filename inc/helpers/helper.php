<?php

function lr_plugin_asset($path): string
{
    return LR_PLUGIN_ASSETS . $path;
}

function lr_include($path): void
{
    include LR_PLUGIN_INC . $path;
}