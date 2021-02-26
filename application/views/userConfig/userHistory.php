<div class="container BGPanel my-2">
  <div class="row">
    <div class="col HDText mt-2">
      History
    </div>
  </div>
  <div class="dropdown-divider"></div>
  <div class="row">
    <div class="col text-center">
      <?php if (isset($orderhis[0])) { ?>
        <table class="table table-striped">
          <tr>
            <th>Order ID</th>
            <th>Order Date</th>
            <th>Status</th>
            <th class="text-right">Price</th>
          </tr>
          <?php foreach ($orderhis as $orh) { ?>
            <tr>
              <td><?php echo $orh->order_id; ?></td>
              <td><?php echo $orh->order_date; ?></td>
              <td><?php echo $orh->status; ?></td>
              <td class="text-right"><?php echo number_format($orh->total, 2); ?></td>
            </tr>
          <?php } ?>
        </table>
      <?php } else { ?>
        <h1 class="display-1">ยังไม่มีรายการ</h1>
      <?php } ?>
    </div>
  </div>

</div>