<?php
function setActive($ruta)
{
  return request()->routeIs($ruta) ? 'active' : '';
}

function ratingColor($valor)
{
  $color = "white";
    if ($valor < 20)
    {
      $color = "bg-danger";
    }
    elseif ($valor > 20 && $valor < 50)
    {
      $color = "bg-warning";
    }
    elseif ($valor > 50 && $valor < 80)
    {
      $color = "bg-info";
    }
  return $color;
}

function hideBars($valor)
{
  $color = "";
  if ($valor == -1)
  {
    $color = "d-none";
  }
  return $color;
}
