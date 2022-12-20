<?php

namespace App\Utilities;

class Constant
{
  //Order
  const order_status_ReceiveOrders = 1;
  const order_status_Unconfirmed = 2;
  const order_status_Confirmed = 3;
  const order_status_Paid = 4;
  const order_status_Processing = 5;
  const order_status_Shipping = 6;
  const order_status_Finish = 7;
  const order_status_Cancel= 0;
}
