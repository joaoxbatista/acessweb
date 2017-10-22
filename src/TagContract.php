<?php

namespace AcessWeb\Core;

interface TagContract
{
    public function details();
    public function html() : string;
}