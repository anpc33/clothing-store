<table class="min-w-full divide-y divide-gray-200">
  <thead>
    <tr>
      <th class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
        Mã đơn hàng
      </th>
      <th class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
        Ngày đặt
      </th>
      <th class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
        Trạng thái
      </th>
      <th class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
        Tổng tiền
      </th>
    </tr>
  </thead>
  <tbody class="bg-white divide-y divide-gray-200">
    <tr *ngFor="let order of orders">
      <td class="px-6 py-4 whitespace-nowrap">{{ order.id }}</td>
      <td class="px-6 py-4 whitespace-nowrap">{{ order.date }}</td>
      <td class="px-6 py-4 whitespace-nowrap">{{ order.status }}</td>
      <td class="px-6 py-4 whitespace-nowrap">{{ order.total }} VNĐ</td>
    </tr>
  </tbody>
</table>
<script>
    const orders = [
  { id: 1, date: '2023-11-23', status: 'Đang xử lý', total: 200000 },
  { id: 2, date: '2023-11-24', status: 'Đã giao hàng', total: 300000 },
  // ... các đơn hàng khác
];

</script>