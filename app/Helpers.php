<?php
function setActive($ruta)
{
  return request()->routeIs($ruta) ? 'active' : '';
}
