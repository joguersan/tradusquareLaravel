<?php
function setActive($ruta)
{
  return request()->routeIs($ruta) ? 'active' : '';
}

function ratingColor($valor)
{
  $color = "white";
    if ($valor <= 20)
    {
      $color = "bg-danger";
    }
    elseif ($valor > 20 && $valor < 50)
    {
      $color = "bg-warning";
    }
    elseif ($valor > 50 && $valor < 80)
    {
      $color = "bg-primary";
    }
    elseif ($valor >= 80)
    {
      $color = "bg-success";
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

function getDescription($valor)
{
  $texto = strip_tags($valor);
  if (mb_strlen($texto, "UTF-8") >200){
    $texto = wordwrap($texto, 200, "$", false);
    $texto = explode("$", $texto)[0];
    $texto = $texto."...";
  }
  return $texto;
}

function getUpdatedAtAttribute($date)
{
    return Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $date)->format('d-m-Y');
}
