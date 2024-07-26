<html>
  <head>
    <title>Checkout</title>
  </head>
  <body>
    <form action="../../components/api/maya.php" method="POST">
      <input type="hidden" value='2000' name='total_payment'>
      <input type="hidden" value='1' name='payment_id'>
      <button type="submit">Checkout</button>
    </form>
  </body>
</html>