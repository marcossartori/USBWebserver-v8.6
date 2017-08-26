<?php

function somar_data($data, $dias, $meses, $ano){
  @$data = explode("-", $data);
  @$resData = date("Y-m-d", mktime(0, 0, 0, $data[1] + $meses, $data[2] + $dias, $data[0] + $ano));
  return $resData;
}